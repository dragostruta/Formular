<?php

class Signup_model extends Model {
	public $errors = array();
	public $data = array();
	private $validation = true;
	private $fields = array("Signusername", "Signpassword", "email");
	public function __construct(){
		parent::__construct();
	}
	public function signup_funct(){
		foreach($this->fields as $field){
				if(empty($_POST["$field"])){
					$this->validation = false;
					array_push($this->errors, "Field '$field' is required.");
				} else {
					$this->data[$field] = $_POST[$field];
				}
			}
			if (array_key_exists("email", $this->data))
			{
				if(!filter_var($this->data["email"],FILTER_VALIDATE_EMAIL)){
					$this->validation = false;
					unset($this->data["email"]);
					array_push($this->errors,"Wrong email validation");
				}
			}
			$v1 = true;
			$v2 = true;
			$v3 = true;
			if (array_key_exists("Signpassword", $this->data))
			{
				if (strlen($this->data["Signpassword"]) < 8) {
					$v1 = false;
			        array_push($this->errors,"Password too short!");
			    }

			    if (!preg_match("#[0-9]+#", $this->data["Signpassword"])) {
			    	$v2 = false;
			        array_push($this->errors,"Password must include at least one number!");
			    }

			    if (!preg_match("#[a-zA-Z]+#", $this->data["Signpassword"])) {
			    	$v3 = false;
			        array_push($this->errors,"Password must include at least one letter!");
			    } 

			    if ($v1 == false || $v2 == false || $v3 == false)
			    {
			    	$this->validation = false;
			    	unset($this->data["Signpassword"]);
			    }
			}

			try {
			$query = $this->db->query("SELECT * FROM users WHERE username='".$this->data['Signusername']."'");
			} catch (PDOException $e)
			{
				die($e->getMessage());
			}
			$count = $query->rowCount();
			if ($count > 0){
				$this->validation = false;
				array_push($this->errors,"This username is already used!!"); 
			}
			if ($this->validation) {
				try {
				$var1 = $this->data['Signusername'];
				$var2 = $this->data['Signpassword'];
				$var2 = md5($var2);
				$var3 = $this->data['email'];
				$this->db->query("INSERT INTO users (username, PASSWORD, EMAIL) VALUES ('$var1', '$var2', '$var3')");	
				} catch (PDOException $e)
				{	
					die($e->getMessage()); 
				}
				header("Location: ../success");
			} else {
				Session::init();
				Session::set('errors', $this->errors);
				//$_SESSION["data"] = $this->data;
				header("Location: ../signup");
			}
		}
}
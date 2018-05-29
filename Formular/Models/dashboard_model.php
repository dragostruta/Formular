<?php

class Dashboard_Model extends Model {
	public $errors = array();
	function __construct () {
		parent::__construct();
	}

	public function recieveInfo(){
		if ($_FILES['file']['name'] != ""){
			//Mutarea fisierului uploadat in Public/Files
			$file = $_FILES['file'];

			$fileName = $_FILES['file']['name'];
			$fileTmpName = $_FILES['file']['tmp_name'];
			$fileSize = $_FILES['file']['size'];
			$fileError = $_FILES['file']['error'];
			$fileType = $_FILES['file']['type'];

			$fileExt = explode('.',$fileName);
			$fileActualExt = strtolower(end($fileExt));

			if($fileError === 0){
				if($fileSize < 1000000){
					$fileNameNew = uniqid('', true).".".$fileActualExt;
					$fileDestination = 'Public/Files/'.$fileNameNew;
					move_uploaded_file($fileTmpName,$fileDestination);
				} else {
					array_push($this->errors,"Your file is to big");
				}
			} else {
				array_push($this->errors,"There was an error upoading your file!");
				
			}
		}

		$v1 = true;
		$v2 = true;
		$v3 = true;
		if ($_POST['Title'] == "")
		{
			array_push($this->errors,"Please write a title!");
			$v1 = false;
		}
		else { $title = $_POST['Title']; }
		if ($_POST['Description'] == "")
		{
			array_push($this->errors,"Please write a description!");
			$v2 = false;
		} else { $description = $_POST['Description']; }
		if (!isset($_POST['Gender']))
		{
			array_push($this->errors,"Please select your gender!");
			$v3 = false;
		} else { $gender = $_POST['Gender']; }
		if (($v1 == false) || ($v2 == false) || ($v3 == false))
		{
			Session::set('errors', $this->errors);
			header("Location: ../dashboard");
		}
		else {
		if (isset($fileNameNew)){
			//echo "is set";
			try{
				$this->db->query("INSERT INTO formular (user_id, title, description, uploaded_file, gender) VALUES ((SELECT id from users WHERE username='".Session::get('loggued_on_user')."'), '$title', '$description', 'http://localhost/Formular/Public/Files/".$fileNameNew."', '$gender')");	
			} catch (PDOException $e){	
				die($e->getMessage()); 
			}
		}
		else{
			//echo "is not set";
			try{
				$this->db->query("INSERT INTO formular (user_id, title, description, gender) VALUES ((SELECT id from users WHERE username='".Session::get('loggued_on_user')."'), '$title', '$description', '$gender')");	
			} catch (PDOException $e){	
				die($e->getMessage()); 
			}
		}
	Session::set('errors', $this->errors);
	header("Location: ../success");
	
	}
	}

	private function getid($data)
	{
		$query = $this->db->query("SELECT id FROM users WHERE username='".$data."'");
		return $query;
	} 
}
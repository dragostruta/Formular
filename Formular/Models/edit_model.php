<?php

class Edit_Model extends Model {
	public $errors = array();
	function __construct () {
		parent::__construct();
	}

	public function showForm()
	{
		Session::init();
		$array = array();
		$sql = "SELECT formular.title, formular.description, formular.gender, formular.created_date, users.username, formular.id, formular.uploaded_file
		FROM users
		INNER JOIN formular ON users.id = formular.user_id
		WHERE users.username='".Session::get('loggued_on_user')."';";
		foreach($this->db->query($sql) as $i){
			//echo json_encode($i);
			array_push($array, $i);
		}
		echo json_encode($array);
	}

	public function updateInfo()
	{
		Session::init();
		if ($_POST['title'] != ""){
		try{
			$this->db->query("UPDATE formular SET title='".$_POST['title']."'
				WHERE user_id=(SELECT id from users WHERE username='".Session::get('loggued_on_user')."') AND id='".$_GET['element']."'");	
		} catch (PDOException $e){	
			die($e->getMessage()); 
		}
		}
		if ($_POST['description'] != ""){
		try{
			$this->db->query("UPDATE formular SET description='".$_POST['description']."'
				WHERE user_id=(SELECT id from users WHERE username='".Session::get('loggued_on_user')."') AND id='".$_GET['element']."'");	
		} catch (PDOException $e){	
			die($e->getMessage()); 
		}
		}
		header("Location: ../success");
	}

	public function delete(){
		try{
			$this->db->query("DELETE FROM formular
				WHERE id='".$_GET['element']."'");	
		} catch (PDOException $e){	
			die($e->getMessage()); 
		}
		if ($_GET['file'] != "")
		{
			unlink($_GET['file']);
		}
		header("Location: ../edit");
	}
}
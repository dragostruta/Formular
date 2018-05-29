<?php

class Showall_Model extends Model {
	public $errors = array();
	function __construct () {
		parent::__construct();
	}

	public function showAllForm()
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
}
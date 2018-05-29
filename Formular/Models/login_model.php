<?php

class Login_Model extends Model {
	public function __construct(){
		parent::__construct();
	}
	public function run(){
		$query = $this->db->query("SELECT * FROM users WHERE username='".$_POST['Login']."' AND PASSWORD='".md5($_POST['Pass'])."'");
		$count = $query->rowCount();
		//var_dump($query);
		if ($count > 0)
		{
			Session::init();
			Session::set('loggued_on_user', $_POST['Login']);
			Session::set('loggedIN', true);
			header('location: ../index');
		} else {
			Session::init();
			Session::set('loggued_on_user', "");
			Session::set('errors', "Login Failed!");
			Session::set('loggedIN', false);
			header('location: ../login');
		}

	}
}
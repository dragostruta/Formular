<?php
class settings extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->view->render('settings/index');
	}
	function resetPass_funct(){
		$this->model->resetPass_funct();
	}
	function resetUser_funct(){
		$this->model->resetUser_funct();
	}
	function resetEmail_funct(){
		$this->model->resetEmail_funct();
	}
}
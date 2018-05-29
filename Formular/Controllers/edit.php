<?php
class edit extends Controller{
	function __construct() {
		parent::__construct();
	}
	function index(){
		$this->view->render('edit/index');
	}
	function showForm(){
		$this->model->showForm();
	}
	function updateInfo(){
		$this->model->updateInfo();
	}
	function delete(){
		$this->model->delete();
	}
}
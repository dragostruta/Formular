<?php
class showall extends Controller
{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->view->render('showall/index');
	}
	function showAllForm(){
		$this->model->showAllForm();
	}
}
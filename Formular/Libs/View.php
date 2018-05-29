<?php

class View{
	function __construct(){
	}
	public function render($name, $noInclude = false){

		if ($noInclude == true){
			require 'Views/'. $name .'.php';
		}
		else {
			Session::init(); 
			require 'Views/header.php';
			require 'Views/'. $name .'.php';
			require 'Views/footer.php';
		}
	}
}
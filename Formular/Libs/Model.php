<?php

class Model {
	function __construct() {
		$this->db = new Database();
		$this->db->query("CREATE DATABASE IF NOT EXISTS Formular");
		$this->db->query("use Formular");
		$this->db->query("
			CREATE TABLE IF NOT EXISTS users (
			id INT(11) PRIMARY KEY AUTO_INCREMENT,
			username VARCHAR(255) NOT NULL,
			PASSWORD VARCHAR(129) NOT NULL,
			EMAIL VARCHAR(255) NOT NULL,
			created_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
		);");

		$this->db->query("
			CREATE TABLE IF NOT EXISTS formular (
			id INT(11) PRIMARY KEY AUTO_INCREMENT,
			user_id INT(11) NOT NULL, 
			title VARCHAR(129) NOT NULL,
			description TEXT NOT NULL,
			uploaded_file VARCHAR(255),
			gender ENUM('male','female') NOT NULL,
			created_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
		);");
	}
	public function query($sql) {
		$query = $this->db->prepare($sql);
		$query->execute();

		return $query;
	}
}
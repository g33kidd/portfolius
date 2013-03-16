<?php

Class db extends PDO {
	
	public function __construct() {
		$dsn = "mysql:dbname=portfolio;host=localhost";
		try {
			parent::__construct($dsn, "root", "");
		}catch(PDOException $e) {
			throw new PDOException("Couldn't connect to database: {$e}");
		}
	}
	
}

?>
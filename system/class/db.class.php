<?php
if (!defined("_VALID_PHP"))
	die('Direct access to this location is not allowed.');
	
Class db extends PDO {
	
	public function __construct() {
		$dsn = "mysql:dbname=portfolius;host=portfolius.db.7245169.hostedresource.com";
		try {
			parent::__construct($dsn, "portfolius", "guZEbe9r!");
		}catch(PDOException $e) {
			throw new PDOException("Couldn't connect to database: {$e}");
		}
	}
	
}

?>
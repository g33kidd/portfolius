<?php

Class site {
	
	public $title;
	public $subtitle;
	public $theme;
	
	/*
	 * @data - variables for site configuration
	 * options(theme, title, subtitle, socialnetworks connected,)
	 * owner(user id)
	 * published(boolean)
	 * premium(boolean)
	 * violation(boolean)
	 */
	public static function create($data) {
		global $db;
		
		$site_config = array(
			'title' => $data['title'],
			'subtitle' => $data['subtitle'],
			'theme' => $data['theme']
		);
		$site_config = json_encode($site_config);
		
		try {
			$query = $db->query("INSERT INTO sites VALUES ('', '{$data['owner']}', '{$site_config}', '0', '0', '0')");
			return true;
		}catch(PDOException $e) {
			throw new PDOException("Could not create site: reason[ {$e} ]");
			return false;
		}
	}
	
	public static function update($data) {
		
	}
	
	public static function options($id) {
		global $db;
		$query = $db->query("SELECT options FROM sites WHERE id='{$id}'");
		$result = $query->fetch(PDO::FETCH_COLUMN);
		return $result;
	}
	
	public static function initialize($id) {
		global $db;
		// get site configuration.
		$options = self::options($id);
		$options = json_decode($options, true);
		
		echo "<pre>";
		print_r($options);
		echo "</pre>";
				
		$this->title = $options['title'];
		
	}
	
}

?>
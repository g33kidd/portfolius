<?php

Class site {
	
	// Site variables
	public $title;
	public $subtitle;
	public $email;
	public $phone;
	public $website;
	public $theme;
	public $custom;
	
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
	
	public static function update($id, $data) {
		
	}
	
	public static function delete($id) {
		global $db;
		if(self::exists($id)){
			$query = $db->query("DELETE FROM sites WHERE id='{$id}'");
			if($query){
				return true;
			}else{
				return false;
			}
		}
		
	}
	
	public static function options($id) {
		global $db;
		$query = $db->query("SELECT options FROM sites WHERE id='{$id}'");
		$result = $query->fetch(PDO::FETCH_COLUMN);
		return $result;
	}
	
	public static function exists($id) {
		global $db;
		$query = $db->query("SELECT id,owner FROM sites WHERE id='{$id}'");
		if($query->rowCount() < 1) {
			return false;
		}else{
			return true;
		}
	}
	
	public function initialize($id) {
		
		global $db;
		// get site configuration.
		$options = self::options($id);
		$options = json_decode($options, true);
		
		$this->title = $options['title'];
		$this->subtitle = $options['subtitle'];
		$this->email = $options['email'];
		$this->phone = $options['phone'];
		$this->website = $options['website'];
		$this->theme = $options['theme'];
		
		//$this->custom = $options['custom'];
		
	}

	public function page_load() {
		global $db;
		
		$tpl = file_get_contents("design/theme/{$this->theme}/index.tpl");
		
		$tpl = preg_replace("/\{\\\$title\}/", $this->title, $tpl);
		$tpl = preg_replace("/\{\\\$subtitle\}/", $this->subtitle, $tpl);
		$tpl = preg_replace("/\{\\\$email\}/", $this->email, $tpl);
		$tpl = preg_replace("/\{\\\$phone\}/", $this->phone, $tpl);
		$tpl = preg_replace("/\{\\\$website\}/", $this->website, $tpl);
		
		return $tpl;
	}
	
}

?>
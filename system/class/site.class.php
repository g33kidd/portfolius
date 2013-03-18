<?php

Class site {
	
	// Site variables
	public $id;
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
	public static function create($owner, $data) {
		global $db;
		
		try {
			$query = $db->query("INSERT INTO sites VALUES ('', '{$owner}', '{$data}', '0', '0', '0')");
			return true;
		}catch(PDOException $e) {
			throw new PDOException("Could not create site: reason[ {$e} ]");
			return false;
		}
		
	}
	
	public static function update($id, $data) {
		global $db;
		
		$base = $db->query("SELECT options FROM sites WHERE id='{$id}'");
		if($base) {
			$base = $base->fetch(PDO::FETCH_COLUMN);
			$base = json_decode($base, true);
			$data = json_decode($data, true);
			
			$final_changes = array_replace($base, $data);
			$final = json_encode($final_changes);
			
			$update = $db->query("UPDATE sites SET options='{$final}' WHERE id='{$id}'");
			if($update) {
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
		
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
	
	public static function exists($id) {
		global $db;
		$query = $db->query("SELECT id,owner FROM sites WHERE id='{$id}'");
		if($query->rowCount() < 1) {
			return false;
		}else{
			return true;
		}
	}
	
	public static function options($id) {
		global $db;
		$query = $db->query("SELECT options FROM sites WHERE id='{$id}'");
		$result = $query->fetch(PDO::FETCH_COLUMN);
		return $result;
	}
	
	// Sorry if this is confusing.... had a bit of fun :)
	// Please edit if you know how to make it more sense with pie :)
	// Only this will be based off of pie, nothing e;se :)
	public function sitedata($piece_of_pie) {
		$options = self::options($this->id);
		$options = json_decode($options, true);
		foreach($options as $option->$pie){
			if($option == $piece_of_pie) {
				echo $pie;
			}
			if(is_array($val)){
				foreach($val as $piecrust->$filling){
					if($piecrust == $piece_of_pie) {
						echo $filling;
					}
					if(is_array($filling)){
						foreach($filling as $ingredient->$yummy) {
							if($ingredient == $piece_of_pie){
								echo $yummy;
							}
						}
					}
				}
			}
		}
	}
	
	public function customdata($piece_of_pie) {
		
	}
	
	public function initialize($id) {
		
		global $db;
		// get site configuration.
		$options = self::options($id);
		$options = json_decode($options, true);
		
		$this->id = $id;
		
		
		$this->theme = $options['theme'];
		
		//$this->custom = $options['custom'];
	}

	public function page_load() {
		global $db;
		
		$tpl = file_get_contents("design/theme/{$this->theme}/index.tpl");
		
		// Change to loop through and create these *dynamicly
		$tpl = preg_replace("/\{\\\$title\}/", $this->title, $tpl);
		$tpl = preg_replace("/\{\\\$subtitle\}/", $this->subtitle, $tpl);
		$tpl = preg_replace("/\{\\\$email\}/", $this->email, $tpl);
		$tpl = preg_replace("/\{\\\$phone\}/", $this->phone, $tpl);
		$tpl = preg_replace("/\{\\\$website\}/", $this->website, $tpl);
		
		return $tpl;
	}
	
}


?>
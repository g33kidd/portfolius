<?php

Class site {
	
	// Site variables
	public $id;
	public $data = array();
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
	public function sitedata($name) {
		$options = self::options($this->id);
		$options = json_decode($options, true);
		
		foreach($options as $value=>$data) {
			if(is_array($data)){
				foreach($data as $val=>$dat) {
					if(is_array($dat)){
						foreach($dat as $v=>$d){
							
						}
					}else{
						if($name == $val){
							echo $dat;
						}
					}
				}
			}else{
				if($name == $value){
					echo $data;
				}
			}
		}
		
	}
	
	public function customdata($name) {
		
	}
	
	public function initialize($id) {
		
		global $db;
		// get site configuration.
		$options = self::options($id);
		$options = json_decode($options, true);
		
		$this->id = $id;
		$this->data = $options['data'];
		$this->theme = $options['theme'];
		
		//$this->custom = $options['custom'];
	}

	public function page_load() {
		global $db;
		
		$data = $this->data;
		$tpl = file_get_contents("design/theme/{$this->theme}/index.tpl");
		
		
		if(is_array($this->data)){
			foreach($this->data as $key=>$value) {
				if(is_array($value)){
					foreach($value as $ky=>$va){
						$replace = "/\{\\\$".$ky."\}/";
						$tpl = preg_replace($replace, $va, $tpl);
					}
				}else{
					$replace = "/\{\\\$".$key."\}/";
					$tpl = preg_replace($replace, $value, $tpl);
				}
			}
		}
		
		return $tpl;
	}
	
}

?>
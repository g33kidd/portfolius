<?php
if (!defined("_VALID_PHP"))
	die('Direct access to this location is not allowed.');
		
Class site {
	
	// Site variables
	public $id;
	public $data = array();
	public $dep = array();
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
	public static function create($owner, $type, $theme, $title, $options) {
		global $db;
		$query = "INSERT INTO codejo_sites.site VALUES ('','{$owner}','{$type}','{$theme}','{$title}','{$options}')";
		if(user_site_count() <= max_sites()-1){
			try{
				$queryed = $db->query($query);
				return true;
			}catch(PDOException $e){
				return false;
				print_r("Not Working");
			}
		}else{
			return false;
		}
	}
	
	public static function update($id, $data) {
		global $db;
		
		$base = $db->query("SELECT options FROM codejo_sites.site WHERE id='{$id}'");
		if($base) {
			$base = $base->fetch(PDO::FETCH_COLUMN);
			$base = json_decode($base, true);
			$data = json_decode($data, true);
			
			$final_changes = array_replace($base, $data);
			$final = json_encode($final_changes);
			
			$update = $db->query("UPDATE codejo_sites.site SET options='{$final}' WHERE id='{$id}'");
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
			$query = $db->query("DELETE FROM codejo_sites.site WHERE id='{$id}'");
			if($query){
				return true;
			}else{
				return false;
			}
		}
		
	}
	
	public static function exists($id) {
		global $db;
		$query = $db->query("SELECT id,owner FROM codejo_sites.site WHERE id='{$id}'");
		if($query->rowCount() < 1) {
			return false;
		}else{
			return true;
		}
	}

	public function get_data($id) {
		global $db;
		$query = "SELECT * FROM codejo_sites.site WHERE id='{$id}'";
		$site = $db->query($query);
		$site = $site->fetch(PDO::FETCH_ASSOC);
		return $site;
	}

}

?>
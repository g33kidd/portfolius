<?php

Class dashboard extends site {
	
	public $user;
	public $theme;
	
	public function init($id) {
		$options = $site->options($id);
		$options = json_decode($options, true);
		
		$this->theme = $options['theme'];
	}
	
	public function dynamicFields() {
		include "design/theme/{$this->theme}/options.php";
		print_r($options);
	}
	
}

?>
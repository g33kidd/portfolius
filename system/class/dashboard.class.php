<?php

Class dashboard extends site {
	
	public $user;
	public $theme;
	
	public function init($id) {
		
		$options = self::options($id);
		$options = json_decode($options, true);
		
		$this->theme = $options['theme'];
	}
	
	// Dynamically creates fields based off of themes options.php file.
	public function themeoptions() {
		include "design/theme/{$this->theme}/options.php";
		$dynamic_form = "";
		
		$dynamic_form .= "<form action='' method='post' id='update-site'>";
		foreach($options as $option=>$value){
			if(!empty($value['label'])){
				$dynamic_form .= "<label for='{$option}'>{$value['label']}</label>";
			}else{
				$label_text = str_replace("_", " ", $option);
				$label_text = strtolower($label_text);
				$label_text = explode(" ", $label_text);
				$label = "";
				foreach($label_text as $text){
					$label .= ucfirst($text) . " ";
				}
				$dynamic_form .= "<label for='{$option}'>{$label}</label>";
			}
			switch($value['type']){
				case 'text':
					$dynamic_form .= "<input type='{$value['type']}' name='{$option}'><br>";
				break;
				case 'textarea':
					$dynamic_form .= "<textarea name='{$option}'></textarea><br>";
				break;
				case 'select':
					$dynamic_form .= "<select name='{$option}'>";
					foreach($value['options'] as $val=>$name){
						$dynamic_form .= "<option value='{$val}'>{$name}</option>";
					}
					$dynamic_form .= "</select><br>";
				break;
			}
			
		}
		$dynamic_form .= "</form>";
		
		return $dynamic_form;
	}
	
}

?>
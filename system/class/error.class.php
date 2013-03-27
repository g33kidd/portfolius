<?php
if (!defined("_VALID_PHP"))
	die('Direct access to this location is not allowed.');
	
class error()
{
	public $msgs = array();
	public $showMsg;
	
    /**
	* error::msgStatus()
	* 
	* @return
	*/
	public function msgStatus($attributes = "msgError") {
		
		$this->showMsg = "<div class=\"{$attributes}\"><span>Error</span> An error occurred!<ul class=\"error\">";
		
		foreach ($this->msgs as $msg) {
			$this->showMsg .= "<li>{$msg}</li>\n";
		}
		
		$this->showMsg .= "</ul></div>";
		
		return $this->showMsg;
	}

	/**
	* error::msgAlert()
	* 
	* @param mixed $msg
	* @param bool $fader
	* @param bool $altholder
	* @return
	*/	  
	public function msgAlert($msg, $attributes = "msgAlert", $fader = true, $altholder = false) {
		$this->showMsg = "<div class=\"{$attributes}\">{$msg}</div>";
		
		if ($fader == true)
			$this->showMsg .= "
			<script type=\"text/javascript\"> 
			// <![CDATA[
				$(document).ready(function() {       
					setTimeout(function() { $(\".msgAlert\").customFadeOut(\"slow\",    
					function() { $(\".msgAlert\").remove(); });
				},
				4000);
			});
			// ]]>
			</script>";	
		  
		print ($altholder) ? '<div id="alt-msgholder">'.$this->showMsg.'</div>' : $this->showMsg;
	}

	/**
	* error::msgOk()
	* 
	* @param mixed $msg
	* @param bool $fader
	* @param bool $altholder
	* @return
	*/	  
	public function msgOk($msg, $attributes = "msgOK", $fader = true, $altholder = false) {
		
		$this->showMsg = "<div class=\"{$attributes}\">{$msg}</div>";
		
		if ($fader == true)
			$this->showMsg .= "
			<script type=\"text/javascript\"> 
			// <![CDATA[
				$(document).ready(function() {       
					setTimeout(function() { $(\".msgOk\").customFadeOut(\"slow\",    
					function() { $(\".msgOk\").remove(); });
				},
				4000);
				});
			// ]]>
			</script>";	
		  
		print ($altholder) ? '<div id="alt-msgholder">'.$this->showMsg.'</div>' : $this->showMsg;
	}	

}
?>
<?php

/* Just some simple helper functions. No OOP HERE! :) */

// Check if the user is logged in.
function is_user_loggedin() {
	if(isset($_SESSION['loggedin'])){
		if($_SESSION['loggedin']==true) {
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}


?>
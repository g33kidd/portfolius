<?php
if (!defined("_VALID_PHP"))
	die('Direct access to this location is not allowed.');
		
Class user {

	private function filter($Value) {
		return mysql_real_escape_string($Value);
	}

	public static function genSalt() {
		$seed = '';
		for($i = 0; $i < 16; $i++) {
			$seed .= chr(mt_rand(0,255));
		}
		$salt = substr(strtr(base64_encode($seed), '+', '.'), 0, 22);
		return $salt;
	}
	
	public static function passwordRecover($email){
		$dbemail = mysql_query("SELECT * FROM users");
		if ($email === $dbemail) {
			$genpas = sself::genHash($genpass);
			mysql_query("UPDATE users SET password='$genpass' WHERE email='$email'");
		} else {
			echo 'bad email';
		}
	}
	
	public static function genHash($password) {
		## password encryption using bcryt
		$hash = crypt($password, '$2y$12' . '$' . self::genSalt());
		return $hash;
	}
	
	public static function veriPass($password, $dbHash) {
		$hash = crypt($password, $dbHash);
		if($hash == $dbHash) {
			return true;
		}else{
			return false;
		}
	}
	
	public static function add_user($first, $last, $email, $pass) {
		global $db;
		
		$fullname = "{$first} {$last}";
		$pass = self::genHash($pass);
		$email = $email;
		
		$db->query("INSERT INTO users VALUES ('','','{$fullname}','{$email}','{$pass}','1','dashboard_options=0')");
		return true;
	}
	
	public static function getQuestions() {
		global $db;
		$questions = array();
		
		$ques = $db->query("SELECT * FROM questions");
		
		while ($get = mysql_fetch_assoc($ques)) {
			$questions[] = array(
				'id' => $get['id'],
				'question' => $get['question']
			);
		}
		
		return $questions;
	}
	
	public static function get_user($email) {
		global $db;
		$query = $db->query("SELECT * FROM users WHERE email='{$email}'");
		if ($query->rowCount()){
			$data = $db->fetch(PDO::FETCH_ASSOC);
			return $data;
		}else{
			return false;
		}
	}

	public static function site_count($id) {
		global $db;
		$query = $db->query("SELECT id FROM sites WHERE owner='{$id}'");
		$count = $query->rowCount();
		return $count;
	}
	
	public static function check_email_address($email) {
	  // First, we check that there's one @ symbol, 
	  // and that the lengths are right.
	  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
	    // Email invalid because wrong number of characters 
	    // in one section or wrong number of @ symbols.
	    return false;
	  }
	  // Split it into sections to make life easier
	  $email_array = explode("@", $email);
	  $local_array = explode(".", $email_array[0]);
	  for ($i = 0; $i < sizeof($local_array); $i++) {
	    if(!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
	      return false;
	    }
	  }
	  // Check if domain is IP. If not, 
	  // it should be valid domain name
	  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
	    $domain_array = explode(".", $email_array[1]);
	    if (sizeof($domain_array) < 2) {
	        return false; // Not enough parts to domain
	    }
	    for ($i = 0; $i < sizeof($domain_array); $i++) {
	      if(!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
	        return false;
	      }
	    }
	  }
	  return true;
	}

	public static function remember_cookie($email, $pass) {
		
	}

	public static function exists($email) {
		global $db;
		$query = $db->query("SELECT id,email FROM users WHERE email='{$email}'");
		if($query->rowCount() >= 1) {
			return true;
		}else{
			return false;
		}
	}

	public function validate($email, $pw, $remember) {
		global $db;
            $query = $db->query("SELECT id,email,password,fullname FROM users WHERE email='{$email}'");
            if($query->rowCount())
            {
                $result = $query->fetch(PDO::FETCH_ASSOC);
				$verifyPass = self::veriPass($pw, $result['password']);
				if($verifyPass){
					$_SESSION['id']	= $result['id'];
					$_SESSION['loggedin']   = true;
	                $_SESSION['fullname']   = $result['fullname'];
	                $_SESSION['email']      = $result['email'];
					return true;
					
	                if($remember)
	                {
	                    setcookie("port_username", $email, time() + 60 * 60 * 24 * 365, "/");
	                    setcookie("port_password", self::genHash($pw), time() + 60 * 60 * 24 * 365, "/");
	                }
					
				}else{
					return false;
				}

            }else{
				return false;
       		}
    }

    public function update($UpdateRow, $UpdateValue){
		mysql_real_escape_string($segment);
		$query = $db->query("UPDATE `users` SET `".$this->filter($UpdateRow)."` = '".$this->filter($UpdateValue)."' WHERE `id` = '".$_SESSION['id']."'");
	}

	public function logout(){
		unset($_SESSION['loggedin']);
		unset($_SESSION['fullname']);
		unset($_SESSION['email']);
		session_destroy();
		session_regenerate_id();
    }
    
}

?>
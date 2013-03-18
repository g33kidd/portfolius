<?php

Class user {
	
	public static function genSalt() {
		$seed = '';
		for($i = 0; $i < 16; $i++) {
			$seed .= chr(mt_rand(0,255));
		}
		$salt = substr(strtr(base64_encode($seed), '+', '.'), 0, 22);
		return $salt;
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
	private function validate($email, $pw, $remember)
        {
            $pw = md5($pw);
            $db->query("SELECT * FROM `users` WHERE `email` = '".$email."' AND `password` = '".self::genHash($pw)."' LIMIT 1");
            if($query->rowCount())
            {
                $result = $query->fetch(PDO::FETCH_COLUMN);
				$fullname = explode(' ', $result);
                $_SESSION['loggedin']   = true;
                $_SESSION['firstName']  = $fullname[0];
                $_SESSION['lastName']   = $fullname[1];
                $_SESSION['email']      = $result['email'];
                if($remember)
                {
                    setcookie("port_username", $email, time() + 60 * 60 * 24 * 365, "/");
                    setcookie("port_password", self::genHash($pw), time() + 60 * 60 * 24 * 365, "/");
                }
            }
            else
                die("error");
        }
}

?>
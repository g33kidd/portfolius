<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include_once('../init.php');
$response = array();

switch($_POST['request']) {
	
	case 'register':
		
		$first = htmlentities($_POST['firstname']);
		$last = htmlentities($_POST['lastname']);
		$email = htmlentities($_POST['email']);
		$pass = htmlentities($_POST['password']);
		$data = array('firstname'=>$first,'lastname'=>$last,'email'=>$email,'password'=>$pass);
		
		if(!empty($first)&&!empty($last)&&!empty($email)&&!empty($pass)){
			if($user->check_email_address($email)){
				$adduser = $user->add_user($first, $last, $email, $pass);
				if($adduser) {
					$response['status'] = "success";
					$response['message'] = "everything is okay";
					$response['trigger'] = "0"; // Equivalemt to just Complete
				}else{
					$response['status'] = "error";
					$response['type'] = "add_user";
				}
			}else{
				$response['status'] = "error";
				$response['type'] = "invalid_email";
			}
		}else{
			$response['status'] = "error";
			$response['type'] = "missing_fields";
		}
	break;
	case 'login':
		$loggingin = $user->validate($_POST['email'], $_POST['password'], 0);
		if($loggingin) {
			$response['status'] = "success";
			$response['message'] = "You have been logged in successfuly";
		}else{
			$response['status'] = "error";
			$response['type'] = "unknown_login_error";
		}
		$email = htmlentities($_POST['email']);
		$pass = htmlentities($_POST['password']);
		$remember = htmlentities($_POST['remember']);
		
		if(!empty($email)&&!empty($pass)){
			if($user->check_email_address($email)){
				$loggeduser = $user->validate($email, $pass, $remember);
				if($loggeduser) {
					$response['status'] = "success";
					$response['message'] = "everything is okay";
					$response['trigger'] = "0"; // Equivalemt to just Complete
				}else{
					$response['status'] = "error";
					$response['type'] = "bad_login";
				}
			}else{
				$response['status'] = "error";
				$response['type'] = "invalid_email";
			}
		}else{
			$response['status'] = "error";
			$response['type'] = "missing_fields";
		}
	break;
	case 'site_count':
		echo "Coming Soon!";
	break;
	case 'logout':
		$user->logout();
		$response['status'] = "success";
		$response['message'] = "logged out!"; 
		$response['trigger'] = "0";
	break;
	case 'update_site':
		// This request takes two parameters.
		// $id which is the site ID and $data which should be a json_encoded Array of data to add/update.
		
		// DO THIS WHEN NOT FRUSTRATED :)
		return false;
	break;
	case 'delete_site':
		return false;
	break;
	case 'create_site':
		global $db;
		if(isset($_SESSION['id'])){
			$options = array('main'=>array("title"=>"title", "subtitle"=>"this is a subtitle."));
			$options = json_encode($options);
			$create = $site->create(1, 1, "kiddLayout:v1", "{$_POST['title']}", "");
			if($create) {
				$response['status'] = "success";
				$response['message'] = "site created successfuly";
				$response['trigger'] = "0";
				$response['site'] = "{$_POST['title']}";
			}else{
				$response['status'] = "error";
				$response['type'] = "site_not_created";
			}
		}
	break;
	case 'get_sessions':
		$session = $_SESSION[$_GET['session']];
		if(isset($session)){
			return $session;
		}else{
			return $_SESSION;
		}
	break;
}

$response = json_encode($response);
print_r($response);

/*

	case 'create_site':
		// This request takes one parameters.
		// $uid which is the user ID of the Logged in user.
		$count = $user->site_count($_POST['uid']);
		if($count > 0) {
			$response['status'] = "error";
			$response['type'] = "site_already_created";
		}else{
			$owner = $_POST['uid'];
			$owner_info = $db->query("SELECT email FROM users WHERE id='{$owner}'");
			$owner_info = $db->fetch(PDO::FETCH_COLUMN);
			$data = array(
				'theme' => 'default',
				'data' => array(
					'title' => 'My Site',
					'subtitle' => 'This is just a little information about me.',
					'email' => $owner_info['email'],
					'phone' => '',
					'website' => array('www.joshuak.me','www.universalbloggers.com')
				)
			);
			
			$data = json_encode($data);
			
			$create = $site->create($owner, $data);
			if($create){
				$response['status'] = "success";
				$response['message'] = "site created successfuly"; 
			}else{
				$response['status'] = "error";
				$response['type'] = "site_not_created";
			}
		}
	break;
<<<<<<< HEAD
	case 'logout':
		$user->logout();
		$response['status'] = "success";
		$response['message'] = "logged out!"; 
		$response['trigger'] = "0";
	break;
	case 'update_site':
		// This request takes two parameters.
		// $id which is the site ID and $data which should be a json_encoded Array of data to add/update.
		
		// DO THIS WHEN NOT FRUSTRATED :)
		return false;
	break;
	case 'delete_site':
		return false;
	break;
	case 'get_sessions':
		$session = $_SESSION[$_GET['session']];
		if(isset($session)){
			return $session;
		}else{
			return $_SESSION;
		}
	break;
}
=======
*/
>>>>>>> kiddj2015


?>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
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
		$user->validate($_POST['lemail'], $_POST['lpassword']);
	break;
	case 'site_count':
		echo "Coming Soon!";
	break;
	
}

$response = json_encode($response);
print_r($response);

?>
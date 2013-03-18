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
	case 'create_site':
		// This request takes one parameters.
		// $uid which is the user ID of the Logged in user.
		$count = $user->site_count($_POST['uid']);
		if($count > 0) {
			$response['status'] = "error";
			$response['type'] = "site_already_created";
		}else{
			$owner = $_POST['uid'];
			$owner = 1;
			$data = array(
				'theme' => 'default',
				'data' => array(
					'title' => 'Joshua Kidd',
					'subtitle' => 'Do a Barrel Roll!',
					'email' => 'kidd.josh.343@gmail.com',
					'phone' => '(620) 271-2795',
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
	case 'update_site':
		// This request takes two parameters.
		// $id which is the site ID and $data which should be a json_encoded Array of data to add/update.
		
		// DO THIS WHEN NOT FRUSTRATED :)
		return false;
	break;
	case 'delete_site':
		return false;
	break;
}

$response = json_encode($response);
print_r($response);

?>
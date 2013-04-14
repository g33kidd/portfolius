<?php
require_once("system/init.php");
session_destroy();
 function getQuestions() {
		global $db;
		$questions = array();
		
		$ques = $db->query("SELECT id, question FROM codejo_main.questions");
		
		while ($get = $ques->fetch(PDO::FETCH_ASSOC)) {
			$questions[] = array(
				'id' => $get['id'],
				'question' => $get['question']
			);
		}
		
		return $questions;
	}
if(is_user_loggedin()) 
	header("Location: dashboard.php");

?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
		<title>Portfolius | Forgot password</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="assets/css/base.css" media="screen" title="no title" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="assets/css/pages/home.css" media="screen" title="no title" charset="utf-8" />
	</head>
	<body>
		
		<form action="" method="post">
			<input type="text" name="email" placeholder="Email" /><br />
			<select id="id">
                <option value="0">Security Questions</option>
				<?php
					$questions = getQuestions();
					foreach ($questions as $question) {
						echo '<option value="', $question['id'], '">', $question['question'], '</option>';
                    }
                ?>
            </select>
		</form>
		
		<script src="//code.jquery.com/jquery-latest.js"></script>
		<script src="assets/js/site.js"></script>
	</body>
</html>
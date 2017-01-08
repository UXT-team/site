<?php
	require ("db.php");
	$email = $_POST['email'];
	$key = $_POST['key'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	$query = "SELECT * FROM `users` WHERE `email` = '".$email."' AND `pass_verification` = '".$key."'";
	$link = "mkonnect.php";
	$result = mysqli_query($con,$query);
	$numrows = mysql_numrows($result);
	if ($numrows == 1){
		while($row = mysql_fetch_array($result)){
			if($password == $password2) {
				$query = "UPDATE `users` SET `pass_verification` = '', password = '".md5($password)."' WHERE id = '".$row['user_id']."'";
				mysqli_query($con,$query);
				$lmsg = 'Password Reset. Please proceed to login below';
			}
		}
	}
	elseif ($numrows == 0) {
		$lmsg = 'Invalid / Expired Reset Code. Please confirm your reset code and try again or <a href="forgot.php">click here to generate a new code</a>';
	}
	elseif ($numrows > 1) {
		$lmsg = "System Error - Please contact the system administrator.";
	}
	$_SESSION['lmsg'] = $lmsg;
	header( 'Location: '.$link );
?>

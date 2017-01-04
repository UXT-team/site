<?php

	require ("db.php");
	$email = $_POST['email'];
	$query = "SELECT * FROM `users` WHERE `email` = '".$email."'";
	$link = "mkonnect.php";

	$result = mysqli_query($con,$query);
	$numrows = mysqli_num_rows($result);;

	if ($numrows == 1){
		while($row = mysqli_fetch_array($result)){
			$rand = md5(rand(10000000,99999999));
			require 'mailer/PHPMailerAutoload.php';
			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->SMTPDebug = 0;
			$mail->Debugoutput = 'html';
			$mail->Host = "smtp.ipage.com";
			$mail->Port = 587;
			$mail->SMTPAuth = true;
			$mail->Username = "bulksms@uxt.co.ke";
			$mail->Password = "UXTBulkSMS15";
			$mail->setFrom('bulksms@uxt.co.ke', 'Mkonnect');
			$mail->addReplyTo('bulksms@uxt.co.ke', 'Mkonnect');
			$mail->addAddress($row['email'], $row['name']);
			$mail->Subject = 'Mkonnect - Password Reset';
			$body = '
			<html>
			<body>
			<p>Hi '.$row['name'].',</p>
			<p>Please click the link below to reset your password in the Mkonnect System</p>
			<p><a href="http://41.139.138.45/navmenu/mkonnect/reset.php?email='.$row['email'].'&key='. $rand .'">http://41.139.138.45/navmenu/mkonnect/reset.php?email='.$row['email'].'&key='. $rand .'</a>
			<p>Regards,<br />Mkonnect Team</p>
			</body>
			</html>
			';
			$mail->msgHTML($body);
			if (!$mail->send()) {
				$lmsg = "Mailer Error. Please confirm your entries and try again ";
			} else {
				$query = "UPDATE `users` SET `pass_verification` = '".$rand."' WHERE `id` = '".$row['id']."'";
				mysql_query($query);
				$lmsg = 'Please check your email for your password reset link.';
			}
		}
	}
	elseif ($numrows == 0) {
		$lmsg = 'Invalid Email Address. Please confirm your email and try again.';
	}
	elseif ($numrows > 1) {
	$lmsg = "System Error - Please contact the system administrator.";
	}
	$_SESSION['lmsg'] = $lmsg;
	header( 'Location: '.$link );
?>

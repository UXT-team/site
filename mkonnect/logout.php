<?php
//stores all inforamation of pages in variables 

session_start();

//end session
session_destroy();

//destroy cookie

setcookie("email", "", time()+(20*20*1));
setcookie("password","", time()+(20*20*1));

//redirects them to login page 

header("Location: ../mkonnect.php"); 

?>


<?php
if ( $_SESSION['next'] != true) {
  header("Location: uploadcv.php");
}elseif ($_SESSION['next'] == true) {
 header("Location: profile.php");
}
 ?>

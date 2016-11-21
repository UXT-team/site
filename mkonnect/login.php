<?php
//include db..
$con = mysqli_connect("localhost", "root", "", "m_konnect");

if (isset($_POST['login'])) {

  //declare variable

  $email=$_POST['email'];
  $user_pass = $_POST['password'];
  $user_pass = md5($user_pass);


  //select query
  $select_log = "select * from users WHERE email='$email' AND password='$user_pass'";

  $query = mysqli_query($con, $select_log);

  if(mysqli_num_rows($query)){

   // "<script>alert('Login successful')</script>";
    // "<script>window.open('mkonnect/upload.php','_self')</script>";
           echo "<script>window.open('profile.php','_self')</script>";

     //here session is used and value of $user_email store in $_SESSION.

      $row = mysqli_fetch_array($query);
        $user_id = $row['id'];
      session_start();//session starts here


        $_SESSION['email']=$email;
        $_SESSION['id']=$user_id;
  }
   else
    {
        echo "<script>alert('Email or password is incorrect! Please check your details and try again.')</script>";
        echo "<script>window.open('mkonnect.php','_self')</script>";
	exit();

    }




}
 ?>

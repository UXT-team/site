<?php
session_start();

//import js

include('header.php');

//include db
$con = mysqli_connect("localhost", "root", "", "m_konnect");
$db = "users";

$select_db=mysqli_select_db($con,$db);

if(isset($_POST['accounts'])){

//declare variable
 //$user_name = $_POST['txt_name'];
 $user_email = $_POST['email'];
 $user_pass = $_POST['password'];
 //$user_num = $_POST['txt_number'];
 //$user_job = $_POST['txt_jobs'];

//here query check weather if user already registered so can't register again.

$select_acc="select * from users WHERE email='".$user_email."'";

$run_acc=mysqli_query($con,$select_acc);


$rows = mysqli_num_rows($run_acc);

if($rows>0)
{
$eng_acc= "<script>alert(' ".$user_email." Email is already exist in our database, Please try another one!')</script>";

echo $eng_acc;
echo"<script>window.open('mkonnect.php','_self')</script>";

}
else{

// $_POST['marketing']=null;

//insert the user into the database.

$insert_acc="insert into users (email,password) VALUES ('$user_email',md5('$user_pass'))";

if(mysqli_query($con,$insert_acc))
{
$select_log = "select * from users WHERE email='$user_email'";
$query = mysqli_query($con, $select_log);
  $row = mysqli_fetch_array($query);
    $user_id = $row['user_id'];
    $_SESSION['email']=$user_email;
    $_SESSION['id']=$user_id;
    $category_id=$_SESSION['category'];
    $insert_app="insert into job_applications (user_id,category_id) VALUES ('$user_id','$category_id')";
    mysqli_query($con,$insert_app);
echo "<script>alert('Registration Successful')</script>";
echo"<script>window.open('jobs.php','_self')</script>";



}
else{
echo "<script>alert('Check your details and try again')</script>";
$refresh = "<script>window.open('mkonnect.php','_self')</script>";
 echo $refresh;
 exit();
}

}


}



?>

<?php
//include db
$con = mysqli_connect("localhost", "root", "", "m_konnect");
$db = "users";

$select_db=mysqli_select_db($con,$db);
if(isset($_POST['profile'])){

//declare variable
 //$user_name = $_POST['txt_name'];
 $name = $_POST['txt_name'];
 $number=$_POST['txt_education'];
 $edu_level=$_POST['txt_cert'];
 $nationality=$_POST['txt_nationality'];
 $experience=$_POST['txt_years'];





// $_POST['marketing']=null;

//insert the user into the database.

$insert_acc="insert into profiles (fullname,phone_number,edu_level,nationality,experience,user_id) VALUES ('$name','$number','$edu_level','$nationality','$experience',1)";

if(mysqli_query($con,$insert_acc))
{
echo"<script>window.open('uploadcv.php','_self')</script>";


}
else{
echo "<script>alert('Check your details and try again')</script>";
exit();
//$refresh = "<script>window.open('mkonnect.php','_self')</script>";

}




}



?>

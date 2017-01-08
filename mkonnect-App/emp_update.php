<?php
require ("db.php");
if(isset($_POST['profile'])){

//declare variable
 //$user_name = $_POST['txt_name'];
 $job_title = $_POST['txt_job_title'];
 $company_name=$_POST['txt_companyname'];
 $job_description=$_POST['text_area'];
 $job_category=$_POST['txt_nationality'];
 $experience=$_POST['txt_experience'];
 $employer_id =$_SESSION['id'];
 $website = $_POST['txt_website'];





// $_POST['marketing']=null;

//insert the user into the database.

$insert_acc="insert into employer_jobs (job_title,company_name,job_description,job_category,job_experience,company_website,employer_id) VALUES ('$job_title','$company_name','$job_description','$job_category','$experience','$website','$employer_id')";

if(mysqli_query($con,$insert_acc))
{
  echo "<script>alert('Job Post successful')</script>";

  echo "<script>window.open('postjob.php','_self')</script>";

}
else{
echo "<script>alert('Check your details and try again')</script>";
exit();
//$refresh = "<script>window.open('mkonnect.php','_self')</script>";

}




}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update failed</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--favicon-->
       <link rel="icon" type="image/png" href="img/favicon.ico" sizes="32x32" />
</head>
<body>
<div id="success" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    	<div class="col-md-12">
    	<div class="thumbnail">
    	<img src="http://scontent.cdninstagram.com/t51.2885-15/s480x480/e35/13108626_553805548132875_1933189810_n.jpg?ig_cache_key=MTI0ODk1NjE3Mjc3OTgyNTM0OQ%3D%3D.2">
    	<div class="caption">
    	<center><p class="text-success" style="font-size:2em;"> Registration Successful
    	</center>
    	<center><p class="text-warning" style="font-size:1.5em;"> Click Next to Update your profile
    	</center>
    
     <center><a href="Jobs.php"><button class="btn btn-success btn-lg">Next</button></a></center>
     </div>
     </div>
     </div>
    </div>
  </div>
</div>
  
</div>



<div class="container">
  <div id="update_error" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    	<div class="col-md-12">
    	<div class="thumbnail">
    	<img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcR86aukb6WHzQ-QmUshY1kPcvnv9GuIkuvFUiaMgt7IJkxHxurRVQ">
    	<div class="caption">
    	<center>
    	<p class="text-danger" style="font-size:2em;">Check your details and try again
    	</p>
    	</center>
    
     <center><a href="update.php"><button class="btn btn-danger btn-lg">Try Again</button></a></center>
     </div>
     </div>
     </div>
    </div>
  </div>
</div>
  
</div>

</body>
</html>




<?php
require ("db.php");
if(isset($_POST['profile'])){

//declare variable
 //$user_name = $_POST['txt_name'];
 $name = $_POST['txt_name'];
 $number=$_POST['txt_education'];
 $edu_level=$_POST['txt_cert'];
 $nationality=$_POST['txt_nationality'];
 $experience=$_POST['txt_years'];
 $user_id =$_SESSION['id'];





// $_POST['marketing']=null;

//insert the user into the database.

$insert_acc="insert into profiles (fullname,phone_number,edu_level,nationality,experience,user_id) VALUES ('$name','$number','$edu_level','$nationality','$experience',$user_id)";

if(mysqli_query($con,$insert_acc))
{
echo"<script>window.open('uploadcv.php','_self')</script>";


}
else{
//echo "<script>alert('Check your details and try again')</script>";
echo"<script> $('#update_error').modal('show');</script>";
exit();
//$refresh = "<script>window.open('mkonnect.php','_self')</script>";

}




}



?>

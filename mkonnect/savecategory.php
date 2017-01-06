<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration failed</title>
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
  <div id="reg" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="col-md-12">
      <div class="thumbnail">
      <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcR86aukb6WHzQ-QmUshY1kPcvnv9GuIkuvFUiaMgt7IJkxHxurRVQ">
      <div class="caption">
      <center><p class="text-danger" style="font-size:2em;"><?php  '.$user_email.' ?> Email is already exist in, Please try another one!'</p></center>
    
     <center><a href="profile.php"><button class="btn btn-primary btn-lg">Try Again</button></a></center>
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
    //include db
        if(isset($_POST['save'])){

         $category_id= $_SESSION['txt_category'];
         $select_acc="select * from job_applications  WHERE category_id='".$category_id."' AND user_id=20 ";

         $run_acc=mysqli_query($con,$select_acc);


         $rows = mysqli_num_rows($run_acc);

         if($rows>0)
         {
         $eng_acc= "<script>alert('Already applyed for that job Category')</script>";

         echo $eng_acc;
         echo"<script>window.open('profile.php','_self')</script>";

         }
         else{

         // $_POST['marketing']=null;

         //insert the user into the database.

         $insert_acc="insert into job_applications (category_id,user_id) VALUES ('$category_id',20)";

         if(mysqli_query($con,$insert_acc))
         {

         echo "<script>alert('Saved  successfully')</script>";
         echo"<script>window.open('profile.php','_self')</script>";



         }

 }
}

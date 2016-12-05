<?php
require ("db.php");

        if(isset($_POST['save'])){

         echo $_SESSION['txt_qualification'];

        //select query

         $select_category = " select * from job_category2 WHERE category = '" .$category. "'";

         $run_query = mysqli_query($con, $select_category);

       //query to ensure no double saving

         $rows = mysqli_num_rows($run_query);

    if($rows>0)
     {
  $check_category= "<script>alert(' ".$category." Job Category already exist in our profile, Please try another Job Category!')</script>";

         echo $check_category;
      }

      else{

        $insert_job_category="insert into job_category2 (category) VALUE ('$category')";

    if(mysqli_query($con,$insert_job_category))
     {
       echo"<script>window.open('mkonnect.php','_self')</script>";
   }
   else{

     echo "<script>alert('Check your details and try again')</script>";
    }

     }
 }

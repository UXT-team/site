<?php
session_start();//session starts here

    //include db
        if(isset($_POST['save'])){

         $course=$_SESSION['txt_courses'];
         $con = mysqli_connect("localhost", "root", "", "m_konnect");



         // $_POST['marketing']=null;

         //insert the user into the database.

         $insert_acc="insert into courses (course_name,user_id) VALUES ('$course',20)";

         if(mysqli_query($con,$insert_acc))
         {

         echo "<script>alert('Saved  successfully')</script>";
         echo"<script>window.open('profile.php','_self')</script>";

         }


}

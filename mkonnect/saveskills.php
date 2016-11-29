<?php
session_start();//session starts here

    //include db
        if(isset($_POST['save'])){

         $skill= $_SESSION['txt_skills'];
         $con = mysqli_connect("localhost", "root", "", "m_konnect");



         // $_POST['marketing']=null;

         //insert the user into the database.

         $insert_acc="insert into skills (skill,user_id) VALUES ('$skill',20)";

         if(mysqli_query($con,$insert_acc))
         {

         echo "<script>alert('Saved  successfully')</script>";
         echo"<script>window.open('profile.php','_self')</script>";

         }


}

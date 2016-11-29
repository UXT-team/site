<?php
session_start();//session starts here

    //include db
        if(isset($_POST['save'])){

         $category_id= $_SESSION['txt_category'];
         $con = mysqli_connect("localhost", "root", "", "m_konnect");

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

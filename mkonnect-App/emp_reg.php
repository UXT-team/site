<?php echo $_POST['job_post_email'];
      echo $_POST['job_post_password'];
      require ("db.php");
      if(isset($_POST['job_post_register'])){

      //declare variable
       //$user_name = $_POST['txt_name'];
       $user_email = $_POST['job_post_email'];
       $user_pass = $_POST['job_post_password'];
       //$user_num = $_POST['txt_number'];
       //$user_job = $_POST['txt_jobs'];

      //here query check weather if user already registered so can't register again.

      $select_acc="select * from employer WHERE email='".$user_email."'";

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

      $insert_acc="insert into employer (email,password) VALUES ('$user_email',md5('$user_pass'))";

      if(mysqli_query($con,$insert_acc))

      {
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

 <?php
include('header.php');
 ?>


         <?php 

        //include db
        include('mkonnect/db/db_connection.php');

        if(isset($_POST['accounts'])){

        //declare variable
          $user_name = $_POST['txt_name'];
          $user_email = $_POST['email'];
          $user_pass = $_POST['password'];
          $user_num = $_POST['txt_number'];
          $user_job = $_POST['txt_jobs']; 

          //use select query

     $select_query = "select * from ict WHERE email='".$user_email."'";

      $run_query=mysqli_query($con,$select_query);
     $rows = mysqli_num_rows($run_query);
         
    if($rows>0){

         // $mail_exist= "<script>$('#thankyouModal').modal('show')</script>";
          $mail_exist = "<script>alert(' ".$user_email." is already in Use. Try another email')</script>";
          echo $mail_exist;
            
           exit();

             //refresh page

           $redirect = "<script>window.open(mkonnect.php)</script>";

           echo $redirect;

          }
          
          

            //insert into db
  $insert_query = "insert into accounts (name,email,phonenumber,job_type,password) VALUES ('$user_name','$user_email','$user_num','$user_job',md5('$user_pass'))";

            if (mysqli_query($con,$insert_query)){

              $run = "<script>window.open(mkonnect/cvs.html)</script>";
              echo $run;
            }
            else{
             // $eror = "<script>alert('please check your details and try again')</script>";
              $eror ='<script>alert("check your details and try again again")</script>';
            

              sleep(10);

              //redirect page
              echo "<script>window.open('mkonnect.php')</script>";
            }
          

        }



        ?>

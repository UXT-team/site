
				<?php


//include db
include('db/db_connection.php');


    //set validation error flag as false
   # $error = false;
    //check if form is submitted
    
    if (isset($_POST['registration']))
    {
        $name =$_POST['txt_name'];
        $user_email = $_POST['email'];
       
      
$check_email_query="select * from cv WHERE email=' $user_email '";
    $run_query=mysqli_query($con,$check_email_query);
    $numResults = mysqli_num_rows($run_query);
     


    if($numResults==1)
    {
       $message="<script>alert($user_email 'is already exist in our database, Please try another one!')</script>";
 
        echo $message;


    }
    else{
//insert the user into the database.

    $insert_user="insert into cv (name,email,phonenumber) VALUES ('$name','$user_email','$num'";

    if(mysqli_query($con,$insert_user))
    {
       

          $login = "<script>window.open('cvs.html','_self')</script>";        
        echo $login;
        
          
    }
    else{
          
          echo "<script>window.location.replace('cv.php' ,'_self')</script>";  
      }

      }

     

    }
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-popover-x.css" media="all" rel="stylesheet" type="text/css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="js/bootstrap-popover-x.js" type="text/javascript"></script>
   <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
   <!--<script src="http://getbootstrap.com/dist/js/bootstrap.js"></script>-->
<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
</head>
<body>

<fieldset>
  <form role="form" class="form-horizontal" action="mkonnect.php" method="POST" name="contactform" data-toggle="validator">
  <div id="login">
  <div class="col-md-6 col-md-offset-3 panel">
   <legend><center> <span class="glyphicon glyphicon-user"></span>LOGIN <span class="glyphicon glyphicon-user"></span></center> </legend>
    <div class="form-group">
                <div class="col-md-12">
        <input type="email" class="form-control" name="email" placeholder="email" required />
        <div class="help-block with-errors"></div><!--help-block-->
          </div><!--col-md--6-->
            </div><!--form-group-->
            
            <div class="form-group">
                <div class="col-md-12">
            <input class="form-control" name="password" placeholder="Your Password" type="password" data-minlength="6" id="inputPassword" value="" required />
              <div class="help-block">Minimum of 6 characters</div>
            </div><!--col-md-6-->
            </div><!--form-group-->

            
            <div class="form-group">
                    <div class="col-md-12">
                      
                         <input class="btn btn-lg btn-success btn-block" type="submit" value="Reset Password" name="login" style="font-size:1.25em;" >

                    </div><!--col-md--12-->
                </div><!--form-group-->
            </div><!--col-md-6-->
            </div><!--login-->
  </form>
</fieldset>

</body>
</html>

<?php
//include db..
include('mkonnect/db/db_connection.php');



if (isset($_POST['login'])) {
  
  //declare variable

  $email=$_POST['email'];
  $user_pass = $_POST['password'];
  $remember = $_POST['re'];

  //encrypt password

  $user_pass = md5($user_pass);

  //set cookie for 20minutes if remember is on
        if (isset($_POST['re']) && $_POST['re'] == 'on'){

        setcookie("email", $user_email, time()+(20*20*1));
        setcookie("txt_pass", $pass, time()+(20*20*1));

        }
        /*unset the cookie
     * it set cookie 1 sec back to current Unix time
     * so that it will invalid */
        else{
          $user_email='';
          $user_pass='';
        

         if (isset($_COOKIE['email'])) {
             $user_email = $_COOKIE['email'];
            }

      if (isset($_COOKIE['password'])) {
          $user_pass = $_COOKIE['password'];
            }
            }


  //select query
  $select_log = " select * from accounts WHERE email='$email' AND password='$user_pass'";

  $query = mysqli_query($con, $select_log);

  if(mysqli_num_rows($query)){

   // "<script>alert('Login successful')</script>";
    // "<script>window.open('mkonnect/upload.php','_self')</script>";
           echo "<script>window.open('mkonnect/uploadcv.php','_self')</script>";

     //here session is used and value of $user_email store in $_SESSION.
          
      $row = mysqli_fetch_array($query);
        $user_id = $row['id'];
      session_start();//session starts here


        $_SESSION['email']=$email;
        $_SESSION['id']=$user_id;
  }
   else
    {
        echo "<script>alert('Email or password is incorrect! Please check your details and try again.')</script>";
        
    }




}




 ?>
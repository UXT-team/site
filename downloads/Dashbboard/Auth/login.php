<!DOCTYPE html>
<html>
<head>

	<title>Skiza Register</title>
	<!--responsive-->
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	 <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!--jequery-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>

<header>
	
<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid">

    <div class="navbar-header">

      <!-- Brand and toggle get grouped for better mobile display -->
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
	    <span class="sr-only">Toggle navigation</span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
     </button>
      <a class="navbar-brand" >
      	<img  style="width:395px; height: 35px; align="left"" src="img/logo.jpg" >
      	
      </a>
    </div>
    

    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="navbarCollapse">
    
      <ul class="nav navbar-nav navbar-right" style="font-size:1.2em;">
        
         
        <li class="active"><a href="login.php">Login</a></li>
        <li class="dropdown">
          <a data-target="#" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Inspiration Stories</a></li>
            <li><a href="#">Notice Board</a></li>
            <li><a href="#">Trends</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Business Forum</a></li>
            
          </ul>
        </li>
      </ul>
       
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</header>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 well">
			<form role="form" class="form-horizontal" action="registration.php" method="POST" name="contactform">

				<fieldset>
					<legend> <center>SKIZA ADMIN REGISTER</center></legend>

			
						<div class="form-group">

						<div class="col-md-12">
							
							<label for="email" class="control-label">Email</label>

						</div><!--col-md-12-->

						<div class="col-md-12">
							
							<input type="email" name="email" placeholder="Enter email" class="form-control" value="<?php if(isset($email_error)) echo $email_error; ?>">

						</div><!--col-md-12-->

						</div><!--form-group-->

						<div class="form-group">

						<div class="col-md-12">
							
							<label for="password" class="control-label">Password</label>

						</div><!--col-md-2-->

						<div class="col-md-12">
							
							<input type="password" name="pass" placeholder="Enter Password" class="form-control" value="<?php if(isset($password)) echo $password; ?>">

						</div><!--col-md-12-->

						</div><!--form-group-->
	

						<div class="form-group"

							<div class="col-md-12">

							
							<center><button class="btn btn-lg btn-success btn-block" name="login" type="submit" style="font-size:1.25em;">Login</button></center>

							</div><!--col-md-12-->

						</div><!--form-group-->

						
					
				</fieldset>


			</form>
		</div><!--row-->
		</div><!--well-->
	</div><!--container-->
</section>


</body>
</html>

<?php

include 'db/db_connection.php';

//declare varialbes

if (isset($_POST['login'])) {
	
	$name = $_POST['txt_name;'];
	$user_email = $_POST['email'];
	$pass = $_POST['password'];
	$rpass = $_POST['confirm_pass'];

	$error = false;

	//Validation

	if (empty($name)) {
		
		
		#$name_error ="please enter name";

		echo "<script>alert('Please Enter Your Name')</script>";
	}

	if (empty($user_email)) {
		
		#$error = true;
		echo $email_error='<span class="text-danger">Please Enter Email</span>'; 
		#echo "<script>alert('Please Enter your email')</script>";
	}

	if (empty($pass)) {
		
		#echo "<script>alert('Please Enter Your Password')</script>";
		echo $password ='<div class= "alert alert-danger alert-small" role="alert"> Please Enter your password ';
	}

	
}


 ?>
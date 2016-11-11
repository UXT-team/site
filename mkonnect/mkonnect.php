<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mkonnect</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="js/bootstrap-popover-x.js" type="text/javascript"></script>
   <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-popover-x.css" media="all" rel="stylesheet" type="text/css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="js/bootstrap-popover-x.js" type="text/javascript"></script>
   <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<style type="text/css">
.jumbotron{
   height: auto;
  width: 100%;
  padding: 40px 0;
  overflow: hidden;

}
</style>


  </head>
  <body>

  <div class="row">
  <div class="container">
  <div class="jumbotron">
  <div class="thumnail">
    <div class="caption">
    <h3><center>Apply Below Job as Per Category</center></h3>
    </div>
  </div><!--thumbnail-->



  <div class="col-md-4">
  <div class="panel" style="margin:10%; padding: 10%;">

<p class="text-warning"> Sales & Marketing</p>
<button class="btn btn-warning btn-lg" style="padding:10%;" data-toggle="modal" data-target="#sales" >Apply</button>

    <!-- Modal -->
<div class="modal fade" id="sales" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Register</h4>
      </div>
      <div class="modal-body">

      <div class="row">
<div class="col-md-6 well col-md-offset-3" >
            <form role="form" class="form-horizontal" action="mkonnect.php" method="POST" name="contactform" data-toggle="validator">
            <fieldset>
          
                <legend><center> <span class="glyphicon glyphicon-user"></span>Sales <span class="glyphicon glyphicon-user"></span></center> </legend>

               
        <?php include('form2.php');?>
        <p>Already have an account?</p>
        <center><?php include('login2.php'); ?></center>
    
      </div>
      
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div><!--modal-footer-->
      </div><!--modal-content-->
    </div><!--dialogue-->
  </div><!--sales-->    
</div><!--panel-->
</div><!--col-md-4-->



<div class="col-md-4">
  <div class="panel" style="padding:10%; margin:10%;">
  <h3 class="text-warning">ICT</h3>

    <button class="btn btn-warning btn-lg" data-toggle="modal" data-target="#IT">APPLY</button>

    <!-- Modal -->
<div class="modal fade" id="IT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Register</h4>
      </div>
      <div class="modal-body">

      <div class="row">
<div class="col-md-6 well col-md-offset-3" >
            <form role="form" class="form-horizontal" action="mkonnect.php" method="POST" name="contactform" data-toggle="validator">
            <fieldset>
          
                <legend><center> <span class="glyphicon glyphicon-user"></span> ICT <span class="glyphicon glyphicon-user"></span></center> </legend>

               
        <?php include('form2.php');?>
        <p>Already have an account?</p>
        <center><?php include('login2.php'); ?></center>
    
      </div>
      
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div><!--modal-footer-->
      </div><!--modal-content-->
    </div><!--dialogue-->
  </div><!--ICT-->    

  </div><!--panel-->
</div><!--col-md-4-->


<div class="col-md-4">
  <div class="panel" style="padding:10%; margin:10%;">
    
  <h3 class="text-warning">Accounts</h3>

    <button class="btn btn-warning btn-lg" data-toggle="modal" data-target="#accounts">APPLY</button>

    <!-- Modal -->
<div class="modal fade" id="accounts" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Register</h4>
      </div>
      <div class="modal-body">

      <div class="row">
<div class="col-md-6 well col-md-offset-3" >
            <form role="form" class="form-horizontal" action="mkonnect.php" method="POST" name="contactform" data-toggle="validator">
            <fieldset>
          
                <legend><center> <span class="glyphicon glyphicon-user"></span> Accounts <span class="glyphicon glyphicon-user"></span></center> </legend>

               
        <?php include('form2.php');?>
        <p>Already have an account?</p>
        <center><?php include('login2.php'); ?></center>
    
      </div>
      
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div><!--modal-footer-->
      </div><!--modal-content-->
    </div><!--dialogue-->
  </div><!--ICT-->    

  </div><!--panel-->
</div><!--col-md-4-->



    </div><!--jumbotron-->
     </div><!--container-->
    </div><!--row-->
    
















   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>

 
<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
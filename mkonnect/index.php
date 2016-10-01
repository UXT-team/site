<!DOCTYPE html>
<html>
<head>
    <title>Job Application</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
     <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">


    
</head>
<body style=" background-color: #f7f7f7;" data-spy="scroll" data-target="#uxt" data-offset="70">
<section>

<div class="container">

  <div class="row">

    <div class="col-md-12">

      <div class="list-group">

        <ul class="list-group">
          <li class="list-group-item"><a data-toggle="collapse" href="#accounting" aria-expanded="false" aria-controls="collapseExample">

          <center>Accounting</center></a>

          </li><!--list-group-item-->
          <?php include('accounts.php'); ?>


                        <li class="list-group-item"><a data-toggle="collapse" href="#engineering" aria-expanded="false" aria-controls="collapseExample">

                         <center>Engineering</center></a>

                        <?php include('engineering.php'); ?>

                       

                       
          

                        
                        <li class="list-group-item"><a data-toggle="collapse" href="#ict" aria-expanded="false" aria-controls="collapseExample">

                      <center>ICT</center></a>

                       </li><!--list-group-item-->
                   <?php include('ict.php'); ?>

                   <li class="list-group-item"><a data-toggle="collapse" href="#medicine" aria-expanded="false" aria-controls="collapseExample">

                         <center>Medicine</center></a>

                        <?php include('medicine.php'); ?>

                        <li class="list-group-item"><a data-toggle="collapse" href="#mechanic" aria-expanded="false" aria-controls="collapseExample">

                         <center>Mechanic</center></a>

                        <?php include('mechanic.php'); ?>


                       
                   

                        </div><!--list-group-->
                        </div><!--col-md--12-->
                        </div><!--row-->
                        </div><!--container-->
                        </section>
<section>
    <div class="col-md-6 col-md-offset-3 well">
                       <form role="form" class="form-horizontal" action="register.php" method="POST" name="contactform" data-toggle="validator">
            <fieldset>
    
                <legend><center> <span class="glyphicon glyphicon-user"></span></center> <center> APPLY THE JOBS ABOVE</center> <center><span class="glyphicon glyphicon-user"></span></center> </legend>

               <div class="form-group">
                    
                    <div class="col-md-12">
                        
                        <input class="form-control" name="txt_name" placeholder="Your Full Name" type="text" value="" id="inputName" required />
                        <div class="help-block with-errors"></div><!--help-block-->
                    </div><!--col-md-12-->
                </div><!--form-group-->

                <div class="form-group">
                    
                    <div class="col-md-12">
                        
                        <input class="form-control" name="email" placeholder="Your Email" type="email" autofocus value="" required />
                        <div class="help-block with-errors"></div>
                        
                    </div><!--form-group-->
                </div><!--form-group-->

                <div class="form-group">
                    
                    <div class="col-md-12">
                        
                         <input class="form-control" name="txt_number" placeholder="Your Phone Number eg. +2547..." type="text" required pattern=".{9,}" title="9 charachters minimum" value="" required />
                        <div class="help-block with-errors"></div>
                        
                    </div><!--col-md-12-->
                </div><!--form-group-->
              
                <div class="form-group">
                    
                    <div class="col-md-12">
                        
                        <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                       <div class="help-block">Minimum of 6 characters</div>
                 </div>                        
                    </div><!--col-md-12-->
                </div><!--form-group-->
                 <div class="form-group">
                    
                    <div class="col-md-12">
                        
                         <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                         <div class="help-block with-errors"></div>
                    </div><!--col-md-12-->
                </div><!--form-group-->

                <div class="form-group">
                  
                  <div class="col-md-12">
                    
                     <select class="form-control" name="txt_jobs"  required>
                    
                              <option>Accountant</option>
                              <option>Clerk</option>
                              <option>Cashier</option>
                              <option>Banker</option>

                            </select>

                  </div><!--col-md-12-->

                </div><!--form-group-->
                
                <div class="form-group">
                    <div class="col-md-12">
                       
                         <input class="btn btn-lg btn-warning btn-block" type="submit" value="Register" name="register" style="font-size:1.25em;" >

                    </div><!--col-md--12-->
                </div><!--form-group-->
                <div class="form-group">
                  <div class="col-md-12">
                    <div id="logs">
                    <p> If you already have an account <?php include('login.php') ?></p>
                    </div><!--log-->
                  </div><!--col-md-12-->
                </div><!--form-group-->
            </fieldset>
            </form>
        </div><!--col-md--12-->
        </div><!--col-md-12-->
        </div><!--row-->
</section>
        
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <!--<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>-->
 <!-- <link rel="stylesheet" href="js/validator.js">
    <link rel="stylesheet" href="js/validator.min.js">-->
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>



</body>
</html>

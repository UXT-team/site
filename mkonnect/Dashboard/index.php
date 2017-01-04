<?php

//store information of all pages in variables

session_start(); 

if (!$_SESSION['email']) {
  
  header("location: Auth/login.php");
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>MKONNECT Dashboard</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" conutent="IE=edge">
    <!--for repsonsiveness-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

      <header>
        
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >
        <img  style="width:395px; height: 35px; align="left"" src="images/logo.jpg" >
        
      </a>
    </div>
    <ul class="nav navbar-nav">
     
  <li><a href="#" style="color:white; font-size:1.8em;">MKONNECT ADMIN</a></li>
  <li><a href="#" style="color:white; font-size:1.8em;"><?php echo $_SESSION['email'];  ?></a></li> 
  <div class="pull-right">
    <div class="dropdown" >
  <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top:8%;">Account Settings
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#"><input type="submit" class=" btn btn-success btn-sm" value="Reset Password"></a></li>
    <li><a href="Auth/logout.php"><input type="submit" class="btn btn-danger btn-md" value="Log Out" style=" padding-right: 5%;" ></a></li> 
  </ul>
</div><!--drop-down-->
</div><!--pull-right-->
      
    </ul>

  </div>
</nav>
      </header>
      <section>
        <div class="page-content">
            <div class="row">
              <div class="col-md-2">
                <div class="list group" style="width:90%; padding:3%; font-size:1.7em; ">
                  <ul class="list-group" >
                    <li class="list-group-item"><a href="index.php" style="color:#000000;"> <i class="glyphicon glyphicon-home"></i>Dashboard</a></li>
                  
                    <li class="list-group-item"><a href="views/cvwriting.php" style="color:#000000;" > <i class="glyphicon glyphicon-pencil"></i>CV Writing Views</a></li>
                    <li class="list-group-item"><a href="views/interviewskills.php" style="color:#000000;"><i class="glyphicon glyphicon-education"></i>Interview Skills Views</a></li>
                    <li class="list-group-item">
                      <button type="button" class="btn btn-warning btn-lg" data-toggle="collapse" data-target="#jobs">Jobs</button> </li>
                  <div id="jobs" class="collapse">
                    <a href="views/marketing.php" class="list-group-item"><i class="glyphicon glyphicon-ice-lolly-tasted"></i>Sales & Marketing</a>
                    <a href="views/ict.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>ICT</a>
                    <a href="views/accounts.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Accounting</a>
                   <a href="views/management.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Top Management</a>
                   <a href="views/creatives.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Creatives</a>
                   <a href="views/customer_service.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Customer Service</a>
                   <a href="views/education.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Education</a>
                   <a href="views/farming.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>farming</a>
                   <a href="views/government.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Government</a>
                   <a href="views/health.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Healthcare</a>
                   <a href="views/human_resource.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Human Resource</a>
                   <a href="views/insurance.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Insurance</a>
                   <a href="views/legal.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Legal</a>
                   <a href="views/manufacturing.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Manufacturing</a>
                   <a href="views/minning.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Minning & Natural Resource</a>
                   <a href="views/NGO.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>NGO</a>
                   <a href="views/administration.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Administration&Office support</a>
                   <a href="views/project_management.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Project Management</a>
                   <a href="views/research.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Research& Quality Assurance</a>
                   <a href="views/retail.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Retail</a>
                   <a href="views/business_development.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Business Development</a>
                   <a href="views/security.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Security</a>
                   <a href="views/strategy_consulting.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Strategy & Consulting</a>
                   <a href="views/tourism.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Tourism & Travel</a>
                   <a href="views/trade.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Trade & services</a>
                   <a href="views/procurement.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Transport,Logistics,Procurement</a>
                   <a href="views/real_estate.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Real Estate</a>
                   <a href="views/hospitality.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Hospitality</a>
                   <a href="views/others.php" class="list-group-item"><i class="glyphicon glyphicon-cloud-upload"></i>Others</a>
                </div>
                    
                    <li class="list-group-item"><a href="help" style="color:#000000;"> <i class="glyphicon glyphicon-question-sign"></i>&nbsp;Help</a></li>



                  </ul>
                  
                </div><!--listgroup-->
              </div><!--col-md-2-->
             <div class="jumbotron">
      <div class="col-md-10">
       <div class="row">
        <div class="col-md-3">
      
          <div class="card">
            <div class="panel" style="padding:20%;">
              <a href="interviewskills.php"><button class="btn btn-warning btn-lg" style="padding:10%;">Interview Skills</button></a>
            </div><!--panel-->
         </div><!--content-box-small -->
       
        </div><!--col-md-4-->

        <div class="col-md-3">
          <div class="card">
            <div class="panel" style="padding:20%;">
              <a href="cvwriting.php"><button class="btn btn-warning btn-lg" style="padding:10%;">CV WRITING</button></a>
            </div><!--panel-->
         </div><!--content-box-small -->
        </div><!--col-md-4-->

        <div class="col-md-3">
          <div class="card">
            <div class="panel" style="padding:20%;">
              <a href="interviewskills.php"><button class="btn btn-warning btn-lg" style="padding:10%;">Help</button></a>
            </div><!--panel-->
         </div><!--content-box-small -->
        </div><!--col-md-4-->

        <div class="col-md-3">
          <div class="card">
            <!--<img src="image/user">-->
          </div><!--card-->
          <div class="card-content">
        
          </div><!--card-content-->
        </div><!--col-md-4-->

        <div class="col-md-3">
          <div class="card">
            <!--<img src="image/songview.png">-->
          </div><!--card-->
          <div class="card-content">
            <p></p>
          </div><!--card-content-->
        </div><!--col-md-4-->

          <div class="col-md-4">
          <div class="card">
            <!--<img src="image/albumnview.png">-->
          </div><!--card-->
          <div class="card-content">
            <p> </p>
          </div><!--card-content-->
        </div><!--col-md-4-->

        <div class="col-md-3">
          <div class="card">
            <!--<img src="image/users.jpeg">-->
          </div><!--card-->
          <div class="card-content">
            <p>  </p>
          </div><!--card-content-->
        </div><!--col-md-4-->

        </div><!--row-->
        </div><!--col-md-10-->
         </div><!--Jumbotron-->
    
            </div><!--row-->
        </div><!--page-content-->
        
    </section>
    
    
   
  </body>
  </html>

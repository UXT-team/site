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
<body style=" background-color: #f7f7f7;" >
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


                       
                   

                        </div><!--list-group-->
                        </div><!--col-md--12-->
                        </div><!--row-->
                        </div><!--container-->
                        </section>

                        
        

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <!--<script src="http://getbootstrap.com/dist/js/bootstrap.js"></script>-->
<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</body>
</html>

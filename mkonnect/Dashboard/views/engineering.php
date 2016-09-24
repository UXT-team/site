<?php

//store information of all pages in variables

session_start(); 

if (!$_SESSION['email']) {
  
  header("location: ../Auth/login.php");
}

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>SKIZA ARTISTES</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <!-- Bootstrap -->
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="../css/styles.css" rel="stylesheet">
     <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

    
</head>
<body>
<header>
    
        <div class="header">
          <div class="container">
          <div class="col-md-5">
            <!--logo-->
            <div class="logo">
               <a class="navbar-brand" href="#" style="color:white; font-size:2.5em;">LOGO</a>
            </div>
          </div><!--col-md-5-->

          <div class="col-md-3">
            <center><p style="color: white; font-size: 1.3em; margin-top: 4%;"> SUPER ADMIN </p></center> 
            
          </div><!--col-md-3-->

          <div class="col-md-2">
            <center><p style="color: white; font-size: 1.5em; margin-top:4%;"><?php echo $_SESSION['email'];  ?></p></center>
          </div><!--col-md--2-->

          <div class="col-md-2">
            <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                      <ul class="nav navbar-nav">
                      <div class="signout">
                        <a href="../Auth/logout.php"><input type="submit" class="btn btn-info" value="LogOut" style="margin-top:8%; "></a>
                      
                   
                      </ul><!--nav-->

                    </nav>
                </div>

           </div><!--col-md-2-->

          </div><!--container-->
        </div><!--header-->
      
</header>
<section>
  <div class="breadcrumb">
    <div class="col-md-12">
      <ul class="breadcrumb">
      <li>
  <button class="btn btn-danger" onclick="skiza()">Print this</button>
  </li>
  <li>
  <a href="export.php"><button class="btn btn-danger">EXPORT</button></a>
  </li>
  </ul>
</div><!--breadcrumb-->
  </div><!--col-md--12-->
</section>
<section>
        <div class="page-content">
            <div class="row">
              <div class="col-md-2">
                 <div class="list group" style="width:90%; padding:3%; font-size:1.7em; ">
                  <ul class="list-group" >
                    <li class="list-group-item"><a href="skiza.php" style="color:#000000;"> <i class="glyphicon glyphicon-home"></i>Dashboard</a></li>
                    <li class="list-group-item"><a href="upload/upload.php" style="color:#000000;"> <i class="glyphicon glyphicon-star-empty"></i>Events</a></li>
                    <li class="list-group-item"><a href="upload/upload.php" style="color:#000000;" > <i class="glyphicon glyphicon-cloud-download"></i>Generate quotes</a></li>
                    <li class="list-group-item"><a href="upload/views.php" style="color:#000000;"> <i class="glyphicon glyphicon-file"></i>Sales Reports</a></li>
                    <li class="list-group-item"><a href="views/views.php" style="color:#000000;"> <i class="glyphicon glyphicon-user"></i>&nbsp;Monitor Users</a></li>
                   <!-- <li class="list-group-item"><a href="upload/songviews.php" style="color:#000000;"> <i class="glyphicon glyphicon-music"></i>&nbsp;Song views</a></li>
                    <li class="list-group-item"><a href="upload/albumn.php" style="color:#000000;"> <i class="glyphicon glyphicon-th-list"></i>&nbsp; Albumn views</a></li>-->
                    <li class="list-group-item"><a href="upload/albumn.php" style="color:#000000;"> <i class="glyphicon glyphicon-question-sign"></i>&nbsp;Help</a></li>



                  </ul>
                  
                </div><!--listgroup-->
              </div><!--col-md-2-->
             
      <div class="col-md-10">
       <div clas="col-md-10">
<center><p style="font-size:2em;">LIST OF QUOTATIONS</p></center>
<div class="table-scrol">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout:fixed">
      <thead>
        <tr class="success">
         <th>ID</th>
         <th>Name</th>
         <th>Email </th>
         <th>Date of Quotations</th>
         <th>Delete of Admin</th>
         
            

      </thead>
      <?php
      //connect to db
      //connect to db
      include 'db/db_connection.php';

      //select query to view users
      $view_admin_query = " select * from users";
      //run the sql query

      $run = mysqli_query($con, $view_admin_query);

      //while fetches  the result and store in an array row

      while ($row = mysqli_fetch_array($run)) {
        
        $user_id = $row[0];
        $name = $row[1];
        $email = $row[2];
        $reg= $row[3];
        $reg= $row[4];
        $dell = $row[5];
       
      

       ?>
      
       <tr>
         <!-- show those results in the table -->
         <td><?php echo $user_id; ?></td>
         <td><?php echo $name; ?></td>
         <td><?php echo $email; ?></td>
         <td><?php echo $reg; ?></td> 
        <td><a href="deleteartiste.php?del=<?php echo $id ?>"><button class="btn btn-danger">Delete Report</button></a></td>
       </tr>
       <?php } ?>
    </table>
  </div>
</div>
</div><!--col-md-12 -->
            </div><!--row-->
        </div><!--page-content-->
        
    </section>
<section>






<section>
<script>
function skiza() {
    window.print();
}
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>

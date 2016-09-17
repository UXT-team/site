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
    <title>Skiza Dashboard</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" conutent="IE=edge">
    <!--for repsonsiveness-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  </head>
  <body>

      <header>
        <div class="header">
          <div class="container">
          <div class="col-md-5">
            <!--logo-->
            <div class="logo">
              <a class="navbar-brand">
                <a href="skiza.php">
                  <img src="images/logo.jpg">
                </a>
              </a>
            </div>
          </div><!--col-md-5-->

          <div class="col-md-3">
            <center><p style="color: white; font-size: 1.7em; margin-top: 4%;">ADMIN SKIZA PORTAL</p></center> 
            
          </div><!--col-md-3-->

          <div class="col-md-2">
            <center><p style="color: white; font-size: 1.5em; margin-top:4%;"><?php echo $_SESSION['email'];  ?></p></center>
          </div><!--col-md--2-->

          <div class="col-md-2">
            <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
                      <div class="signout">
                        <a href="Auth/logout.php"><input type="submit" class="btn btn-info" value="LogOut" style="margin-top:8%; "></a>
                      
                   
	                    </ul><!--nav-->

	                  </nav>
	              </div>

           </div><!--col-md-2-->

          </div><!--container-->
        </div><!--header-->
      </header>
      <section>
        <div class="page-content">
            <div class="row">
              <div class="col-md-2">
                <div class="list group" style="width:90%; padding:3%; font-size:1.7em; ">
                  <ul class="list-group" >
                    <li class="list-group-item"><a href="skiza.php" style="color:#000000;"> <i class="glyphicon glyphicon-home"></i>Dashboard</a></li>
                    <li class="list-group-item"><a href="upload/upload.php" style="color:#000000;"> <i class="glyphicon glyphicon-music"></i>Upload Songs</a></li>
                    <li class="list-group-item"><a href="upload/upload.php" style="color:#000000;" > <i class="glyphicon glyphicon-th-list"></i>Upload Albumn</a></li>
                    <li class="list-group-item"><a href="upload/views.php" style="color:#000000;"> <i class="glyphicon glyphicon-cloud-download"></i>Download Views</a></li>
                    <li class="list-group-item"><a href="views/views.php" style="color:#000000;"> <i class="glyphicon glyphicon-user"></i>&nbsp;Skiza Artistes</a></li>
                    <li class="list-group-item"><a href="upload/songviews.php" style="color:#000000;"> <i class="glyphicon glyphicon-music"></i>&nbsp;Song views</a></li>
                    <li class="list-group-item"><a href="upload/albumn.php" style="color:#000000;"> <i class="glyphicon glyphicon-th-list"></i>&nbsp; Albumn views</a></li>
                    <li class="list-group-item"><a href="upload/albumn.php" style="color:#000000;"> <i class="glyphicon glyphicon-question-sign"></i>&nbsp;Help</a></li>



                  </ul>
                  
                </div><!--listgroup-->
              </div><!--col-md-2-->
             <div class="jumbotron">
      <div class="col-md-10">
       <div class="row">
        <div class="col-md-3">
      
          <div class="card">
            <div class="card-image">
              <img src="images/download.png">
            </div><!--card-image-->
            <div class="card-content">
              <p>Upload Songs<br>Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu  </p>
            </div><!--card-content-->
         </div><!--content-box-small -->
       
        </div><!--col-md-4-->

        <div class="col-md-3">
          <div class="card">
            <div class="card-image">
              <img src="images/albumn.png">
            </div><!--card-image-->
          </div><!--card-->
          <div class="card-content">
            <p>Upload Albumn<br>Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu  </p>
          </div><!--card-content-->
        </div><!--col-md-4-->

        <div class="col-md-3">
          <div class="card">
            <img src="images/downloads.png">
          </div><!--card-->
          <div class="card-content">
            <p>Download Views<br>Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu  </p>
          </div><!--card-content-->
        </div><!--col-md-4-->

        <div class="col-md-3">
          <div class="card">
            <img src="images/users.png">
          </div><!--card-->
          <div class="card-content">
            <p>Skiza Artiste<br>Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu  </p>
          </div><!--card-content-->
        </div><!--col-md-4-->

        <div class="col-md-3">
          <div class="card">
            <img src="images/songview.png">
          </div><!--card-->
          <div class="card-content">
            <p>Song views<br>Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu  </p>
          </div><!--card-content-->
        </div><!--col-md-4-->

          <div class="col-md-4">
          <div class="card">
            <img src="images/albumnview.png">
          </div><!--card-->
          <div class="card-content">
            <p>Albumn View<br>Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu  </p>
          </div><!--card-content-->
        </div><!--col-md-4-->

        <div class="col-md-3">
          <div class="card">
            <img src="images/users.jpeg">
          </div><!--card-->
          <div class="card-content">
            <p>Skiza Artiste<br>Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu  </p>
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

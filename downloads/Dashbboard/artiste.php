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

          <div class="col-md-5">
            <center><p style="color: white; font-size: 1.7em;">ADMIN SKIZA PORTAL</p></center>
          </div><!--col-md-5-->

          <div class="col-md-2">
            <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html" style="white">Profile</a></li>
	                          <li><a href="login.html" style="white">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>

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
                <div class="list group" style="width:90%; padding:3%; font-size:1.9em;">
                  <ul class="list-group" >
                    <li class="list-group-item"><a href="skiza.php"> <i class="glyphicon glyphicon-home"></i>Dashboard</a></li>
                    <li class="list-group-item"><a href="songs.php"> <i class="glyphicon glyphicon-music"></i>Upload Songs</a></li>
                    <li class="list-group-item"><a href="albumn.php"> <i class="glyphicon glyphicon-th-list"></i>Upload Albumn</a></li>
                    <li class="list-group-item"><a href="views.php"> <i class="glyphicon glyphicon-play-circle"></i>Download Views</a></li>
                    <li class="list-group-item"><a href="users.php"> <i class="glyphicon glyphicon-user"></i>Skiza Artistes</a></li>
                    <li class="list-group-item"><a href="songviews.php"> <i class="glyphicon glyphicon-music"></i>Song views</a></li>
                    <li class="list-group-item"><a href="albumn.php"> <i class="glyphicon glyphicon-th-list"></i>Albumn views</a></li>



                  </ul>
                  
                </div><!--sidebar-->
              </div><!--col-md-2-->
            </div><!--row-->
        </div><!--page-content>
        <div class="jumbotron">

        </div><!--Jumbotron-->
    <div class="content-box-small">
    </div>
    </section>

  </body>
  </html>

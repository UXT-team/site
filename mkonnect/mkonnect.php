<html lang="en"><head>
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
<link rel="stylesheet" href="css/mkonnect.css">
<script src="js/bootstrap-popover-x.js" type="text/javascript"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<style type="text/css">
.jumbotron{
   height: auto;
  width: 100%;
  padding: 40px 0;
  overflow: hidden;

}
</style>


  </head>
  <body data-spy="scroll" data-target="#uxt" data-offset="70" class="">
<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav nav-justified">
          <li class="active"><a href="#">Home</a></li>
          <li class="active"><a href="#sales" data-toggle="modal" data-target="#sales">Register/Login</a></li>
          <li class="active"><a href="#section1"><strong>ShortCode</strong></a></li>
          <li class="active"><a href="#section4">About</a></li>
          <li class="active"><a href="#contacts">Contact</a></li>

      </ul></div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->


<div class="divider" id="section2"></div>

<section class="konnect">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h1 style="padding:20px;background-color:rgba(5,5,5,.8)">Find Jobs Here</h1></div>
</section>

<!-- Modal -->
<div class="modal fade" id="sales" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <center><h4 class="modal-title" id="myModalLabel">Register</h4></center>
  </div><!--header-->
  <div class="modal-body">

  <div class="row">
<div class="col-md-12 well" style="padding:10%;">
        <form role="form" class="form-horizontal" action="mkonnect.php" method="POST" name="contactform">
        <fieldset>

            <legend><center> <span class="glyphicon glyphicon-user"></span>Sales <span class="glyphicon glyphicon-user"></span></center> </legend>

              <div class="form-group">
                <div class="col-md-10">
                  <div class="panel">
                    <p>If you Already have an account, please Login</p>
                    <button class="btn btn-success btn-block" data-toggle="collapse" data-target="#login2" >Login</button> 
                    <div id="login2" class="collapse">
                      
                        <div id="login2">
                <div class="arrow"></div>

                <div class="popover-content">

                 <form class="form-vertical" data-toggle="validator" novalidate="true">
                        <div class="form-group has-error has-danger">
                        <input class="form-control" name="email" placeholder="Your Email" type="email" autofocus="" required="">
                            
                        </div>

                       <input class="form-control" name="password" placeholder="Your Password" type="password" value="" required="">
                    
                    </form>
                </div>
                <div class="popover-footer">
                   <center> <button type="submit" class="btn btn-lg btn-success btn-lg">Login</button></center>
                </div>
            </div><!--mypopoverid-->

                    </div><!--login-->
                  </div><!--panel-->
                </div><!--col-md-10-->
              </div><!--form-group-->
                <form data-toggle="validator" novalidate="true" >
                
                                <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label">Enter Email</label>
                </div><!--col-md-12-->
              </div><!--form-group-->

                <div class="form-group">
                    
                    <div class="col-md-10">
                        
                        <input class="form-control" name="email" placeholder="Your Email" type="email" autofocus required />
                        <div class="help-block with-errors"></div>
                    </div><!--col-md-12-->
                </div><!--form-group-->

               

                <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label">Enter Password</label>
                </div><!--col-md-12-->
              </div><!--form-group-->

                 <div class="form-group">
                    
                    <div class="col-md-10">
                        
                        <input class="form-control" name="password" placeholder="Your Password" type="password" data-minlength="6" id="inputPassword" value="" required />
                        <div class="help-block">Minimum of 6 characters</div>                        
                    </div><!--col-md-12-->
                </div><!--form-group-->


                <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="marketing" style="font-size:1.25em;" >

                </form>

                
            
                </div><!--col-md--12-->
            
            <div class="form-group">
                <div class="col-md-12">

                  <p class="text-danger"><a href="mkonnect/resetpassword.php">Forgotten Password</a></p>

                </div><!--col-md--12-->
            </div><!--form-group-->



        </fieldset>
        </form>
    </div><!--col-md--12-->

</div><!--row-->        <p>Already have an account?Login Below</p>
    <center>
                  <!-- PopoverX content -->
            
</center>



  </div><!--col-md-6-->

    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

  </div><!--modal-footer-->
  </div><!--row-->
</div><!--body-->
</div><!--content-->

  <div class="row">
  <div class="container">
  <div class="jumbotron" style="margin-top: 5%;">
  <div class="thumnail">
    <div class="caption">
    <h3><center>Apply Below Job as Per Category</center></h3>
    </div>
  </div><!--thumbnail-->

  <?php
  $con = mysqli_connect("localhost", "root", "", "m_konnect");
  $db = "job_category";

  $select_db=mysqli_select_db($con,$db);

  $query = "select * from job_category";
  $query1 = mysqli_query($con,$query);
  // $row = mysqli_fetch_all($query1);
  // var_dump($row);
  // $row1 = array();
  // $counter=0;
  // $size=sizeof($row);
  // echo "<br>";
  // for ($x = 0; $x <= $size; $x++) {
  //   var_dump($row[$x]);
  // }

  // foreach ($row as $row1) {
  //   foreach ($row1 as $row2) {
  //     echo $row2;
  //   }
  // }
  $first=array();
  $second=array();
  $third=array();
    $counter=1;
    $count1=0;
    $count2=0;
    $count3=0;
  while ($row = mysqli_fetch_assoc($query1)) {
          if ($counter==1) {
          $first[$count1]=$row;
              $count1++;
               }
          if ($counter==2) {
  $second[$count2] =$row; $count2++;       }
  if ($counter==3) {
  $third[$count3] =$row; $count3++;
  $counter=0;     }
  $counter++;
      }
  // var_dump($first);
  // echo "<br>";
  // var_dump($second);
  // echo "<br>";
  // var_dump($third);
  // echo "<br>";
  // echo "<br>";
  // echo "<br>";
  // echo sizeof($first);
  // echo sizeof($second);
  // echo sizeof($third);

  $i=0;
  while($i<sizeof($second)){?>

<div class="row">
  <div class="col-md-4">
  <div id="jobs"></div><!--jobs-->
  <div class="panel" style="margin:10%; padding: 10%;">

<p id="<?php $category=$first[$i];
echo $category["id"];?>" class="text-warning"> <?php $category=array();
 $category=$first[$i];
 echo $category["category"]; ?></p>
<button class="btn btn-warning btn-lg" style="padding:10%; margin:2%;" data-toggle="modal" data-target="#sales">Apply</button>
</div><!--dialog-->
</div><!--modal-->


<div class="col-md-4">
  <div class="panel" style="padding:10%; margin:10%;">
  <h3 id="<?php $category=$second[$i];
  echo $category["id"];?>" class="text-warning"><?php $category=array();
   $category=$second[$i];
   echo $category["category"]; ?></h3>


<button class="btn btn-warning btn-lg" style="padding:10%; margin:2%;" data-toggle="modal" data-target="#sales">Apply</button>
</div><!--dialog-->
</div><!--modal-->

<div class="col-md-4">
  <div class="panel" style="padding:10%; margin:10%;">

  <h3 id="<?php $category=$third[$i];
  echo $category["id"];?>" class="text-warning"><?php $category=array();
   $category=$third[$i];
   echo $category["category"]; ?></h3>


<button class="btn btn-warning btn-lg" style="padding:10%; margin:2%;" data-toggle="modal" data-target="#sales">Apply</button>
</div><!--dialog-->
</div><!--modal-->
</div><!--row-->
<?php $i++; } ?>


    </div><!--jumbotron-->
     </div><!--container-->
    </div><!--row-->


<div id="contacts">
<div class="container">
    <div class="col-sm-8 col-sm-offset-2 text-center">
    <h2><em>CONTACT US</em></h2>

      <ul class="list-inline center-block">
        <li><a href="#"><img src="img/icons/soc_fb.png"></a></li>
        <li><a href="#"><img src="img/icons/soc_tw.png"></a></li>
        <li><a href="#"><img src="img/icons/soc_gplus.png"></a></li>
        <li><a href="#"><img src="img/icons/soc_pin.png"></a></li>
      </ul>

    </div><!--/col-->
</div><!--/container-->
</div><!--contacts-->

  <div id="footer">
  <div class="container">
    <h4 style="color:#fff;"><center>Copyright ©2016 Mkonnect.</center></h4>
  </div>
</div>

<ul class="nav pull-right scroll-top pull-right">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>

<!--/col-->
<!--/container-->

<!--/wrap-->

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>











<script type="text/javascript">
  /* affix the navbar after scroll below header */
$('#nav').affix({
      offset: {
        top: $('header').height()-$('#nav').height()
      }
});

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})

/* smooth scrolling for nav sections */
$('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top+20;
  $('body,html').animate({scrollTop:posi},700);
})

/* google maps */

// enable the visual refresh
google.maps.visualRefresh = true;

var map;
function initialize() {
  var mapOptions = {
    zoom: 15,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
    // try HTML5 geolocation
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: 'Location found using HTML5.'
      });

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // browser doesn't support geolocation
    handleNoGeolocation(false);
  }
}

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}
google.maps.event.addDomListener(window, 'load', initialize);

</script>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>


<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


</body></html>

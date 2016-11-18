<?php session_start();//session starts here ?>


<!DOCTYPE html>
<html>
<head>
 <title>Upload CV</title>
  <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
   <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
 <link href="css/styles.css" rel="stylesheet">
 <link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <script src="js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>

 <script src="js/plugins/sortable.min.js" type="text/javascript"></script>
   <script src="js/plugins/purify.min.js" type="text/javascript"></script>

 <script src="js/fileinput.min.js"></script>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>

 <script src="themes/fa/theme.js"></script>
 <!-- optionally if you need translation for your language then include
     locale file as mentioned below -->
  <script src="js/locales/<lang>.js"></script>
<script src="js/fa.js"></script>

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

<div class="well-md">
<?php //$user_id = $_SESSION['id'];

    // $email=$_SESSION['id'];
    // echo $email;
    // if(!$_SESSION){
    //   header("location: mkonnect/login.php");
    // }
      $valid_formats = array("jpg", "png", "gif", "doc","docx");
$max_file_size = 1024*1000; //100 kb
$path = "uploads/"; // Upload directory
$count = 0;

$db_name = "mkonnect";
$conn=mysqli_connect('localhost','root',"");
error_reporting(0);
mysqli_select_db($conn, $db_name) or die("cannot connect to the  DB");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
 // Loop $_FILES to execute all files
 foreach ($_FILES['files']['name'] as $f => $name) {
     if ($_FILES['files']['error'][$f] == 4) {
         continue; // Skip file if any error found
     }
     if ($_FILES['files']['error'][$f] == 0) {
         if ($_FILES['files']['size'][$f] > $max_file_size) {
             $message[] = "$name is too large!.";
             continue; // Skip large files
         }
     elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
       $message[] = "$name is not a valid format";
     // echo "<script>$('#thankyouModal').modal('show')</script>";
       continue; // Skip invalid file formats
     }
         else{ // No error found! Move uploaded files
             if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name)) {

               $query ="insert into files(name,path,user_id) values('$name','$path.$name','$user_id')";
               $ros = mysqli_query($conn,$query);
               if($ros!=true)
               {
                 $message[]= "Error inserting data to the database";
                 continue;
               }
               $count++; // Number of successfully uploaded files
             }
         }
     }
 }
}


?>


 <a href="logout.php"><button type="submit" class="btn btn-danger"><h6 style="color:#ffffff;">Logout</h6></a>
</div><!--well-->

<div class="jumbotron">
<div class="col-md-8">
<div class="panel" style="padding: 10%;">
 <div class="container">

                       <!-- Multiple file upload html form-->

       <form action="" method="post" enctype="multipart/form-data">
     <label class="control-label">Select File</label>
           <input id="input-6" type="file" name="files[]" multiple="multiple"><br>
          <center> <input type="submit" class="btn btn-warning btn-lg" value="Upload CV"> </center>
       </form>

           <?php
   # error messages
   if (isset($message)) {
     foreach ($message as $msg) {
       printf("<p class='text-danger'>%s</p></ br>\n", $msg);
     }
   }
   # success message
   if($count !=0){
     printf("<p class='text-success'>%d files added and database updated successfully !</p>\n", $count);
   }
   ?>
   <script>
   $(document).on('ready', function() {
       $("#input-6").fileinput({
           showUpload: false,
           maxFileCount: 1,
           mainClass: "input-group-sm"
       });
   });

 </script>


 </div><!--container-->
</div><!--panel-->
</div><!--col-md-10-->
</div><!--jumbotron-->

<div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
<<<<<<< HEAD
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Wrong file type. </h4>
            </div>


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

=======
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title" id="myModalLabel"> Wrong file type. </h4>
           </div>
>>>>>>> 590ecd971dded63dea5035cac66498183a194361
</body>
</html>

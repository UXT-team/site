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
<body>
<div class="well-md">
<?php $user_id = $_SESSION['id'];
    // if(!$_SESSION){
    //   header("location: mkonnect/login.php");
    // }

      $valid_formats = array("jpg", "png", "gif", "zip", "doc","docx");
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Wrong file type. </h4>
            </div>
</body>
</html>


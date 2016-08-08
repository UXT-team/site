<!DOCTYPE html>
<html>
<head>
  <title>views</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <!-- Bootstrap -->
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>

  <div class="jumbotron">
  <div class="col-md-12">
    <ul class="breadcrumb">
 <li> <center><button class="btn btn-danger" onclick="jimuduafya()">Print this</button></center> </li>
 <li> <center><a href="export.php"><button class="btn btn-danger">EXPORT</button></a></center> </li>
  </ul>
  </div><!--col-md-12-->
</div><!--jumbotron-->
<div class="well">
  
<div clas="col-md-12">
<div class="table-scrol">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout:fixed">
      <thead>
        <tr class="success">
         <th class="danger">Phone number</th>
          <th class="warning">Text Message</th>
         
          
      </thead>
      <?php
      //connect to db
      //connect to db
      include 'database/db_connection.php';

      //select query to view users
      $view_admin_query = " select * from incoming_sms";
      //run the sql query

      $run = mysqli_query($con, $view_admin_query);

      //while fetches  the result and store in an array row

      while ($row = mysqli_fetch_array($run)) {
        
        $phonenumber = $row[0];
       
        $textmessage = $row[3];
       
      

       ?>
      
       <tr>
         <!-- show those results in the table -->
         <td class="active"><?php echo $phonenumber; ?></td>
         
         <td class="active"><?php echo $textmessage; ?></td>
         
        <!--<td><a href="deleteadmin.php?del=<#?php echo $admin_id ?>"><button class="btn btn-warning">Delete Admin</button></a></td>-->
       </tr>
       <?php } ?>
    </table>
  </div>
</div>
</div><!--col-md-12 -->

</div><!--well -->
<script>
function jimuduafya() {
    window.print();
}
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>

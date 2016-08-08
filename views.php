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
<div class="well">
<div clas="col-md-12">
<div class="table-scrol">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout:fixed">
      <thead>
        <tr class="success">
         <th>Phone number</th>
         <th>Process </th>
         <th>In Date</th>
         <th>Text Message</th>
         <th>Service Id</th>
         <th>Processed 1</th>
         <th>Sender name</th>
         <th>Link id</th>
         <th>Product id</th>
         <th>Client </th>
         <th>Service Type</th>
         <th>Send Time</th>
         <th>Times tamp</th>
         <th>Sent flag</th>
         <th>User ID</th>
         <th>Coprec </th>
         <th>Correlator 1</th>
         <th>Sync </th>
         <th>ID </th>
           <!-- <th>processed</th>
            <th>In date</th>
            <th>Text Message</th>
            <th>Serviceid</th>
            <th>Processed 1</th>
            <th>sender name</th>
            <th>Link id</th></tr>
            <th>product id</th></tr>
            <th>Client</th></tr>
            <th>Service type</th></tr>
            <th>Send time</th></tr>
            <th>Times tamp</th></tr>
            <th>sent flag</th></tr>
            <th>user id</th></tr>
            <th>Coproc</th></tr>
            <th>Correlator</th></tr>
            <th>Sync</th></tr>
            <th>Id</th></tr> -->
            

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
        $processed = $row[1];
        $indate = $row[2];
        $textmesage = $row[3];
        $Service_id= $row[4];
        $Processed1= $row[5];
        $sender_name = $row[6];
        $Link_id = $row[7];
        $product_id = $row[8];
        $Client = $row[9];
        $Service_type = $row[10];
        $send_time= $row[11];
        $Timestamp = $row[12];
        $sent_flag = $row[13];
        $user_id = $row[14];
        $Coproc = $row[15];
        $Correlator = $row[16];
        $Sync= $row[17];
        $Id = $row[18];
       
      

       ?>
      
       <tr>
         <!-- show those results in the table -->
         <td><?php echo $phonenumber; ?></td>
         <td><?php echo $processed; ?></td>
         <td><?php echo $indate; ?></td>
         <td><?php echo $textmesage; ?></td>
         <td><?php echo $Service_id; ?></td>
         <td><?php echo $Processed1; ?></td>
         <td><?php echo $sender_name; ?></td>
         <td><?php echo $Link_id; ?></td>
         <td><?php echo $product_id; ?></td>
         <td><?php echo $Client; ?></td>
         <td><?php echo $Service_type; ?></td>
         <td><?php echo $send_time; ?></td>
         <td><?php echo $Timestamp; ?></td>
         <td><?php echo $sent_flag; ?></td>
         <td><?php echo $user_id; ?></td>
         <td><?php echo $Coproc; ?></td>
         <td><?php echo $Correlator; ?></td>
         <td><?php echo $Sync; ?></td>
         <td><?php echo $Id; ?></td>
        <!--<td><a href="deleteadmin.php?del=<#?php echo $admin_id ?>"><button class="btn btn-warning">Delete Admin</button></a></td>-->
       </tr>
       <?php } ?>
    </table>
  </div>
</div>
</div><!--col-md-12 -->
<div class="col-md-12">
  <center><button class="btn btn-danger" onclick="jimuduafya()">Print this</button></center>
  <center><a href="export.php"><button class="btn btn-danger">EXPORT</button></a></center>
</div>
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

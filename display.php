<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Untitled document</title>
</head>

<body>
  <?php
  $db_name = "test";
  $conn = mysqli_connect('localhost','root',"");
  mysqli_select_db($conn,$db_name) or die("Database connection failed");
  $query = "select * from demo";
  $query1 = mysqli_query($conn,$query);

  while ($ros = mysqli_fetch_array($query1))
  {
    $path = $ros['path'];
    $id = $ros['id'];
    echo '<img src="'.$path.'" width="200px" height="200px" />';
    echo '<a href="download.php?id='.$id.' id="'.$id.'"> download</a>';

  }
  ?>
</body>
</html>

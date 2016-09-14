<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <titl>Untitled document</title>
</head>

<body>
  <form name="form1" method="post" action="" enctype="multipart/form-data"/>
  upload file<input type="file" name="f"/></br>
  name:<input type="text" name="t"/>
</br>
<input type="submit" name="submit1" value="submit"/>
</form>
</body>

<?php
$filename=$_POST['t'];
$db_name = "test";
$conn=mysqli_connect('localhost','root',"");
mysqli_select_db($conn, $db_name) or die("cannot connect to the  DB");
if(isset($_POST["submit1"]))
{
  $fnm = $_FILES["f"]["name"];
  $dst ="./images/".$fnm;
  move_uploaded_file($_FILES["f"]["tmp_name"],$dst);
  $query ="insert into demo(filename,name,path) values('$filename','$fnm','$dst')";
  $ros = mysqli_query($conn,$query);
  if($ros==true)
  {
    echo "insert data successful";
    echo serialize($_FILES);
  } else {
    echo "Error inserting data";

  }
}
 ?>

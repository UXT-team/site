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
    $category=array();
     $category=$first["2"];
     echo $category["category"];
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
 ?>

<?php
$fp = @fopen("jobs.txt", 'r');

// Add each line to an array
$content = fread($fp, filesize("jobs.txt"));
   $jobs = explode("\n", $content);
  $con = mysqli_connect("localhost", "root", "")or die("cannot connect to the  DB");
  mysqli_select_db($con, "m_konnect") or die("cannot select the  DB");
  // foreach ($jobs as $job) {
  //   echo "$job"."=>";
  //   $job1=$job;
  //   $i=1;
    // $query ="insert into job_category(id,category) values('$i','$job1')";
    // $ros = mysqli_query($con,$query);
  //   $i++;
  //     }


      $arrlength = count($jobs);

for($x = 0; $x < $arrlength; $x++) {
    echo $jobs[$x];
    echo "<br>";
    $query ="insert into job_category(id,category) values('$x','$jobs[$x]')";
    $ros = mysqli_query($con,$query);
}

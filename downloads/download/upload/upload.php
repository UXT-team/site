<?php

if(isset($_POST['upload']))
{
     $pic = rand(1000,100000)."-".$_FILES['input4[]']['name'];
    $pic_loc = $_FILES['input4[]']['tmp_name'];
     $folder="uploaded_files/";
     if(move_uploaded_file($pic_loc,$folder.$pic))
     {
        "<script>alert('successfully uploaded');</script>";
     }
     else
     {
        "<script>alert('error while uploading file');</script>";
     }
}


 
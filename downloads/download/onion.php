<?php   
/*if (isset($_GET['file'])) { 
    $file = $_GET['file'] ;
        if (file_exists($file) && is_readable($file) && preg_match('/\.mp3$/',$file))  { 
            header('Content-type: application/mp3');  
            header("Content-Disposition: attachment; filename=\"$file\"");   
            readfile($file); 
        } 
    } else { 
    header("HTTP/1.0 404 Not Found"); 
    echo "<h1>Error 404: File Not Found: <br /><em>$file</em></h1>"; 
} */

/* 
PHP forced download script
*/

/*function download($file){
	//path to files
	$dir = "downloads/";
	$path = $dir.$file;

	//check to see if the file exist

	if (!file_exists($path)) {
		# code...
		//the file does nt exist
		die("Error: The file does not exists");
	}
	else{

		//the file exists
		//set the headers
		header("Cache-Control: public");
		header("Content-Disposition: File Transfer");
		header("Content-Disposition: attachment; filename=$path");

		// upload use a tutorial for it
		header("Content-Type: application/mp3");
		header("Content-Transfer-Encoding: binary");

		//starting the download
		readfile($path);

	}

}
//test the script
if (isset($_GET['download'])) {
	# code...
	if (!empty($_GET['download'])) {
		
		$file = $_GET['download'];
		download($file);
	}
}
*/
$file='SPOKEN WORD - BEAUTIFULE.mp3';
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Content-Type: audio/mp3');
echo "<script>alert('Ule msee')</script>";
#echo '<script type="text/javascript">alert("' '")</script>';
readfile('../artiste/SPOKEN WORD - BEAUTIFULE.mp3');



?>


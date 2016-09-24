<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
     This must be loaded before fileinput.min.js -->
<script src="js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
     This must be loaded before fileinput.min.js -->
<script src="js/plugins/sortable.min.js" type="text/javascript"></script>
<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for HTML files.
     This must be loaded before fileinput.min.js -->
<script src="js/plugins/purify.min.js" type="text/javascript"></script>
<!-- the main fileinput plugin file -->
<script src="js/fileinput.min.js"></script>
<!-- bootstrap.js below is needed if you wish to zoom and view file content 
     in a larger detailed modal dialog -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
<!-- optionally if you need a theme like font awesome theme you can include 
    it as mentioned below -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<script src="js/fa.js"></script>
<!-- optionally if you need translation for your language then include 
    locale file as mentioned below -->
<script src="js/<lang>.js"></script>

    <!-- Bootstrap -->
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <style type="text/css">
     	
     </style>
</head>
<body>
    <div class="jumbotron">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label class="control-label">Select File</label>
<input id="input-4" name="input4[]" type="file" multiple class="file-loading">
<button class="btn btn-danger" name="upload"><a href="upload.php">Upload</a></button>
<script>
$(document).on('ready', function() {
    $("#input-4").fileinput({showCaption: false});
});
</script>
</form>
    </div>
</div>
</body>
</html>
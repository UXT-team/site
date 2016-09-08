<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <style type="text/css">
     	
     </style>
</head>
<body>
<div class="panel panel-default">
	<div class="well">
		<label class="control-label">Readonly Input</label>
<input id="input-3a" type="file" class="file" readonly="true">
<label class="control-label">Disabled Input</label>
<input id="input-3b" type="file" class="file" disabled="true">
	</div>
    <div class="panel">
        <label class="control-label">Select File</label>
<input id="input-6" name="input6[]" type="file" multiple class="file-loading">
<script>
$(document).on('ready', function() {
    $("#input-6").fileinput({
        showUpload: false,
        maxFileCount: 10,
        mainClass: "input-group-lg"
    });
});
</script>
    </div>
</div>
</body>
</html>
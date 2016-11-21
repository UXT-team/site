<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/bootbox.min.js"></script>
</head>
<body>

<script>
	bootbox.alert({ 
  size: "small",
  title: "",
  message: "Registration Successful…", 
  callback: function(){ /* your callback code */
  	console.log('Click Ok to Update your profile!');
   }
})
</script>
</body>
</html>
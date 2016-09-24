<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-popover-x.css" media="all" rel="stylesheet" type="text/css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="js/bootstrap-popover-x.js" type="text/javascript"></script>
   <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
   <!--<script src="http://getbootstrap.com/dist/js/bootstrap.js"></script>-->
<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
</head>
<body>

                <!-- Button trigger popover-x -->
<center><button class="btn btn-success btn-lg" data-toggle="popover-x" data-target="#myPopover1b" data-placement="top">Login</button></center>
 
<!-- PopoverX content -->
<form class="form-vertical">
    <div id="myPopover1b" class="popover popover-success">
        <div class="arrow"></div>
        <div class="popover-title"><span class="close" data-dismiss="popover-x">&times;</span><center><span class="glyphicon glyphicon-user"></span>Enter credentials<span class="glyphicon glyphicon-user"></span></center></div>
        <div class="popover-content">
            
            <div class="form-group">
                <div class="col-md-12">
        <input type="email" class="form-control" placeholder="email" required />
        <div class="help-block with-errors"></div><!--help-block-->
        	</div><!--col-md--6-->
            </div><!--form-group-->
            
            <div class="form-group">
                <div class="col-md-12">
            <input class="form-control" name="password" placeholder="Your Password" type="password" data-minlength="6" id="inputPassword" value="" required />
              <div class="help-block">Minimum of 6 characters</div>
            </div><!--col-md-6-->
            </div><!--form-group-->
        </div>
        <div class="popover-footer">
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            <button type="reset" class="btn btn-sm btn-default">Reset</button>
        </div>
    </div>
</form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Profile</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/mkonnect.css">
<script src="js/bootstrap-popover-x.js" type="text/javascript"></script>
   <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<style type="text/css">
.jumbotron{
   height: auto;
  width: 100%;
  padding: 40px 0;
  overflow: hidden;

}
</style>


  </head>
  <body data-spy="scroll" data-target="#uxt" data-offset="70">
<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav nav-justified">
          <li class="active"><a href="#">Home</a></li>
          <li class="active"><a href="#">Interviewskills</a></li>
          <li class="active"><a href="#">C.V.skills</a></li>
          <li class="active"><a href="#section1"><strong>ShortCode</strong></a></li>
          <li class="active"><a href="#section4">About</a></li>
          <li class="active"><a href="#contacts">Contact</a></li>
          <li class="active"><a href="#contacts">LogOut</a></li>
          
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->

<hr>
<div class="container">
  <div class="row">
      <div class="col-sm-10"><h1>jameskae69@gmail.com[use the session email]</h1></div>
      <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="img/logo.PNG"></a></div>
    </div>
    <div class="row">
      <div class="col-sm-3"><!--left col-->
  

          <ul class="list-group">
      <li class="list-group-item" style="font-size:1.5em; color:black;"><a href="profile.php"><center><span class="glyphicon glyphicon-user"></span> <strong> Profile </strong></center></a></li>
      <li class="list-group-item" style="font-size:1.5em; color:black;"><a href="jobs.php"> <center><i class="fa fa-external-link" aria-hidden="true"></i> <strong> Edit Profile </strong> </center></a></li>
      <li class="list-group-item" style="font-size:1.5em; color:black;"><a href="uploadcv.php"> <center> <i class="fa fa-cloud-upload" aria-hidden="true"></i><strong>Upload C.V. </strong></center></a></li>
      <li class="list-group-item" style="font-size:1.5em; color:black;"><a href="#"> <center> <i class="fa fa-question-circle-o" aria-hidden="true"></i><strong>Help </strong></center></a></li>
      
    </ul>
              
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
              <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
      <div class="col-sm-9">
          
          <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
            <li><a href="#messages" data-toggle="tab">Messages</a></li>
            <li><a href="#shortcode" data-toggle="tab">ShortCode Service</a></li>
            <li><a href="#settings" data-toggle="tab">Settings</a></li>
          </ul>
              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
              <div class="table-responsive">
                
                <hr>
                <div class="row">
                  <div class="col-md-4 col-md-offset-4 text-center">
                    <ul class="pagination" id="myPager"></ul>
                  </div>
                </div>
              </div><!--/table-resp-->
              
              <hr>
              <div class="row">
                <div class="col-sm-4">
             <div class="well">

              <div class="experience">
                 <button class="work-experience btn-warning btn-lg">Add Work Experience</button>
                <div class="inputs" style="margin-top:4%; margin-bottom:4%;"><input type="text" name="job-experience"></div><!--inputs-->

            </div><!--addskill-->
            
            <button class="btn btn-primary ">submit</button>

             </div><!--well-->
             </div><!--col-sm-4-->

             <div class="col-md-4">
               <div class="well">
                 
                  <div class="addcategory">
                 <button class="categories btn-warning btn-lg">Add JobCategory</button>
                <div class="inputs" style="margin-top:4%; margin-bottom:4%;"><input type="text" name="category"></div><!--inputs-->

            </div><!--addskill-->
            <button class="btn btn-primary"> Submit</button>

               </div><!--well-->
             </div><!--col-md-4-->

              <div class="col-md-4">
               <div class="well">
                    <div class="adds">
    <button class="qualifications btn-warning btn-lg">Add Qualifications</button>
    <div class="inputs" style="margin-top:4%; margin-bottom:4%;"><input type="text" name="qualification"></div><!--inputs-->

            </div><!--adds-->
            <button class="btn btn-primary">Submit</button>

               </div><!--well-->
             </div><!--col-md-4-->

             <div class="col-md-4">
               <div class="well">
               
                 <div class="addskills">
                 <button class="skills btn-warning btn-lg">Add Skills</button>
                <div class="inputs" style="margin-top:4%; margin-bottom:4%;"><input type="text" name="skill"></div><!--inputs-->

            </div><!--addskill-->
            <button class="btn btn-primary"> Submit</button>

              
               </div><!--well-->
             </div><!--col-md-4-->

             <div class="col-md-4">
               <div class="well">

                  <div class="addcourse">
    <button class="courses btn-warning btn-lg">Add Courses</button>
    <div class="inputs" style="margin-top:4%; margin-bottom:4%;"><input type="text" name="course"></div><!--inputs-->

            </div><!--adds-->
            <button class="btn btn-primary"> Submit</button>
             

               </div><!--well-->
             </div><!--col-md-4-->

             </div><!--row-->
              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <ul class="list-group">
                  <li class="list-group-item text-muted">Inbox</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">message or Notifications they will be received via phone thru text or via this job portal</a> 2.13.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">message or Notifications they will be received via phone thru text or via this job portal</a> 2.11.2014</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">message or Notifications they will be received via phone thru text or via this job portal</a> 2.11.2014</li>
                 
                </ul> 
               
             </div><!--/tab-pane-->

             <div class="tab-pane" id="shortcode">
                <h3 style="margin-bottom:2%;">SMS Your Job Category to 22274 as shown below <i class="fa fa-level-down" aria-hidden="true"></i> </h3>
                <ul class="list-group">
                  <li class="list-group-item text-muted">Short</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">'SMS' Accounting  to</a> 22274</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">'SMS' Marketing  to</a> 22274</li>
                  <li class="list-group-item text-right"><a href="#" class="pull-left">'SMS' ICT  to</a> 22274</li>
                 
                </ul> 

             </div><!--shortcode-->


             <div class="tab-pane" id="settings">
                
                
                  <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>PhoneNumber</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Confirm PhoneNumber</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Confirm Number number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
                </form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->


<div class="divider" id="section2"></div>
  
<section class="konnect">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h1 style="padding:20px;background-color:rgba(5,5,5,.8)">Tell a Friend To find Jobs here</h1></div>
</section>



  


<div id="contacts">
<div class="container">
    <div class="col-sm-8 col-sm-offset-2 text-center">
    <h2><em>CONTACT US</em></h2>

      <ul class="list-inline center-block">
        <li><a href="#"><img src="img/icons/soc_fb.png"></a></li>
        <li><a href="#"><img src="img/icons/soc_tw.png"></a></li>
        <li><a href="#"><img src="img/icons/soc_gplus.png"></a></li>
        <li><a href="#"><img src="img/icons/soc_pin.png"></a></li>
      </ul>
      
    </div><!--/col-->
</div><!--/container-->
</div><!--contacts-->

  <div id="footer">
  <div class="container">
    <h4 style="color:#fff;"><center>Copyright ©2016 Mkonnect.</center></h4>
  </div>
</div>

<ul class="nav pull-right scroll-top pull-right" >
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>
  
</div><!--/col-->
</div><!--/container-->
  
</div><!--/wrap-->

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>











<script type="text/javascript">
  /* affix the navbar after scroll below header */
$('#nav').affix({
      offset: {
        top: $('header').height()-$('#nav').height()
      }
}); 

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})

/* smooth scrolling for nav sections */
$('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top+20;
  $('body,html').animate({scrollTop:posi},700);
})

/* google maps */

// enable the visual refresh
google.maps.visualRefresh = true;

var map;
function initialize() {
  var mapOptions = {
    zoom: 15,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
    // try HTML5 geolocation
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: 'Location found using HTML5.'
      });

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // browser doesn't support geolocation
    handleNoGeolocation(false);
  }
}

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}
google.maps.event.addDomListener(window, 'load', initialize);

</script>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>


<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
          $(document).ready(function(){
    var next = 1;
    $(".add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    

    
});

        </script>

<!--qualifications-->

        <script>
  $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".adds"); //Fields wrapper
    var add_button      = $(".qualifications"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" name="qualification"/><a href="#" class="remove_field text-danger">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>


<!--courses-->

<script>
  
  $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".addcourse"); //Fields wrapper
    var add_button      = $(".courses"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" name="course"/><a href="#" class="remove_field text-danger">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});


</script>

<!--skill-->

<script>
  
  $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".addskills"); //Fields wrapper
    var add_button      = $(".skills"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" name="skill"/><a href="#" class="remove_field text-danger">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});


</script>

<!--JobCategory-->

<script>
  $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".addcategory"); //Fields wrapper
    var add_button      = $(".categories"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" name="category"/><a href="#" class="remove_field text-danger">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>


<!--work experience-->

<script>
  $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".experience"); //Fields wrapper
    var add_button      = $(".work-experience"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" name="job-experience"/><a href="#" class="remove_field text-danger">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>





  </body>
</html>

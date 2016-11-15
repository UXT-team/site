<!DOCTYPE html>
<html>
<head>
	<title>UPDATE PROFILE</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

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

<!-- optionally if you need a theme like font awesome theme you can include 
    it as mentioned below -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<script src="js/fa.js"></script>
<!-- optionally if you need translation for your language then include 
    locale file as mentioned below -->
<script src="js/<lang>.js"></script>

    <!-- Bootstrap -->
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     
     <style type="text/css">

     	
     </style>
</head>
<body>
<div class="row">
<div class="container">
    <div class="jumbotron">
        <div class="panel">
            <button style="float: right;" class="btn btn-danger btn-lg">Logout</button>
            <h3 class="text-danger"><center>Please Update Your Profile the Click Next to Upload your C.V.</center></h3>
            <div class="thumbnail" style=" margin:2%; ">
                <div class="caption">
                    
                </div><!--caption-->
                
         
                
                <fieldset>
                    
                    <form role="form" class="form-horizontal" action="mkonnect.php" method="POST" name="contactform" data-toggle="validator" style="padding: 5%;">
       
    
                <legend><center> <span class="glyphicon glyphicon-user"></span>Put Email Session varaible here to be seen by user here <span class="glyphicon glyphicon-user"></span></center> </legend>

                 <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label">Enter FullName</label>
                </div><!--col-md-12-->
              </div><!--form-group-->

                <div class="form-group">
                    
                    <div class="col-md-10">
                       
                        <input class="form-control" name="txt_name" placeholder="Your Full Name" type="text" id="inputName" required  />
                        <div class="help-block with-errors"></div>
                       
                    </div><!--col-md--12-->
                </div><!--form-group-->

                 
                 <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label">Enter Phone Number</label>
                </div><!--col-md-12-->
              </div><!--form-group-->

             
              <div class="form-group">
                    
                    <div class="col-md-10">
                       
                        <input class="form-control" name="txt_education" placeholder="072...." type="text" id="inputName" required  />
                        <div class="help-block with-errors"></div>
                       
                    </div><!--col-md-12-->
                </div><!--form-group-->

                <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label">Select Education Level</label>
                </div><!--col-md-12-->
              </div><!--form-group-->

              <div class="form-group">
                    
                    <div class="col-md-10">
                       
                         <select class="form-control" name="txt_nationality"  required>
                    
                              <option>Degree</option>
                              <option>Diploma</option>
                              <option>Certificate</option>
                              <option>KCSE</option>
                              
                              </select>
                        <div class="help-block with-errors"></div>
                       
                    </div><!--col-md-12-->
                </div><!--form-group-->

               <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label">Nationality</label>
                </div><!--col-md-12-->
              </div><!--form-group-->

              <div class="form-group">
                    
                    <div class="col-md-10">
                       
                        <select class="form-control" name="txt_nationality"  required>
                    
                              <option>Kenyan</option>
                              <option>Ugandan</option>
                              <option>East African</option>
                              
                              </select>
                        <div class="help-block with-errors"></div>
                       
                    </div><!--col-md--12-->
                </div><!--form-group-->

                <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label">Years Of Experience</label>
                </div><!--col-md-12-->
              </div><!--form-group-->

                <div class="form-group">
                    
                    <div class="col-md-10">
                       
                        <input class="form-control" name="txt_years" placeholder="Years of experience" type="text" id="inputName" required  />
                        <div class="help-block with-errors"></div>
                       
                    </div><!--col-md--12-->
                </div><!--form-group-->

                <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label">Courses</label>
                </div><!--col-md-12-->
                </div><!--form-group-->

                

                <div class="form-group">
                    
                    <div class="col-md-10">
                       
                        <input class="form-control" name="txt_courses" placeholder="Courses" type="text" id="inputName" required  />
                        <div class="help-block with-errors"></div>
                       
                    </div><!--col-md--12-->
                </div><!--form-group-->

                <div class="form-group">
                <div class="col-md-12">
                   <button class=" btn btn-warning" style="color: black; font-size:1.3em;" data-toggle="collapse" data-target="#collapsible-1" data-parent="#myAccordion">Add &nbsp;<i class="fa fa-plus-square" aria-hidden="true"></i></button>
                   
    <div id="collapsible-1" class="collapse">
          
          <div class="form-group">
                    
                    <div class="col-md-10">
                       
                        <input class="form-control" name="txt_courses2" placeholder="Courses" type="text" id="inputName" required  />
                        <div class="help-block with-errors"></div>
                       
                    </div><!--col-md--12-->
                </div><!--form-group-->

    </div><!--collapsible-1-->

                </div><!--col-md-12-->
                </div><!--form-group-->

                 <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label">Current Profession</label>
                </div><!--col-md-12-->
              </div><!--form-group-->

                <div class="form-group">
                  <div class="col-md-10">
                    
                     <select class="form-control" name="txt_jobs"  required>
                    
                              <option>Accountant </option>
                              <option>ICT</option>
                              <option>Mechanic</option>
                              <option>Hospitality</option>
                              <option>e-commerce Marketing Manager</option>
                              <option>Sales Engineer</option>
                              <option>Sales Representative</option>
                              <option>Senior Brand Manager</option>
                              <option>Internet Marketing Specialist</option>
                              <option>e-commerce Marketing Specialist</option>
                              <option>Email Marketer</option>
                              <option>Inside Sales Representative</option>
                              <option>Internet Marketing Coordinator</option>
                              <option>Internet Marketing Director</option>
                              <option>Sales Director</option>
                              <option>Senior Product Manager</option>
                              

                            </select>

                  </div><!--col-md-12-->

                </div><!--form-group-->

                <div class="form-group">
                  <div class="col-md-10">
                    <div class="container">
  
    <input type="hidden" name="count" value="1" / style="">
        <div class="control-group" id="fields">
            <label class="control-label" for="field1">Nice Multiple Form Fields</label>
            <div class="controls" id="profs"> 
                <form class="input-append">
                    <div id="field"><input autocomplete="off" class="input" id="field1" name="prof1" type="text" placeholder="Type something" data-items="8"/><button id="b1" class="btn add-more" type="button">+</button></div>
                </form>
            <br>
            <small>Press + to add another form field :)</small>
            </div>
        </div>

        <div class="input_fields_wrap">
    <button class="add_field_button">Add More Fields</button>
    <div><input type="text" name="mytext[]"></div>
</div>
        
  
</div>
                  </div><!--col-md-10-->
                </div><!--form-group-->
              
                 <div class="form-group">
                    <div class="col-md-10">
                      
                         <input class="btn btn-lg btn-success btn-block" type="submit" value="Next" name="profile" style="font-size:1.25em;" >

                    </div><!--col-md--12-->
                </div><!--form-group-->

                </fieldset>

            

            </div><!--thumbnail-->
        </div><!--panel-->
    </div><!--jumbotron-->
    </div><!--container-->
</div><!--row-->
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>

</body>
</html>
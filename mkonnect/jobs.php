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


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                    
                    <div class="col-md-10">
                       
                        
                    <input type="hidden" name="count" value="1" / style="">
        <div class="control-group" id="fields">
            <label class="control-label" for="field1">Courses</label>
            <div class="controls" id="profs"> 
                <form class="input-append">
                    <div id="field"><input autocomplete="off" class="input" id="field1" name="prof1" type="text" placeholder="Type something" data-items="8"/><button id="b1" class="btn add-more" type="button">+</button></div>
                    <br>
            <small>Press + to add More courses if Any :)</small>
            </div><!--control-->
        </div><!--control-group-->
                       
                    </div><!--col-md-10-->
                </div><!--form-group-->

                <div class="form-group">
                    <div class="col-md-10">
                      
                         <input class="btn btn-lg btn-success btn-block" type="submit" value="Next" name="profile" style="font-size:1.25em;" >

                    </div><!--col-md--12-->
                </div><!--form-group-->


  

                </div><!--col-md-12-->
            
            </form>
            
                </fieldset>

            

            </div><!--thumbnail-->
        </div><!--panel-->
    </div><!--jumbotron-->
    </div><!--container-->
</div><!--row-->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script src="http://1000hz.github.io/bootstrap-validator/dist/validator.min.js"></script>
<script src="js/fa.js"></script>
<!-- optionally if you need translation for your language then include 
    locale file as mentioned below -->
<script src="js/<lang>.js"></script>
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


</body>
</html>
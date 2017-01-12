<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  #music .jumbotron{

  }
</style>
</head>
<body>
<section id="music">
<div class="jumbotron" style="margin:10%; margin-bottom: 40%;">
  <div class="panel">
      <div class="row">
        <div class="col-md-3">
          <button class="btn btn-primary">Check Library</button>
        </div>

        <div class="col-md-3">
          <button class="btn btn-primary">Check Library</button>
        </div>

        <div class="col-md-3">
          <button class="btn btn-primary">Check Library</button>
        </div>

        <div class="col-md-3">
          <button class="btn btn-primary">Check Library</button>
        </div>
      </div>
  </div>
</div>
</section>

<!-- Button trigger modal -->
<center><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  
</button></center>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-warning"><center>Check Library</center></h4>
      </div>
      <div class="modal-body">
        <div class="jumbotron" >
  <div class="panel">
      <div class="row">
        <div class="col-md-3">
         Enter Track Number <input type="text" name="txt_mytext" class="form-control" id="mytext" placeholder="" required />
        </div>
        
        <div class="col-md-3">
        <h2></h2>
          <button class="btn btn-primary">CheckTrack</button>
        </div>
         
        <div class="col-md-3">
        <h2></h2>
          <button class="btn btn-warning">List All Tracks</button>
        </div>
          
        <div class="col-md-3">
         
        </div>
      </div>
  </div>
  <div class="panel">
    <ul class="list-group">
  <li class="list-group-item">

    <audio controls>
  <source src="downloads/artiste/SPOKEN WORD - BEAUTIFULE.mp3" type="audio/mpeg">
  Your browser does not support the auio element
</audio> &nbsp; &nbsp; &nbsp;
<a href="downloads/download/onion.php?filename ='SPOKEN WORD - BEAUTIFULE.mp3'"><button type="submit" class="btn btn-success">Download Full Song</button></a><br>
  </li>
  <li class="list-group-item">
    <audio controls>
  <source src="downloads/artiste/SPOKEN WORD - HIGH COURT.mp3" type="audio/mpeg">
  Your browser does not support the audio element
</audio> &nbsp; &nbsp; &nbsp;
<a href="download.php"><button type="submit" class="btn btn-success">Download Full Song</button></a><br>
  </li>
  <li class="list-group-item">
    <audio controls>
  <source src="downloads/artiste/SPOKEN WORD - ONE LOVE.mp3" type="audio/mpeg">
  Your browser does not support the auio element
</audio> &nbsp; &nbsp; &nbsp;
<a href="download.php"><button type="submit" class="btn btn-success">Download Full Song</button></a><br>
  </li>
  <li class="list-group-item">
    <audio controls>
  <source src="downloads/artiste/SPOKEN WORD - SI SIRI.mp3" type="audio/mpeg">
  Your browser does not support the auio element
</audio> &nbsp; &nbsp; &nbsp;
<a href="download.php"><button type="submit" class="btn btn-success">Download Full Song</button></a><br>
  </li>
  </ul>
  </div>
</div>

      </div>
      <div class="modal-footer">
        <!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
        <!--button type="button" class="btn btn-primary">Save changes</button-->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<!-- Button trigger modal -->
<center><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="margin-bottom:30%;">
  
</button></center>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-warning"><center>Jugebox</center></h4>
      </div>
      <div class="modal-body">
        <div class="jumbotron" >
  <div class="panel">
      <div class="row">
        <div class="col-md-3">
          <button class="btn btn-primary btn-lg">Check Library</button>
        </div>
        
        <div class="col-md-3">
          <button class="btn btn-primary btn-lg">Create Playlist</button>
        </div>
         
        <div class="col-md-3">
          <button class="btn btn-primary btn-lg">Update Library</button>
        </div>
          
        <div class="col-md-3">
          <button class="btn btn-primary btn-lg">Exit</button>
        </div>
      </div>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button-->
        <!--button type="button" class="btn btn-primary">Save changes</button-->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="container">
  <div class="row">
    <input type="hidden" name="count" value="1" />
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
  </div>
</div>
<div class="row">
  <div class="col-md-10">
    <div class="jumbotron">
     <div id="form-content">
      
      <form method="post" id="reg-form" autocomplete="off">
        
        <div class="form-group">
          <input type="text" class="form-control" name="txt_fname" id="lname" placeholder="First Name" required />
        </div>
        
        <div class="form-group">
          <input type="text" class="form-control" name="txt_lname" id="lname" placeholder="Last Name" required />
        </div>
        
        <div class="form-group">
          <input type="text" class="form-control" name="txt_email" id="lname" placeholder="Your Mail" required />
        </div>
        
        <div class="form-group">
          <input type="text" class="form-control" name="txt_contact" id="lname" placeholder="Contact No" required />
        </div>

        <div class="form-group">
          <div class="input_fields_wrap">
    <button class="add_field_button btn-primary btn-lg">Add More Fields</button>
    <input type="text" name="txt_mytext" class="form-control" id="mytext" placeholder="please enter skills" required />
</div><!--input_fields_wrap-->
        </div><!--form-group-->
        
        <hr />
        
        <div class="form-group">
          <button class="btn btn-primary">Submit</button>
        </div>
        
      </form>
            
            </div>
            

<script type="text/javascript">
$(document).ready(function() {  
  
  // submit form using $.ajax() method
  
  $('#reg-form').submit(function(e){
    
    e.preventDefault(); // Prevent Default Submission
    
    $.ajax({
      url: 'submit.php',
      type: 'POST',
      data: $(this).serialize() // it will serialize the form data
    })
    .done(function(data){
      $('#form-content').fadeOut('slow', function(){
        $('#form-content').fadeIn('slow').html(data);
      });
    })
    .fail(function(){
      alert('Ajax Submit Failed ...');  
    });
  });
  
  
  /*
  // submit form using ajax short hand $.post() method
  
  $('#reg-form').submit(function(e){
    
    e.preventDefault(); // Prevent Default Submission
    
    $.post('submit.php', $(this).serialize() )
    .done(function(data){
      $('#form-content').fadeOut('slow', function(){
        $('#form-content').fadeIn('slow').html(data);
      });
    })
    .fail(function(){
      alert('Ajax Submit Failed ...');
    });
    
  });
  */
  
});
</script>




    </div><!--jumbotron-->
  </div><!--col-md-10-->
</div><!--row-->

<div class="row">
<div class="col-md-10">
<div class="jumbotron">
<input type="text" id="text1"> +
<input type="text" id="text2">
<button id="button" class="btn btn-danger"> = </button>
<div id="result"></div><!--result-->

<?php 
$text1 = $_POST['text1'];
$text2 = $_POST['text2'];
 
echo $text1 + $text2; 
?>



</div><!--well-->



</div><!--col-md-10-->

</div><!--row-->
<script >
    $('#button').click(function() {
    var val1 = $('#text1').val();
    var val2 = $('#text2').val();
    $.ajax({
        type: 'POST',
        url: 'modal.php',
        data: { text1: val1, text2: val2 },
        success: function(response) {
            $('#result').html(response);
        }
    });
})
</script>

<div class="container" style="margin-top:20% ">
  <div class="row">
    <input type="hidden" name="count" value="1" />
        <div class="control-group" id="categories">
            <label class="control-label" for="category1">Nice Multiple Form Fields</label>
            <div class="controls" id="profs"> 
                <form class="input-append">
                    <div id="category"><input autocomplete="off" class="input" id="category1" name="prof1" type="text" placeholder="Type something" data-items="8"/><button id="b1" class="btn add-more" type="button">+</button></div>
                </form>
            <br>
            <small>Press + to add another form field :)</small>
            </div>
        </div>
  </div>
</div>



<script type="text/javascript">
  $(document).ready(function(){
    var next = 1;

    $(".add-more").click(function(e){
        e.preventDefault();
        var addto = "#category" + next;
        var addRemove = "#category" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="category' + next + '" name="category' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="category">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#category" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#category" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    

    
});

</script>
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


        <div class="input_fields_wrap">
    <button class="add_field_button btn-primary btn-lg">Add More Fields</button>
    <div id="form-content"><form method="post" id="reg" autocomplete="off"><input type="text" name="mytext[]"></form></div>
</div>

 <button class="btn btn-primary">Submit</button>
<script>
  $(document).ready(function() {
    var max_fields      = 6; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" name="txt_mytext" class="form-control" id="mytext" placeholder="please enter skills" required /><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })

});
</script>





<script>
  $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".adds"); //Fields wrapper
    var add_button      = $(".categories"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" name="category"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>

        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

</body>
</html>
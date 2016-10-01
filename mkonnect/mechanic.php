  <div id="mechanic" class="collapse">
                <div class="card">
                  <div class="card-content">
                        <center>
                    <p>List of Jobs in Medicine </p>
                        </center>

                        <!--modal-->
                        <div class="container">
  <center><h2>Apply the Jobs by clicking the button below</h2>
  <h3><span class="glyphicon glyphicon-hand-down"></span></h3> <h3><i class="fa fa-hand-o-down" aria-hidden="true"></i></h3><br>
  <!-- Trigger the modal with a button -->


  <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#mech" style="font-size:1em;">
                        Apply
                        </button>
  </center>


  <!-- Modal -->
  <div class="modal fade" id="mech" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center> <h4 class="modal-title"><i class="fa fa-file-text" aria-hidden="true"></i>JOB APPLICATION<span class="glyphicon glyphicon-pencil"></span></h4></center>
          <div class="breadcrums" style="margin-top:5%; font-size:1.2em;">
    <ul class="breadcrumb">
   <center>If you already have an account</center><br>
      <center><li class="active"><a href="#logs"><button type="button" class=" btn btn-warning"> login</button></a> </li></center>
      </ul>
      </div><!--breadcrums-->
        </div><!--modal-header-->
        <div class="modal-body">
        
        <div class="row">
        <div class="col-md-12">
         <div class="col-md-6 col-md-offset-3 well">
            <form role="form" class="form-horizontal" action="mkonnect.php" method="POST" name="contactform" data-toggle="validator">
            <fieldset>
    
                <legend><center> <span class="glyphicon glyphicon-pencil"> CV WRITING REGISTER </span><span class="glyphicon glyphicon-folder-open"></span> </legend>

                <div class="form-group">
                    
                    <div class="col-md-12">
                        
                        <input class="form-control" name="txt_name" placeholder="Your Full Name" type="text" id="inputName" required />

                    <div class="help-block with-errors"></div><!--help-block-->
                    </div>
                </div>

                <div class="form-group">
                    
                    <div class="col-md-12">
                        
                        <input class="form-control" name="email" placeholder="Your Email" type="email" autofocus required />

                     <div class="help-block with-errors"></div><!--help-block-->
                        
                    </div>
                </div>

                <div class="form-group">
                    
                    <div class="col-md-12">
                        
                        <input class="form-control" name="txt_number" placeholder="Your Phone Number eg. +254-7..." type="text" required pattern=".{9,}" title="9 charachters minimum" value="" required />

                     <div class="help-block with-errors"></div><!--help-block-->
                        
                    </div><!--col-md-12-->
                </div><!--form-group-->
              
                <div class="form-group">
                    
                    <div class="col-md-12">
                        
                        <input class="form-control" name="txt_pass" placeholder="Your Password" type="password" data-minlength="6" id="inputPassword" value="" required  />

              <div class="help-block with-errors">Minimum of 6 Characters</div><!--help-block-->
                        
                    </div><!--col-md-12-->
                </div><!--form-group-->
                 <div class="form-group">
                    
                    <div class="col-md-12">
                        
                        <input class="form-control" name="confirm_pass" placeholder="confirm Password" type="password" data-match="#inputPassword" data-match-error="Whoops, these don't match" value="" id="inputPasswordConfirm" required />
                   <div class="help-block with-errors"></div><!--help-block-->
                       
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-12">
                       
                         <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="cv" style="font-size:1.25em;" >

                    </div>
                </div>

 
                </div>
                </div><!--col-md-12-->

                </div><!--row-->
            
                </div><!--modaol-body-->

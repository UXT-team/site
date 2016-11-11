
<button class="btn btn-warning btn-lg" style="padding:10%; margin:2%;" data-toggle="modal" data-target="#sales" >Apply</button>

    <!-- Modal -->
<div class="modal fade" id="sales" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><h4 class="modal-title" id="myModalLabel">Register</h4></center>
      </div><!--header-->
      <div class="modal-body">

      <div class="row">
<div class="col-md-12 well" style="padding:10%;" >
            <form role="form" class="form-horizontal" action="mkonnect.php" method="POST" name="contactform" data-toggle="validator">
            <fieldset>
          
                <legend><center> <span class="glyphicon glyphicon-user"></span>Sales <span class="glyphicon glyphicon-user"></span></center> </legend>

               
        <?php include('form2.php');?>
        <p>Already have an account?Login Below</p>
        <center><?php include('login2.php'); ?></center>

        </fieldset>
    
      </div><!--col-md-6-->
      
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div><!--modal-footer-->
      </div><!--row-->
    </div><!--body-->
  </div><!--content-->    
</div><!--dialog-->
</div><!--modal-->
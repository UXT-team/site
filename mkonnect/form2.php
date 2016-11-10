<div class="row">
<div class="col-md-6 well col-md-offset-3" >
            <form role="form" class="form-horizontal" action="mkonnect.php" method="POST" name="contactform" data-toggle="validator">
            <fieldset>
          
                <legend><center> <span class="glyphicon glyphicon-user"></span>Sales <span class="glyphicon glyphicon-user"></span></center> </legend>

               

                <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label">Enter Email</label>
                </div><!--col-md-12-->
              </div><!--form-group-->

                <div class="form-group">
                    
                    <div class="col-md-12">
                        
                        <input class="form-control" name="email" placeholder="Your Email" type="email" autofocus required />
                        <div class="help-block with-errors"></div>
                    </div><!--col-md-12-->
                </div><!--form-group-->

                

                <div class="form-group">
                <div class="col-md-12">
                   <label for="txt_subject" class="control-label">Enter Password</label>
                </div><!--col-md-12-->
              </div><!--form-group-->

                 <div class="form-group">
                    
                    <div class="col-md-12">
                        
                        <input class="form-control" name="password" placeholder="Your Password" type="password" data-minlength="6" id="inputPassword" value="" required />
                        <div class="help-block">Minimum of 6 characters</div>                        
                    </div><!--col-md-12-->
                </div><!--form-group-->

               
              
                 <div class="form-group">
                    <div class="col-md-8">
                      
                         <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="accounts" style="font-size:1.25em;" >

                    </div><!--col-md--12-->
                </div><!--form-group-->

                <div class="form-group">
                    <div class="col-md-12">
                      
                      <p class="text-danger"><a href="mkonnect/resetpassword.php">Forgotten Password</a></p>

                    </div><!--col-md--12-->
                </div><!--form-group-->
                
                

            </fieldset>
            </form>
        </div><!--col-md--12-->
       
  </div><!--row-->



          </li><!--list-group-item-->
          <div id="engineering" class="collapse">
                <div class="card">
                  <div class="card-content">
                        <center>
                    <p>It is a long established fact that a reader will be distracted by the readable content of </p>
                        </center>

                        <!--modal-->
                        <div class="container">
  <center><h2>Apply the Jobs by clicking the button below</h2>
  <h3><span class="glyphicon glyphicon-hand-down"></span></h3> <h3><i class="fa fa-hand-o-down" aria-hidden="true"></i></h3><br>
  <!-- Trigger the modal with a button -->

  <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#engineer" style="font-size:1em;">
                        Apply
                        </button>
  </center>


  <!-- Modal -->
  <div class="modal fade" id="engineer" role="dialog">
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

        </div>
        <div class="modal-body">
          
           <div class="row">
            <div class="col-md-12">
                    <div class="col-md-6 col-md-offset-3 well">
                       <form role="form" class="form-horizontal" action="engineering.php" method="POST" name="contactform" data-toggle="validator" >

            <fieldset>
    
                <legend><center> <span class="glyphicon glyphicon-user"></span></center> <center> APPLY THE JOBS ABOVE</center> <center><span class="glyphicon glyphicon-user"></span></center> </legend>

                <div class="form-group">
                    
                    <div class="col-md-12">
                        
                        <input class="form-control" name="txt_name" placeholder="Your Full Name" type="text" value="" id="inputName" required />
                        <div class="help-block with-errors"></div><!--help-block-->
                    </div><!--col-md-12-->
                </div><!--form-group-->

                <div class="form-group">
                    
                    <div class="col-md-12">
                        
                        <input class="form-control" name="email" placeholder="Your Email" type="email" autofocus value="" required />
                        <div class="help-block with-errors"></div>
                        
                    </div><!--form-group-->
                </div><!--form-group-->

                <div class="form-group">
                    
                    <div class="col-md-12">
                        
                        <input class="form-control" name="txt_number" placeholder="Your Phone Number eg. +2547..." type="text" required pattern=".{9,}" title="9 charachters minimum" value="" required />
                        <div class="help-block with-errors"></div>
                        
                    </div><!--col-md-12-->
                </div><!--form-group-->
              
                <div class="form-group">
                    
                    <div class="col-md-12">
                        
                        <input class="form-control" name="password" placeholder="Your Password" type="password" data-minlength="6" id="inputPassword" value="" required />
                        <div class="help-block">Minimum of 6 characters</div>
                        
                    </div><!--col-md-12-->
                </div><!--form-group-->
                 <div class="form-group">
                    
                    <div class="col-md-12">
                        
                        <input class="form-control" name="confirm_pass" placeholder="confirm Password" type="password" data-match="#inputPassword" data-match-error="Whoops, these don't match" value="" id="inputPasswordConfirm" required />
                        <div class="help-block with-errors"></div>
                    </div><!--col-md-12-->
                </div><!--form-group-->

                <div class="form-group">
                  
                  <div class="col-md-12">
                    
                     <select class="form-control" name="txt_jobs"  required>
                    
                              <option>Accountant</option>
                              <option>Clerk</option>
                              <option>Cashier</option>
                              <option>Banker</option>

                            </select>

                  </div><!--col-md-12-->

                </div><!--form-group-->
                
                <div class="form-group">
                    <div class="col-md-12">
                       
                         <input class="btn btn-lg btn-warning btn-block" type="submit" value="Register" name="register" style="font-size:1.25em;" >

                    </div><!--col-md--12-->
                </div><!--form-group-->
                <div class="form-group">
                  <div class="col-md-12">
                    <div id="logs">
                    <p> If you already have an account <?php include('login.php') ?></p>
                    </div><!--log-->
                  </div><!--col-md-12-->
                </div><!--form-group-->
            </fieldset>
            </form>
        </div><!--col-md--12-->
        </div><!--col-md-12-->
        </div><!--row-->


        </div><!--modal-body-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div><!--modal-footer-->
      </div><!--modal-content-->
      
    </div><!--modal-dialog-->
  </div><!--modal-fade-->
  
</div><!--container-->

                        </div><!--card-content-->
                        </div><!--card-->
                        </div><!--engineering-->



                        <?php

                        //connect to db

                        include ('db/db_connection.php');

                        if (isset($_POST['register'])) {

                          $name = $_POST['txt_name'];
                          $email = $_POST['email'];
                          $num = $_POST['txt_number'];
                          $jobs = $_POST['txt_jobs'];
                          $confirm_pass = $_POST['confirm_pass'];
                          $pass = $_POST['password'];
                          
                          //select query

                          $email_query = " select * from jobs WHERE email='$email'";

                          //run query

                          $run_query = mysqli_query($con,$email_query);

                          if(mysqli_num_rows($run_query)>0){

                            $mail_exist = "<script>alert('Email already exists')</script>";
                            echo $mail_exist;

                            

                          }

                          //insert user in the db

                 $insert = " insert into jobs (name,email,phonenumber,job_type,password) VALUES ($name','$email','$num','$jobs',md5('$pass') )";

                 if(mysqli_query($con,$insert)){

                   $jobs = "<script>window.open('jobs.php')</script>";
                 }
                     else{

                     "<script> alert ( 'Please check your details and try again.')</script>";

                     //redirect page

                     $refresh="<script>window.location.replace('engineering.php' ,'_self')</script>";

                     }     





                        }

                      



                         ?>
   <div class="row">
              <div class="col-md-6 col-md-offset-3 thumbnail">
            <center>
          <strong>Accounts Clerk</strong>
          <strong>Job Description</strong>
          </p>
          <strong>Personal qualities:</strong>
          </center>
          
          <div class="text" style="">
          <ul style="text-align: left; padding: 10%">
          <li > At least CPA 2 or Equivalent.</li>
           <li> Confident and able to work accurately.</li>
            <li> Good interpersonal and communication skills.</li>
             <li> Pro-active, self–starter with self-defined goals.</li>
             <li>  Ability to work well under pressure. </li>
              <li> Team player. </li>
               <li>Below 30 years Expected Salary range – 20-25k.</li> 

      This job was copied from BrighterMonday<br>
      </ul>
      </div>
      </div>
        <div class="col-md-6 col-md-offset-3 well">
            <form role="form" class="form-horizontal" action="mkonnect/interview.php" method="POST" name="contactform" data-toggle="validator">
            <fieldset>
    
                <legend><center> <span class="glyphicon glyphicon-user"></span>INTERVIEW SKILLS REGISTER <span class="glyphicon glyphicon-user"></span></center> </legend>

                <div class="form-group">
                    
                    <div class="col-md-12">
                       
                        <input class="form-control" name="txt_name" placeholder="Your Full Name" type="text" id="inputName" required  />
                        <div class="help-block with-errors"></div>
                       
                    </div><!--col-md--12-->
                </div><!--form-group-->

                <div class="form-group">
                    
                    <div class="col-md-12">
                        
                        <input class="form-control" name="email" placeholder="Your Email" type="email" autofocus required />
                        <div class="help-block with-errors"></div>
                    </div><!--col-md-12-->
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
                      
                         <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="accounts" style="font-size:1.25em;" >

                    </div><!--col-md--12-->
                </div><!--form-group-->



            </fieldset>
            </form>
        </div><!--col-md--12-->

        </div><!--row-->
         <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?php if($rows>0){  echo $mail_exist;
}  ?></h4>
            </div>
            <div class="modal-body">
                <p>Email Already Exists!</p>                     
            </div>    
        </div>
    </div>
</div>

        <?php 

        //include db
        include('db/db_connection.php');

        if(isset($_POST['accounts'])){

        //declare variable
          $user_name = $_POST['txt_name'];
          $user_email = $_POST['email'];
          $user_pass = $_POST['password'];
          $user_num = $_POST['txt_number'];
          $user_job = $_POST['txt_jobs']; 

          //use select query

          $select_query = "select * from accounts WHERE email = ".$user_email."";

          //con to db to get query
          $conn_query = mysqli_query($con, $select_query);

          //check email

          $rows = mysqli_num_rows($conn_query);

          if($rows>0){

            $mail_exist= "<script>$('#thankyouModal').modal('show')</script>";
             echo $mail_exist;

          }
          

            //insert into db
            $insert_query = "insert into accounts name,email,phonenumber,job_type,password VALUES ('$user_name','$user_email','$user_num','$user_job','$user_pass')";

            if (mysqli_query($con,$insert_query)){

              $run = "<script>window.open(cvs.html)</script>";
              echo $run;
            }
            else{
              $eror = "<script>alert('please check your details and try again')</script>";
              echo $eror;

              sleep(5);

              //redirect page
              echo "<script>alert('mkonnect.php')</script>";
            }
          

        }



        ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Latest compiled and minified BOOTSTRAP JS -->
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

  <!-- Sweet alerts ---  https://sweetalert.js.org/guides/ -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <link rel="stylesheet" href="styles/homeStyle.css">
  <link rel="stylesheet" href="styles/animate.css">




    <title>Supplier Login - Price Right Disposal Services</title>
  </head>

  <body>


<!--------------- https://bootsnipp.com/snippets/featured/login-form-in-modal -------------------->

    <div id="login-overlay" class="modal-dialog" >
      <div class="modal-content">

          <div class="modal-header">
              <button onclick="location.href = '/index.php';" type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Login to PriceRightDisposal.com</h4>
          </div>

          <div class="modal-body">

              <div id="login_row" class="row">

                  <div class="col-xs-6">
                      <div class="well">
                          <form id="loginForm" method="POST" action="/login/" >
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>

                              <button type="submit" class="btn btn-success btn-block">Login</button>
                              <a href="/forgot/" class="btn btn-default btn-block">Help to login</a>
                          </form>
                      </div>
                  </div>

                  <div class="col-xs-6">
                      <p class="lead">Register now for <span class="text-success">ONLY</span> $25.00</p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Advertise your services for <span class="text-success">FREE</span></li>
                          <!--li><span class="fa fa-check text-success"></span> < Marketing material here> </li>
                          <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                          <li><span class="fa fa-check text-success"></span> Fast checkout</li-->
                         
                          <li><a href="/read-more/"><u>Read more</u></a></li>
                      </ul>
                      <p><a id="register-flip" class="btn btn-info btn-block" style="float:bottom;">Yes please, register now!</a></p>
                  </div>
              </div>  <!-- End of login_row -->

         
          </div>
      </div>
    </div> <!-- end of 'login-overlay' --> 


    <!--------------- Registration Form  -------------------->
    <div id="registration-overlay" style="display:none;" class="modal-dialog">
      <div class="modal-content">

          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" onclick="pageFlip();"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Supplier Registration</h4>
          </div>

          <div class="modal-body">

            <div id="registration_row" class="row">
              <div class="col-xs-12">

                <div class="well">
                    <form id="registrationForm" action="javascript:register();" >
                        <div class="form-group">
                            <label for="email" class="control-label">Supplier Email</label>
                            <input type="email" class="form-control" id="email" name="email" required title="This will act as your Username" placeholder="example@email.com">
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <label for="psw" class="control-label">Password</label>
                            <input type="text" class="form-control" id="psw" name="psw" required title="Please enter your password">
                            <span class="help-block"></span>
                        </div>  

                        <div class="form-group">
                            <label for="psw2" class="control-label">Confirm Password</label>
                            <input type="text" class="form-control" id="psw2" name="psw2" required title="Please confirm your password is correct">
                            <span class="help-block"></span>
                        </div>                       

                        <div class="form-group">
                            <label for="name" class="control-label">Company Name</label>
                            <input type="text" class="form-control" id="name" name="name" required value="" title="Your listings will appear under this company name" placeholder="Example Waste Disposal Services Ltd.">
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="control-label">Contact / Inquiry Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required title="Phone # where a representative can be reached for rental inquires as routed by our web service." >
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group">
                            <label for="location" class="control-label">Company Location</label>
                            <input type="location" class="form-control" id="location" name="location" required title="City, State" >
                            <span class="help-block"></span>
                        </div>

                         <div class="form-group">
                            <label for="website" class="control-label">Website</label>
                            <input type="website" class="form-control" id="website" name="website" title="ExampleServiceWebsite.Com" >
                            <span class="help-block"></span>
                        </div>

                        
                        <div class="col-xs-3 " ></div>

                        <div id="login_row" class="row">
                          <div class="col-xs-6 " >
                            <button type="submit" class="text-center btn btn-success btn-block">Login</button>

                            <a href="/forgot/" class="text-center btn btn-default btn-block">Help me!</a>
                          </div>
                        </div>

                        <div class="col-xs-3 " /></div>

                    </form>
                </div>               

              </div>


            </div>
          </div>
      

      </div>
    </div> <!-- end of 'registration-overlay' --> 


  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <script type="text/javascript">


    $("#register-flip").on("click", pageFlip);


    function pageFlip() 
    {
       //Toggle display class
       if( document.getElementById("login-overlay").style.display != 'none')
       {
           document.getElementById("login-overlay").style.display = 'none';
           document.getElementById("registration-overlay").style.display = '';
       }else{
           document.getElementById("login-overlay").style.display = '';
           document.getElementById("registration-overlay").style.display = 'none';
       }   
    }





    //$("#registration-submit").on("click", register);

    function register(){

      var allowRegistration = true ;
      var regErr = '';

     
      var email = document.getElementById("email");
      var psw = document.getElementById("psw");   // TBD - PUSH PASSWORD DOWN INTO THE DATABASE
      var psw2 = document.getElementById("psw2");
      var name = document.getElementById("name");
      var phone = document.getElementById("phone");
      var loc = document.getElementById("location");      
      var phone = document.getElementById("phone");
      var web = document.getElementById("website");   

      //alert(document.getElementById('psw2').value );



      if ( psw.value.length < 8 )    {allowRegistration = false ; regErr += "Password must be at least 8 characters long\n"; }
      if ( psw.value != psw2.value ) {allowRegistration = false ; regErr += "Passwords do not match\n"; }   




        //TBD - remove following line in order to allow submission & remove errors
                                      allowRegistration = false ; regErr += "Registration submission disallowed\n";


      if (allowRegistration == true)
      {        

        $.post('db/register.php', { name: name.value, loc: loc.value, email: email.value, phone: phone.value, web: web.value }, function(result)
        {
              /*
                put in processing component showing registation is happening
                callback when it is complete

              */
              alert('You have sucessfully registered');
            

        });

      }else {


        swal("Whoah there!", regErr , "info", {
            button: "Oh ok..",
          });
        //alert('Fucckouttahere \n Submission disALLOWED \n more validation needed');
      }
      
    } // end of register(){}
    
  </script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</html>

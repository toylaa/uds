<!DOCTYPE html>
<html>
  <head>

  </head>

  <body>
    <div>
      <input class="input" type="text" placeholder="Company name" style="text-align:center;" required id="name">
      <input class="input" type="text" placeholder="Location" style="text-align:center;" required id="location">
      <input class="input" type="text" placeholder="Email" style="text-align:center;" required id="email">
      <input class="input" type="text" placeholder="Phone" style="text-align:center;" required id="phone">
      <input class="input" type="text" placeholder="Website" style="text-align:center;" id="website">
      <button class="btn btn-default xbtn" type="submit" id="registration-submit">Sign Up!</button>
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <script type="text/javascript">


    $("#registration-submit").on("click", register);

    function register(){
      var name = document.getElementById("name");
      var loc = document.getElementById("location");
      var email = document.getElementById("email");
      var phone = document.getElementById("phone");
      var web = document.getElementById("website");

      $.post('db/register.php', { name: name.value, loc: loc.value, email: email.value, phone: phone.value, web: web.value }, function(result)
      {
            /*
              put in processing component showing registation is happening
              callback when it is complete

            */
            swal({
               title: "Registered",
               text: "Officially Registered",
               icon: "info",
               button: "Okay",
               //buttons: true,
               dangerMode: true,
             });
      });
    }
  </script>
</html>

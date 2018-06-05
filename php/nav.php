  <nav class=" top-container shift" >

     <div class="center">
      <h2>Price Right Disposal Services. </h2>
      <br>
      <span><img  src="img/114x114.png" class="animated bounceIn"></span>
    </div>
      <!--Nav class options=(circle/stroke/fill/shift)-->
      <span id="nav-ul" style="min-height:50px;">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="db/dbdata.php?text=?">Services</a></li>
          <li><a href="#">Login</a></li>
          <div style="clear"></div>
        </ul>
      </span>

    </nav>


<!-- "offset-spaceholder" is necessary to HOLD the spot on the page after the nav moves
 to prevent the content from bunching up and hiding behind the nav as soon as it
 changes from static to sticky -->
<div class="offset-spaceholder" style="min-height:90px;">
  <div class="container-fluid center header animated" id="searchHeader">

    <!--form method="POST" action="/php/search.php"-->

          <input class="input" type="text" id="searchText" placeholder="I'm Sticky !" style="text-align:center;" required>

          <button class="btn btn-default xbtn" type="submit" id="searchbar-submit" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>

          <!--span id="hidden-header-contents" style="color:#fff;display:none;">This only appears on scroll ! </span-->

    <!--/form-->

 <!--div class="container-fluid">
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
             <span id="hidden-header-contents" style="color:#fff;display:none;">This shit appears on scroll ;p </span>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <table><tr>
              <td><input class="input" type="text" id="searchText" placeholder="I'm Sticky !" style="text-align:center;" required></td>
              <td style="min-width:4px;"></td>
              <td><button class="btn btn-default" type="submit" id="searchbar-submit" >
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                Search
              </button></td>
            </tr></table>


        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <button class="btn xbtn" ><span class="glyphicon glyphicon-remove" ></span></button>
        </div>
    </div>
</div-->



  </div>
</div>


<script>

    //--------- Submission Event Listeners ---------//
    //Bind event listener to submit button to trigger the ajaxSubmit CALLBACK [function without () in call syntax]
    $("#searchbar-submit").on("click", ajaxSubmit);
    // Bind event listener to the search field to trigger the same submit function as the button is attached to when the RETURN(ENTER)key is pressed
    var input = document.getElementById("searchText");
    // Execute a function when the user releases a key on the keyboard from inside the INPUT field
    input.addEventListener("keyup", function(event)
    {   // Cancel the default action, if needed
        event.preventDefault();
        // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 13)
        {
            // Trigger the button element with a click
            // FAKE DOM CLICK EVENT !
            document.getElementById("searchbar-submit").click();
        }
      });
    //--------- Submission Event Listeners ---------//




    //-----------------------------------------------------//
    // TBD  - Build this function out to make an ajax call to the database
    // Q:}  - ajaxSubmit('params?') - how many different requests/parameters do we want/need ?
    //
    // Test - Consult db/ajaxResponder.php which has only one job which is to echo the text from the request object
    //-------------- AjaxSubmit Function ------------------//
    function ajaxSubmit(){

      //If input.value is NOT null
      if (input.value != '')
      {
          /*
           swal("TBD - ajaxSubmit!", "input.value: " + input.value , "success", {
            button: "Aww yiss!",
          });
          */

           // AJAX CALL to db/dbdata.php
          $.post('db/dbdata.php', { text: input.value }, function(result)
          {
            /*
              result: the results of the query with given input in the form of HTML table
              instead of alert we have to take result and implement it into the DOM
            */

             // Return with the response data (y)
              //alert("result: ("+ result + ")" );



             // TBD - ERROR styling.
                if (result.includes("error_no_results_found"))
                {
                  swal("TBD - ajaxSubmit!", "input.value: " + input.value , "success", {
                     button: "Aww yiss!",
                   });
                } else {
                   $searchPane = document.getElementById("searchPane");
                   $searchPane.innerHTML = result;
                }
          });

        //
      }
      else //If input.value is null - TBD - produce clever(er) alert using 'sweet alerts' plugin.
      {
        // https://sweetalert.js.org/guides/
        // - third argument, predefined alert icons(extensible): "warning", "error", "success" and "info".
        swal({
          title: "If one searches for nothing...",
          text: "..can it ever truly be found?",
          icon: "info",
          button: "No. Try again.",
          //buttons: true,
          dangerMode: true,
        });
      }//--End else

    }//-------End of AjaxSubmit Function ------------------//

    //TBD? - add x button option to nav(to remove searchbar from top of page?)
    /*
     $("#searchbar-hide").on("click",hideSearchBar);

     function hideSearchBar(){
        alert('hide search bar !');
     }
    */

    //toggling the searchbar onScroll effects
    var header = document.getElementById("searchHeader");
    var hiddenSearchbarContent = document.getElementById("hidden-header-contents");
    var header_nav_ul = document.getElementById("nav-ul");
    //
    $stickyEnabled = true;
    //
    window.onscroll = function() {
      if($stickyEnabled == true){stickyScroller();}
    };
//
    var sticky = header.offsetTop;
//
    function stickyScroller() {
      if (window.pageYOffset >= sticky)
      {
        //Adding 'Sticky' class to the nav adds the sticking effect
        header.classList.add("sticky", "flipInX");
        //Toggles the display of the hidden troll line on scroll only
        hiddenSearchbarContent.style.display = "";
        //Hide the underlying NAV elements when the searchbar is scrolling to prevent bleed through
        header_nav_ul.style.display = "none";

      } else {
        header.classList.remove("sticky" , "flipInX");
        hiddenSearchbarContent.style.display = "none";
        header_nav_ul.style.display = "";
      }
    }
</script>
<!--End of JavaScript--------------------------------------------------------------------------->






<!--------------Beginning of CSS ---------------------------------------------------------------->

<style type="text/css">



  input[type=text] {
    height:40px;
    width: 250px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

  .xbtn {
     height:40px;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
       border: 2px solid white;
        background-color: #333;
        color: white;

  }

  .xbtn:hover {
     background-color: #FFF;
      color: black;
  }

  /*   This is the CSS styling for the Sticky effect
  Inline styling here means that only pages which include nav.php can use the sticky effect */
  .fixed {
    animation-duration: 0.8s;
    animation-name: fadeIn;
  }

  .header {
  padding: 10px ;
  background: #555;
 /* color: #f1f1f1;*/
  /*background-color: #222;
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  */
  font: bold 16px sans-serif;
  padding: 35px 30px;
  border-color: black;
  border-radius: 4px;
  border-top-width:1px;
}

  .sticky {
    position: fixed;
    top: 0;
    width: 100%;
  }

  .sticky + .content {
  padding-top: 0px;
  }


  /* This is the CSS styling for the 'shifting' yellow hover effect on the nav elements */
  /* NAVIGATION */
  nav {
    width: 80%;
    margin: 0 auto;
    background: #fff;
    padding: 20px 0;
    box-shadow: 0px 5px 0px #dedede;
  }
  nav ul {
    list-style: none;
    text-align: center;
  }
  nav ul li {
    display: inline-block;
  }
  nav ul li a {
    display: block;
    padding: 15px;
    text-decoration: none;
    color: #aaa;
    font-weight: 800;
    text-transform: uppercase;
    margin: 0 10px;
  }
  nav ul li a,
  nav ul li a:after,
  nav ul li a:before {
    transition: all .5s;
  }
  nav ul li a:hover {
    color: #555;
  }

/* NavBar Style via https://codepen.io/maheshambure21/pen/QwXaRw */
/* CSS  style for nav 'shift' -->*/
  /* SHIFT */
  nav.shift ul li a {
    position:relative;
    z-index: 1;
  }
  nav.shift ul li a:hover {
    color: #91640F;
  }
  nav.shift ul li a:after {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    width: 100%;
    height: 1px;
    content: '.';
    color: transparent;
    background: #F1C40F;
    visibility: none;
    opacity: 0;
    z-index: -1;
  }
  nav.shift ul li a:hover:after {
    opacity: 1;
    visibility: visible;
    height: 100%;
  }

</style>

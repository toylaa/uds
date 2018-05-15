


  <nav class=" top-container shift" >

     <div class="center">
      <h2>Welcome to Unified Disposal Services. </h2>

      <span><img  src="img/114x114.png" class="animated bounceIn"></span> 
    </div>
      <!--Nav class options=(circle/stroke/fill/shift)-->
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Login</a></li>
        <div style="clear"></div>
      </ul>
    </nav>



<div class="offset-spaceholder" style="min-height:90px;">
  <div class="center header animated" id="searchHeader">
   
 
   <input type="text" name="searchText" placeholder="I'm a Sticky Search Bar!">
   <button onclick="alert('Fuck you Joji')">click me</button>

   <span id="header-contents" style="color:#fff;display:none;">This shit was hidden until you scrolled ;p </span>
      
    
 
  </div>
</div>

<script>
window.onscroll = function() {stickyScroller()};

var header = document.getElementById("searchHeader");
var sticky = header.offsetTop;

function stickyScroller() {
  if (window.pageYOffset >= sticky)
  {
    header.classList.add("sticky", "flipInX");    
    document.getElementById("header-contents").style.display = "";

  } else {
    header.classList.remove("sticky" , "flipInX");
   document.getElementById("header-contents").style.display = "none";
  }
}
</script>

<style type="text/css">
  
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

  .content {
    margin:0;
  }

  .sticky + .content {
  padding-top: 0px;
  }

  .center {
    text-align: center;
  }

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



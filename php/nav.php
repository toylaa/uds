
<link href='https://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>

<nav class="shift" >
    <!--Nav class options=(circle/stroke/fill/shift)-->
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Login</a></li>
      <div style="clear"></div>
    </ul>
  </nav>




<!-- NavBar Style via https://codepen.io/maheshambure21/pen/QwXaRw -->
<!-- CSS  style for nav 'shift' -->
<style>   
    body {
    font-family: 'Roboto', sans-serif;
    padding: 0;
    margin: 0;
  }

  small {
    font-size: 12px;
    color: rgba(0, 0, 0, 0.4);
  }

  h1 {
    text-align: center;
    padding: 50px 0;
    font-weight: 800;
    margin: 0;
    letter-spacing: -1px;
    color: inherit;
    font-size: 40px;
  }

  h2 {
    text-align: center;
    font-size: 30px;
    margin: 0;
    font-weight: 300;
    color: inherit;
    padding: 50px;
  }

    h3 {
    text-align: center;
    font-size: 20px;
    margin: 0;
    font-weight: 300;
    color: inherit;
    padding: 30px;
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
    border:5px;
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



  /* Keyframes */
  @-webkit-keyframes fill {
    0% {
      width: 0%;
      height: 1px;
    }
    50% {
      width: 100%;
      height: 1px;
    }
    100% {
      width: 100%;
      height: 100%;
      background: #333;
    }
  }

  /* Keyframes */
  @-webkit-keyframes circle {
    0% {
      width: 1px;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      margin: auto;
      height: 1px;
      z-index: -1;
      background: #eee;
      border-radius: 100%;
    }
    100% {
      background: #aaa;
      height: 5000%;
      width: 5000%;
      z-index: -1;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
      border-radius: 0;
    }
  }
</style>
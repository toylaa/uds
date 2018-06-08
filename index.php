<?php
session_start();
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous"></script>

<!-- Latest compiled and minified BOOTSTRAP CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified BOOTSTRAP JS -->
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<!-- Sweet alerts ---  https://sweetalert.js.org/guides/ -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<link rel="stylesheet" href="styles/homeStyle.css">
<link rel="stylesheet" href="styles/animate.css">


<head>
	<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: left;
}
table#t01 {
    width: 100%;    
    background-color: #f1f1c1;
}
</style>
	<title>Price Right Disposal Services</title>
</head>
<body>

<div class="page-container">

	 <?php require_once 'php/nav.php'; ?>

	<div class="content">

		<section id="main_section"	style=";background:#f1c40f;padding-top:70px;">
					<div id="searchPane" style="text-align:center;padding:5%;">
						<h1>Welcome to PriceRightDisposal.com!</h1>
						<br>
						<h2>Our mission is to make YOUR life easier.</h2>
						<br>
						<h3>Please excuse our appearance as we are under construction.</h3>	
						<br>
						<ul style="text-align:left;padding:0 30%;">
							<li>This page now has a STICKY SEARCH BAR, as SEPARATE from the NAVIGATION BAR</li>
							<li>Search bar will send a simple query to our database</li>
							<li>Search results will be thrown up on the screen</li>

						</ul>
						
						<br/>
						<h3>Here is a 'section'. Monochromatic color:#f1c40f</h3>
						<br>
						<h3>Please excuse our appearance (and our language) as we are under construction.</h3>
						<br>

						  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
						  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
						<br/>
					</div>
					<span id="infoPane" ></span>
				</section>

				

				<section id="info_section" style="background:#aa8a0a;">
					<div  style="text-align:center;padding:5%;">
						<br/>
						<h2>For the record i hate this color</h2>
						<br/>
						<h3>Here is another section. Monochromatic color:#aa8a0a</h3>
						
						<br>
						<p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
						  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
						  <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
						<br/>
					</div>
				</section>


	</div>

	<?php require_once 'php/footer.php'; ?>


</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>

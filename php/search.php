<?php
	//***DEPRECATED*** as of ***5/25/18***
	//***TCM - Call to this script REMOVED from nav.php search functionality

	//TBD - Ultimately get rid of this intermediate script because it doesn't need to be here
	session_start();

	// This is a smart idea in some places, but is a bad idea here. 
	$_SESSION['searchText'] = $_POST['searchText'];
	/*
	Taking a 'POST' variable and translating it to a session variable essentially takes transient (one-time-use) data and translates it into PERSISTENT data which will stay in the SESSION variables for that user until their cache is cleared or they close their browser.
	
	This makes sense for keeping track of things like User info and Validation criteria and such, but you typically do not want QUERY strings to persist BEYOND the page which they were intended for 

 The GET/POST/REQUEST arrays in PHP are specifically designed to handle HTTP requests which are by nature ONE-TIME-USE and not persistent.

	- In dbdata.php instead of using the persistent session data:
		 	--> $searchText = $_SESSION['searchText'];
	
	- You could/should have used one the transient HTTP request arrays instead: 
			--> $searchText = $_POST['searchText'];
			--> $searchText = $_REQUEST['searchText'];
	*/



	 //ALSO, instead of subsequencing the linkages like this - why not just call /dbdata to begin with?? 
	header("Location: /dbdata.php");
?>
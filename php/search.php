<?php

	session_start();


	$_SESSION['searchText'] = $_POST['searchText'];
	header("Location: /dbdata.php");
?>
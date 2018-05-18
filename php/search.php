<?php
	$_SESSION['searchText'] = $_POST['searchText'];
	echo $searchText;
	header("Location: /dbdata.php");
?>
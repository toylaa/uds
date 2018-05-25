<?php
	$host = "ec2-54-243-137-182.compute-1.amazonaws.com";
	$user = "qkfgniqxbkiaju";
	$password = "dd4d84b264bff6405448085e4fbc365d402d5cd8f3f3b804020682af42b8df3d";
	$dbname = "ddgdjlnmve8vcc";
	$port = "5432";

	$connectString = 'host=' . $host . ' port=' . $port . ' dbname=' . $dbname . 
		' user=' . $user . ' password=' . $password;


	$link = pg_connect ($connectString);
	if (!$link)
	{
		die('Error: Could not connect: ' . pg_last_error());
	}
?>
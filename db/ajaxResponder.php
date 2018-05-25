<?php
	require 'db/connect.php';

	$searchText = REQUEST["searchText"];
	echo $searchText;


	/*
	//TBD - refine $Query to handle more complex search criteria 

	$query = 'select * from uds_first_try.posts where name ilike \'%'.$searchText.'%\' or description ilike \'%'.$searchText.'%\'';

	$result = pg_query($query);

	//TBD - Do more Stuff 

	
	*/

?>
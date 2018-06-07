<?php
require 'connect.php';

// Changed POST to use REQUEST (same thing except bi-directional)
if (isset($_REQUEST['name']) && isset($_REQUEST['loc']) && isset($_REQUEST['phone']) && isset($_REQUEST['email']))
{
	$searchText = $_REQUEST["text"];

	//for testing (click 'services' tab --> return all items in db)



  $query = 'insert into uds_first_try.users (name, location, email, phone, website)
            VALUES ('.$_REQUEST["name"].','.$_REQUEST["loc"].','.$_REQUEST["email"].','.$_REQUEST["phone"].',
            '.$_REQUEST["website"].')';


  pg_query($query);
?>

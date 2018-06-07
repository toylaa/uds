<?php

session_start();

require 'connect.php';

// Changed POST to use REQUEST (same thing except bi-directional)


	//for testing (click 'services' tab --> return all items in db)


  $name = $_REQUEST["name"];
  $loc = $_REQUEST["loc"];
  $email = $_REQUEST["email"];
  $phone = $_REQUEST["phone"];
  $website = $_REQUEST["web"];

  $query = 'insert into uds_first_try.users (name, location, email, phone, website)
            VALUES (\''.$name.'\',\''.$loc.'\',\''.$email.'\',\''.$phone.'\',\''.$website.'\')';


  pg_query($query);

?>

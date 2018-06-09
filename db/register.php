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
  $password = $_REQUEST["psw"];

  $query = 'select * from uds_first_try.users where email = \''.$email.'\'';


  $result = pg_query($query);

  if(pg_num_rows($result) >= 1){
     echo 'User with that email already exists';
  }
  else {
    $query = 'insert into uds_first_try.users (name, location, email, phone, website, password)
              VALUES (\''.$name.'\',\''.$loc.'\',\''.$email.'\',\''.$phone.'\',\''.$website.'\',\''.$password.'\')';

    pg_query($query);
    echo 'Successfully Registered!';
  }
?>

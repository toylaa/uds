<?php

session_start();

require 'connect.php';

// Changed POST to use REQUEST (same thing except bi-directional)


	//for testing (click 'services' tab --> return all items in db)



  $query = 'insert into uds_first_try.users (name, location, email, phone, website)
            VALUES (\'t\',\'t\',\'t\',\'t\',\'t\')';


  pg_query($query);

?>

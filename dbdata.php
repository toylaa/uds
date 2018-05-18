<?php 

$host = "ec2-54-243-137-182.compute-1.amazonaws.com";
$user = "qkfgniqxbkiaju";
$password = "dd4d84b264bff6405448085e4fbc365d402d5cd8f3f3b804020682af42b8df3d";
$dbname = "ddgdjlnmve8vcc";
$port = "5432";

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n"); 

$query = "SELECT * FROM uds_first_try.posts"; 

$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

while ($row = pg_fetch_row($rs)) {
  echo "$row[0] $row[1] $row[2]\n";
}

pg_close($con); 

?>


<?php

session_start();


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


$searchText = $_SESSION['searchText'];


$query = 'select * from uds_first_try.posts';

$result = pg_query($query);

$i = 0;
echo '<html><body><table><tr>';
while ($i < pg_num_fields($result))
{
	$fieldName = pg_field_name($result, $i);
	echo '<td>' . $fieldName . '</td>';
	$i = $i + 1;
}
echo '</tr>';
$i = 0;

while ($row = pg_fetch_row($result)) 
{
	echo '<tr>';
	$count = count($row);
	$y = 0;
	while ($y < $count)
	{
		$c_row = current($row);
		echo '<td>' . $c_row . '</td>';
		next($row);
		$y = $y + 1;
	}
	echo '</tr>';
	$i = $i + 1;
}
pg_free_result($result);

echo '</table></body></html>';
echo $_SESSION['searchText'];
echo 'select * from uds_first_try.posts where name ilike \'poop\'';
?>
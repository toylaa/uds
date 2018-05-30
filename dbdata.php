
<?php

session_start();

require 'db/connect.php';
require 'php/nav.php';


$searchText = $_POST["text"];

$query = 'select * from uds_first_try.posts where name ilike \'%'.$searchText.'%\' or description ilike \'%'.$searchText.'%\'';

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
?>
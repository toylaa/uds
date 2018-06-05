
<?php

session_start();

require 'connect.php';

// Changed POST to use REQUEST (same thing except bi-directional)
if (isset($_REQUEST['text']))
{ 
	$searchText = $_REQUEST["text"];

	//for testing (click 'services' tab --> return all items in db)
	if ($searchText == '?') {
		//conditional query string - if request = '?', return all records 
		$query = 'select * from uds_first_try.posts';
	} else 
	{
		$query = 'select uds_first_try.users.name, uds_first_try.users.location, uds_first_try.users.phone, 
uds_first_try.posts.description, uds_first_try.posts.type from uds_first_try.posts inner join 
uds_first_try.users on uds_first_try.users.id = uds_first_try.posts.user_id where uds_first_try.users.name ilike \'%'.$searchText.'%\' or uds_first_try.posts.description ilike \'%'.$searchText.'%\'';
	}
// Get results of QUERY string
	$result = pg_query($query);
//
	$field_count = pg_num_fields($result);
	$row_count = pg_num_rows($result);
//
	if ($row_count > 0) 
	{
			$i = 0;
			echo '<html><body><table><tr>';
			while ($i < $field_count)
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

	} else {

			echo "error_no_results_found";	
	}

}
else{echo "error_missing_parameters";	}

?>

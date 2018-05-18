<?php 
include ('db.php');
	

//echo 'This is Index Page';
$sql = 'SELECT * FROM uds_first_try.posts';
$stmt = $pdo->query($sql);
$stmt->execute();
$rowCount = $stmt->rowCount();
$details = $stmt->pg_fetch_all();
print_r ($details);

//echo 'hello';

?>

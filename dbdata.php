<?php 
include ('db.php');
	

echo 'This is Index Page';
$sql = 'SELECT name FROM uds_first_try.posts';
$stmt = $pdo->query($sql);
$stmt->execute();
$rowCount = $stmt->rowCount();
$details = $stmt->fetch();
//print_r ($details);
print_r ($stmt->fetch());
//echo 'hello';



?>

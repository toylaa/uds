<?php 
include ('db.php');
	

echo 'This is Index Page';
$sql = 'SELECT * FROM uds_first_try.posts';
$stmt = $pdo->query($sql);
$stmt->execute();
$rowCount = $stmt->rowCount();
$details = $stmt->fetch();
print_r ($details);

echo 'hello';
echo $details[name];
?>

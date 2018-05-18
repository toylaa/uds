<?php include ('db.php')?>

	<?php require_once 'php/footer.php'; ?>
	
	<div>
	<?php
  		//echo 'This is Index Page';
  		$sql = 'SELECT id FROM uds_first_try.posts';
  		$stmt = $pdo->prepare($sql);
  		$stmt->execute();
  		$rowCount = $stmt->rowCount();
  		$details = $stmt->fetch();
  		print_r ($details);
echo '<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>';

while ($row = $stmt->fetch()) {
    echo '
        <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
        </tr>';

}

echo '
</table>';

	?>
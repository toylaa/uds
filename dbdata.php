<?php 
include ('db.php');
	

  		echo 'This is Index Page';
  		$sql = 'SELECT * FROM uds_first_try.posts';
  		$stmt = $pdo->prepare($sql);
  		$stmt->execute();
  		$rowCount = $stmt->rowCount();
  		$details = $stmt->fetch();
  		print_r ($details[name]);
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

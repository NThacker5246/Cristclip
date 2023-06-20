<?php
	require_once '../db/db.php';

	$id = (trim($_POST['likes']));

	$sql = 'SELECT likes FROM videos WHERE id = :id';

	$params = [':id' => $id];

	$stmt = $pdo->prepare($sql);
	$stmt->execute($params);

	$likes = $stmt->fetch(PDO::FETCH_OBJ);

	$likes1 = intval($likes->likes) + 1;

	$sql2 = 'UPDATE videos SET likes = :likes WHERE id = :id';

	$params = [':id' => $id, ':likes' => strval($likes1)];

	$stmt = $pdo->prepare($sql2);
	$stmt->execute($params);
	echo $likes1;

	header("Location: ./index.php")

?>
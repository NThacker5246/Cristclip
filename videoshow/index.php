<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CristClip</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-5.3.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-repeat: repeat; background: url(../fon.png); color: white;">
	<div id="content">
		<?php

			require_once '../db/db.php';
			if (empty($_COOKIE['user_name'])) {
				header('Location: ../auth/signin.php');
			}
			/*
			$sqlid = 'SELECT MAX(id) FROM :table';
			$prm = [':table' => 'videos'];
			$st = $pdo->prepare($sqlid);
			$st->execute($prm);
			*/

			$id = mt_rand(1, 3);


			$sql = 'SELECT way FROM videos WHERE id = :id';

			$params = [':id' => $id];

			$stmt = $pdo->prepare($sql);
			$stmt->execute($params);


			$VideoWay = $stmt->fetch(PDO::FETCH_OBJ);

			if ($VideoWay == false) {
				header("Location: ./index.php");
			}

			echo "<video src=" . $VideoWay->way /*"https://storage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"*/ . " id=\"vid\" controls=\"\" autoplay=\"\"></video>";
			
		?>
	</div>
	<div id="toolbar" style="margin-top: 8px; margin-left: 0px;">
		<a href="../create" style="color: white;">Create</a>
		<form method="POST" action="like.php" name="like">
			<?php
			echo "<input type=\"text\" name=\"likes\" value=" . $id . ">";
			$sqls = 'SELECT likes FROM videos WHERE id = :id';
			$param = [':id' => $id];
			$stmts = $pdo->prepare($sqls);
			$stmts->execute($param);
			$likes5 = $stmts->fetch(PDO::FETCH_OBJ);
			?>
			<button type="submit" name="like">Like</button>
		</form>
		<?php
		echo "<br>";
		echo "Curent likes: " . $likes5->likes;
		?>
	</div>
	<script type="text/javascript" src="../jquery.js"></script>
	<script type="text/javascript" src="../bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create a video for crisclip!</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-5.3.0-dist/css/bootstrap.min.css">
</head>
<body background="../fon.png">
	<?php
	if (empty($_COOKIE['user_name'])) {
		header('Location: ../auth/signin.php');
	}
	?>

	<form action="/create/send/send.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="input" accept="video/*">
		<input type="text" name="name" placeholder="Create a video name">
		<button type="submit" name="test">Send</button>
	</form>
	<script type="text/javascript" src="../jquery.js"></script>
	<script type="text/javascript" src="../bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cristclip Profile</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-5.3.0-dist/css/bootstrap.min.css">
	<!--<style type="text/css">
		html, body{
			height: 100%;
			width: 100%;
			margin: 0px;
			justify-content: center;
			align-content: center;
			display: flex;
			flex-wrap: wrap;
		}
	</style>-->
</head>
<body background="../fon.png">
	<H1><img src="R.jpg" width="64px" height="64px">Hello, 
		<?php
			echo $_COOKIE['user_name'];
		?>!
	</H1>
	<br>
	<hr>
	<a href="../videoshow/index.php" style="color: white;">See simple clips</a>
	<br>
	<a href="../create/index.php" style="color: white;">Create you clip</a>

	<script type="text/javascript" src="../jquery.js"></script>
	<script type="text/javascript" src="../bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php
require_once '../db/db.php';

setcookie('user_name', $_POST['login'], time() + 14400, '/', 'localhost');

$login = trim($_POST['login']);
$pwd = trim($_POST['pwd']);


if (!empty($login) && !empty($pwd)) {

	$sql = 'SELECT login, password FROM users WHERE login = :login';
	$params = [':login' => $login];

	$stmt = $pdo->prepare($sql);
	$stmt->execute($params);
	$user = $stmt->fetch(PDO::FETCH_OBJ);

	if($user){
		if (password_verify($pwd, $user->password)) {
			header('Location: ../profile/index.php');
		} else {
			echo "Inncorect password";
		}
	} else {
		echo "Inncorect Login";
	}

}



?>
<?php 
require_once '../db/db.php';

$login = trim($_POST['login']);
$pwd = trim($_POST['pwd']);

if (!empty($login) && !empty($pwd)) {

	$sql_check = 'SELECT EXISTS( SELECT login FROM users WHERE login = :login)';
	$stmt_check = $pdo->prepare($sql_check);
	$stmt_check->execute( [':login' => $login] );
	if ($stmt_check->fetchColumn()) {
		die("The user created. Rewrite login");
	}

	$pwd = password_hash($pwd, PASSWORD_DEFAULT);
	$sql = 'INSERT INTO users(login, password) VALUES(:login, :pwd)';
	$params = [':login' => $login, ':pwd' => $pwd];

	$stmt = $pdo->prepare($sql);
	$stmt->execute($params);

	echo "You've been registed";
} else {
	echo "Write all inputs!";
}

 ?>
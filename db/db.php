<?php

$driver = 'mysql';
$charset = 'utf8';
$host = 'localhost';
$db_name = 'cristclip';
$db_user = 'root';
$db_pwd = '123';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
	$pdo = new PDO("$driver:host=$host;charset=$charset;dbname=$db_name", $db_user, $db_pwd, $options);
} catch (PDOException $e) {
	die('Server almost died');
}



?>
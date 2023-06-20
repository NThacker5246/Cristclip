<?php
require_once '../../db/db.php';
print_r($_FILES['input']);
$name = $_POST['name'];
$file = $_FILES['input'];
$file_name = $file['name'];
$file_tmp = $file['tmp_name'];
$file_size = $file['size'];
$file_error = $file['error'];
if($file_error == 0){
    $destination = '../../videos/' . $file_name;
    move_uploaded_file($file_tmp, $destination);
    echo 'Файл успешно загружен на сервер.';
    $sql = 'INSERT INTO videos(name, way, author) VALUES (:name, :way, :author)';
    $params = [':name' => $name, ':way' => '../videos/' . $file_name, ':author' => $_COOKIE['user_name']];
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    header("Location: ../../videoshow/");
} else {
    echo 'Произошла ошибка при загрузке файла.';
}

?>
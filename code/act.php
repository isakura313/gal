<?php
$uploaddir = 'img/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$uploadname = $_POST['description'];

require("../parts/connect.php");
require("../parts/insert.php");

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
// require("../parts/insert.php");

} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

echo 'Некоторая отладочная информация:';
print_r($_FILES);
print_r($_POST);

print "</pre>";

?>
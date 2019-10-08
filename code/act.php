<?php
require("../includes/head.inc.php");
$uploaddir = 'img/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$uploadname = $_POST['description'];

require("../includes/con.inc.php");
require("../includes/insert.inc.php");

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "<h3><span class='label'>
 Файл корректен и был успешно загружен!!
 </span></h3>";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}
?>
<script>
setTimeout(() => {
    window.location.href = "http://192.168.64.3/gallery/create.php";
}, 2000);

</script>
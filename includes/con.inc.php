<?php
$link = new mysqli("localhost", "root", "", "gal1");
mysqli_set_charset($link, "utf8");
if (mysqli_connect_errno()) {
    printf("Соединение не установлено: %s\n", mysqli_connect_error());
    exit();
} else{
    // echo "good";
}



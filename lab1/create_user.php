<?php
include "db_utils.php";
$link = mysqli_connect("localhost", "root", "");

//*.* - глобальний рівень привілеїв, застосовується до всіх баз на сервері
$query = "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'admin' WITH GRANT OPTION";

mysqliQuery($link, "створення користувача", $query);
<?php
include "db_utils.php";

$link = mysqli_connect("localhost", "root", "");
if (!$link) return;
echo "З'єднання з сервером встановлено <br>";

$db = "MySiteDB";
$query = "CREATE DATABASE $db";

mysqliQuery($link, "база даних", $query);

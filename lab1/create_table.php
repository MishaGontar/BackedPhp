<?php
include "db_utils.php";
$link = mysqli_connect("localhost", "root", "");

$db = "MySiteDB";
mysqli_select_db($link, $db);

$create_owners_table = "CREATE TABLE `owners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
)";

mysqliQuery($link, "create_owners_table", $create_owners_table);

$create_flats_table = "CREATE TABLE `flats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district` varchar(255) NOT NULL,
  `floor` int(11) NOT NULL,
  `area` float NOT NULL,
  `rooms` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`owner_id`) REFERENCES `owners`(`id`) ON DELETE CASCADE
)";

mysqliQuery($link, "create_flats_table", $create_flats_table);
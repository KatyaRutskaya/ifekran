<?php
require_once "reg/connect.php";

$name = $_POST["name"];
$shifr = $_POST["shifr"];
$number = $_POST["number"];
$id = $_POST["id"];

$var = "UPDATE `belkomunash` SET `name` = '$name', `shifr` = '$shifr', `number` = '$number' WHERE `belkomunash`.`id` =$id";
if (mysql_query($var)) {
      header('location: admin.php');
} else {
      echo "Error: " . $var . "<br>" . mysql_error();
}
mysql_close();
?>
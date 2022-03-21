<?php
require_once "reg/connect.php";
$login = $_POST["login"];
$password = $_POST["password"];
$id = $_POST["id"];




$var = "UPDATE `ekran`.`users` SET `login` = '$login', `password` = '$password' WHERE `users`.`id` =$id";
if (mysql_query($var)) {
      header('location: admin.php');
} else {
      echo "Error: " . $var . "<br>" . mysql_error();
}
mysql_close();

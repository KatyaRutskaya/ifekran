<?php
require_once "reg/connect.php";
$login = $_POST["login"];
$password = $_POST["password"];



$sql = "INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, '$login', '$password')";
if (mysql_query($sql)) {
      header('location: admin.php');
} else {
      echo "Error: " . $sql . "<br>" . mysql_error();
}
mysql_close();

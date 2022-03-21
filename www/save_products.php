<?php
require_once "reg/connect.php";
$id = $_POST["id"];
$name = $_POST["name"];
$var = "UPDATE `ekran`.`products` SET `name` = '$name' WHERE `products`.`id` =$id";
if (mysql_query($var)) {
      header('location: admin.php');
} else {
      echo "Error: " . $var . "<br>" . mysql_error();
}
mysql_close();

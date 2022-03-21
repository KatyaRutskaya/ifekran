<?php
require_once "reg/connect.php";

$title = $_POST["title"];
$id = $_POST["id"];



$var = "UPDATE `ekran`.`portfolio` SET `title` = '$title' WHERE `portfolio`.`id` =$id"; 
if (mysql_query($var)) {
      header('location: admin.php');
} else {
      echo "Error: " . $var . "<br>" . mysql_error();
}
mysql_close();

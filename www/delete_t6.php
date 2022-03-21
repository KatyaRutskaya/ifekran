<?php
require_once "reg/connect.php";

$id = $_GET["id"];
$var = "DELETE FROM `ekran`.`goods6` WHERE `goods6`.`id` = $id";


if (mysql_query($var)) {
      header('location: admin.php');
} else {
      echo "Error: " . $var . "<br>" . mysql_error();
}
mysql_close();



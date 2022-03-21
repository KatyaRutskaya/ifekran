<?php
require_once "reg/connect.php";

$image = $_POST["image"];
$title = $_POST["title"];
$id = $_POST["id"];

$var = "UPDATE `img` SET `image` = '$image',`title` = '$title' WHERE `id` =$id";
if (mysql_query($var)) {
      header('location: admin.php');
} else {
      echo "Error: " . $var . "<br>" . mysql_error();
}
mysql_close();
?>
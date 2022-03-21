<?php
require_once "reg/connect.php";
$good = $_POST["good"];
$category_id = $_POST["category_id"];
$brand_id = $_POST["brand_id"];
$price = $_POST["price"];
$rating = $_POST["rating"];
$photo = $_POST["photo"];


$sql = "INSERT INTO `goods` (`id`, `good`, `category_id`, `brand_id`, `price`, `rating`, `photo`) VALUES (NULL, '$good', '$category_id', '$brand_id', '$price', '$rating', '$photo')";
if (mysql_query($sql)) {
      header('location: admin.php');
} else {
      echo "Error: " . $sql . "<br>" . mysql_error();
}
mysql_close();

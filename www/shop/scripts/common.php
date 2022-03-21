<?php

// Объявляем нужные константы
$servername = "localhost";
$username = "ekran";
$password = "1234";
$db = "ekran";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
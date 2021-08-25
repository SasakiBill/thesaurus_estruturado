<?php

header('Content-Type: text/html; charset=UTF-8');

$server = "localhost";
$username = "root";
$password = "";
$dbname = "tesauro";

$conn = mysqli_connect($server, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8mb4");

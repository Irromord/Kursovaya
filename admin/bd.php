<?php
$servername = "37.140.192.237";
$username = "u1290354_root";
$password = "Safe555!";
$dbname = "u1290354_BakeOrders";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$conn->set_charset("utf8");
    ?>

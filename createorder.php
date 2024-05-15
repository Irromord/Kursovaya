<?php

$id = $_POST[text2];
$name = $_POST[text3];
$phone = $_POST[text4];
$coffee = $_POST[text5];
$bun = $_POST[text6];
$snack = $_POST[text7];

$servername = "37.140.192.237";
$username = "u1290354_root";
$password = "Safe555!";
$dbname = "u1290354_BakeOrders";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$conn->set_charset("utf8");


$sql = "INSERT INTO Orders (Name,Phone,Coffee,Bun,Snack) VALUES ('$name','$phone','$coffee','$bun','$snack')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>
<?php
session_start();
include ("bd.php");
if(!isset($_SESSION["login"])):
	header("location:loggg.php");
else:{
echo $_POST['id'];
if (isset($_POST['id'])) { $id = $_POST['id'];}

$result = mysqli_query ($conn,"DELETE FROM Orders WHERE id = '$id'");
}
endif; ?>

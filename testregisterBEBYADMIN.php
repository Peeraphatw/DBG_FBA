<?php
session_start();
include("condb.php");
	$username = $_REQUEST["username"];
	$password = $_REQUEST["password"];
	$name = $_REQUEST["titles"]."".$_REQUEST["name"];
	$lastname = $_REQUEST["lastname"];
	$department = $_REQUEST["department"];
	$number = $_REQUEST["number"];
	$sql = "INSERT INTO user_dbg(username,password,name,lastname,department,number,mlev)
VALUES ('$username','$password','$name','$lastname','$department','$number','user');";
    $rs = mysqli_query ($con,$sql);
if ($rs) {
	echo "<script>";
	echo "location.href='tables.php'";
	echo "</script>";
   } else {
    echo "Error:";
}
	?>
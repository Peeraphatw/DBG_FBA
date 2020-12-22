<?php 

session_start(); 


include 'condb.php';

    $id=$_REQUEST['pid'];
    $username = $_REQUEST["username"];
	$password = $_REQUEST["password"];
	$name = $_REQUEST["name"];
	$lastname = $_REQUEST["lastname"];
	$department = $_REQUEST["department"];
	$number = $_REQUEST["number"];
    $mlev=$_REQUEST['mlev'];

$sql= "UPDATE user_dbg SET username='$username',password='$password',name='$name',lastname='$lastname',department='$department',number='$number',mlev='$mlev' WHERE id='$id'";
$rs = mysqli_query( $con,$sql);
if (($rs)==TRUE) {
	echo "<script>";
    echo "location.href='tables.php'";
    echo "</script>";
   } else {
    echo "Error:";
}
?>
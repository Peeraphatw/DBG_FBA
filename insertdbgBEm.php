<?php
session_start();
include("condb.php");
	$serial = $_REQUEST["serial"];
	$date = $_REQUEST["date"];
	$name = $_REQUEST["name"];
	$detail = $_REQUEST["detail"];
	$d_number= $_REQUEST["d_number"];
    $date_p= $_REQUEST["date_p"];
    $picker= $_REQUEST["picker"];
	$price= $_REQUEST["price"];
	// Upload image
$ext = pathinfo(basename($_FILES['dbg_pic']['name']),PATHINFO_EXTENSION);
$new_image_name = 'imgm_'.uniqid().".".$ext;
$image_path = "Pic/";
$upload_path = $image_path.$new_image_name;
// uploading
$success = move_uploaded_file($_FILES['dbg_pic']['tmp_name'],$upload_path);
$dbg_pic = $new_image_name;
	$sql="INSERT INTO durabl_fbam(serial,date,name,detail,d_number,dbg_pic,date_p,picker,price) VALUE('$serial','$date','$name','$detail','$d_number','$dbg_pic','$date_p','$picker','$price')";
    $rs = mysqli_query ($con,$sql);
if ($rs) {
	echo "<script>";
	echo "location.href='durable_admin1.php'";
	echo "</script>";
   } else {
    echo "Error:";
}	
	?>
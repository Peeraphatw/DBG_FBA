<?php 

include 'condb.php';

$id=$_REQUEST['pid'];
$dbg_pic=$_REQUEST['dbg_pic'];
// Upload image
$ext = pathinfo(basename($_FILES['dbg_pic']['name']),PATHINFO_EXTENSION);
$new_image_name = 'img_'.uniqid().".".$ext;
$image_path = "Pic/";
$upload_path = $image_path.$new_image_name;
// uploading
$success = move_uploaded_file($_FILES['dbg_pic']['tmp_name'],$upload_path);
$dbg_pic = $new_image_name;
$sql= "UPDATE durabl_fba SET dbg_pic='$dbg_pic'WHERE id='$id'";
    $rs = mysqli_query ($con,$sql);
if ($rs) {
	echo "<script>";
	echo "location.href='durable_admin.php'";
	echo "</script>";
   } else {
    echo "ErrorNAJA:";
}
?>
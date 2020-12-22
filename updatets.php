<?php
include 'condb.php';

$id=$_REQUEST['eid'];
$serial=$_REQUEST['serial'];
$date=$_REQUEST['date'];
$name=$_REQUEST['name'];
$detail=$_REQUEST['detail'];
$d_number=$_REQUEST['d_number'];
$date_p=$_REQUEST['date_p'];
$picker=$_REQUEST['picker'];
$price=$_REQUEST['price'];
		// Upload image
$ext = pathinfo(basename($_FILES['dbg_pic']['name']),PATHINFO_EXTENSION);
$new_image_name = 'img_'.uniqid().".".$ext;
$image_path = "Pic/";
$upload_path = $image_path.$new_image_name;
// uploading
$success = move_uploaded_file($_FILES['dbg_pic']['tmp_name'],$upload_path);
$dbg_pic = $new_image_name;
	$sql="UPDATE durabl_fba SET serial='$serial',date='$date',name='$name',detail='$detail',d_number='$d_number',date_p='$date_p',picker='$picker',price='$price' WHERE id='$id'";
    $rs = mysqli_query ($con,$sql);
    if (($rs)==TRUE) {
        echo "<script>";
        echo "location.href='durable_admin.php'";
        echo "</script>";
       } else {
        echo "Error:";
    }
    if($_FILES['dbg_pic']['name'] != "")
	{
		if(($success)==TRUE)
		{
            //*** Delete Old File ***//			
            $q = "SELECT dbg_pic FROM durabl_fba WHERE id='$id'";
            $rs1 = mysqli_query($con,$q);
            $dbg_picold = mysqli_fetch_array($rs1,MYSQLI_NUM);
            $filename = $dbg_picold[0];
            @unlink('Pic/'.$filename);
			//*** Update New File ***//
            $sql2="UPDATE durabl_fba SET dbg_pic='$dbg_pic' WHERE id='$id'";
            $rs2 = mysqli_query ($con,$sql2);
			if (($rs2)==TRUE) {
                echo "<script>";
                echo "location.href='durable_admin.php'";
                echo "</script>";
               } else {
                echo "ErrorNAJA:";
            }
		}
	}
	?>
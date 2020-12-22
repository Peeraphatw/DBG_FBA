<?php 

include 'condb.php';

$id=$_REQUEST['did'];

$q = "SELECT dbg_pic FROM durabl_fba WHERE id='$id'";

$rs1 = mysqli_query($con,$q);
$dbg_pic = mysqli_fetch_array($rs1,MYSQLI_NUM);
$filename = $dbg_pic[0];

@unlink('Pic/'.$filename);

$sql= "DELETE FROM durabl_fba WHERE id = '$id'";

$rs = mysqli_query( $con,$sql);


if (($rs)==TRUE) {
	echo "<script>";
    echo "location.href='durable_admin.php'";
    echo "</script>";
   } else {
    echo "Error:";
}

                    
	

	
	?>
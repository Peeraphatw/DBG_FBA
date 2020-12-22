<?php 

include 'condb.php';

$id=$_REQUEST['id'];

$sql= "UPDATE user_dbg SET mlev='user' WHERE id = '$id'";

$rs = mysqli_query( $con,$sql);


if (($rs)==TRUE) {
	echo "<script>";
    echo "location.href='tables.php'";
    echo "</script>";
    
   } else {
    echo "Error:";
}

                    
	

	
	?>
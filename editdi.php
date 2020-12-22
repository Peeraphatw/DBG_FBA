<?php 

session_start(); 


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

$sql= "UPDATE durabl_fba SET serial='$serial',date='$date',name='$name',detail='$detail',d_number='$d_number',date_p='$date_p',picker='$picker',price='$price' WHERE id='$id'";
$rs = mysqli_query( $con,$sql);
if (($rs)==TRUE) {
	echo "<script>";
    echo "location.href='durable_admin.php'";
    echo "</script>";
   } else {
    echo "Error:";
}
?>
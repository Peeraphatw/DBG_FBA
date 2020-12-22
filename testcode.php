<?php
header('Content-Type: text/html; charset=utf-8');



$sql = "SELECT * FROM durabl_fba ";

$bt="WHERE (name LIKE '%".$_GET["name"]."%')";
$sql.=$bt;
echo"$sql";


	
?>
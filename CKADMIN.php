<?php 
session_start();
if($_SESSION["mlev"]=="user"){
    header("Location:mainus.php");
}
if($_SESSION["mlev"]=="รออนุมัติ"||empty($_SESSION["mlev"])){
    session_destroy();
    header("Location:index.php");
}

?>
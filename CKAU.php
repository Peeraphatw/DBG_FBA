<?php 
session_start();
if($_SESSION["mlev"]=="user"){

    header("Location:mainus.php");

}
if($_SESSION["mlev"]=="admin"){

    header("Location:mainad.php");

}
if($_SESSION["mlev"]=="รออนุมัติ"){

    header("Location:wait01.php");

}
?>
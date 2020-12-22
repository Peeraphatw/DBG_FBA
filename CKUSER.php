<?php 
session_start();
if($_SESSION["mlev"]=="admin"){

    header("Location:mainad.php");

}

if($_SESSION["mlev"]=="รออนุมัติ"||empty($_SESSION["mlev"])){
    session_destroy();
    header("Location:index01.php");
}

?>
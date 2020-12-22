<!doctype html>
<?php

session_start();
include("CKAU.php");

?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>หน้าหลัก</title>
    <link rel="shortcut icon" type="imge/png" href="assets/images/logofbafv.png">
</head>

<body>
    <div class="main">
        <div class="container h-80">
            <div class="row align-items-center h-100">
                <div class="col-xs-4 col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
                    <div class="text-center w-75 mx-auto">
                        <img src="assets/Images/logofba.png" id="icon" alt="User Icon" />
                        <p id="profile-name" class="profile-name-card"></p>
                        <form action="aulogin.php" method="POST">
                            <div class="form-group">
                                <input type="username" class="form-control" name="username" aria-describedby="emailHelp"
                                    placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary bg-success" value="เข้าสู่ระบบ">
                                <a href="register01.php">
                                    <h6>สมัครสมาชิก</h6>
                                </a>
                                <a href="คู่มือ.pdf" target="_blank">
                                    <h6>คู่มือการใช้งาน</h6>
                                </a>
                            </div>
                        </form>
                        <!-- /form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>
</body>

</html>
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

    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style01.css">
    <title>สมัครใช้งานระบบ</title>
    <link rel="shortcut icon" type="imge/png" href="assets/images/logofbafv.png">
</head>

<body>



    <div class="main">

        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="card">

                        <div class="card-body shadow">
                            <a href="index.php" style="text-decoration: none; color:black; float:right;">
                                <h5>x</h5>
                            </a>
                            <form name="Register" action="testregisterBE.php" method="post">
                                <center><img src="assets/Images/logofba.png" id="icon" alt="User Icon" width="150"
                                        height="150"></center>
                                <br /><br />
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label for="inputUsername4">Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Username"
                                            required="required">
                                    </div>
                                    <div class="form-group col-md-6 mr-">
                                        <label for="inputUsername4">Password</label>
                                        <input type="text" class="form-control" name="password" placeholder="Password"
                                            required="required">
                                    </div>


                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3 ">
                                        <label for="titles">คำนำหน้า</label>
                                        <select name="titles" class="form-control" required="required">
                                            <option disabled="disabled" selected>คำนำหน้า</option>
                                            <option>นาย</option>
                                            <option>นางสาว</option>
                                            <option>นาง</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputname">ชื่อ</label>
                                        <input type="text" class="form-control" name="name" placeholder="ชื่อ"
                                            required="required">

                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputZip">นามสกุล</label>
                                        <input type="text" class="form-control" name="lastname" placeholder="นามสกุล"
                                            required="required">
                                    </div>
                                </div>
                                <div class="form-row">

                                    <div class="form-group col-md-4">
                                        <label for="department">หมวด/สาขา</label>
                                        <select name="department" class="form-control" required="required">
                                            <option disabled="disabled" selected>หมวด/สาขา</option>
                                            <option>สำนักงานคณะบดี</option>
                                            <option>สาขาบัญชี</option>
                                            <option>สาขาคอมพิวเตอร์</option>
                                            <option>สาขาโลจิสติก</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md">
                                        <label for="inputNumer">เบอร์โทร</label>
                                        <input type="text" class="form-control" name="number" placeholder="เบอร์โทร"
                                            required="required">

                                    </div>


                                </div>
                                <br />
                                <center><input type="submit" class="btn btn-success" name="submit"
                                        value="ยืนยัน">&nbsp;<input class="btn btn-info" type="reset" value="ยกเลิก">
                                </center>
                            </form>

                            <br />
                        </div> <!-- card-body end .// -->

                    </div> <!-- card.// -->
                </div> <!-- col.//-->

            </div> <!-- row.//-->


        </div>
        <!--container end.//-->





        <!-- Bootstrap core JavaScript-->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="=assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="assets/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="assets/js/demo/datatables-demo.js"></script>

</body>

</html>
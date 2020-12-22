<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style01.css">
    <title>รออนุมัติ</title>
    <style>
    html {
        font-size: 14px;
    }
    </style>
</head>

<body>
    <?php 
session_start();
  ?>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <center><img src="assets/Images/logofba.png" id="icon" alt="User Icon" width="150"
                                    height="150"></center>
                            <table class="table table-bordered " width="100%">
                                <br />
                                <tr>
                                    <th width="20%" style="text-align:center" ;>
                                        <h6 class="font-weight-bold">ลำดับที่</h6>
                                    </th>
                                    <th width="30%" style="text-align:center" ;>
                                        <h6 class="font-weight-bold">ชื่อ</h6>
                                    </th>
                                    <th width="30%" style="text-align:center" ;>
                                        <h6 class="font-weight-bold">นามสกุล</h6>
                                    </th>
                                    <th width="30%" style="text-align:center" ;>
                                        <h6 class="font-weight-bold">สถานะ</h6>
                                    </th>
                                </tr>
                                <tr>
                                    <!-- form -->
                                    <td style="text-align:center" ; valign="top" ;><?php echo  $_SESSION["id"]; ?></td>
                                    <td style="text-align:center" ; valign="top" ;><?php echo  $_SESSION["name"]; ?>
                                    </td>
                                    <td style="text-align:center" ; valign="top" ;><?php echo  $_SESSION["lastname"]; ?>
                                    </td>
                                    <td class="text-danger" style="text-align:center" ; valign="top" ;>
                                        <b><?php echo  $_SESSION["mlev"]; ?></b>
                                    </td>
                                </tr>
                            </table>
                            <br />
                            <center><button onclick="goBack()" class="btn btn-primary">กลับหน้าหลัก</button></center>
                            <script>
                            function goBack() {
                                window.location = "logout.php";
                            }
                            </script>
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
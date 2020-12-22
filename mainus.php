<!DOCTYPE html>
<?php session_start(); 
include("CKUSER.php"); 

?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>หน้าหลักรายการครุภัณฑ์</title>
    <link rel="shortcut icon" type="imge/png" href="assets/images/logofbafv.png">
    <!-- Custom fonts for this template -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
    html {
        font-size: 14px;
    }

    td {
        word-break: break-all;
    }
    </style>

</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <br>
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon">
                    <img src="assets/Images/logo1.png">
                </div>
                <div class="sidebar-brand-text mx-3 text-gray-100">FBA DURABLE</div>
            </a>
            <br>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="mainus.php">
                    <i class="fas fa-door-open"></i>
                    <span>หน้าแรก</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="durable_user.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>ครุภัณฑ์เงินรายได้</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="durable_user1.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>ครุภัณฑ์งบประมาณแผ่นดิน</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Print1.php">
                    <i class="fas fa-print"></i>
                    <span>พิมพ์รายการครุภัณฑ์</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="update_p1.php">
                    <i class="fas fa-id-card"></i>
                    <span>จัดการข้อมูลส่วนตัว</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-power-off"></i>
                    <span>ออกจากระบบ</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600"><?php echo  $_SESSION["name"]; ?>&nbsp;<?php echo  $_SESSION["lastname"]; ?></span>
                                <img class="img-profile rounded-circle" src="assets/images/user.png">
                            </a>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <p class="h1 mb-0 mr-3 font-weight-bold text-gray-800">ยินดีต้อนรับเข้าสู่ ระบบครุภัณฑ์
                        คณะบริหารธุรกิจ</p>
                    <!-- Content Row -->
                    <br>
                    <div class="row">

                        <?php 
          include('condb.php');
        //   เงินรายได้
          $sql1="SELECT * FROM durabl_fba"; 
          $rs1=mysqli_query($con,$sql1);
          $cnall1= mysqli_num_rows($rs1);
        //   เงินงบประมาณ
          $sql2="SELECT * FROM durabl_fbam"; 
          $rs2=mysqli_query($con,$sql2);
          $cnall2= mysqli_num_rows($rs2);
          
          $cnall3= $cnall1+ $cnall2;
          ////////////////////////////////////////////////////////////////////////////////////////////////////////
          $sqlp1="SELECT * FROM durabl_fba WHERE (picker LIKE '%".$_SESSION["name"]."%')"; 
          $rsp1=mysqli_query($con,$sqlp1);
          $cnallp1= mysqli_num_rows($rsp1);

          $sqlp2="SELECT * FROM durabl_fbam WHERE (picker LIKE '%".$_SESSION["name"]."%')"; 
          $rsp2=mysqli_query($con,$sqlp2);
          $cnallp2= mysqli_num_rows($rsp2);
          
          $cnallp3= $cnallp1+ $cnallp2;
          
          
          ?>



                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="print1.php" style="text-decoration: none">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-lg font-weight-bold  text-uppercase mb-1">
                                                    จำนวนครุภัณฑ์ทั้งหมด</div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                            <?php echo"$cnall3"; ?>&nbsp;รายการ</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="durable_user.php" style="text-decoration: none">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-lg font-weight-bold  text-uppercase mb-1">
                                                    จำนวนครุภัณฑ์เงินรายได้</div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                            <?php echo"$cnall1"; ?>&nbsp;รายการ</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a href="durable_user1.php" style="text-decoration: none">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-lg font-weight-bold  text-uppercase mb-1">
                                                    จำนวนครุภัณฑ์เงินงบประมาณแผ่นดิน</div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                            <?php echo"$cnall2"; ?>&nbsp;รายการ</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold  text-uppercase mb-1">
                                                จำนวนครุภัณฑ์ที่ท่านเบิก</div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        <?php echo"$cnallp3"; ?>&nbsp;รายการ</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>




            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>คณะบริหารธุรกิจ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ วิทยาเขตระยอง &copy;2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-gray-800">
                    <h5 class="modal-title" id="exampleModalLabel">ต้องการออกจากระบบ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-gray-800">กดที่ปุ่ม"Logout"เพื่่อทำการออกจากระบบ</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
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
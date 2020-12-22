<!DOCTYPE html>
<?php session_start(); 
include("CKADMIN.php"); 

?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
<title>แก้ใขข้อมูลส่วนตัว</title>
<link rel="shortcut icon" type="imge/png" href="assets/images/logofbafv.png">
 <!-- Custom fonts for this template -->
 <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <style>
html {
    font-size:14px;
}

</style>
  
  
</head>
<?php

session_start(); 

?>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
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
  <a class="nav-link" href="mainad.php">
  <i class="fas fa-door-open"></i>
    <span>หน้าแรก</span></a>
</li>



<!-- Nav Item - Charts -->
<li class="nav-item">
  <a class="nav-link" href="durable_admin.php">
    <i class="fas fa-fw fa-table"></i>
    <span>ครุภัณฑ์เงินรายได้</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="durable_admin1.php">
    <i class="fas fa-fw fa-table"></i>
    <span>ครุภัณฑ์งบประมาณแผ่นดิน</span></a>
</li>
<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="tables.php">
    <i class="fas fa-fw fa-table"></i>
    <span>การจัดการสมาชิก</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="print.php">
  <i class="fas fa-print"></i>
    <span>พิมพ์รายการครุภัณฑ์</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="update_p.php">
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
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-800"><?php echo  $_SESSION["name"]; ?>&nbsp;<?php echo  $_SESSION["lastname"]; ?></span>
        <img class="img-profile rounded-circle" src="assets/images/user.png">
      </a>

  </ul>

</nav>
<!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800 ">ข้อมูลส่วนตัว</h1>
          

          <!-- Content Row -->
          <div class="row">

          <div class="col-xs-12 col-sm-10 col-md-10 col-lg-7 col-xl-4">

              <!-- Area Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3 text-gray-800 bg-gradient-primary">
                  <h6 class="m-0 font-weight-bold text-gray-100">แก้ใขข้อมูลส่วนตัว</h6>
                </div>
                <div class="card-body text-gray-800">
                  
                  <form action="updateBE.php" method="post">
    <div class="form-group">
    <label for="exampleFormControlInput1">Username</label>
    <input type="hidden" class="form-control" name="id" value="<?php echo $_SESSION["id"]; ?>">
    <input type="text" class="form-control" name="username" value="<?php echo $_SESSION["username"]; ?>" readonly>
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Password</label>
    <input type="text" class="form-control" name="password" value="<?php echo $_SESSION["password"]; ?>">
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">ชื่อ</label>
    <input type="text" class="form-control" name="name" value="<?php echo $_SESSION["name"]; ?>">
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">นามสกุล</label>
    <input type="text" class="form-control" name="lastname" value="<?php echo $_SESSION["lastname"]; ?>">
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1">สาขา/หมวด</label>
    <select class="form-control w-50"  name="department">
      <?php
    if( $_SESSION["department"] =="สาขาบัญชี"){
                          echo"
                          <option>$_SESSION[department]</option>
                          <option>สาขาคอมพิวเตอร์</option>
                          <option>สาขาโลจิสติก</option>
                          <option>สำนักงานคณบดี</option>";

                        }
                        if( $_SESSION["department"] =="สาขาคอมพิวเตอร์"){
                          echo"
                          <option>$_SESSION[department]</option>
                          <option>สาขาบัญชี</option>
                          <option>สาขาโลจิสติก</option>
                          <option>สำนักงานคณบดี</option>";

                        }
                        if( $_SESSION["department"] =="สาขาโลจิสติก"){
                          echo"
                          <option>$_SESSION[department]</option>
                          <option>สาขาบัญชี</option>
                          <option>สาขาคอมพิวเตอร์</option>
                          <option>สำนักงานคณบดี</option>";

                        }
                        if( $_SESSION["department"] =="สำนักงานคณบดี"){
                          echo"
                          <option>$_SESSION[department]</option>
                          <option>สาขาบัญชี</option>
                          <option>สาขาคอมพิวเตอร์</option>
                          <option>สาขาโลจิสติก</option>";

                        }
                        ?>
      </select>
    </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">เบอร์โทรศัพท์</label>
    <input type="text" class="form-control" name="number" value="<?php echo $_SESSION["number"]; ?>">
    </div>

    <input class="btn btn-primary" type="submit" value="ยืนยัน">
    <input class="btn btn-info" type="reset" value="ยกเลิก">
    
    </form>
                  
                </div>
              </div>

            

        </div>
        <!-- /.container-fluid -->

      </div>
      </div>
      </div>

      <!-- End of Main Content -->
        
      
      <!-- Footer -->
      
      <footer class="sticky-footer bg-white ">
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

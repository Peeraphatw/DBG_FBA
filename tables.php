<!DOCTYPE html>
<html lang="en">
<?php session_start(); 
include("CKADMIN.php"); 

?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>หน้าจัดการผู้ใช้งาน</title>
    <link rel="shortcut icon" type="imge/png" href="assets/images/logofbafv.png">

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                <a class="nav-link" href="Print.php">
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


                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">รายการผู้ร้องขอ</h1>
                    <div class="row">
                        <div class="col-xs-3 col-sm-5 col-md-5 col-lg-3 col-xl-2">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3 bg-gradient-primary ">
                                    <h6 class="m-0 font-weight-bold text-gray-100 ">เพิ่มผู้ใช้งานระบบ</h6>
                                </div>
                                <div class="card-body mx-auto">
                                    <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <br>
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text text-gray-100">เพิ่มผู้ใช้งาน</span>
                                    </a></h6>
                                </div>
                            </div>
                        </div>

                    </div>

                    <br>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header text text-gray-800">
                                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มผู้ใช้งาน</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-gray-800">
                                    <form name="Register" action="testregisterBEBYADMIN.php" method="post">
                                        <label for="inputUsername4">Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Username"
                                            required="required">
                                        <label for="inputUsername4">Password</label>
                                        <input type="text" class="form-control" name="password" placeholder="Password"
                                            required="required">
                                        <label for="inputname">ชื่อ</label>
                                        <input type="text" class="form-control" name="name" placeholder="ชื่อ"
                                            required="required">
                                        <label for="inputZip">นามสกุล</label>
                                        <input type="text" class="form-control" name="lastname" placeholder="นามสกุล"
                                            required="required">
                                        <label for="department">หมวด/สาขา</label>
                                        <select name="department" class="form-control" required="required">
                                            <option disabled="disabled" selected>หมวด/สาขา</option>
                                            <option>สำนักงานคณบดี</option>
                                            <option>สาขาบัญชี</option>
                                            <option>สาขาคอมพิวเตอร์</option>
                                            <option>สาขาโลจิสติก</option>
                                        </select>
                                        <label for="inputNumer">เบอร์โทร</label>
                                        <input type="text" class="form-control" name="number" placeholder="เบอร์โทร"
                                            required="required">
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-primary" value="ยืนยัน">
                                    <button type="reset" class="btn btn-secondary">ยกเลิก</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-gradient-primary">
                            <h6 class="m-0 font-weight-bold text-gray-100">รายชื่อผู้ร้องขอ</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered text-gray-800" id="#dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>Username</th>
                                            <th>รหัสผ่าน</th>
                                            <th>ชื่อ</th>
                                            <th>นามสกุล</th>
                                            <th>หมวด/สาขา</th>
                                            <th>เบอร์โทร</th>
                                            <th>สถานะ</th>
                                            <th>ยืนยัน</th>
                                            <th>ลบ</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>Username</th>
                                            <th>รหัสผ่าน</th>
                                            <th>ชื่อ</th>
                                            <th>นามสกุล</th>
                                            <th>หมวด/สาขา</th>
                                            <th>เบอร์โทร</th>
                                            <th>สถานะ</th>
                                            <th>ยืนยัน</th>
                                            <th>ลบ</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>


                                        <!-- php -->
                                        <?php
session_start();
include("condb.php");
$sql = "SELECT *  FROM user_dbg WHERE mlev='รออนุมัติ'";
$result = mysqli_query ($con,$sql);
while ($rs = mysqli_fetch_array($result)){
   
    echo"<tr>";
        echo"<td>$rs[id]</td>";
        echo"<td>$rs[username]</td>";
        echo"<td>$rs[password]</td>";
        echo"<td>$rs[name]</td>";
        echo"<td>$rs[lastname]</td>";
        echo"<td>$rs[department]</td>";
        echo"<td>$rs[number]</td>";
        echo"<td>$rs[mlev]</td>";
        echo "<td><form action='acceptBE.php' method='POST'>
        <input type='hidden' name='id' value='$rs[id]'>
        <button type='submit' class='btn btn-success'>ยืนยัน</button>
        </form></td>";
        echo "<td><form action='deleteBE.php' method='POST'>
        <input type='hidden' name='id' value='$rs[id]'>
        <button type='submit' class='btn btn-danger'>ลบ</button>
        </form></td>";
        echo"</tr>" ;
      
}
mysqli_close($con);
	

?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->


                <!-- Begin Page Content2 -->
                <div class="container-fluid">


                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">รายชื่อสมาชิก</h1>
                    <br>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-gradient-primary">
                            <h6 class="m-0 font-weight-bold text-gray-100">รายชื่อสมาชิก</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-gray-800" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>Username</th>
                                            <th>รหัสผ่าน</th>
                                            <th>ชื่อ</th>
                                            <th>นามสกุล</th>
                                            <th>หมวด/สาขา</th>
                                            <th>เบอร์โทร</th>
                                            <th>สถานะ</th>
                                            <th>แก้ใขข้อมูล</th>
                                            <th>ลบ</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>Username</th>
                                            <th>รหัสผ่าน</th>
                                            <th>ชื่อ</th>
                                            <th>นามสกุล</th>
                                            <th>หมวด/สาขา</th>
                                            <th>เบอร์โทร</th>
                                            <th>สถานะ</th>
                                            <th width="7%">แก้ใขข้อมูล</th>
                                            <th>ลบ</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>


                                        <!-- php -->
                                        <?php
session_start();
include("condb.php");
$sql = "SELECT *  FROM user_dbg WHERE NOT mlev='รออนุมัติ'";
$result = mysqli_query ($con,$sql);
while ($rs = mysqli_fetch_array($result)){

echo"<tr>";
echo"<td>$rs[id]</td>";
echo"<td>$rs[username]</td>";
echo"<td>$rs[password]</td>";
echo"<td>$rs[name]</td>";
echo"<td>$rs[lastname]</td>";
echo"<td>$rs[department]</td>";
echo"<td>$rs[number]</td>";
echo"<td>$rs[mlev]</td>";
echo "<td>
    <button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modal$rs[id]'>แก้ใข</button> 
    </td>";
    echo"
    <div class='modal fade' id='modal$rs[id]' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
     <div class='modal-dialog' role='document'>
       <div class='modal-content'>
         <div class='modal-header'>
           <h5 class='modal-title'>แก้ใขข้อมูล</h5>
           <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
             <span aria-hidden='true'>&times;</span>
           </button>
         </div>
         <div class='modal-body'>
         <form action='EuserBE.php' method='POST'>
                         <input type='hidden' name='pid' value='".$rs[id]."'>
                         <label for='titles'>Username</label>
                        <input type='text' class='form-control' name='username' value='".$rs[username]."'>
                        <label for='titles'>Password</label>
                        <input type='text' class='form-control' name='password' value='".$rs[password]."'>
                        <label for='titles'>ชื่อ</label>
                        <input type='text' class='form-control' name='name' value='".$rs[name]."'>
                        <label for='titles'>นามสกุล</label>
                        <input type='text' class='form-control' name='lastname' value='".$rs[lastname]."'>
                        <label for='titles'>หมวด/สาขา</label>
                        <select class='form-control'  name='department'>";
                        if($rs["department"] =="สาขาบัญชี"){
                          echo"
                          <option>$rs[department]</option>
                          <option>สาขาคอมพิวเตอร์</option>
                          <option>สาขาโลจิสติก</option>
                          <option>สำนักงานคณบดี</option>";

                        }
                        if($rs["department"] =="สาขาคอมพิวเตอร์"){
                          echo"
                          <option>$rs[department]</option>
                          <option>สาขาบัญชี</option>
                          <option>สาขาโลจิสติก</option>
                          <option>สำนักงานคณบดี</option>";

                        }
                        if($rs["department"] =="สาขาโลจิสติก"){
                          echo"
                          <option>$rs[department]</option>
                          <option>สาขาบัญชี</option>
                          <option>สาขาคอมพิวเตอร์</option>
                          <option>สำนักงานคณบดี</option>";

                        }
                        if($rs["department"] =="สำนักงานคณบดี"){
                          echo"
                          <option>$rs[department]</option>
                          <option>สาขาบัญชี</option>
                          <option>สาขาคอมพิวเตอร์</option>
                          <option>สาขาโลจิสติก</option>";

                        }
                    
                       echo"</select>
                       <label for='titles'>เบอร์โทร</label>
                        <input type='text' class='form-control' name='number' value='".$rs[number]."'>
                        <label for='titles'>สถานะ</label>
                        <select class='form-control'  name='mlev'>";
                        if($rs["mlev"] =="admin"){
                          echo"
                          <option>$rs[mlev]</option>
                          <option>user</option>";

                        }
                        if($rs["mlev"]=="user"){
                          echo"
                          <option>$rs[mlev]</option>
                          <option>admin</option>";
                        }
                       echo" 
                       </select>
                        </div>
         <div class='modal-footer'>
           <button type='button' class='btn btn-secondary' data-dismiss='modal'>ปิด</button>
          <button type='submit' class='btn btn-warning'>แก้ใขข้อมูล</button>
           </form>
           </div>
       </div>
     </div>
   </div>
   ";
   echo "</td>";
   // จบปุ่มแก้ใข
       echo "<td><form action='deleteBE.php' method='POST'>
       <input type='hidden' name='id' value='$rs[id]'>
       <button type='submit' class='btn btn-danger'>ลบ</button>
       </form></td>";

    

    
    echo"</tr>";
      
}
mysqli_close($con);
?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->



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
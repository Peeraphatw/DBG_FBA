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

    <title>การจัดการครุภัณฑ์เงินงบประมาณแผ่นดิน</title>
    <!-- Custom fonts for this template -->
    <link rel="shortcut icon" type="imge/png" href="assets/images/logofbafv.png">


    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->

    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="dist-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

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
                <div class="sidebar-brand-icon ">
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
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">เพิ่มรายการครุภัณฑ์</h1><br>
                    <div class="row">
                        <div class="col-xs-3 col-sm-9 col-md-8 col-lg-6 col-xl-3">
                            <div class="card shadow mb-3 ">
                                <div class="card-header py-3 bg-gradient-primary ">
                                    <h6 class="m-0 font-weight-bold text-gray-100 ">
                                        เพิ่มข้อมูลครุภัณฑ์เงินงบประมาณแผ่นดิน</h6>
                                </div>
                                <div class="card-body mx-auto mr-0 ml-0">
                                    <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text text-gray-100">เพิ่มรายการครุภัณฑ์เงินงบประมาณแผ่นดิน</span>
                                    </a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header text-gray-800">
                                                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มรายการครุภัณฑ์
                                                        เงินงบประมาณแผ่นดิน</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-gray-800">
                                                    <form name="insert" action="insertdbgBEm.php" method="POST"
                                                        enctype="multipart/form-data">
                                                        <label for="titles">หมายเลขครุภัณฑ์</label>
                                                        <input type="text" class="form-control" name="serial"><br>
                                                        <label for="titles">วันที่เข้าคลัง</label><br>
                                                        <input type="text" class="datepicker"
                                                            data-date-format="mm/dd/yyyy" name="date"
                                                            autocomplete="off"><br><br>
                                                        <label for="titles">ชื่อครุภัณฑ์</label><br>
                                                        <textarea class="form-control" name="name"
                                                            rows="3"></textarea><br>
                                                        <label for="titles">รายละเอียด</label><br>
                                                        <textarea class="form-control" name="detail"
                                                            rows="3"></textarea><br>
                                                        <label for="titles">เลขที่ใบส่งของ</label><br>
                                                        <td width="10%"><input type="text" class="form-control"
                                                                name="d_number"><br>
                                                            <label for="titles">รูปภาพ</label><br>
                                                            <input type="file" class="form-control-file "
                                                                name="dbg_pic"><br>
                                                            <label for="titles">วันที่เบิก</label><br>
                                                            <input type="text" class="datepicker"
                                                                data-date-format="mm/dd/yyyy" name="date_p"
                                                                autocomplete="off"><br><br>
                                                            <label for="titles">ชื่อผู้เบิก</label><br>
                                                            <input type="text" class="form-control" name="picker"><br>
                                                            <label for="titles">ราคา</label><br>
                                                            <input type="text" class="form-control" name="price">

                                                </div>
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-primary" name="submit"
                                                        value="เพิ่มข้อมูล">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ดันน -->

                    </div>
                    <!-- DataTales Example -->
                    <h1 class="h3 mb-2 text-gray-800">รายการครุภัณฑ์</h1><br>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 bg-gradient-primary">
                            <h6 class="m-0 font-weight-bold text-gray-100">รายการครุภัณฑ์เงินงบประมาณแผ่นดิน</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-gray-800" width="100%" id="dataTable"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="2%">ลำดับ</th>
                                            <th width="14%">หมายเลขครุภัณฑ์</th>
                                            <th width="7%">วันที่เข้าคลัง</th>
                                            <th width="13%">ชื่อครุภัณฑ์</th>
                                            <th width="16%">รายละเอียด</th>
                                            <th width="7%">เลขที่ใบส่งของ</th>
                                            <th width="5%">รูปภาพ</th>
                                            <th width="7%">วันที่เบิก</th>
                                            <th width="10%">ชื่อผู้เบิก</th>
                                            <th width="8%">ราคา</th>
                                            <th width="6%">แก้ใข</th>
                                            <th width="5%">ลบ</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th width="2%">ลำดับ</th>
                                            <th width="14%">หมายเลขครุภัณฑ์</th>
                                            <th width="7%">วันที่เข้าคลัง</th>
                                            <th width="13%">ชื่อครุภัณฑ์</th>
                                            <th width="16%">รายละเอียด</th>
                                            <th width="7%">เลขที่ใบส่งของ</th>
                                            <th width="5%">รูปภาพ</th>
                                            <th width="7%">วันที่เบิก</th>
                                            <th width="10%">ชื่อผู้เบิก</th>
                                            <th width="8%">ราคา</th>
                                            <th width="6%">แก้ใข</th>
                                            <th width="5%">ลบ</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
session_start();
include("condb.php");
$sql = "SELECT *  FROM durabl_fbam ";
$result = mysqli_query ($con,$sql);
$no=1;
while ($rs = mysqli_fetch_array($result)){
 
  $num = number_format($rs[price],2,'.',',');
  
    echo"<tr>";
    echo"<td style='text-align:right';  valign='top';>$no</td>";
    echo"<td style='text-align:left';  valign='top';>$rs[serial]</td>";
    echo"<td style='text-align:center';  valign='top';>";echo date_format(date_create($rs["date"]),"d/m/Y");echo"</td>";
    echo"<td style='text-align:left';  valign='top';>$rs[name]</td>";
    echo"<td style='text-align:left';  valign='top';>$rs[detail]</td>";
    echo"<td style='text-align:left';  valign='top';>$rs[d_number]</td>";
    echo"<td style='text-align:center';  valign='top';><a class='btn btn-primary' href='Pic/$rs[dbg_pic]'target='_blank' role='button'>ดูรูป</a></td>";
    echo"<td style='text-align:center';  valign='top';>";echo date_format(date_create($rs["date_p"]),"d/m/Y");echo"</td>";
    echo"<td style='text-align:center';  valign='top';>$rs[picker]</td>";
    echo"<td style='text-align:right';  valign='top';>$num</td>";
    // ปุ่มแก้ใข
    echo "<td>
    <input type='hidden' name='eid' value='".$rs[id]."'>
    <button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modal$rs[id]'>แก้ใข</button>";
   
    
    echo"
 <!-- Modal -->
 <div class='modal fade' id='modal$rs[id]' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title text-gray-800'>แก้ใขข้อมูล</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body text-gray-800'>
      <form action='updatetsm.php' method='POST' enctype='multipart/form-data'>
                      <input type='hidden' name='eid' value='".$rs[id]."'>
                      <label for='titles'>หมายเลขครุภัณฑ์</label>
                    <input type='text' class='form-control' name='serial' value='".$rs[serial]."'>
                    <br><label for='titles'>เวลาที่เข้าคลัง</label>
                     <input type='text' class='datepicker' data-date-format='dd/mm/yyyy' name='date'value='".$rs[date]."' autocomplete='off'>
                     <br><br><label for='titles'>ชื่อครุภัณฑ์</label>
                     <textarea class='form-control' name='name' rows='3'>$rs[name]</textarea>
                    <label for='titles'>รายละเอียด</label>
                    <textarea class='form-control' name='detail' rows='3'>$rs[detail]</textarea>
                     <label for='titles'>เลขที่ใบส่งของ</label>
                     <input type='text' class='form-control' name='d_number' value='".$rs[d_number]."'>
                     <label for='titles'>รูปครุภัณฑ์</label>
                     <center><img src='Pic/$rs[dbg_pic]'width='300' height='250'></center>
                      <input type='file' class='form-control-file' name='dbg_pic'>
                     <br><label for='titles'>วันที่เบิก</label>
                     <input type='text' class='datepicker' data-date-format='dd/mm/yyyy' name='date_p'value='".$rs[date_p]."'autocomplete='off'><br>
                     <br><label for='titles'>ชื่อผู้เบิก</label>
                     <input type='text' class='form-control' name='picker'value='".$rs[picker]."'>
                     <label for='titles'>ราคา/หน่วย</label>
                     <input type='text' class='form-control' name='price' value='".$rs[price]."'>
                     </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>ปิด</button>
       <button type='submit' class='btn btn-warning'>แก้ใขข้อมูล</button>
        </form>
        </div>
    </div>
  </div>
</div>
<!-- / -->";
    
    echo "</td>";
// จบปุ่มแก้ใข
    echo "<td><form action='deletedbgBEm.php' method='POST'>
    <input type='hidden' name='did' value='$rs[id]'>
    <input type='hidden' name='dbg_pic' value='".$rs[dbg_pic]."'>
    <button type='submit' class='btn btn-danger'>ลบ</button>
    </form></td>";
        echo"</tr>" ;
        $no++;    
}
mysqli_close($con);
?>
                                    </tbody>
                                </table>
                                <!-- </div> -->
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
                            <span>คณะบริหารธุรกิจ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ วิทยาเขตระยอง
                                &copy;2019</span>
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

        <!-- <script src="jquery-2.1.3.min.js"></script> -->
        <script src="dist-datepicker/js/bootstrap-datepicker-custom.js"></script>
        <script src="dist-datepicker/locales/bootstrap-datepicker.th.min.js" charset="UTF-8"></script>


        <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                format: 'yyyy/mm/dd',
                todayBtn: true,
                language: 'th', //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
                thaiyear: true //Set เป็นปี พ.ศ.
            }).datepicker("setDate", "0"); //กำหนดเป็นวันปัจุบัน
        });
        </script>

</body>

</html>
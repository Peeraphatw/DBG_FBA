<!DOCTYPE html>
<?php include("check_login_a.php"); ?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>à¸à¸²à¸£à¸­à¸­à¸à¹€à¸­à¸à¸ªà¸²à¸£à¸£à¸°à¸”à¸±à¸šà¸™à¸±à¸à¸¨à¸¶à¸à¸©à¸²</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../../bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../../bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
    .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
    }

    .example-modal .modal {
        background: transparent !important;
    }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="../../index-admin.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>à¸ªà¸«à¸à¸´à¸ˆà¸¨à¸¶à¸à¸©à¸²</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>à¸£à¸°à¸šà¸šà¸ªà¸«à¸à¸´à¸ˆà¸¨à¸¶à¸à¸©à¸² </b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <li class="dropdown user user-menu">
                            <a href="../../index-admin.php">

                                <i class="fa fa-fw fa-user"></i> Admin
                            </a>

                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li><a href="logout.php"><i class="fa fa-fw fa-sign-out"></i>Sign out</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="../../dist/img/Admin.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Admin</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->

                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">à¸£à¸²à¸¢à¸à¸²à¸£à¸«à¸¥à¸±à¸</li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i>
                            <span>à¸à¸²à¸£à¸ˆà¸±à¸”à¸à¸²à¸£à¸™à¸±à¸à¸¨à¸¶à¸à¸©à¸²-à¸­à¸²à¸ˆà¸²à¸£à¸¢à¹Œ</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="admin_management_s.php"><i
                                        class="fa fa-circle-o"></i>à¸£à¸²à¸¢à¸Šà¸·à¹ˆà¸­à¸œà¸¹à¹‰à¹ƒà¸Šà¹‰à¸‡à¸²à¸™à¸£à¸°à¸”à¸±à¸šà¸™à¸±à¸à¸¨à¸¶à¸à¸©à¸²</a>
                            </li>
                            <li class="active"><a href="admin_document_s.php"><i
                                        class="fa fa-circle-o"></i>à¸à¸²à¸£à¸­à¸­à¸à¹€à¸­à¸à¸ªà¸²à¸£à¸£à¸°à¸”à¸±à¸šà¸™à¸±à¸à¸¨à¸¶à¸à¸©à¸²</a>
                            </li>
                            <li><a href="admin_management_t.php"><i
                                        class="fa fa-circle-o"></i>à¸£à¸²à¸¢à¸Šà¸·à¹ˆà¸­à¸œà¸¹à¹‰à¹ƒà¸Šà¹‰à¸‡à¸²à¸™à¸£à¸°à¸”à¸±à¸šà¸­à¸²à¸ˆà¸²à¸£à¸¢à¹Œ</a>
                            </li>
                            <li><a href="admin_add_teacher.php"><i
                                        class="fa fa-circle-o"></i>à¹€à¸žà¸´à¹ˆà¸¡à¸œà¸¹à¹‰à¹ƒà¸Šà¹‰à¸‡à¸²à¸™à¸£à¸°à¸”à¸±à¸šà¸­à¸²à¸ˆà¸²à¸£à¸¢à¹Œ</a>
                            </li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i>
                            <span>à¸à¸²à¸£à¸ˆà¸±à¸”à¸à¸²à¸£à¸«à¸™à¹‰à¸²à¹€à¸§à¹‡à¸šà¹„à¸‹à¸•à¹Œ</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="create.php"><i
                                        class="fa fa-circle-o"></i>à¸ªà¸£à¹‰à¸²à¸‡à¸à¸£à¸°à¸—à¸¹à¹‰à¸‚à¹ˆà¸²à¸§à¸™à¸±à¸à¸¨à¸¶à¸à¸©à¸²</a>
                            </li>
                            <li><a href="create02.php"><i
                                        class="fa fa-circle-o"></i>à¸ªà¸£à¹‰à¸²à¸‡à¸à¸£à¸°à¸—à¸¹à¹‰à¸‚à¹ˆà¸²à¸§à¸ªà¸–à¸²à¸™à¸›à¸£à¸°à¸à¸­à¸šà¸à¸²à¸£</a>
                            </li>
                            <li><a href="admin_index_edit.php"><i
                                        class="fa fa-circle-o"></i>à¹à¸à¹‰à¹„à¸‚à¸«à¸™à¹‰à¸²à¹€à¸§à¹‡à¸šà¹„à¸‹à¸•à¹Œà¸«à¸¥à¸±à¸</a>
                            </li>
                            <li><a href="admin_webboard_management.php"><i
                                        class="fa fa-circle-o"></i>à¸ˆà¸±à¸”à¸à¸²à¸£à¸à¸£à¸°à¸—à¸¹à¹‰à¸‚à¹ˆà¸²à¸§à¸™à¸±à¸à¸¨à¸¶à¸à¸©à¸²</a>
                            </li>
                            <li><a href="admin_webboard2_management.php"><i
                                        class="fa fa-circle-o"></i>à¸ˆà¸±à¸”à¸à¸²à¸£à¸à¸£à¸°à¸—à¸¹à¹‰à¸‚à¹ˆà¸²à¸§à¸ªà¸–à¸²à¸™à¸›à¸£à¸°à¸à¸­à¸šà¸à¸²à¸£</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>à¸•à¸±à¹‰à¸‡à¸„à¹ˆà¸²</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="admin_setting.php"><i
                                        class="fa fa-circle-o"></i>à¹€à¸›à¸¥à¸µà¹ˆà¸¢à¸™à¸£à¸«à¸±à¸ªà¸œà¹ˆà¸²à¸™
                                    Administrator</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    à¸à¸²à¸£à¸­à¸­à¸à¹€à¸­à¸à¸ªà¸²à¸£à¸£à¸°à¸”à¸±à¸šà¸™à¸±à¸à¸¨à¸¶à¸à¸©à¸²

                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>à¸£à¸²à¸¢à¸à¸²à¸£à¸«à¸¥à¸±à¸</a></li>
                    <li><a href="#">à¸à¸²à¸£à¸ˆà¸±à¸”à¸à¸²à¸£</a></li>
                    <li class="active">à¸à¸²à¸£à¸­à¸­à¸à¹€à¸­à¸à¸ªà¸²à¸£à¸£à¸°à¸”à¸±à¸šà¸™à¸±à¸à¸¨à¸¶à¸à¸©à¸²</li>
                </ol>
            </section>
            <div class="panel-body">
                <?php 
include("connection.php");

$sql="SELECT * FROM personal_data where not workplace_name=''";

		  
if (isset($_GET['search_round'])&&isset($_GET['search_term'])&&isset($_GET['search_term_year'])&&isset($_GET['search_major']))
	{
	if($_GET['search_round']=="à¸—à¸±à¹‰à¸‡à¸«à¸¡à¸”"&&$_GET['search_term']=="à¸—à¸±à¹‰à¸‡à¸«à¸¡à¸”"&&$_GET['search_term_year']=="à¸—à¸±à¹‰à¸‡à¸«à¸¡à¸”"&&$_GET['search_major']=="à¸—à¸±à¹‰à¸‡à¸«à¸¡à¸”")
	{}
	else{
		
	if($_GET['search_round']=="à¸—à¸±à¹‰à¸‡à¸«à¸¡à¸”"){}else{
	$search_round = $_GET['search_round'];
	$sql .= " AND round = '".$search_round."'";
	}if($_GET['search_term']=="à¸—à¸±à¹‰à¸‡à¸«à¸¡à¸”"){}else{
	$search_term = $_GET['search_term'];
	$sql .= " AND term = '".$search_term."'";
	}if($_GET['search_term_year']=="à¸—à¸±à¹‰à¸‡à¸«à¸¡à¸”"){}else{
	$search_term_year = $_GET['search_term_year'];
	$sql .= " AND term_year = '".$search_term_year."'";
	}if($_GET['search_major']=="à¸—à¸±à¹‰à¸‡à¸«à¸¡à¸”"){}else{
	$search_major = $_GET['search_major'];
	$sql .= " AND major = '".$search_major."'";
	}
	}
	}

if(isset($_GET['search_id'])){
	$search_id = $_GET['search_id'];
	$sql .= " AND student_id = '".$search_id."'";
}
if(isset($_GET['search_name'])){
	$search_name = $_GET['search_name'];
	$sql .= " AND name_surename LIKE '%".$search_name."%'";
}
$result = mysqli_query($con,$sql);
 
?>
                <form name="search_form" method="GET" action="admin_document_s.php">
                    <div class="row">
                        <div class="col-md-2"><label>à¸£à¸­à¸š</label></div>
                        <div class="col-md-2"><label>à¸ à¸²à¸„à¹€à¸£à¸µà¸¢à¸™à¸—à¸µà¹ˆ</label></div>
                        <div class="col-md-3"><label>à¸›à¸µà¸à¸²à¸£à¸¨à¸¶à¸à¸©à¸²</label></div>
                        <div class="col-md-4"><label>à¸ªà¸²à¸‚à¸²à¸§à¸´à¸Šà¸²</label></div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row">
                        <!-- left column -->

                        <div class="col-md-2">
                            <div class="form-group">

                                <select type="text" name="search_round" class="form-control select2"
                                    style="width: 100%;">
                                    <option selected="selected" value="à¸—à¸±à¹‰à¸‡à¸«à¸¡à¸”">All</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">

                                <select type="text" name="search_term" class="form-control select2"
                                    style="width: 100%;">
                                    <option selected="selected" value="à¸—à¸±à¹‰à¸‡à¸«à¸¡à¸”">All</option>
                                    <option>1</option>
                                    <option>2</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">

                                <select type="text" name="search_term_year" class="form-control select2"
                                    style="width: 100%;">
                                    <option selected="selected">à¸—à¸±à¹‰à¸‡à¸«à¸¡à¸”</option>
                                    <option>2560</option>
                                    <option>2561</option>
                                    <option>2562</option>
                                    <option>2563</option>
                                    <option>2564</option>
                                    <option>2565</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">

                                <select type="text" name="search_major" class="form-control select2"
                                    style="width: 100%;">
                                    <option selected="selected">à¸—à¸±à¹‰à¸‡à¸«à¸¡à¸”</option>
                                    <option>
                                        à¸šà¸£à¸´à¸«à¸²à¸£à¸˜à¸¸à¸£à¸à¸´à¸ˆà¸­à¸¸à¸•à¸ªà¸²à¸«à¸à¸£à¸£à¸¡à¹à¸¥à¸°à¹‚à¸¥à¸ˆà¸´à¸ªà¸•à¸´à¸à¸ªà¹Œ
                                    </option>
                                    <option>à¸à¸²à¸£à¸šà¸±à¸à¸Šà¸µ</option>
                                    <option>à¸„à¸­à¸¡à¸žà¸´à¸§à¹€à¸•à¸­à¸£à¹Œà¸˜à¸¸à¸£à¸à¸´à¸ˆ</option>
                                    <option>à¸à¸²à¸£à¸ˆà¸±à¸”à¸à¸²à¸£à¸”à¸´à¸ˆà¸´à¸—à¸±à¸¥</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-1">

                            <button type="submit" class="btn btn-block btn-primary">Filter</button>
                        </div>
                </form>


            </div>
            <div class="row">
                <div class="col-md-6"><label>à¸„à¹‰à¸™à¸«à¸²à¸”à¹‰à¸§à¸¢à¸£à¸«à¸±à¸ªà¸™à¸±à¸à¸¨à¸¶à¸à¸©à¸²</label>
                </div>
                <div class="col-md-6">
                    <label>à¸„à¹‰à¸™à¸«à¸²à¸”à¹‰à¸§à¸¢à¸Šà¸·à¹ˆà¸­-à¸™à¸²à¸¡à¸ªà¸à¸¸à¸¥à¸™à¸±à¸à¸¨à¸¶à¸à¸©à¸²</label>
                </div>
            </div>
            <div class="row">
                <form name="search_id" method="get" action="admin_document_s.php">
                    <div class="col-md-5"><input type="text" name="search_id" class="form-control"
                            placeholder="à¸£à¸«à¸±à¸ªà¸™à¸±à¸à¸¨à¸¶à¸à¸©à¸²"></div>
                    <div class="col-md-1"><button type="submit" class="btn btn-block btn-primary">Search</button></div>
                </form>

                <form name="search_name" method="get" action="admin_document_s.php">
                    <div class="col-md-5"><input type="text" name="search_name" class="form-control"
                            placeholder="à¸Šà¸·à¹ˆà¸­à¸«à¸£à¸·à¸­à¸™à¸²à¸¡à¸ªà¸à¸¸à¸¥à¸™à¸±à¸à¸¨à¸¶à¸à¸©à¸²"></div>
                    <div class="col-md-1"><button type="submit" class="btn btn-block btn-primary">Search</button></div>
                </form>
            </div>
            <div class="panel-body">
                <?php if(isset($_GET['search_round'])&&isset($_GET['search_term_year'])&&isset($_GET['search_major']))
{
	echo "<font color='#FF0004'>à¸•à¸±à¸§à¸à¸£à¸­à¸‡&emsp;:&emsp;à¸£à¸­à¸šà¸à¸²à¸£à¸­à¸­à¸à¸ªà¸«à¸à¸´à¸ˆà¸¨à¸¶à¸&emsp;=&emsp;".$_GET['search_round']."&emsp;à¸›à¸µà¸à¸²à¸£à¸¨à¸¶à¸à¸©à¸²&emsp;= &emsp;".$_GET['search_term_year']."&emsp;à¹à¸¥à¸°&emsp;à¸ªà¸²à¸‚à¸²à¸§à¸´à¸Šà¸²&emsp;=&emsp;".$_GET['search_major']." </font>";
}?>
                <table id="01" class="table table-bordered table-hover table-condensed text-center"
                    style=" background-color:white;">

                    <tr bgcolor="#EB7274">

                        <td>à¸£à¸«à¸±à¸ªà¸™à¸±à¸à¸¨à¸¶à¸à¸©à¸²</td>
                        <td>à¸Šà¸·à¹ˆà¸­-à¸™à¸²à¸¡à¸ªà¸à¸¸à¸¥</td>
                        <td>à¹€à¸šà¸­à¸£à¹Œà¹‚à¸—à¸£à¸¨à¸±à¸žà¸—à¹Œ</td>
                        <td>à¸ªà¸²à¸‚à¸²</td>
                        <td>à¹€à¸—à¸­à¸¡/à¸›à¸µà¸à¸²à¸£à¸¨à¸¶à¸à¸©à¸²</td>
                        <td>à¸£à¸­à¸š</td>
                        <td>à¸Šà¸·à¹ˆà¸­à¸šà¸£à¸´à¸©à¸±à¸—</td>
                        <td>à¸ªà¸–à¸²à¸™à¸°</td>
                        <td>à¸šà¸˜à¸ª.03</td>
                        <td>à¸«à¸¡à¸²à¸¢à¹€à¸«à¸•à¸¸</td>




                    </tr>

                    <?php
	
	

$i = 1;

while($objResult = mysqli_fetch_array($result))

{

?>

                    <tr>


                        <td>
                            <div align="center">



                                <?php 
 $idf=$i; ?>
                                <a target="_blank"
                                    href="Student_information04.php?student_id=<?php echo $objResult["student_id"];?>"><?php echo $objResult["student_id"]; ?></a>



                            </div>
                        </td>
                        <td>
                            <div align="center">



                                <?php 
 
 echo "".$objResult["name_surename"]."";
	?>

                            </div>
                        </td>
                        <td>
                            <div align="center">



                                <?php 
 
 echo "".$objResult["telephone"]."";
	?>

                            </div>
                        </td>
                        <td>
                            <div align="center">



                                <?php 
 if($objResult["major"]=="à¸„à¸­à¸¡à¸žà¸´à¸§à¹€à¸•à¸­à¸£à¹Œà¸˜à¸¸à¸£à¸à¸´à¸ˆ"){echo "BCOM";}
 if($objResult["major"]=="à¸à¸²à¸£à¸šà¸±à¸à¸Šà¸µ"){echo "BACC";}
 if($objResult["major"]=="à¸šà¸£à¸´à¸«à¸²à¸£à¸˜à¸¸à¸£à¸à¸´à¸ˆà¸­à¸¸à¸•à¸ªà¸²à¸«à¸à¸£à¸£à¸¡à¹à¸¥à¸°à¹‚à¸¥à¸ˆà¸´à¸ªà¸•à¸´à¸à¸ªà¹Œ"){echo "BIBLA";}
 if($objResult["major"]=="à¸à¸²à¸£à¸ˆà¸±à¸”à¸à¸²à¸£à¸”à¸´à¸ˆà¸´à¸—à¸±à¸¥"){echo "à¸à¸²à¸£à¸ˆà¸±à¸”à¸à¸²à¸£à¸”à¸´à¸ˆà¸´à¸—à¸±à¸¥";}
 ?>

                            </div>
                        </td>
                        <td>
                            <div align="center">



                                <?php 
 
 echo $objResult["term"]."/".$objResult["term_year"];?>

                            </div>
                        </td>
                        <td>
                            <div align="center">



                                <?php 
 
 echo $objResult["round"];?>

                            </div>
                        </td>
                        <td>
                            <div align="center">



                                <?php 
 
 echo $objResult["workplace_name"];?>

                            </div>
                        </td>
                        <td>
                            <?php
	$sql2="SELECT * FROM personal_data where student_id='".$objResult["student_id"]."'";
	$result2 = mysqli_query($con,$sql2);
	$objResult2 = mysqli_fetch_array($result2);
	
	if($objResult2["workplace_name"]==""){echo "<font color='#1DD900'>à¸£à¸­à¸à¸²à¸£à¸à¸£à¸­à¸à¸‚à¹‰à¸­à¸¡à¸¹à¸¥</font>";}
	else{
	if($objResult2["confirm3"]=="CF"&&$objResult2["confirm2"]=="CF"&&$objResult2["confirm1"]=="CF")
	{echo "<font color='#1DD900'>à¸œà¹ˆà¸²à¸™à¸à¸²à¸£à¸­à¸™à¸¸à¸¡à¸•à¸´</font>";}
	if($objResult2["confirm3"]==""&&$objResult2["confirm2"]=="CF"&&$objResult2["confirm1"]=="CF")
	{echo "<font color='#FF0004'>à¸£à¸­à¸à¸²à¸£à¸­à¸™à¸¸à¸¡à¸±à¸•à¸´à¸ˆà¸²à¸à¸•à¸±à¸§à¹à¸—à¸™à¸„à¸“à¸šà¸”à¸µ</font>";}
	if($objResult2["confirm3"]==""&&$objResult2["confirm2"]==""&&$objResult2["confirm1"]=="CF")
	{echo "<font color='#FF0004'>à¸£à¸­à¸à¸²à¸£à¸­à¸™à¸¸à¸¡à¸±à¸•à¸´à¸ˆà¸²à¸à¸›à¸£à¸°à¸˜à¸²à¸™à¸ªà¸²à¸‚à¸²</font>";}
	if($objResult2["confirm3"]==""&&$objResult2["confirm2"]==""&&$objResult2["confirm1"]=="")
	{echo "<font color='#FF0004'>à¸£à¸­à¸à¸²à¸£à¸­à¸™à¸¸à¸¡à¸±à¸•à¸´à¸ˆà¸²à¸à¸—à¸µà¹ˆà¸›à¸£à¸¶à¸à¸©à¸²</font>";}
	}
	
	
	
		?>

                        </td><?php
	if($objResult2["confirm3"]=="CF"&&$objResult2["confirm2"]=="CF"&&$objResult2["confirm1"]=="CF"){?>
                        <td>
                            <form target="_blank" method="post"
                                action="admin_BTS03.php?sid=<?php echo $objResult["student_id"];?>"><button
                                    class="btn btn-primary">PRINT</button></form>
                        </td>

                        <?php }else{?>
                        <td>
                            <form><button class="btn disabled">PRINT</button></form>
                        </td>
                        <?php }?>

                        <td><?php 
	if(empty($objResult["note"])){?>
                            <font color="#00F734">à¹„à¸¡à¹ˆà¸¡à¸µ</font>
                            <?php }else{ ?>
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#modal-default">
                                à¸«à¸¡à¸²à¸¢à¹€à¸«à¸•à¸¸
                            </button>

                            <?php } ?>
                        </td>
                        <div class="modal fade" id="modal-default">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">à¸«à¸¡à¸²à¸¢à¹€à¸«à¸•à¸¸</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p><?php echo $objResult["note"];?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger pull-right"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </tr>

                    <?php

$i++;

}

?>
                </table>
            </div>
        </div>
        <!-- /.row (main row) -->

    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2018 <a href="http://www.fba.kmutnb.ac.th">FBA.KMUTNB</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">

            </div>


        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="../../bower_components/raphael/raphael.min.js"></script>
    <script src="../../bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="../../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../../bower_components/moment/min/moment.min.js"></script>
    <script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    </script>
</body>

</html>
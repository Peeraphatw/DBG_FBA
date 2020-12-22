<!DOCTYPE html>
<?php
session_start();
include("condb.php");
?>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <style>
    @page {

        margin-top: 2mm;
        margin-left: 2mm;
        margin-right: 2mm;
        margin-bottom: 2mm;
        /* <any of the usual CSS values for margins> */
        size: landscape;
    }

    body {
        font-family: TH Sarabun New;
        font-size: 14px;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    td {
        padding: 5px;

    }

    th {
        padding: 2px;
        text-align: center;
    }

    * css ส่วนสำหรับการแบ่งหน้าข้อมูลสำหรับการพิมพ์ */ @media all {
        .page-break {
            display: none;
        }

        .page-break-no {
            display: none;
        }
    }

    @media print {
        .page-break {
            display: block;
            height: 1px;
            page-break-before: always;
        }

        .page-break-no {
            display: block;
            height: 1px;
            page-break-after: avoid;
        }
    }
    </style>
</head>

<body onload="window.print()">
    <br>

    <?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Asia/Bangkok'); //time zone

function DateThaiD($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear";
	}

	$strDate =date('Y-m-d');
	// date('d-m-Y');
?>

    <div class="row">
        <div class="col-3 ml-2"><img src="assets/Images/logo1bw.png"></div>
        <div class="col mx-auto">
            <center><b>
                    <h3>มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</h3>
                </b></center>
            <center>
                <h5>
                    <p>รายการครุภัณฑ์สำหรับตรวจสอบประจำปี ณ วันที่ </p>
                </h5>
            </center>
        </div>
        <div class="col-3"></div>
    </div>
    <hr noshade="noshade" size="6" color="black">
    <center>
        <h6><b>คณะบริหารธุกิจ(ต่อ)</b></h6>
    </center>
    <br>
    <table style="width:100%;">
        <tr>
            <th width="3%" ;>ลำดับ</th>
            <th width="10%" ;>หมายเลขครุภัณฑ์</th>
            <th width="6%" ;>วันที่เข้าคลัง</th>
            <th width="15%" ;>ชื่อครุภัณฑ์</th>
            <th width="20%" ;>รายละเอียด</th>
            <th width="7%" ;>เลขที่ใบส่งของ</th>
            <th width="5%" ;>วันที่เบิก</th>
            <th width="9%" ;>ชื่อผู้เบิก</th>
            <th width="4%" ;>ราคา/หน่วย</th>
        </tr>
        <tr>
            <td colspan="10"><b>สำนักงานคณะบดีคณะบริหารธุรกิจ</b></td>
        </tr>


        <?php
include("condb.php");
$type= $_GET['type'];
$sql = "SELECT * FROM durabl_fba WHERE (name LIKE '%".$_GET["name"]."%')";
$result = mysqli_query ($con,$sql);
while ($rs = mysqli_fetch_array($result)){
  
  $num = number_format($rs[price],2,'.',','); 
 
    echo"<tr>";
    echo"<td style='text-align:right'>$rs[id]</td>";
    echo"<td>$rs[serial]</td>";
    echo"<td style='text-align:center'>$rs[date]</td>";
    echo"<td style='text-align:left'>$rs[name]</td>";
    echo"<td>$rs[detail]</td>";
    echo"<td <td style='text-align:left'>$rs[d_number]</td>";
    echo"<td style='text-align:center'>$rs[date_p]</td>";
    echo"<td>$rs[picker]</td>";
    echo"<td style='text-align:right'> $num</td>";
    echo"</tr>";}
    ?>
    </table>
    <?php
header('Content-Type: text/html; charset=utf-8');

function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
	}

	$strDate =date('m/d/Y h:i:s a', time());
	// date('d-m-Y');
?>
    <footer class="row fixed-bottom">
        <div class="col">
            <p>พิมพ์โดย <?php echo  $_SESSION["name"]; ?>&nbsp;<?php echo  $_SESSION["lastname"]; ?>
                <?php echo "".DateThai($strDate);?></p>
        </div>
        <div class="col"></div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
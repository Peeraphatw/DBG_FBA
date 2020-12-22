<?php
session_start();
include("condb.php"); // ไฟล์เชือมต่อฐานข้อมูล
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>รายการครุภัณฑ์ประจำปี</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <style>
    @page {
        size: A4 landscape;
        margin-top: 0mm;
        margin-left: 5mm;
        margin-right: 5mm;
        margin-bottom: 2mm;
        /* <any of the usual CSS values for margins> */
    }

    html {
        font-family: Arial, "times New Roman", tahoma;
        font-size: 15px;
    }

    body {
        font-family: TH Sarabun Psk;
        font-family: TH Sarabun New;
        font-size: 16px;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        border-width: 1px;
    }

    td {
        padding: 1px;
        border-width: 1px;
    }

    th {
        padding: 2px;
        text-align: center;
        border-width: 1px;
        font-size: 16px;
    }

    @media all {
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

    /* css ส่วนสำหรับการแบ่งหน้าข้อมูลสำหรับการพิมพ์ */
    </style>
</head>

<body>
    <?php
$total_page_data = 0;  // เก็บจำนวนหน้า รายการทั้งหมด
$total_page_item = 6; // จำนวนรายการที่แสดงสูงสุดในแต่ละหน้า
$total_page_item_all = 0; // ไว้เก็บจำนวนรายการจริงทั้งหมด
$arr_data_set=array(array()); // [][];


$from_date = $_GET['fdate'];
$to_date = $_GET['bdate'];
if($_GET['type']== "ครุภัณฑ์เงินรายได้"){
if($_GET['name'] != "")
{

$sql = "SELECT * FROM durabl_fba WHERE (name LIKE '%".$_GET["name"]."%')";
}
if ($_GET['fdate'] != ""){
$sql = "SELECT * 
FROM durabl_fba
WHERE (name LIKE '%".$_GET["name"]."%') AND date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'  ";
}
}
if($_GET['type']== "ครุภัณฑ์เงินงบประมาณแผ่นดิน"){

if($_GET['name'] != "")
{
$sql = "SELECT * FROM durabl_fbam WHERE (name LIKE '%".$_GET["name"]."%')";
}
if ($_GET['fdate'] != ""){
$sql = "SELECT * 
FROM durabl_fbam
WHERE (name LIKE '%".$_GET["name"]."%') AND date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'  ";
}
}
?>
    <?php
$i=1;
$result = mysqli_query ($con,$sql);
if($result && $result->num_rows>0){  // คิวรี่ข้อมูลสำเร็จหรือไม่ และมีรายการข้อมูลหรือไม่
    $total_page_item_all = $result->num_rows; // จำนวนรายการทั้งหมด
    $total_page_data = ceil($total_page_item_all/$total_page_item); // หาจำนวนหน้าจากรายการทั้งหมด
    while($row = mysqli_fetch_array($result)){ // วนลูปแสดงรายการ     
        $arr_data_set['serial'][$i]=$row['serial'];
        $arr_data_set['date'][$i]=$row['date'];
        $arr_data_set['name'][$i]=$row['name'];
        $arr_data_set['detail'][$i]=$row['detail'];
        $arr_data_set['d_number'][$i]=$row['d_number'];
        $arr_data_set['date_p'][$i]=$row['date_p'];
        $arr_data_set['picker'][$i]=$row['picker'];
        $arr_data_set['price'][$i]=$row['price'];
        $i++;
        
    }   
}
?>
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
    <?php for($i=1;$i<=$total_page_data;$i++){ ?>
    <div class="page-break<?=($i==1)?"-no":""?>">&nbsp;</div>
    <div class="row">
        <div class="col-10"></div>
        <div class="col"></div>
        <div class="col">
            <p>หน้าที่ &nbsp;<?=$i?></P>
        </div>
    </div>
    <img src="assets/Images/logo1bw.png" style="float:left; padding:0px; margin:0px;">
    <center>
        <h3><b>มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</b></h3>
    </center>
    <center>
        <h4><b>รายการครุภัณฑ์สำหรับตรวจสอบประจำปี ณ วันที่
                <?php echo "".DateThaiD($strDate);?>&nbsp;(<?php echo $_GET['type'];?>) </b></h4>
    </center>
    <hr noshade="noshade" size="6" color="black">
    <?php
if($i==1){
    echo "<center><h5><b>คณะบริหารธุกิจ</b></h5></center>";
}else{
    echo "<center><h5><b>คณะบริหารธุกิจ (ต่อ)</b></h5></center>";
}
?>
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
            <th width="5%" ;>ราคา/หน่วย</th>
        </tr>
        <tr>
            <td colspan="10"><b>สำนักงานคณะบดีคณะบริหารธุรกิจ</b></td>
        </tr>
        <?php
        // ส่วนของ repeat content
        for($v=1;$v<=$total_page_item;$v++){
            
            $item_i=(($i-1)*$total_page_item)+$v;
            $serial = isset($arr_data_set['serial'][$item_i])?$arr_data_set['serial'][$item_i]:"";
            $item_i = isset($arr_data_set['serial'][$item_i])?$item_i:"";
            $date = isset($arr_data_set['date'][$item_i])?$arr_data_set['date'][$item_i]:"";
            $item_i = isset($arr_data_set['date'][$item_i])?$item_i:"";
            $name = isset($arr_data_set['name'][$item_i])?$arr_data_set['name'][$item_i]:"";
            $item_i = isset($arr_data_set['name'][$item_i])?$item_i:"";
            $detail = isset($arr_data_set['detail'][$item_i])?$arr_data_set['detail'][$item_i]:"";
            $item_i = isset($arr_data_set['detail'][$item_i])?$item_i:"";
            $d_number = isset($arr_data_set['d_number'][$item_i])?$arr_data_set['d_number'][$item_i]:"";
            $item_i = isset($arr_data_set['d_number'][$item_i])?$item_i:"";
            $date_p = isset($arr_data_set['date_p'][$item_i])?$arr_data_set['date_p'][$item_i]:"";
            $item_i = isset($arr_data_set['date_p'][$item_i])?$item_i:"";
            $picker = isset($arr_data_set['picker'][$item_i])?$arr_data_set['picker'][$item_i]:"";
            $item_i = isset($arr_data_set['picker'][$item_i])?$item_i:"";
            $price = isset($arr_data_set['price'][$item_i])?$arr_data_set['price'][$item_i]:"";
            $item_i = isset($arr_data_set['price'][$item_i])?$item_i:"";
            if($date==""){
                $date="";
            }else{
                $date= date_format(date_create($date),"d/m/Y");
            }
            if($date_p==""){
                $date_p="";
            }else{
                $date_p= date_format(date_create($date),"d/m/Y");
            }
        ?>
        <tr>

            <td style="text-align:right" ; valign=";top" ;><?=$item_i?></td>
            <td style="text-align:left" valign="top"><?=$serial?></td>
            <td style="text-align:center" valign="top"><?=$date?></td>
            <td style="text-align:left" valign="top"><?=$name?></td>
            <td style="text-align:left" valign="top"><?=$detail?></td>
            <td style="text-align:left" valign="top"><?=$d_number?></td>
            <td style="text-align:center" valign="top"><?=$date_p?></td>
            <td style="text-align:left" valign="top"><?=$picker?></td>
            <td style="text-align:right" valign="top"><?=number_format($price,2,'.',',')?></td>
        </tr>
        <?php   } ?>
    </table>
    <?php }   ?>
    <?php
function DateThai($strDate)
	{
	
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		
		return "$strHour:$strMinute";
	}
    $strDate =date('h:i:s a', time());
    ?>
    <footer class="row fixed-bottom">
        <div class="col">
            <p>พิมพ์โดย <?php echo  $_SESSION["name"]; ?>&nbsp;<?php echo  $_SESSION["lastname"]; ?>&nbsp;เมื่อวันที่
                &nbsp;<?php echo "".DateThaiD($strDate);?>&nbsp;เวลา&nbsp;<?php echo "".DateThai($strDate);?>&nbsp;น.
            </p>
        </div>
        <div class="col"> </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
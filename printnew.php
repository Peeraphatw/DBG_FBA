<?php
session_start();
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>รายการครุภัณฑ์ประจำปี</title>
    <link rel="shortcut icon" type="imge/png" href="assets/images/logofbafv.png">
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
        padding: 2px;
        border-width: 1px;
        word-break: break-all;
    }

    th {
        padding: 2px;
        text-align: center;
        border-width: 1px;
        font-size: 16px;
    }
    </style>
</head>

<body onload="window.print()">
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
		$strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤษจิกายน","ธันวาคม");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear";
	}

	$strDate =date('Y-m-d');
	// date('d-m-Y');
include('condb.php');
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//$sql ="SELECT *  FROM durabl_fba";

$from_date = $_GET['fdate'];
$to_date = $_GET['bdate'];
if($_GET['type']== "ครุภัณฑ์เงินรายได้"){

// if (($_GET['name'] == "") && ($_GET['fdate'] == "") && ($_GET['bdate'] == "")){
//   $sql = "SELECT * FROM durabl_fba";
// }
// Search By Name 
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

// if (($_GET['name'] == "") && ($_GET['fdate'] == "") && ($_GET['bdate'] == "")){
//   $sql = "SELECT * FROM durabl_fbam";
// }

if($_GET['name'] != "")
{
// Search By Name 
$sql = "SELECT * FROM durabl_fbam WHERE (name LIKE '%".$_GET["name"]."%')";

}
if ($_GET['fdate'] != ""){
$sql = "SELECT * 
FROM durabl_fbam
WHERE (name LIKE '%".$_GET["name"]."%') AND date BETWEEN '" . $from_date . "' AND  '" . $to_date . "'  ";

}
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$result = mysqli_query ($con,$sql);
$norow= mysqli_num_rows($result);
$all_rec = $norow;
$all_page= ceil($all_rec/ 6);



   
for($no=1; $no<=$all_rec; $no++){
	
	if( ($no % 6)==1){
		echo "<br><img src='assets/Images/logo1bw.png' style='float:left; padding:0px; margin:0px;'>
		<center><h3  style='padding:0px;'><b>มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</b></h3></center>
		<center><h4 style='padding:0px;'><b>รายการครุภัณฑ์สำหรับตรวจสอบประจำปี ณ";echo " ".DateThaiD($strDate); echo" ($_GET[type])"; echo" </b></h4></center>
		<hr noshade='noshade'  size='6' color='black' style='padding:0px; margin:0px;'>
		";
		if( ($no)>6){
			echo"<center> <b>คณะบริหารธุรกิจ (ต่อ)</b></center>";
		}else{
			echo"<center> <b>คณะบริหารธุรกิจ </b> </center>";
		}
		echo"<table  style='width:100%;' width='100%'>
		<tr>
			<th width='3%'>ลำดับ</th>
			<th width='10%'>หมายเลขครุภัณฑ์</th>
			<th width='6%'>วันที่เข้าคลัง</th>
			<th width='15%'>ชื่อครุภัณฑ์</th>
			<th width='15%'>รายละเอียด</th>
			<th width='7%'>เลขที่ใบส่งของ</th>
			<th width='6%'>วันที่เบิก</th>
			<th width='9%'>ชื่อผู้เบิก</th>
			<th width='5%'>ราคา/หน่วย</th>
			</tr>";
			echo "<tr>
    		<td colspan='10'><b>สำนักงานคณบดีคณะบริหารธุรกิจ</b></td>
		  </tr>";
		 
		
	} 
	// ส่วนเนื้อหา
	$ro = mysqli_fetch_object($result);
	$date= date_format(date_create($ro->date),"d/m/Y");
	$date_p= date_format(date_create($ro->date_p),"d/m/Y");
	
	?>

    <tr>
        <td style="text-align:right" ; valign="top" ;><?=$no?></td>
        <td style="text-align:left" ; valign="top" ;><?=$ro->serial;?></td>
        <td style="text-align:center" ; valign="top" ;><?=$date?></td>
        <td style="text-align:left" ; valign="top" ;><?=$ro->name;?></td>
        <td style="text-align:left" ; valign="top" ;><?=$ro->detail;?></td>
        <td style="text-align:center" ; valign="top" ;><?=$ro->d_number;?></td>
        <td style="text-align:center" ; valign="top" ;><?=$date_p?></td>
        <td style="text-align:center" ; valign="top" ;><?=$ro->picker;?></td>
        <td style="text-align:right" ; valign="top" ;><?=number_format($ro->price,2,'.',',')?></td>
    </tr>
    <?php


	
	
		// ส่วนท้าย
	if( ($no % 6)==0 && (ceil($no/6)<$all_page)  ){
		
		//echo "ส่วนท้าย ก่อน page-break นะครับ";
		echo"</table>";
		echo"<footer class='row fixed-bottom'>
    <div class='col'>พิมพ์โดย </div>
    <div class='col'> </div>
	</footer>";
  		echo "<div style='page-break-after: always'></div>";
	}
} ///for

//date f

function DateThai($strDate){
	
	$strHour= date("H",strtotime($strDate));
	$strMinute= date("i",strtotime($strDate));
	$strSeconds= date("s",strtotime($strDate));
	
	return "$strHour:$strMinute";
	
}
$strDate =date('h:i:s a', time());

	



if(($all_rec % 6)>0){ 
	  //echo "ส่วนท้าย:";
	  echo"</table>";
	echo"<footer class='row fixed-bottom'>
    <div class='col'>พิมพ์โดย"; echo " ".$_SESSION['name']; echo " ".$_SESSION['lastname']; echo" เมื่อวันที่ ".DateThaiD($strDate);  echo" เวลา ".DateThai($strDate); echo" น. </div>
    <div class='col'></div>
</footer>";
 }
 

?>
    <!-- <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script> -->
</body>

</html>
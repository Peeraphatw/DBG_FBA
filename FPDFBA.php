<?php
require('fpdf17/fpdf.php');
define('FPDF_FONTPATH','fpdf17/font');
include('condb.php');

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

// Page header
class PDF extends FPDF
	{
		function Header(){
			 $this->Image('logo1bw.png',10,7,0);
			 $this->AddFont('angsa','','angsa.php');
			 $this->SetFont('angsa','',24);
			 $this->Cell(0,0,iconv( 'UTF-8','TIS-620','มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ'),0,1,"C");
			 $this->Ln(9);
			 $this->SetFont('angsa','',20);
			 $this->Cell(0,0,iconv( 'UTF-8','TIS-620','รายการครุภัณฑ์สำหรับสรวจสอบประจำปี ณ วันที่ '.DateThaiD(date('Y-m-d'))),0,1,"C");
			 $this-> line(5,28,290,28);
			 $this->Ln(15);
			 $this->SetFont('angsa','',15);
			 $this->Cell(0,0,iconv( 'UTF-8','TIS-620','คณะบริหารธุรกิจ'),0,1,"C");
			$this->Ln(8);
		}

		function Footer(){
			$this->AddFont('angsa','','angsa.php');
			$this->SetFont('angsa','',10);
			$this->SetY(-15);
	 		$this->Cell(1,0,iconv( 'UTF-8','TIS-620','ไทยครีเอทดอทคอม'),0,1,"L");
			$this->Cell(0,0,iconv( 'UTF-8','TIS-620','Create date : '.date("Y-m-d")),0,1,"R");
		}
		function headertable(){
			$this->AddFont('angsa','','angsa.php');
			$this->SetFont('angsa','',10);
			$this->Cell(10,10,iconv("UTF-8", "TIS-620","ลำดับ"),1,0,"C");
			$this->Cell(40,10,iconv("UTF-8", "TIS-620","หมายเลขครุภัณฑ์"),1,0,"C");
			$this->Cell(20,10,iconv("UTF-8", "TIS-620","วันที่เข้าคลัง"),1,0,"C");
			$this->Cell(50,10,iconv("UTF-8", "TIS-620","ชื่อครุภัณฑ์"),1,0,"C");
			$this->Cell(60,10,iconv("UTF-8", "TIS-620","รายละเอียด"),1,0,"C");
			$this->Cell(20,10,iconv("UTF-8", "TIS-620","เลขที่ใบเสร็จส่ง"),1,0,"C");
			$this->Cell(20,10,iconv("UTF-8", "TIS-620","วันที่เบิก"),1,0,"C");
			$this->Cell(35,10,iconv("UTF-8", "TIS-620","ขื่อผู้เบิก"),1,0,"C");
			$this->Cell(20,10,iconv("UTF-8", "TIS-620","ราคา/หน่วย"),1,0,"C");
		}
		function tableview($con){
			$this->AddFont('angsa','','angsa.php');
			$this->SetFont('angsa','',10);
			$stmt = $con->queryi('SELECT * FROM durabl_fba');
			while($data = $stmt->fetch_array()){
			$this->Cell(10,10,iconv("UTF-8", "TIS-620",$n),1,0,"C");
			$this->Cell(40,10,iconv("UTF-8", "TIS-620",$data["serial"]),1,0,"C");
			$this->Cell(20,10,iconv("UTF-8", "TIS-620",$data["date"]),1,0,"C");
			$this->Cell(50,10,iconv("UTF-8", "TIS-620",$data["name"]),1,0,"C");
			$this->Cell(60,10,iconv("UTF-8", "TIS-620",$data["detail"]),1,0,"C");
			$this->Cell(20,10,iconv("UTF-8", "TIS-620",$data["d_number"]),1,0,"C");
			$this->Cell(20,10,iconv("UTF-8", "TIS-620",$data["date_p"]),1,0,"C");
			$this->Cell(35,10,iconv("UTF-8", "TIS-620",$data["picker"]),1,0,"C");
			$this->Cell(20,10,iconv("UTF-8", "TIS-620",$data["price"]),1,0,"C");
			}
		}
	}


// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->AddFont('angsana','','angsa.php');
$pdf->SetFont('angsana','',15);
$pdf->headertable();
$pdf->Output();
?>
<?php
session_start();
 $servername = "localhost"; //ที่อยู่ server (ip address server)
    $username = "fba2015"; // ชื่อผู้ใช้ server
    $password = "F@#854";  // รหัสผ่านการเชื่อมต่อ server
    $dbname = "iba-rayong_fba2015"; // ชื่อฐานข้อมูล
  $conn = new mysqli($servername, $username, $password, $dbname);
   $sql = "SELECT * FROM durabl_fba";
 $query = mysqli_query($conn,$sql);
  mysqli_set_charset($conn,"utf8");
  date_default_timezone_set('Asia/Bangkok'); //time zone
  require('fpdf17/fpdf.php');
  define('FPDF_FONTPATH','fpdf17/font');//ให้โปรแกรมเรียกใช้ class FPDF ได้
  class PDF extends FPDF{
   
   function Footer(){
      $this->AddFont('angsa','','angsa.php');
      $this->SetFont('angsa','',10);
      $this->SetY(-15);
      $this->Cell(0,0,iconv( 'UTF-8','TIS-620','พิมพ์โดย' .$_SESSION["name"]  .$_SESSION["lastname"].DateThai(date('m/d/Y h:i:s a', time()),0,1,"L")));
      $this->Cell(0,0,iconv('UTF-8','TIS-620','หน้าที่ '.$this->PageNo().'/{nb}'),0,1,'R');
      
   }
   
}
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
 $pdf = new PDF();//สร้าง object pdf 
 $pdf->AliasNbPages();
 $pdf->AddPage('L','A4',0);//หาก เราใช้คำสั่ง  $pdf->AddPage("l"); จะได้ pdf ขนาด A4 เป็น แนวนอน
 $pdf->AddFont('angsa','','angsa.php');
 $pdf->AddFont('angsa','B','angsab.php');
 $pdf->AddFont('angsa','I','angsai.php');
 $pdf->AddFont('angsa','BI','angsaz.php');
 $pdf->SetFont('angsa','B',14);//กำหนด font แบบปกติ  angsa ขนาด 14 
 $pdf->Image('logo1bw.png',10,7,0);
 $pdf->SetFont('angsa','B',16);
 $pdf->Cell(0,0,iconv("UTF-8", "TIS-620","มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ"),0,1,"C");
 $pdf->Ln(9);
 $pdf->Cell(0,0,iconv("UTF-8", "TIS-620",'รายการครุภัณฑ์สำหรับตรวจสอบประจำปี ณ วันที่ '.DateThaiD(date('Y-m-d'))),0,1,"C");
 $pdf->line(5,28,290,28);
 $pdf->Ln(15);
 $pdf->SetFont('angsa','',15);
 $pdf->Cell(0,0,iconv("UTF-8", "TIS-620","คณะบริหารธุรกิจ"),0,1,"C");
 $pdf->Ln(7);
   $pdf->SetFont('angsa','B',12);//
   $pdf->Cell(10,10,iconv("UTF-8", "TIS-620","ลำดับ"),1,0,"C");
   $pdf->Cell(40,10,iconv("UTF-8", "TIS-620","หมายเลขครุภัณฑ์"),1,0,"C");
   $pdf->Cell(20,10,iconv("UTF-8", "TIS-620","วันที่เข้าคลัง"),1,0,"C");
   $pdf->Cell(50,10,iconv("UTF-8", "TIS-620","ชื่อครุภัณฑ์"),1,0,"C");
	$pdf->Cell(55,10,iconv("UTF-8", "TIS-620","รายละเอียด"),1,0,"C");
	$pdf->Cell(30,10,iconv("UTF-8", "TIS-620","เลขที่ใบเสร็จส่งของ"),1,0,"C");
	$pdf->Cell(20,10,iconv("UTF-8", "TIS-620","วันที่เบิก"),1,0,"C");
	$pdf->Cell(35,10,iconv("UTF-8", "TIS-620","ขื่อผู้เบิก"),1,0,"C");
   $pdf->Cell(20,10,iconv("UTF-8", "TIS-620","ราคา/หน่วย"),1,0,"C");  
   $pdf->Ln(7);                                      // Check connection
  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }                                 
     $result = $conn->query($sql);
     $n =1;
     $i = 51;
     if ($result->num_rows > 0) {                                    // output data of each row
     while($row = $result->fetch_assoc()) {
        // echo "<tr><td>". $row["No"]. "</td> <td> ". $row["No_List"]. "</td> <td>" . $row["N_List"] . "</td><td>". $row["U_List"]. "</td><td>". $row["P_List"]."</td><td>". $row["PL_List"]."</td></tr>";
         $pdf->setXY(10,$i);//แสดงข้อความห่างขอบซ้าย 10 ขอบบน 25
       $pdf->SetFont('angsa','',12);//
        $pdf->Cell(10,10,iconv("UTF-8", "TIS-620",$n),1,0,"C");
        $pdf->Cell(40,10,iconv("UTF-8", "TIS-620",$row["serial"]),1,0,"L");
        $pdf->Cell(20,10,iconv("UTF-8", "TIS-620",$row["date"] ),1,0,"C");
        $pdf->Cell(50,10,iconv("UTF-8", "TIS-620",$row["name"]),1,0,"L");
        $pdf->Cell(55,10,iconv("UTF-8", "TIS-620",$row["detail"]),1,0,"L"); 
        $pdf->Cell(30,10,iconv("UTF-8", "TIS-620",$row["d_number"]),1,0,"C");
        $pdf->Cell(20,10,iconv("UTF-8", "TIS-620",$row["date_p"]),1,0,"C"); 
        $pdf->Cell(35,10,iconv("UTF-8", "TIS-620",$row["picker"]),1,0,"C"); 
        $pdf->Cell(20,10,iconv("UTF-8", "TIS-620",$row["price"]),1,0,"R");
        $i = $i+10;
        if ($i > 100) {
         $pdf->AddPage('L','A4',0);//หาก เราใช้คำสั่ง  $pdf->AddPage("l"); จะได้ pdf ขนาด A4 เป็น แนวนอน
         $pdf->AddFont('angsa','','angsa.php');
         $pdf->AddFont('angsa','B','angsab.php');
         $pdf->AddFont('angsa','I','angsai.php');
         $pdf->AddFont('angsa','BI','angsaz.php');
         $pdf->SetFont('angsa','B',14);//กำหนด font แบบปกติ  angsa ขนาด 14 
         $pdf->Image('logo1bw.png',10,7,0);
         $pdf->SetFont('angsa','B',16);
         $pdf->Cell(0,0,iconv("UTF-8", "TIS-620","มหาวิทยาลัยเทคโนโลยีพระจอมพระนครเหนือ"),0,1,"C");
         $pdf->Ln(9);
         $pdf->Cell(0,0,iconv("UTF-8", "TIS-620",'รายการครุภัณฑ์สำหรับตรวจสอบประจำปี ณ วันที่ '.DateThaiD(date('Y-m-d'))),0,1,"C");
         $pdf->line(5,28,290,28);
         $pdf->Ln(15);
         $pdf->SetFont('angsa','',15);
         $pdf->Cell(0,0,iconv("UTF-8", "TIS-620","คณะบริหารธุรกิจ (ต่อ)"),0,1,"C");
         $pdf->Ln(7);
           $pdf->SetFont('angsa','B',12);//
           $pdf->Cell(10,10,iconv("UTF-8", "TIS-620","ลำดับ"),1,0,"C");
           $pdf->Cell(40,10,iconv("UTF-8", "TIS-620","หมายเลขครุภัณฑ์"),1,0,"C");
           $pdf->Cell(20,10,iconv("UTF-8", "TIS-620","วันที่เข้าคลัง"),1,0,"C");
           $pdf->Cell(50,10,iconv("UTF-8", "TIS-620","ชื่อครุภัณฑ์"),1,0,"C");
           $pdf->Cell(55,10,iconv("UTF-8", "TIS-620","รายละเอียด"),1,0,"C");
           $pdf->Cell(30,10,iconv("UTF-8", "TIS-620","เลขที่ใบเสร็จส่ง"),1,0,"C");
           $pdf->Cell(20,10,iconv("UTF-8", "TIS-620","วันที่เบิก"),1,0,"C");
           $pdf->Cell(35,10,iconv("UTF-8", "TIS-620","ขื่อผู้เบิก"),1,0,"C");
           $pdf->Cell(20,10,iconv("UTF-8", "TIS-620","ราคา/หน่วย"),1,0,"C"); 
           $i = 51;
        }
        $n = $n+1;
     }
     } else {
        // echo "<tr><th width=\"1000\"> ไม่พบข้อมูล </th></tr>";
      }
    $conn->close();
 $pdf->Output();//สั่งพิมพ์ pdf
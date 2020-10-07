<?php
include '../config/config.php';
// Optionally define the filesystem path to your system fonts
// otherwise tFPDF will use [path to tFPDF]/font/unifont/ directory
// define("_SYSTEM_TTFONTS", "C:/Windows/Fonts/");

require('pdflibrary/tfpdf.php');

$pdf = new tFPDF('P','mm','A4');
$pdf->AddPage();

// Add a Unicode font (uses UTF-8)
$pdf->AddFont('DejaVu','','DejaVuSans-Bold.ttf',true);
$pdf->SetFont('DejaVu','',14);

$userid=$_GET['id'];

$rows="SELECT if(sp.member_Id='' AND sp.reference_member_Id='' ,'saved','notsaved') as sp_status,mem.feet,mem.inches,mem.member_id,mem.middle_name,mem.first_name,mem.last_name,addrss.full_address,addrss.city,comm.email,mem.fathers_name,mem.gender,mem.age,mem.date_of_birth,mem.place_of_birth,mem.time_of_birth,mem.marital_status,mem.blood_group,mem.popular_name,mem.marital_status,addrss.member_id,addrss.full_address,addrss.city,addrss.state,addrss.country,addrss.pincode,comm.member_id,comm.mobile,comm.email,edu.member_id,edu.highest_edu,edu.occupation,edu.ocp_details,edu.income,keyy.id,keyy.display_pic from member as mem INNER JOIN address as addrss on mem.member_id=addrss.member_id INNER JOIN communication as comm on mem.member_id=comm.member_id INNER JOIN education_ocp as edu on mem.member_id=edu.member_id INNER JOIN key_member_id as keyy on mem.member_id=keyy.id LEFT join saved_profile as sp on mem.member_id=sp.reference_member_Id  where mem.member_id='".$userid."'  ";
$result=mysqli_query($con,$rows);
//$result1=mysqli_fetch_assoc($result);
//echo $result1['member_id'];

//$result = mysqli_query($connect, $query);

$row = mysqli_fetch_array($result);
		$gender='';
if($row['gender']=='M'){
		$gender='Male';
	}else{ 
	$gender='Female';
}
$dob='';
if($row['time_of_birth']!='00:00:00') {
	$dob=date('H:i',strtotime($row['time_of_birth'])); 
} else{ 
	$dob= "NA";
}
$pob='';
if($row['place_of_birth']!=''){
 $pob=$row['place_of_birth'];
}else{
 	$pob='NA';
 }

 $occupation='';
if($row['occupation']==1){
  $occupation="Job";
} else if($row['occupation']==2) { 
	 $occupation="Bussiness";
}
else if($row['occupation']==3) {
  $occupation="Housewife";
} else if($row['occupation']==4) { 
	$occupation="Student";
}else if($row['occupation']==5) {
  $occupation="Nothing";
}else{ 
	 $occupation='NA';
} 

$blood_group='';
if($row['blood_group']==1){
	$blood_group='A+';
} else if($row['blood_group']==2){
	$blood_group='B+';
}
else if($row['blood_group']==3){
	$blood_group='AB+';
}else if($row['blood_group']==4){
	$blood_group='O+';
}else if($row['blood_group']==5){
	$blood_group='A+';
}else if($row['blood_group']==6){
	$blood_group='B-';
} else if($row['blood_group']==7){
	$blood_group='AB-';
}else if($row['blood_group']==8){
	$blood_group='O-';
} else {
	$blood_group='NA';
}  
$feet='';
 if($row['feet']!=''){ 
 	$feet=$row['feet'];
 }else{
 	$feet="NA";
 }  

$inches='';		  
if($row['inches']!=''){
 $inches=$row['inches'];
}else{
	$inches="NA";
}  
$image1=$row['display_pic'];
$pdf->Cell(71 ,10,'',0,0);
$pdf->Cell(59 ,5,'User Detail',0,0);
$pdf->Cell(59 ,10,'',0,1);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(71 ,125,$pdf->Image(RE_HOME_PATH.$image1, $pdf->GetX(), $pdf->GetY(), 33.78),0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->Cell(59 ,5,'',0,1);


$pdf->SetFont('Arial','',10);

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Member ID:',0,0);
$pdf->Cell(34 ,5,$row['member_id'],0,1);

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Name:',0,0);
$pdf->Cell(34 ,5,$row['first_name'].' '.$row['last_name'],0,1);
 
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,25,'',0,1);


$pdf->SetFont('Arial','B',15);
$pdf->Cell(1 ,105,'',0,0,1);
$pdf->Cell(1 ,5,'Personal Details',0,1,'L');
$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(189 ,10,'',0,1);


$pdf->SetFont('Arial','',10);
$pdf->Cell(80 ,6,'Full Name ',0,0);
$pdf->Cell(80 ,6,$row['first_name'].' '.$row['last_name'],0,1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(80 ,6,'Popular Name ',0,0);
$pdf->Cell(80 ,6,$row['popular_name'],0,1);
$pdf->Cell(80 ,6,'Date of Birth',0,0);
$pdf->Cell(80 ,6,$row['date_of_birth'],0,1);
$pdf->Cell(80 ,6,'Age',0,0);
$pdf->Cell(80 ,6,$row['age'],0,1);
$pdf->Cell(80 ,6,'Gender',0,0);
$pdf->Cell(80 ,6,$gender,0,1);
$pdf->Cell(80 ,6,'Status ',0,0);
$pdf->Cell(80 ,6,$row['marital_status'],0,1);
$pdf->Cell(80 ,6,'Mobile No ',0,0);
$pdf->Cell(80 ,6,$row['mobile'],0,1);
$pdf->Cell(80 ,6,'Email id ',0,0);
$pdf->Cell(80 ,6,$row['email'],0,1);
$pdf->Cell(80 ,6,'Blood Group ',0,0);
$pdf->Cell(80 ,6,$blood_group,0,1);
$pdf->Cell(80 ,6,'Birth Time  ',0,0);
$pdf->Cell(80 ,6,$dob,0,1);
$pdf->Cell(80 ,6,'Birth Place ',0,0);
$pdf->Cell(80 ,6,$pob,0,1);
$pdf->Cell(80 ,6,'Height',0,0);
$pdf->Cell(80 ,6,'Feet:'.$feet.' Inches:'.$inches,0,1);
$pdf->Cell(80 ,10,' ',0,1);

$pdf->SetFont('Arial','B',15);

$pdf->Cell(1 ,36,'',0,0);
$pdf->Cell(1 ,5,'About Us',0,1,'L');
$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(189 ,5,'',0,1);

$pdf->SetFont('Arial','',10);
$pdf->Cell(80 ,6,'Present Address  ',0,0);
$pdf->Cell(80 ,6,$row['full_address'],0,1);
$pdf->Cell(80 ,10,' ',0,1);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(1 ,36,'',0,0);
$pdf->Cell(1 ,5,'Education',0,1,'L');
$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(189 ,5,'',0,1);

$pdf->SetFont('Arial','',10);
$pdf->Cell(80 ,6,'Highest Education ',0,0);
$pdf->Cell(80 ,6,$row['highest_edu'],0,1);
$pdf->Cell(80 ,10,' ',0,1);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(1 ,6,'',0,0);
$pdf->Cell(1 ,5,'Occupation',0,1,'L');
$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(189 ,5,'',0,1);

$pdf->SetFont('Arial','',10);
$pdf->Cell(80 ,6,'Occupation ',0,0);
$pdf->Cell(80 ,6,$occupation,0,1);
$pdf->Cell(80 ,10,' ',0,1);



$pdf->Output();
$pdf->Close();;
?>


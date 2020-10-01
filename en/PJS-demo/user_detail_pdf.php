
<?php
//index.php
//include autoloader
include '../../config/config.php';
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace

use Dompdf\Dompdf;

//initialize dompdf class

$document = new Dompdf();



//$document->loadHtml($html);
//$page = file_get_contents("cat.html");

//$document->loadHtml($page);
$userid=$_GET['id'];

$row="SELECT if(sp.member_Id='' AND sp.reference_member_Id='' ,'saved','notsaved') as sp_status,mem.feet,mem.inches,mem.member_id,mem.middle_name,mem.first_name,mem.last_name,addrss.full_address,addrss.city,comm.email,mem.fathers_name,mem.gender,mem.age,mem.date_of_birth,mem.place_of_birth,mem.time_of_birth,mem.marital_status,mem.blood_group,mem.popular_name,mem.marital_status,addrss.member_id,addrss.full_address,addrss.city,addrss.state,addrss.country,addrss.pincode,comm.member_id,comm.mobile,comm.email,edu.member_id,edu.highest_edu,edu.occupation,edu.ocp_details,edu.income,keyy.id,keyy.display_pic from member as mem INNER JOIN address as addrss on mem.member_id=addrss.member_id INNER JOIN communication as comm on mem.member_id=comm.member_id INNER JOIN education_ocp as edu on mem.member_id=edu.member_id INNER JOIN key_member_id as keyy on mem.member_id=keyy.id LEFT join saved_profile as sp on mem.member_id=sp.reference_member_Id  where mem.member_id= '$userid'";

$result=mysqli_query($con,$row);
//$result1=mysqli_fetch_assoc($result);
//echo $result1['member_id'];

//$result = mysqli_query($connect, $query);

$output = "
 <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 0px;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
 
}
</style>
<table>
";

while($row = mysqli_fetch_array($result))
{
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
 $output .= '
 <tr>
 <td colspan="4" style="width:100%;text-align:center;">
		<img class="sm-image" src="'.RE_HOME_PATH.'images/logo1.png" width="110">
 </tr>
  </td>
	<tr>
	  <td colspan="2" style="width:40%;"><img class="user-img img-fluid" src='.RE_HOME_PATH.$row["display_pic"].' style="width: 150px;">
	  </td>
	 
	  <td colspan="2" style="vertical-align: bottom">
	          <div style="width:100%">Name : '.$row['first_name'].' '.$row['last_name'].'</div>
	          <div style="width:100%">Member Id :'.$row['member_id'].'</div>
	  </td>
	</tr>
	<tr style="border-bottom:solid 1px black;">
		<th colspan="4">
		<div style="text-decoration: underline;font-size: 1.75rem;color: #2c2c2c;width:100%;">
			Personal Details
			</div>
		</th>
	</tr>	
	<tr>
		<td colspan="2">
				Full Name <span style="float:right;font-weight:bold;">:</span>
		</td>
		<td colspan="2">
				'.$row['first_name'].' '.$row['last_name'].'
		</td>
	</tr>
	<tr>
		<td colspan="2">
				Popular Name <span style="float:right;font-weight:bold;">:</span>
		</td>
		<td colspan="2">
				'.$row['popular_name'].'
		</td>
	</tr>
	<tr>
		<td colspan="2">
				Date of Birth <span style="float:right;font-weight:bold;">:</span>
		</td>
		<td colspan="2">
				'.date('d/m/Y',strtotime($row['date_of_birth'])).'
		</td>
	</tr>
	<tr>
		<td colspan="2">
				Age <span style="float:right;font-weight:bold;">:</span>
		</td>
		<td colspan="2">
				'.$row['age'].'
		</td>
	</tr>
	<tr>
		<td colspan="2">
				Gender <span style="float:right;font-weight:bold;">:</span>
		</td>
		<td colspan="2">
				'.$gender.'
		</td>
	</tr>
	<tr>
		<td colspan="2">
				Status <span style="float:right;font-weight:bold;">:</span>
		</td>
		<td colspan="2">
			'.$row['marital_status'].'
		</td>
	</tr>
	<tr>
		<td colspan="2">
				Mobile No <span style="float:right;font-weight:bold;">:</span>
		</td>
		<td colspan="2">
				'.$row['mobile'].'
		</td>
	</tr>
	<tr>
		<td colspan="2">
				Email id <span style="float:right;font-weight:bold;">:</span>
		</td>
		<td colspan="2">
			'.$row['email'].'
		</td>
	</tr>
	<tr>
		<td colspan="2">
				Blood Group <span style="float:right;font-weight:bold;">:</span>
		</td>
		<td colspan="2">
				'.$blood_group.'
		</td>
	</tr>
	<tr>
		<td colspan="2">
				Birth Time <span style="float:right;font-weight:bold;">:</span>
		</td>
		<td colspan="2">
				'.$dob.'
		</td>
	</tr>
	<tr>
		<td colspan="2">
				Birth Place <span style="float:right;font-weight:bold;">:</span>
		</td>
		<td colspan="2">
				'.$pob.'
		</td>
	</tr>
	<tr>
		<td colspan="2">
				Height <span style="float:right;font-weight:bold;">: </span>
		</td>
		<td colspan="2">
				Feet : '.$feet.' Inches : '.$inches.'
		</td>
	</tr>
	<tr>
		<th colspan="4">
		<div style="text-decoration: underline;font-size: 1.75rem;color: #2c2c2c;width:100%;">
			About Us
			</div>
		</th>
	</tr>	
	<tr>
		<td colspan="2">
				Present Address <span style="float:right;font-weight:bold;">:</span>
		</td>
		<td colspan="2">
				'.$row['full_address'].'
		</td>
	</tr>
	<tr>
		<th colspan="4">
		<div style="text-decoration: underline;font-size: 1.75rem;color: #2c2c2c;width:100%;">
			Education
			</div>
		</th>
	</tr>
	<tr>
		<td colspan="2">
				Highest Education <span style="float:right;font-weight:bold;">:</span>
		</td>
		<td colspan="2">
				'.$row['highest_edu'].'
		</td>
	</tr>
	<tr>
		<th colspan="4">
		<div style="text-decoration: underline;font-size: 1.75rem;color: #2c2c2c;width:100%;">
			Occupation
			</div>
		</th>
	</tr>
	<tr>
		<td colspan="2">
				Occupation <span style="float:right;font-weight:bold;">:</span>
		</td>
		<td colspan="2">
				'.$occupation.'
		</td>
	</tr>
 ';
}

$output .= '</table>';

//echo $output;exit;

$document->loadHtml($output);

//set page size and orientation

$document->setPaper('A4', 'landscape');

//Render the HTML as PDF

$document->render();

//Get output of generated pdf in Browser

$document->stream("Webslesson", array("Attachment"=>0));

//1  = Download
//0 = Preview


?>
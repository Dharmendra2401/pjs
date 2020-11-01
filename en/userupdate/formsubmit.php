<?php 
include "../../config/config.php";
require_once("../../library/upload.php");
include '../../mail/index.php';
$requestid=mysqli_real_escape_string($con,trim( $_REQUEST['requestid']));

$firstname=mysqli_real_escape_string($con,trim( $_REQUEST['firstname']));
$fathername=mysqli_real_escape_string($con,trim( $_REQUEST['fathername']));
$husbandname=mysqli_real_escape_string($con,trim( $_REQUEST['husbandname']));
$lastname=mysqli_real_escape_string($con,trim( $_REQUEST['lastname']));
$popularname=mysqli_real_escape_string($con,trim( $_REQUEST['popularnamess']));
$dob=mysqli_real_escape_string($con,trim( $_REQUEST['dob']));
$birthtime=mysqli_real_escape_string($con,trim($_REQUEST['birthtime']));
$birthplace=mysqli_real_escape_string($con,trim( $_REQUEST['birthplace']));
$gender=mysqli_real_escape_string($con,trim( $_REQUEST['gender']));
$mobileno=mysqli_real_escape_string($con,trim( $_REQUEST['mobileno']));
$status=mysqli_real_escape_string($con,trim( $_REQUEST['status']));
$email=mysqli_real_escape_string($con,trim( $_REQUEST['email']));
$bloodgroup=mysqli_real_escape_string($con,trim( $_REQUEST['bloodgroup']));
$feet=mysqli_real_escape_string($con,trim( $_REQUEST['feet']));
$inches=mysqli_real_escape_string($con,trim( $_REQUEST['inches']));
$country=mysqli_real_escape_string($con,trim( $_REQUEST['country']));
$state=mysqli_real_escape_string($con,trim( $_REQUEST['state']));
$city=mysqli_real_escape_string($con,trim( $_REQUEST['city']));
$address=mysqli_real_escape_string($con,trim( $_REQUEST['address']));
$pincode=mysqli_real_escape_string($con,trim( $_REQUEST['pincode']));
//$bloodgroup=$_REQUEST['bloodgroup'];
$highest=mysqli_real_escape_string($con,trim( $_REQUEST['highest']));
$occupation=mysqli_real_escape_string($con,trim( $_REQUEST['occupation']));
$details=mysqli_real_escape_string($con,trim( $_REQUEST['details']));
$income=mysqli_real_escape_string($con,trim( $_REQUEST['income']));
$age=mysqli_real_escape_string($con,trim( $_REQUEST['ageone']));
$area=mysqli_real_escape_string($con,trim( $_REQUEST['area']));
$donate=mysqli_real_escape_string($con,trim( $_REQUEST['donate']));
$flagname=mysqli_real_escape_string($con,trim( $_REQUEST['flagname']));
$countrycode=mysqli_real_escape_string($con,trim( $_REQUEST['countrycode']));
$otherbloodgroup=mysqli_real_escape_string($con,trim( $_REQUEST['otherbloodgroup']));

if($bloodgroup==9){
$bloodgroup=$otherbloodgroup;
}

$submitdate=date('Y-m-d H:i:s');

$file='';
$file_namees=$_FILES["profile"]["name"]; 
$file_tmpps=$_FILES["profile"]["tmp_name"];

//$request_id=uniqueid($con);

$getvalid=mysqli_query($con,"select first_name,last_name,fathers_name,date_of_birth from staging_approval where first_name='".$firstname."' and last_name='".$lastname."' and date_of_birth='".$dob."' ");

$counteidd=mysqli_query($con,"select request_id,display_pic from staging_approval where request_id='".$requestid."' and active_status='R' ");
$getimage=mysqli_fetch_array($counteidd);
$getcount=mysqli_num_rows($getvalid);
$counteid=mysqli_num_rows($counteidd);


if(($firstname!='')&& ($lastname!='') && ($dob!='') && ($gender!='')&& ($mobileno!='')&& ($status!='')&& ($email!='')&& ($bloodgroup!='')&& ($country!='')&& ($address!='')&& ($highest!='')&& ($occupation!='')){

if($counteid==0){
redirect(RE_EN_PATH."signup.php","Error! You are already registered with us~@~".MSG_ERROR);
}
else{

if($_FILES["profile"]["name"]!=''){
$ext=explode(".",$_FILES["profile"]["name"]);
$url="../../uploads/". str_replace(" ","",sha1($_FILES["profile"]["name"].time()).".".$ext[sizeof($ext)-1]);
$url12="uploads/". str_replace(" ","",sha1($_FILES["profile"]["name"].time()).".".$ext[sizeof($ext)-1]);
move_uploaded_file($_FILES["profile"]["tmp_name"],$url);
$thumb_path= $url;
$max_dim = 800;
createResized($url, $thumb_path, $max_dim);	
unlink('../../'.$getimage['display_pic']);		
}else{
 $url12=$getimage['display_pic'];
}

// $insert=mysqli_query($con,"insert into staging_approval (request_id,first_name,last_name,date_of_birth,gender,martial_status,blood_group,popular_name,country,state,city,pincode,full_address,highest_edu,occupation,ocp_details,income,display_pic,place_of_birth,mobile,email,time_of_birth,record_inserted_dttm,fathers_name,age,area,feet,inches,husband_wife_name,blood_donate,country_flag,country_code)values('".$request_id."','".$firstname."','".$lastname."','".date($dob,strtotime('Y-m-d'))."','".$gender."','".$status."','".$bloodgroup."','".$popularname."','".$country."','".$state."','".$city."','".$pincode."','".$address."','".$highest."','".$occupation."','".$details."','".$income."','".$url12."','".$birthplace."','".$mobileno."','".$email."','".$birthtime."','".$submitdate."','".$fathername."','".$age."','".$area."','".$feet."','".$inches."','".$husbandname."','".$donate."','".$flagname."','".$countrycode."')")or die(mysqli_error($con));

$update=mysqli_query($con,"update staging_approval set
first_name='".$firstname."',
last_name='".$lastname."',
date_of_birth='".date($dob,strtotime('Y-m-d'))."',
gender='".$gender."',
martial_status='".$status."',
blood_group='".$bloodgroup."',
popular_name='".$popularname."',
country='".$country."',
state='".$state."',
city='".$city."',
pincode='".$pincode."',
full_address='".$address."',
highest_edu='".$highest."',
occupation='".$occupation."',
ocp_details='".$details."',
income='".$income."',
display_pic='".$url12."',
place_of_birth='".$birthplace."',
mobile='".$mobileno."',
email='".$email."',
time_of_birth='".$birthtime."',
record_updated_dttm='".$submitdate."',
fathers_name='".$fathername."',
age='".$age."',
area='".$area."',
feet='".$feet."',
inches='".$inches."',
husband_wife_name='".$husbandname."',
blood_donate='".$donate."',
country_flag='".$flagname."',
country_code ='".$countrycode."',active_status='U' where request_id='".$requestid."' ")or die(mysqli_error($con));

// $subject="".$firstname." ".$middlename." ".$lastname.", Welcome to ".WEBSITE_NAME." ";
// $mes='';
// $mes.="<p> Dear ".$firstname." ".$middlename." ".$lastname.", you are successfully registered on Porwad Jain Samaj website and your REFERENCE ID is <strong>".$request_id."</strong>. We request you to wait until the admin approves your profile.</p>
// <p>If you face any problem in using the website ,email us <a href='mailto:".FROM_EMAIL."'>".FROM_EMAIL."</a></p>";
// $message=$mes;
// $to=$email;
// sendmails($to,$message,$subject);
redirect(RE_EN_PATH."userupdate/successfull.php?id='".base64_encode($requestid)."'");
}
}else{
redirect(RE_EN_PATH."signup.php","Error! Please fill out fields and try again~@~".MSG_ERROR);


}





?>
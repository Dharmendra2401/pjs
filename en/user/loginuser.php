<?php  
include '../../config/config.php';
 $getotpcokie=$_COOKIE["getotp"];
 $getotp=$_REQUEST["otp"];
 $getmidcokie=$_REQUEST["mid"];

if(($getotpcokie!='') && ($getmidcokie!='') && ($getotp==$getotpcokie)){
$row=mysqli_query($con,'select member_id,first_name,middle_name,last_name from member where member_id="'.$getmidcokie.'"  ');
if(mysqli_num_rows($row)>0){
$getuserdata=mysqli_fetch_array($row);
$_SESSION['user_mid']=$getuserdata['member_id'];
$_SESSION['ufullname']=$getuserdata['first_name'].' '.$getuserdata['middle_name'].' '.$getuserdata['last_name'];
echo "true";
}
}else{
echo "false";
}   

?>
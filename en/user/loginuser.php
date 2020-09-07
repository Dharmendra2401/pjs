<?php  
include '../../config/config.php';
 $getotpcokie=$_COOKIE["getotp"];
 $getotp=$_REQUEST["otp"];
 $getmidcokie=$_REQUEST["mid"];

if(($getotpcokie!='') && ($getmidcokie!='') && ($getotp==$getotpcokie)){
$row=mysqli_query($con,'select member_id from communication where member_id="'.$getmidcokie.'"  ');
if(mysqli_num_rows($row)>0){

echo "true";

}
}else{
echo "false";
}   

?>
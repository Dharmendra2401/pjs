<?php
include '../../config/config.php';
$otp=generateNumericOTP($n);
$contactnumber=$_REQUEST['mid'];

if(($otp!='') && ($contactnumber!='')){
$getnumber=mysqli_fetch_array(mysqli_query($con,'select mobile from communication where member_id="'.$contactnumber.'"')); 
$shownumber=$getnumber['mobile'];
$lastnumber=substr($getnumber['mobile'],-3);
setcookie ("getotp",$otp,time()+ (180 * 1000));
$getcokie=$_COOKIE["getotp"];
// Account details
//$apiKey = urlencode('Cr0/QjM7xqY-ntuW77Rz203zrhCCP6Te2DWzZJUcOY');
// Message details
$numbers = array($shownumber);
$sender = urlencode('TXTLCL');
$message = rawurlencode('The OTP for your '.WEBSITE_NAME.' is :'.$otp.' ');
$numbers = implode(',', $numbers);
// Prepare data for POST request
$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
// Send the POST request with cURL
$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// Process your response here
//echo $response;
echo $lastnumber;
}
?>
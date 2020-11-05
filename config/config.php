<?php
error_reporting(0);
session_start();
$host="localhost";
//$port=3066;
$socket="";
$user="root";
$password="";
$dbname="dwr_vts_t";
$con=new mysqli($host, $user, $password, $dbname);
if(mysqli_connect_errno()){ echo "Failed to connect to db".mysqli_connect_errno();}
define('RE_HOME_PATH', "http://localhost/pjs_user/");
define('RE_EN_PATH', "http://localhost/pjs_user/en/");
define('RE_HOME_USER', "http://localhost/pjs_user/en/user/");
define('RE_HOME_ADMIN', "http://localhost/pjs_user/en/subadmin/");
define('RE_HOME_SUPERADMIN', "http://localhost/pjs_user/en/admin/");
define('WEBSITE_NAME','Porwad Samajik Manch');
define('TITLE','PJS');
define('TITLE_SITE','');
define('FROM_EMAIL','support@porwadjain.com');
define('META_DESCRIPTION', "");
define('META_KEYWORDS', "");
define('COMPANY_NAME', "");
define('COMPANY_URL', "");
define("MSG_ERROR","danger");
define("MSG_SUCCESS","success");
define("MSG_WARNING","warning");
/*Error Message End*/
include_once('functions.php');
include_once('paging.php');
date_default_timezone_set("Asia/Kolkata");
// function sendemail($to,$from="",$subject,$message)
// {
// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// $headers .= 'From: '.WEBSITE_NAME.' <'.FROM_EMAIL.'>' . "\r\n";
// mail($to,$subject,$message,$headers);
// }
function limit_text($text, $limit) {
if (str_word_count($text, 0) > $limit) {
$words = str_word_count($text, 2);
$pos = array_keys($words);
$text = substr($text, 0, $pos[$limit]) . '...';
}
return $text;
}
function sub_admin_session_check()
{
if(($_SESSION['sub_admin_email']=='') && ($_SESSION['sub_admin_id']=='') )
{	
redirect(RE_HOME_ADMIN."index.php","Session expired.~@~".MSG_ERROR);
}
}
function admin_session_check()
{
if(($_SESSION['admin_email']=='') && ($_SESSION['admin_id']=='') )
{	
redirect(RE_HOME_SUPERADMIN."index.php","Session expired.~@~".MSG_ERROR);
}
}
function user_session_check()
{
if(($_SESSION['user_mid']=='') && ($_SESSION['ufullname']=='') )
{	
redirect(RE_HOME_PATH."index.php","Session expired.~@~".MSG_ERROR);
}
}
function commonsession(){
if(($_SESSION['admin_email']!='') || ($_SESSION['sub_admin_email']!='') || ($_SESSION['user_mid']!='') ){
redirect(RE_HOME_PATH."index.php","Session expired.~@~".MSG_ERROR);
}
}
function generateNumericOTP($n) {
$n = 4;
$generator = "1357902468";
$result = "";
for ($i = 1; $i <= $n; $i++) {
$result .= substr($generator, (rand()%(strlen($generator))), 1);
}
return $result;
}
function generatepassword($pass) {
$pass = 6;
$generator = "1357902468";
$res = "";
for ($i = 1; $i <= $pass; $i++) {
$res .= substr($generator, (rand()%(strlen($generator))), 1);
}
return $res;
}
//print_r(generateNumericOTP($n));
function uniqtskid($con)
{
$prefix='ADMN';
$rst11=mysqli_query($con,"select id,request_id from sub_admin_login order by id desc limit 1" ) or die(mysql_error($con));
$getresultss=mysqli_num_rows($rst11);
if(mysqli_num_rows($rst11) == 0){
$uniqid =$prefix."0001";
}
else{
while($row_val = mysqli_fetch_array($rst11) ){
$usr12 = $row_val['request_id'];
$str = ltrim($usr12, 'ADMN');
$dge=str_pad(intval($str) + 1, strlen($str), '0', STR_PAD_LEFT);
}$uniqid =$prefix.$dge;
}
return $uniqid;	
}	
function uniqueid($con)
{
$prefix='RID';
$rst11=mysqli_query($con,"select request_id from staging_approval order by request_id desc limit 1" ) or die(mysql_error($con));
$getresultss=mysqli_num_rows($rst11);
if(mysqli_num_rows($rst11) == 0){
$uniqid ="RID0001";
}
else{
while($row_val = mysqli_fetch_array($rst11) ){
$usr12 = $row_val['request_id'];
$str = ltrim($usr12, 'RID');
$dge=str_pad(intval($str) + 1, strlen($str), '0', STR_PAD_LEFT);
}$uniqid =$prefix.$dge;
}
return $uniqid;	

}
function uniqueopj($con)
{
$prefix='OPJ';
$rst11=mysqli_query($con,"select request_id from non_member_request order by request_id desc limit 1" ) or die(mysql_error($con));
$getresultss=mysqli_num_rows($rst11);
if(mysqli_num_rows($rst11) == 0){
$uniqid =$prefix."0001";
}
else{
while($row_val = mysqli_fetch_array($rst11) ){
$usr12 = $row_val['request_id'];
$str = ltrim($usr12, 'OPJ');
$dge=str_pad(intval($str) + 1, strlen($str), '0', STR_PAD_LEFT);
}$uniqid =$prefix.$dge;
}
return $uniqid;	
}

function uniquemid($con)
{
$prefix='MID';
$rst11=mysqli_query($con,"select id from key_member_id order by id desc limit 1" ) or die(mysql_error($con));
$getresultss=mysqli_num_rows($rst11);
if(mysqli_num_rows($rst11) == 0){
$uniqid =$prefix."0001";
}
else{
while($row_val = mysqli_fetch_array($rst11) ){
$usr12 = $row_val['id'];
$str = ltrim($usr12, 'MID');
$dge=str_pad(intval($str) + 1, strlen($str), '0', STR_PAD_LEFT);
}$uniqid =$prefix.$dge;
}
return $uniqid;	
}
?>






<?php
error_reporting(0);

session_start();
$host="localhost";
$port=5066;
$socket="";
$user="root";
$password="harsh@123";
$dbname="dwr_vts_t";
$con=new mysqli($host, $user, $password, $dbname, $port, $socket);
if(mysqli_connect_errno()){ echo "Failed to connect to db".mysqli_connect_errno();}
define('RE_HOME_PATH', "http://localhost/pjs_user/"); 
define('RE_EN_PATH', "http://localhost/pjs_user/en/");
define('RE_HOME_USER', "http://localhost/pjs_user/en/user/"); 
define('RE_HOME_ADMIN', "http://localhost/pjs_user/en/admin/"); 
define('WEBSITE_NAME','PJS');
define('TITLE','PJS');
define('TITLE_SITE','');


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
function sendemail($to,$from="",$subject,$message)
{
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: '.WEBSITE_NAME.' <'.FROM_EMAIL.'>' . "\r\n";
mail($to,$subject,$message,$headers);
}
function limit_text($text, $limit) {
if (str_word_count($text, 0) > $limit) {
$words = str_word_count($text, 2);
$pos = array_keys($words);
$text = substr($text, 0, $pos[$limit]) . '...';
}
return $text;
}

function admin_session_check()
{
    if(($_SESSION['admin_email']=='') && ($_SESSION['admin_id']=='') )
    {	
    redirect(RE_HOME_ADMIN."index.php","Session expired.~@~".MSG_ERROR);
    }
   
}

function user_session_check()
{			
	if(($_SESSION['cust_name']=='') || ($_SESSION['cust_email']=='') || ($_SESSION['cust_ver']=='') || ($_SESSION['cust_onl']=='') || ($_SESSION['cust_mem']==''))
	{	
	redirect(RE_EN_PATH."login.php","Session expired.~@~".MSG_ERROR);
	}
}	





?>
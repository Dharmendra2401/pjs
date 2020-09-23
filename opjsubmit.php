<?php
include "config/config.php";
include "en/mail/index.php" ;
$opjfirstname=$_REQUEST['opjfirstname'];
$opjlastname=$_REQUEST['opjlastname'];
$opjmobile=$_REQUEST['opjmobile'];
$opjemail=$_REQUEST['opjemail'];
$opjaddress=$_REQUEST['opjaddress'];
$userid=$_REQUEST['userid'];
$request_id=uniqueopj($con);
$submitdate=date('Y-m-d H:i:s');
if(($opjfirstname!='') && ($opjlastname!='') && ($opjmobile!='') && ($opjemail!='') && ($opjaddress!='') && ($userid!='')){
mysqli_query($con,'insert into non_member_request(request_id,first_name,last_name,mobile,email,address,user_id,request_date,request_status)values("'.$request_id.'","'.$opjfirstname.'","'.$opjlastname.'","'.$opjmobile.'","'.$opjemail.'","'.$opjaddress.'","'.$userid.'","'.$submitdate.'","Y")');
$subject="Successfull Submited OPJ From ".WEBSITE_NAME." ";
$mes='';
$mes.=" Dear ".$opjfirstname." ".$opjlastname.", you are successfully registered as OPJ user with ".WEBSITE_NAME." and your REFRENCE ID is <strong>".$request_id."</strong> .if any query email us <a href='mailto:".FROM_EMAIL."'>".FROM_EMAIL."</a>";
$message=$mes;
$to=$opjemail;
sendmails($to,$message,$subject);
echo "true";
}else{
echo "false";
}
?>
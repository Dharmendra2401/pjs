<?php
include 'config/config.php';
include "en/mail/index.php" ;

$firstname=mysqli_real_escape_string($con,trim($_REQUEST['firstname']));
$lastname=mysqli_real_escape_string($con,trim($_REQUEST['lastname']));
$fathersname=mysqli_real_escape_string($con,trim($_REQUEST['fathersname']));
$dob=mysqli_real_escape_string($con,trim($_REQUEST['dob']));
//$middlename=mysqli_real_escape_string($con,trim($_REQUEST['middlename']));

$countmember=mysqli_query($con,'select member_id,first_name,last_name,fathers_name,date_of_birth from member where first_name="'.$firstname.'" and last_name="'.$lastname.'" and fathers_name="'.$fathersname.'" and date_of_birth="'.$dob.'"');
$counttable=mysqli_num_rows($countmember);

if($counttable>0){
$getemail=mysqli_fetch_array($countmember);
$showemail=mysqli_fetch_array(mysqli_query($con,'select email,member_id from communication where member_id="'.$getemail['member_id'].'" '));
$subject="User Requested Member Id (MID) From ".WEBSITE_NAME." ";
$mes='';
$mes.=" Dear ".$getemail['first_name']." ".$getemail['middle_name']." ".$getemail['last_name'].", you are successfully requested a login MEMBER ID (MID) is : <strong>".$getemail['member_id']."</strong> ,if any query email us <a href='mailto:".FROM_EMAIL."'>".FROM_EMAIL."</a>";
$message=$mes;
$to=$showemail['email'];
sendmails($to,$message,$subject);
 echo "true";
}
else{
echo "false";

}


?>
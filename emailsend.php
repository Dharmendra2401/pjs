<?php
include 'config/config.php';
include "en/mail/index.php" ;

$firstname=mysqli_real_escape_string($con,trim($_REQUEST['firstname']));
$lastname=mysqli_real_escape_string($con,trim($_REQUEST['lastname']));
$fathersname=mysqli_real_escape_string($con,trim($_REQUEST['fathersname']));
$dob=mysqli_real_escape_string($con,trim($_REQUEST['dob']));
$middlename=mysqli_real_escape_string($con,trim($_REQUEST['middlename']));

if($middlename=='')
$countmember=mysqli_query($con,'select first_name,last_name,fathers_name,date_of_birth from member where first_name="'.$firstname.'" and last_name="'.$lastname.'" and fathers_name="'.$fathersname.'" and date_of_birth="'.$dob.'" ');}

els

echo $counttable=mysqli_num_rows($countmember);

if(($firstname=='')&& ($lastname=='') && ($fathersname=='') && ($dob=='') ){




}

?>
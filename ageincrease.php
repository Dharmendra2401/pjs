<?php
include 'config/config.php';
include "en/mail/index.php" ;

$getdate=date('d-m-Y');
$query=mysqli_query($con,'select date_of_birth,Life_status,member_id from member where Life_status="L" and date_of_birth LIKE "%'.date('m-d').'%" ');
while($fetchdate=mysqli_fetch_array($query)){
$getadte= date('d-m',strtotime($fetchdate['date_of_birth']));
$currentdate=date('d-m'); 
if($getadte==$currentdate){
$getyear= date('Y',strtotime($fetchdate['date_of_birth']));
$getage=date('Y')-$getyear;
mysqli_query($con,'update member set age="'.$getage.'" where member_id="'.$fetchdate['member_id'].'" ');
}
}

?>
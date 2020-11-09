<?php 
include '../../config/config.php';
user_session_check();
global $con;
$current_user=$_REQUEST['seesionid'];
$blood_donate=$_REQUEST['blod_donate'];


$sql="UPDATE `member` SET `blood_donate`='$blood_donate' WHERE `member_id`='$current_user'";
    $result = mysqli_query($con,$sql);      
    if ($result) {
    	echo "success";
    }
    else{
    	echo "not success";
    }

?>
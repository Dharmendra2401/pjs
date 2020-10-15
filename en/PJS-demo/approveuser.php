<?php 
include '../../config/config.php';
user_session_check();
global $con;

$current_user_id=$_SESSION['user_mid'];
$to_user=$_POST['to_userid'];

$sql="UPDATE `relationship` SET `member_request_status`='Y' WHERE `member_id`='$to_user' AND `reference_member_Id`='$current_user_id'";
    $result = mysqli_query($con,$sql);   
    return $result; 
    if ($result) {
    	echo "success";
    }
    else{
    	echo "not success";
    }

?>
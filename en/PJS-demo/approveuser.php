<?php 
include '../../config/config.php';
user_session_check();
global $con;

$current_user_id=$_SESSION['user_mid'];
$to_user=$_POST['to_userid'];

$sql="UPDATE `relationship` SET `member_request_status`='Y' WHERE `member_id`='$to_user' AND `reference_member_Id`='$current_user_id'";

$notification="INSERT INTO `general_notification` (`id`, `member_id`, `reference_member_id`, `notification_type`, `seen_or_unseen_status`, `member_type`, `record_inserted_dttm`, `record_updated_dttm`, `active_status`) VALUES ('','$to_user', '$current_user_id', 'accept_request', '0', 'user', '$submitdate', '', 'Y')";


    $result = mysqli_query($con,$sql);   
    $result1 = mysqli_query($con,$notification);  
    return $result; 
    if ($result && $result1) {
    	echo "success";
    }
    else{
    	echo "not success";
    }

?>
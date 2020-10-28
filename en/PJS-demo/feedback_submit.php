<?php 
include '../../config/config.php';
user_session_check();
$current_user=$_POST['current_user'];
$feedback_type=$_POST['feedback_type'];
$feedback_desc=$_POST['feedback_desc'];
$submitdate=date('Y-m-d H:i:s');
$sql12="INSERT INTO `feedbcak`(`id`, `member_id`, `feedback_type`, `feedback_desc`, `record_inserted_dttm`, `record_updated_dttm`, `active_status`) VALUES ('','$current_user','$feedback_type','$feedback_desc','$submitdate','','Y')";

$sql13="INSERT INTO `general_notification` (`id`, `member_id`, `reference_member_id`, `notification_type`, `seen_or_unseen_status`, `member_type`, `record_inserted_dttm`, `record_updated_dttm`, `active_status`) VALUES ('','', '$current_user', 'feedback', '0', 'admin', '$submitdate', '', 'Y')";

    $result = mysqli_query($con,$sql12)or die(mysqli_error($con));   
    $result1 = mysqli_query($con,$sql13)or die(mysqli_error($con));   
    //return $result; 
   // echo $sql1;exit();
    //mysqli_error($sql1);exit();
    if ($result) {
    	echo "success";
    }
    else{
    	echo $result;
    }

?>
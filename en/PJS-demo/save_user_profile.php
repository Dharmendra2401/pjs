<?php 
include '../../config/config.php';
user_session_check();
$current_user=$_POST['current_user'];
$reference_user_mid=$_POST['reference_user_mid'];
$submitdate=date('Y-m-d H:i:s');
$sql12="INSERT INTO `saved_profile`(`member_id`, `reference_member_Id`, `active_status`, `record_inserted_dttm`, `record_updated_dttm`) VALUES ('$current_user','$reference_user_mid','Y','$submitdate','')";
    $result = mysqli_query($con,$sql12)or die(mysqli_error($con));   
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
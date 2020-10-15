<?php
include '../../config/config.php';
user_session_check();
$current_user_id= $_SESSION['user_mid'];
$reference_id=$_POST['reference_id'];
$sql12="DELETE FROM `saved_profile` WHERE `member_id`='$current_user_id' AND`reference_member_Id`='$reference_id'";
$result = mysqli_query($con,$sql12)or die(mysqli_error($con));   

if ($result) {
	echo "success";
}
else{
	echo "not success".$result;
}

?>
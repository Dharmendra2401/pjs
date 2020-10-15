<?php 
include '../../config/config.php';
user_session_check();
global $con;
$current_user=$_SESSION['user_mid'];

$occupation=$_POST['occupation'];
$details='';
$income='';
$submitdate=date('Y-m-d H:i:s');
if (isset($_POST['details']) && isset($_POST['income'])) {
	$details=$_POST['details'];
	$income=$_POST['income'];
}
$update_set="UPDATE `education_ocp` SET `occupation`='$occupation',`ocp_details`='$details',`income`='$income',`upd_user`='$current_user',`record_updated_dttm`='$submitdate' WHERE `member_id`='$current_user'";
	$result1 = mysqli_query($con,$update_set)or die(mysqli_error($con));   
	if ($result1) {
	echo "success";
	}
	else{
	echo "not success";
	}

?>
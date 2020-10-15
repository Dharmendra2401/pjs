<?php 
user_session_check();
function get_all_saved_profile(){
	global $con;
	$current_user=$_SESSION['user_mid'];
	$sql12="SELECT sf.`reference_member_Id` as reference_member_Id,mem.first_name,km.display_pic  FROM `saved_profile` as sf INNER JOIN member mem on sf.`reference_member_Id`=mem.member_id inner join key_member_id km on sf.`reference_member_Id`=km.id WHERE sf.`member_id`='$current_user' ORDER BY sf.record_inserted_dttm";
		$result = mysqli_query($con,$sql12) or die(mysqli_error($con));   
	return $result;	
}

function member_request_status($login_user,$idd){
	global $con;
	$current_user=$idd;
	$list_user=$login_user;
	$sql12 ="SELECT * FROM `relationship` WHERE member_id='$current_user' AND reference_member_Id='$list_user'";
	$result = mysqli_query($con,$sql12);	
	return $result;
}
function member_request_status2($login_user,$idd){
	global $con;
	$current_user=$idd;
	$list_user=$login_user;
	$sql12 ="SELECT * FROM `relationship` WHERE member_id='$list_user' AND reference_member_Id='$current_user'";
	$result = mysqli_query($con,$sql12);	

	return $result;	
}
 
?>
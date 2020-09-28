<?php 
function get_all_saved_profile(){
	global $con;
	$current_user=$_SESSION['user_mid'];
	$sql12="SELECT sf.`reference_member_Id` as reference_member_Id,mem.first_name,mem.display_pic  FROM `saved_profile` as sf INNER JOIN member mem on sf.`reference_member_Id`=mem.member_id WHERE sf.`member_id`='$current_user' ORDER BY sf.record_inserted_dttm";
		$result = mysqli_query($con,$sql12) or die(mysqli_error($con));   
	return $result;	
}


?>
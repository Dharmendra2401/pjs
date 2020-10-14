  <?php
include '../../config/config.php';

function friend_request_status12(){
	global $con;
	 $current_user=$_SESSION['user_mid'];
	//$sql12 ="SELECT * FROM `dwr_vts_t.dbo.relationship` WHERE MEMBER_ID='$id' AND to_id='$from_id' AND to_id IN ('$from_id') ";
	$sql12="SELECT IF((RS.member_id = '$current_user')>0,'from-current-user','to-user') as request_side_user ,RS.reference_member_Id,MEM.first_name as name,MEM.last_name,MEM.gender,RS.relation_type,RS.member_request_status,RS.dp_name,RS.d_dod,MEM.Life_status,RS.dead_p_pic,RS.d_dod,km.display_pic FROM `relationship` RS LEFT JOIN `member` MEM ON RS.reference_member_Id = MEM.MEMBER_ID LEFT JOIN `key_member_id` km ON km.id=MEM.member_id WHERE RS.member_id = '$current_user' UNION
SELECT IF((RS.reference_member_Id = '$current_user')>0,'to-user','from-current-user') as request_side_user,RS.member_id,MEM.first_name as name,MEM.last_name,MEM.gender,RS.relation_type,RS.member_request_status,RS.dp_name,RS.d_dod,MEM.Life_status,RS.dead_p_pic,RS.d_dod,km.display_pic  FROM `relationship` RS LEFT JOIN `member` MEM ON RS.member_id = MEM.MEMBER_ID LEFT JOIN `key_member_id` km ON km.id=MEM.member_id WHERE RS.reference_member_Id = '$current_user'";

	$result = mysqli_query($con,$sql12) or die(mysqli_error($con));   
	return $result;	
}

// $result=friend_request_status12();

// $data1=mysqli_fetch_all($result) ;
// echo "<pre>";
// print_r($data1);

function current_user_data(){
   	$current_user=$_SESSION['user_mid'];
    global $con;
    $sql="SELECT * FROM `member` WHERE member_id='$current_user'";
    $result = mysqli_query($con,$sql);   
    return $result; 

}
function user_detail_data($idd){
	$current_user=$idd;
	global $con;
	$sql="SELECT * FROM `member` WHERE member_id='$current_user'";
	$result = mysqli_query($con,$sql);   
	return $result; 
}
function user_detail_friend_request($idd){
	$current_user=$idd;
		global $con;
			$sql12="SELECT IF((RS.member_id = '$current_user')>0,'from-current-user','to-user') as request_side_user ,RS.reference_member_Id,MEM.first_name as name,MEM.gender,RS.relation_type,RS.member_request_status,RS.dp_name,RS.d_dod,MEM.Life_status,RS.dead_p_pic,RS.d_dod,km.display_pic FROM `relationship` RS LEFT JOIN `member` MEM ON RS.reference_member_Id = MEM.MEMBER_ID LEFT JOIN `key_member_id` km ON km.id=MEM.member_id WHERE RS.member_id = '$current_user' AND RS.member_request_status='Y' UNION
SELECT IF((RS.reference_member_Id = '$current_user')>0,'to-user','from-current-user') as request_side_user,RS.member_id,MEM.first_name as name,MEM.gender,RS.relation_type,RS.member_request_status,RS.dp_name,RS.d_dod,MEM.Life_status,RS.dead_p_pic,RS.d_dod,km.display_pic  FROM `relationship` RS LEFT JOIN `member` MEM ON RS.member_id = MEM.MEMBER_ID LEFT JOIN `key_member_id` km ON km.id=MEM.member_id WHERE RS.reference_member_Id = '$current_user' AND RS.member_request_status='Y'";
	$result = mysqli_query($con,$sql12) or die(mysqli_error($con));   
	return $result;	
}

// $result=current_user_data();
// $data1=mysqli_fetch_assoc($result) ;
// echo "<pre>";
// print_r($data1);




?>

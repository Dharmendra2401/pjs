<?php 
//include '../../config/config.php';
include 'tree_structure.php';
$current_user_data=current_user_data();
$current_user_gender=mysqli_fetch_assoc($current_user_data);

$MEMBER_ID=$_POST['member_id'];
$Reference_Member_Id=$_POST['reference_id'];
$Relation_Type=$_POST['relationship_type'];
$submitdate=date('Y-m-d H:i:s');

if ($Relation_Type=='Father' || $Relation_Type=='Grandfather' || $Relation_Type=='Mother' || $Relation_Type=='Grandmother' || $Relation_Type=='Wife' || $Relation_Type=='Husband') {
$relationship_type2="";
if ($Relation_Type=='Father' && $current_user_gender['gender']=='M') {
	$relationship_type2="Son";
}
if ($Relation_Type=='Father' && $current_user_gender['gender']=='F') {
	$relationship_type2="Daughter";
}

if ($Relation_Type=='Mother' && $current_user_gender['gender']=='F') {
	$relationship_type2="Daughter";
}
if ($Relation_Type=='Mother' && $current_user_gender['gender']=='M') {
	$relationship_type2="Son";
}
if ($Relation_Type=='Grandfather' || $Relation_Type=='Husband' || $Relation_Type=='Grandmother' || $Relation_Type=='Wife') {
	$relationship_type2=$Relation_Type;
}

$checkcureent_relation="SELECT if(COUNT(*) >0,'from','Null') as count FROM `relationship` WHERE `member_id`='$MEMBER_ID' AND `relation_type`='$Relation_Type' UNION SELECT if(COUNT(*) >0,'to','Null') as count FROM `relationship` WHERE `reference_member_Id`='$MEMBER_ID' AND `relation_type`='$relationship_type2'";
$checkcurrent_relation_query = mysqli_query($con,$checkcureent_relation)or die(mysqli_error($con)); 

//$count_rows=mysqli_num_rows($checkcurrent_relation_query);
$data=mysqli_fetch_assoc($checkcurrent_relation_query);
if (mysqli_num_rows($checkcurrent_relation_query)>0 && $data['count']!='Null') {
	if ($data['count']=='from') {
		echo "you already sent request to someone";
	}
	if ($data['count']=='to') {
		echo "someone already sent you request";
	}
}
else{
$sql1="insert into relationship (member_id,relation_type,reference_member_Id,member_request_status,upd_user,active_status) values('$MEMBER_ID','$Relation_Type','$Reference_Member_Id','N','$MEMBER_ID','Y')";

$notification="INSERT INTO `general_notification` (`id`, `member_id`, `reference_member_id`, `notification_type`, `seen_or_unseen_status`, `member_type`, `record_inserted_dttm`, `record_updated_dttm`, `active_status`) VALUES ('','$Reference_Member_Id', '$MEMBER_ID', 'request_sent', '0', 'user', '$submitdate', '', 'Y')";
	$result = mysqli_query($con,$sql1)or die(mysqli_error($con));   
	$result1  = mysqli_query($con,$notification)or die(mysqli_error($con));  
	if ($result && $result1) {
		echo "data insert success";
	}
	else{
		echo "not success".$result.$result1;
	}
}
}
else{
	$sql1="insert into relationship (member_id,relation_type,reference_member_Id,member_request_status,upd_user,active_status) values('$MEMBER_ID','$Relation_Type','$Reference_Member_Id','N','$MEMBER_ID','Y')";

	$notification="INSERT INTO `general_notification` (`id`, `member_id`, `reference_member_id`, `notification_type`, `seen_or_unseen_status`, `member_type`, `record_inserted_dttm`, `record_updated_dttm`, `active_status`) VALUES ('','$Reference_Member_Id', '$MEMBER_ID', 'request_sent', '0', 'user', '$submitdate', '', 'Y')";
		$result1  = mysqli_query($con,$notification)or die(mysqli_error($con));  
	$result = mysqli_query($con,$sql1)or die(mysqli_error($con));   

	if ($result && $result1) {
		echo "data insert success";
	}
	else{
		echo "not success".$result.$result1;
	}
}

?>
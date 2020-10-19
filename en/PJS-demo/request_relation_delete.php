<?php 
include '../../config/config.php';
user_session_check();
$member_id=$_POST['member_id'];
$reference_member_id=$_POST['reference_member_id'];

if (isset($_POST['relationshiptype'])) {
$relationshiptype=$_POST['relationshiptype'];
$sql="DELETE FROM `relationship` WHERE (`member_id`='$member_id' AND `relation_type`='$relationshiptype'AND reference_member_Id IS NULL)";
}
else{
	$sql="DELETE FROM `relationship` WHERE (`member_id`='$member_id' AND `reference_member_Id`='$reference_member_id') OR (`member_id`='$reference_member_id' AND `reference_member_Id`='$member_id')";
}

$execut=mysqli_query($con,$sql)or die(mysqli_error($con));

if ($execut) {
	echo "success";
}
else{
	echo "not success";
}
?>
<?php 
include '../../config/config.php';
$MEMBER_ID=$_POST['member_id'];
$Reference_Member_Id=$_POST['reference_id'];
$Relation_Type=$_POST['relationship_type'];
$submitdate=date('Y-m-d H:i:s');
$sql1="insert into relationship (member_id,relation_type,reference_member_Id,member_request_status,upd_user,active_status) values('$MEMBER_ID','$Relation_Type','$Reference_Member_Id','N','$MEMBER_ID','Y')";
    $result = mysqli_query($con,$sql1)or die(mysqli_error($con));   

    if ($result) {
    	echo "success";
    }
    else{
    	echo "not success".$result;
    }



?>
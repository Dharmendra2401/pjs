<?php 
$current_user=$_POST['current_user'];
$dod=$_POST['dod'];
$membr=$_POST['mid'];
$mid=strtoupper($membr);
$submitdate=date('Y-m-d H:i:s');


include '../../config/config.php';
user_session_check();
global $con;
//$use=$_SESSION['user_mid'];
 
if ($mid=='') {
	echo "Please enter Member Id";
}
else{
$sql1="SELECT * FROM `key_member_id` WHERE `id`='$mid'";
	$result = mysqli_query($con,$sql1)or die(mysqli_error($con));   

	if(mysqli_num_rows($result) > 0){
		if ($mid!=$current_user) {
		$sql2="SELECT * FROM `member_request` WHERE `member_id`='$mid' AND `status_of_request`='Y' AND `type_of_request`='death'";
		$result2 = mysqli_query($con,$sql2)or die(mysqli_error($con));   
		if(mysqli_num_rows($result2) > 0){
			echo "Request already received";
		}
		else{
				$sql3="SELECT * FROM `member` WHERE `member_id`='$mid' AND `Life_status`='D'";
				$result3 = mysqli_query($con,$sql3)or die(mysqli_error($con)); 
				if (mysqli_num_rows($result3) > 0) {
					echo "This member has expired";
				}
				else{

					$sql31="INSERT INTO `member_request`(`member_id`, `new_request`, `status_of_request`, `record_inserted_dttm`, `type_of_request`, `reason_of_rejection`, `reference_member_Id`) VALUES ('$mid','$dod','Y','$submitdate','death','','$current_user')";			
					$result21 = mysqli_query($con,$sql31)or die(mysqli_error($con)); 
					echo "Thanks for the update";
				}
		}
	}
else{
	echo "Don't kill yourself";
}
}
	else{
		echo "mid invalid";
	}
}


?>
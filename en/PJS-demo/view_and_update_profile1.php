<?php 
include '../../config/config.php';
user_session_check();
global $con;
$current_user=$_SESSION['user_mid'];
$columnname=$_POST['columnname'];
$inputValue=$_POST['inputValue'];
$tablename=$_POST['tablename'];
$submitdate=date('Y-m-d H:i:s');

if($columnname=="date_of_birth" || $columnname=="time_of_birth" || $columnname=="place_of_birth" || $columnname=="mobile"){
	$m_p_column="";
	if ($columnname=="date_of_birth") {
		$m_p_column="Date_Of_Birth";
	}
	if ($columnname=="time_of_birth") {
		$m_p_column="Time_Of_Birth";
	}
	if ($columnname=="place_of_birth") {
		$m_p_column="Place_Of_Birth";
	}
	if ($columnname=="mobile") {
		$m_p_column="Mobile";
	}
	if ($columnname=="date_of_birth") {
	$privacy_setting=$_POST['privacy_setting'];
	$sql1="UPDATE `member_privacy` SET $m_p_column='$privacy_setting' WHERE `member_id`='$current_user'";
	$result = mysqli_query($con,$sql1); 
	return $result; 
	if ($result) {
		echo "success";
	}
	else{
		echo "not success";
	}
	}
	else{
	$privacy_setting=$_POST['privacy_setting'];
	$sql="UPDATE $tablename SET $columnname='$inputValue' WHERE `member_id`='$current_user'";
	$result = mysqli_query($con,$sql);   
	$sql1="UPDATE `member_privacy` SET $m_p_column='$privacy_setting' WHERE `member_id`='$current_user'";
	$result1 = mysqli_query($con,$sql1); 
	return $result; 
	if ($result) {
		echo "success";
	}
	else{
		echo "not success";
	}
	}

}
else{
$sql="UPDATE $tablename SET $columnname='$inputValue' WHERE `member_id`='$current_user'";
    $result = mysqli_query($con,$sql);   
    return $result; 
    if ($result) {
    	echo "success";
    }
    else{
    	echo "not success";
    }
}
?>
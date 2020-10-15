<?php 
include '../../config/config.php';
user_session_check();
global $con;
$current_user=$_SESSION['user_mid'];
$columnname=$_POST['columnname'];
$inputValueFeet=$_POST['inputValueFeet'];
$inputValueInch=$_POST['inputValueInch'];
$privacy_setting=$_POST['privacy_setting'];
$tablename=$_POST['tablename'];
$submitdate=date('Y-m-d H:i:s');


$sql="UPDATE `member` SET `feet`='$inputValueFeet',`inches`='$inputValueInch' WHERE `member_id`='$current_user'";
    $result = mysqli_query($con,$sql);  
$sql1="UPDATE `member_privacy` SET `Height`='$privacy_setting' WHERE `member_id`='$current_user'";
     $result1 = mysqli_query($con,$sql1);    
    if ($result) {
    	echo "success";
    }
    else{
    	echo "not success";
    }

?>
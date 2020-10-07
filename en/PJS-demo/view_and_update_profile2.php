<?php 
include '../../config/config.php';
global $con;
$current_user=$_SESSION['user_mid'];
$columnname=$_POST['columnname'];
$inputValueFeet=$_POST['inputValueFeet'];
$inputValueInch=$_POST['inputValueInch'];
$privacy_setting=$_POST['privacy_setting'];
$tablename=$_POST['tablename'];
$submitdate=date('Y-m-d H:i:s');


$sql="UPDATE `member` SET `feet`='$inputValueInch',`inches`='$inputValueFeet' WHERE `member_id`='$current_user'";
    $result = mysqli_query($con,$sql);    
    if ($result) {
    	echo "success";
    }
    else{
    	echo "not success";
    }

?>
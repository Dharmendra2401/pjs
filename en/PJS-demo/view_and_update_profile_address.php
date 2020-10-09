<?php 
include '../../config/config.php';
global $con;
$current_user=$_SESSION['user_mid'];

$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$area=$_POST['area'];
$address=$_POST['address'];
$submitdate=date('Y-m-d H:i:s');


$sql="UPDATE `address` SET `full_address`='$address',`city`='$city',`state`='$state',`country`='$country',`pincode`='$pincode',`record_updated_dttm`='$submitdate' WHERE `member_id`='$current_user'";
    $result = mysqli_query($con,$sql)or die(mysqli_error($con));  
$sql1="UPDATE `member` SET `area`='$area',`record_updated_dttm`='$submitdate' WHERE `member_id`='$current_user'";
     $result1 = mysqli_query($con,$sql1)or die(mysqli_error($con));    
    if ($result) {
    	echo "success";
    }
    else{
    	echo "not success";
    }

?>
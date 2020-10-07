<?php 
include '../../config/config.php';
global $con;
$current_user=$_SESSION['user_mid'];
$columnname=$_POST['columnname'];
$inputValue=$_POST['inputValue'];
$tablename=$_POST['tablename'];
$submitdate=date('Y-m-d H:i:s');


$sql="UPDATE $tablename SET $columnname='$inputValue' WHERE `member_id`='$current_user'";
    $result = mysqli_query($con,$sql);   
    return $result; 
    if ($result) {
    	echo "success";
    }
    else{
    	echo "not success";
    }

?>
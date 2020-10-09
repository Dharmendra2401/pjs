<?php 
include '../../config/config.php';
global $con;
$current_user=$_SESSION['user_mid'];
$columnname=$_POST['columnname'];
$tablename=$_POST['tablename'];
$inputValue=$_POST['inputValue'];
$submitdate=date('Y-m-d H:i:s');
if(isset($_POST['selText'])){
	echo $_POST['selText']."not data12";
}
else{
	echo "not data";
}

$sql="UPDATE '$tablename' SET '$columnname'='$inputValue', WHERE `member_id`='$current_user'";
    //$result = mysqli_query($con,$sql);   

    echo $sql;exit;
    return $result; 
    if ($result) {
    	echo "success";
    }
    else{
    	echo "not success";
    }

?>
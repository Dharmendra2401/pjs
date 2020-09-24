<?php 
include '../../config/config.php';
global $con;
$d_name=$_POST['d_name'];
$d_popname=$_POST['d_popname'];
$dod=$_POST['dod'];
$d_name=$_POST['d_name'];
$relationship_type=$_POST['relationship_type'];
$member_id=$_POST['member_id'];
 


if(isset($_FILES["file"]["name"])){
	$ext=explode(".",$_FILES["file"]["name"]);
	$url="../../uploads/". str_replace(" ","",sha1($_FILES["file"]["name"].time()).".".$ext[sizeof($ext)-1]);
	$url12="uploads/". str_replace(" ","",sha1($_FILES["file"]["name"].time()).".".$ext[sizeof($ext)-1]);
	move_uploaded_file($_FILES["file"]["tmp_name"],$url);
	$thumb_path= $url;
	$max_dim = 800;      
}
else{
	$url12=' ';
}



$sql1="INSERT INTO `relationship`(`member_id`,`relation_type`,`member_request_status`,`dp_name`, `dp_popularname`, `d_dod`, `dead_p_pic`) VALUES ('$member_id','$relationship_type','Y','$d_name','$d_popname','$dod','$url12')";
	$result = mysqli_query($con,$sql1)or die(mysqli_error($con));   
	if ($result) {
		echo "success";
	}
	else{
		echo "not success";
	}



?>
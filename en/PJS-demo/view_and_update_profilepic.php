<?php 
include '../../config/config.php';
require_once("../../library/upload.php");
user_session_check();
$current_user=$_SESSION['user_mid'];
//$oldimage=trim($_POST['oldfiles']);
$getimage=mysqli_fetch_array(mysqli_query($con,"select display_pic from key_member_id WHERE id='$current_user'"));

$file_namees=$_FILES["file"]["name"]; 
$file_tmpps=$_FILES["file"]["tmp_name"];
if($_FILES["file"]["name"]!=''){
    $ext=explode(".",$_FILES["file"]["name"]);
    $url="../../uploads/". str_replace(" ","",sha1($_FILES["file"]["name"].time()).".".$ext[sizeof($ext)-1]);
    $url12="uploads/". str_replace(" ","",sha1($_FILES["file"]["name"].time()).".".$ext[sizeof($ext)-1]);
    move_uploaded_file($_FILES["file"]["tmp_name"],$url);
    $thumb_path= $url;
    $max_dim = 800;
    createResized($url, $thumb_path, $max_dim);	
    unlink('../../'.$getimage['display_pic']);		
    }
$submitdate=date('Y-m-d H:i:s');
$sql1="UPDATE `key_member_id` SET `display_pic`='$url12' WHERE `id`='$current_user'";
     $result1 = mysqli_query($con,$sql1);    
    if ($result1) {
    	echo trim(RE_HOME_PATH.''.$url12);
    }
    else{
    	echo "not success";
    }

?>
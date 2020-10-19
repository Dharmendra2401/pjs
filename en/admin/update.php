<?php require_once("../../config/config.php");
include "../mail/index.php" ;
admin_session_check();



$get=is_not_empty($_POST,"id");

if(is_not_empty($_POST,"id~@~table"))

{

 $id=$_REQUEST["id"];

 $table=$_REQUEST["table"];

$status=$_REQUEST["status"];
	
if($table=='sub_admin_login'){
mysqli_query($con,'update sub_admin_login set active_status="'.$status.'" where request_id="'.$id.'" ');
if($status=='Y'){
$subadmin=mysqli_fetch_array(mysqli_query($con,'select first_name,last_name,email,password from sub_admin_login where request_id="'.$id.'"  '));
$subject="Registered Approval As SubAdmin ".WEBSITE_NAME." ";
$mes='';
$mes.="<p>Dear ".$subadmin['first_name']." ".$subadmin['last_name'].", you are successfully approved as SUB ADMIN and your login details are:</p> <p> Email :<strong>".$subadmin['email']."</strong> <br> Password :<strong>".base64_decode($subadmin['password'])."</strong></p> <p><a href='".RE_HOME_ADMIN."'>Click here</a> to login now. if any query email us <a href='".FROM_EMAIL."'>".FROM_EMAIL."</a></p>";
$message=$mes;
$to=$subadmin['email'];
sendmails($to,$message,$subject);
}




}
if($table=='events'){
mysqli_query($con,'update events set status="'.$status.'" where id="'.$id.'" ');
}

if($table=='schemes'){
    mysqli_query($con,'update schemes set status="'.$status.'" where id="'.$id.'" ');
}

if($table=='zones'){
    mysqli_query($con,'update zones set status="'.$status.'" where id="'.$id.'" ');
}
if($table=='slider'){
    mysqli_query($con,'update slider set status="'.$status.'" where id="'.$id.'" ');
}
if($table=='gallery'){
    mysqli_query($con,'update gallery set status="'.$status.'" where id="'.$id.'" ');
}
	
echo 'ok';

exit();

}

echo 'false';

exit();

?>
<?php require_once("../../config/config.php");

admin_session_check();



$get=is_not_empty($_POST,"id");

if(is_not_empty($_POST,"id~@~table"))

{

$id=$_REQUEST["id"];

$table=$_REQUEST["table"];

$status=$_REQUEST["status"];
	
if($table=='sub_admin_login'){
mysqli_query($con,'update sub_admin_login set active_status="'.$status.'" where request_id="'.$id.'" ');
if($status=='N'){
$subadmin=mysqli_fetch_array(mysqli_query($con,'select first_name,last_name,email,password from sub_admin_login where request_id="'.$id.'"  '));
$subject="Registered Approval As SubAdmin '".WEBSITE_NAME."' ";
$mes='';
$mes.=" Dear ".$subadmin['first_name']." ".$subadmin['last_name'].", you are successfully approved as SUBADMIN and your login crediential is <br> Email :<strong>".$subadmin['email']."</strong> <br> Password :<strong>".$subadmin['password']."</strong> ,<a href='".RE_HOME_ADMIN."'>Click here</a> to login now. if any query email us <a href='".FROM_EMAIL."'>".FROM_EMAIL."</a>";
$message=$mes;
$to=$email;
sendemail($to,$form,$subject,$message);
}

}
	
	
echo 'ok';

exit();

}

echo 'false';

exit();

?>
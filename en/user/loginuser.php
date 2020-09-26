<?php  
include '../../config/config.php';

$password=$_REQUEST['password'];
$mid=$_REQUEST["mid"];

if(($password!='') && ($mid!='') ){
$row=mysqli_query($con,'select mem.member_id,mem.first_name,mem.middle_name,mem.last_name,keyy.password,keyy.id from member as mem INNER JOIN  Key_member_id as keyy on mem.member_id=keyy.id where mem.member_id="'.$mid.'" and keyy.password="'.$password.'" ');
if(mysqli_num_rows($row)>0){
$getuserdata=mysqli_fetch_array($row);
$_SESSION['user_mid']=$getuserdata['member_id'];
$_SESSION['ufullname']=$getuserdata['first_name'].' '.$getuserdata['middle_name'].' '.$getuserdata['last_name'];
echo "true";
}else{
    echo "Error";
}
}else{
echo "false";
}   

?>
<?php  
include '../../config/config.php';

$password=base64_encode(mysqli_real_escape_string($con,trim($_REQUEST['password'])));
$mid=mysqli_real_escape_string($con,trim($_REQUEST["mid"]));

if(($password!='') && ($mid!='') ){

//$row=mysqli_query($con,'select mem.member_id,mem.first_name,mem.middle_name,mem.last_name,keyy.password,keyy.id from member as mem INNER JOIN  Key_member_id //as keyy on mem.member_id=keyy.id where mem.member_id="'.$mid.'" and keyy.password="'.$password.'" ');
$row=mysqli_query($con,'select * from key_member_id where id="'.$mid.'" and password="'.$password.'" ');
if(mysqli_num_rows($row)>0){
$getuserdata=mysqli_fetch_array($row);
$member=mysqli_fetch_array(mysqli_query($con,'select first_name,member_id,last_name,gender from member where member_id ="'.$mid.'"  '));
$_SESSION['user_mid']=$member['member_id'];
$_SESSION['ufullname']=$member['first_name'].' '.$member['middle_name'].' '.$member['last_name'];
$_SESSION['curr_gender']=$member['gender'];
echo "true";
}else{
    echo "Error";
}
}else{
echo "false";
}   

?>
<?php 
require_once("../../config/config.php");
$mid=$_REQUEST['mid'];

$getmid=mysqli_query($con,'select member_id from member where member_id="'.$mid.'" ');

$contmid=mysqli_num_rows($getmid);
if($contmid>0){

    echo "true";
}
else{
    echo 'false';
}



?>
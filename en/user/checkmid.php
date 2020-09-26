<?php 
require_once("../../config/config.php");
$mid=$_REQUEST['mid'];


$getmid=mysqli_query($con,'select id,password from key_member_id where id="'.$mid.'" ');

$contmid=mysqli_num_rows($getmid);
if($contmid>0){

    echo "true";
}
else{
    echo 'false';
}



?>
<?php 
include "../../config/config.php" ;
$email=$_REQUEST['email'];
if($email!=''){
$emails=mysqli_query($con,'select email from sub_admin_login where email= "'.$email.'" ');
$ecount=mysqli_num_rows($emails);
if($ecount>0){

    echo "false";
}else{
    echo "true";
}

}

?>
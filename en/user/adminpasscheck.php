<?php 
include "../../config/config.php" ; 

$pass=base64_encode(trim($_REQUEST['old']));
$getpass=mysqli_query($con,"select password from key_member_id where password='".$pass."' and id='".$_SESSION['user_mid']."' ");
if(mysqli_num_rows($getpass)>0){
echo "true";
}
else{
echo "false";
}
?>
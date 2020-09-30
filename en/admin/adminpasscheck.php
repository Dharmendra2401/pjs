<?php 
include "../../config/config.php" ; 
$pass=base64_encode($_REQUEST['old']);
$getpass=mysqli_query($con,"select password from admin_login where password='".$pass."' ");
if(mysqli_num_rows($getpass)>0){
echo "true";
}
else{
echo "false";
}
?>
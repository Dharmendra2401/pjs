<?php 
include "../../config/config.php" ; 

$pass=base64_encode(trim($_REQUEST['old']));
$getpass=mysqli_query($con,"select password from sub_admin_login where password='".$pass."' and id='".$_SESSION['sub_admin_id']."' ");
if(mysqli_num_rows($getpass)>0){
echo "true";
}
else{
echo "false";
}
?>
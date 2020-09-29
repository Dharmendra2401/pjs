<?php  
include "../../config/config.php";
unset($_SESSION['admin_email']);
unset($_SESSION['admin_id']);
unset($_SESSION['admin_fullname']);
redirect(RE_HOME_SUPERADMIN."index.php","admin logout successful~@~".MSG_SUCCESS);
?>
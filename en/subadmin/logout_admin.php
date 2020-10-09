<?php  
include "../../config/config.php";
unset($_SESSION['sub_admin_email']);
unset($_SESSION['sub_admin_id']);
unset($_SESSION['sub_admin_fullname']);

redirect(RE_HOME_ADMIN."index.php","Sub admin logout successful~@~".MSG_SUCCESS);
?>
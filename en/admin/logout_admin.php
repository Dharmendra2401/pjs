<?php  
include "../../config/config.php";
unset($_SESSION['admin_email']);
unset($_SESSION['admin_id']);
redirect(RE_HOME_PATH."index.php","admin logout successful~@~".MSG_SUCCESS);
?>
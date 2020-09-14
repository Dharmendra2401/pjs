<?php 
include '../../config/config.php';
unset($_SESSION['user_mid']);
unset($_SESSION['ufullname']);
session_destroy();
redirect(RE_HOME_PATH."index.php",'');
?>
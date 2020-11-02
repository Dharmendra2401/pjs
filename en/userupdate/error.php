<?php
include "../../config/config.php";
?>
<!DOCTYPE html>
<html>
<head>
<?php include "../../styles.php";  ?>
<style>.headerudate{    box-shadow: 0px 0px 13px #0000003d;
    /* padding: 0 0 43px; */
    margin: 0px 0 12px;
    padding: 19px 0 20px;}
	
	.headerudate h3 span{text-decoration:underline; }
</style>
</head>
<body>
<div class="container-fluid">
<div class="col-md-12 text-center headerudate"> <a class="logo-link" href="<?php echo  RE_EN_PATH;  ?>"><img class="sm-image" width="110" src="<?php echo  RE_HOME_PATH;  ?>images/logo1.png"></a> <br> <h3><span>User Updation Details</span></h3></div>
<div class="succesfull-message">
<div class="col-md-6 offset-md-3">
<br><br>
<div class="text-light bg-danger text-center rounded" style="padding: 30px 0 30px;box-shadow: 0px 0px 12px #00000070;
">
<h5 class="text-light">Sorry! You have not permission to access this page.</h5><br>
Please <a class="btn btn-warning btn-sm" href="<?php echo RE_HOME_PATH; ?>">click here</a> to redirect 
</div>
</div>
</div>
</body>
<?php  include "../../script.php" ;?>
<script>
</script>
</html>
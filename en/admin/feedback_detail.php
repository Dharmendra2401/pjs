<?php 
include "../../config/config.php" ;
include "../mail/index.php" ;
admin_session_check();
$getid=base64_decode($_REQUEST['id']);
$getdate=mysqli_fetch_array(mysqli_query($con,'select * from member mem inner join feedbcak fb on mem.member_id=fb.member_id  where mem.member_id="'.$getid.'" '));

?>
<!DOCTYPE>
<html>
<head>
<?php  include "../../styles.php" ?>
</head>

<body>
<div class="container-fluid">
<?php  include "../header.php" ?>


</div>
<div class="container mb-4 px-0 shadow">
<h2 class="header">Feedback Details</h2>
<div class="row user-profile">
<div class="col-md-12">
<?php



?>
<h3>User Info</h3>
<hr>
<div class="row info mb-4">
<div class="col-md-3">Name :<strong>:</strong></div>
<div class="col-md-9"><?php echo $getdate['first_name']." ".$getdate['last_name']; ?></div>



<div class="col-md-3">Member Id :<strong>:</strong></div>
<div class="col-md-9"><?php echo $getdate['member_id']; ?></div>

<div class="col-md-3">FeedBack Type :<strong>:</strong></div>
<div class="col-md-9"><?php echo $getdate['feedback_type']; ?></div>

<div class="col-md-3">FeedBack Desc :<strong>:</strong></div>
<div class="col-md-9"><?php echo $getdate['feedback_desc']; ?></div>

<div class="col-md-3">Submitted Date :<strong>:</strong></div>
<div class="col-md-9"><?php echo $getdate['record_inserted_dttm']; ?></div>
 	 
</div>


</div>
</div>


</div>

</div>
</div>

<?php include "../../footer.php" ?>
</body>
<?php include "../../script.php" ?>
</html>

?>
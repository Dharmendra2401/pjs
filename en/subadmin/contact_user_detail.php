<?php 
include "../../config/config.php";
include "../mail/index.php" ;
sub_admin_session_check();
$getid=base64_decode($_REQUEST['id']);
$getdetails=mysqli_fetch_array(mysqli_query($con,'select * from non_member_request where request_id="'.$getid.'" '));
$getuser=mysqli_fetch_array(mysqli_query($con,'select first_name,last_name from member where member_id="'.$getdetails['user_id'].'" '));
$getemails=mysqli_fetch_array(mysqli_query($con,'select email from communication where member_id="'.$getdetails['user_id'].'" '));
if(isset($_REQUEST['submit'])){
$status=$_REQUEST['status'];

if($status==1){
$update=mysqli_query($con,"update non_member_request set request_status='N' where request_id='".$getid."' ");
$subject="User Successfully Approved From ".WEBSITE_NAME." ";
$mes='';
$mes.=" Dear ".$getdetails['first_name']." ".$getdetails['last_name']." , you are succesfully approved by the admin and your details have been share to the user ,if any query email us <a href='mailto:".FROM_EMAIL."'>".FROM_EMAIL."</a>";
$message=$mes;
$to=$getdetails['email'];
sendmails($to,$message,$subject);

$subjectt="OPJ Contact Request From ".WEBSITE_NAME." ";
$mess='';
$mess.="<p> Dear ".$getuser['first_name']." ".$getuser['last_name']." , an OPJ contact requested to contact you, here is the detail of opj user : </p>";
$mess.="Name : ".$getdetails['first_name']." ".$getdetails['last_name']."<br>Mobile : ".$getdetails['mobile']."<br>Email : ".$getdetails['email']."<br> Address : ".$getdetails['address']." <br><br>";
$mess.="if any query email us <a href='mailto:".FROM_EMAIL."'>".FROM_EMAIL."</a>";
$messages=$mess;
$too=$getemails['email'];
sendmails($too,$messages,$subjectt);

redirect(RE_HOME_ADMIN."opj_request.php","User successfully approved~@~".MSG_SUCCESS);

}
else if($status==0){
$trimreason=mysqli_real_escape_string($con,trim($_REQUEST['reason']));
if($trimreason!=''){
$update=mysqli_query($con,"update non_member_request set request_status='R',reason_of_rejection='".$trimreason."' where request_id='".$getid."' ");
$subject="Admin OPJ Contact Request Rejected From ".WEBSITE_NAME." ";
$mes='';
$mes.=" Dear ".$getdetails['first_name']." ".$getdetails['last_name'].", your opj contact request is rejected by the admin and reason for the rejection is :<strong>".$trimreason."</strong><br> <br>if any query email us <a href='mailto:".FROM_EMAIL."'>".FROM_EMAIL."</a>";
$message=$mes;
$to=$getdetails['email'];
sendmails($to,$message,$subject);
redirect(RE_HOME_ADMIN."opj_request.php","User successfully rejected~@~".MSG_SUCCESS);
}else{
redirect(RE_HOME_ADMIN."opj_request.php","Error! Please fill out the reason and try again~@~".MSG_ERROR);  
}
}
else{
redirect(RE_HOME_ADMIN."opj_request.php","Error! Please try again~@~".MSG_ERROR);

}



}


?>
<!DOCTYPE>
<html>
<head>
<?php 
include "../../styles.php"
?>
</head>
<body>
<div class="container-fluid">
<?php include "../header.php"  ?>
</div>
<div class="container mb-4 px-0 shadow">
<h2 class="header">User Details</h2>
<div class="row user-profile">
<div class="col-md-12">
<h3>Personal Info</h3>
<hr>
<form method="post">
<div class="row info mb-4">
<div class="col-md-3">Name <strong>:</strong></div>
<div class="col-md-9"><?php echo $getdetails['first_name'].' '.$getdetails['last_name'];  ?></div>

<div class="col-md-3">Mobile Number<strong>:</strong></div>
<div class="col-md-9"><?php echo $getdetails['mobile'];?></div>

<div class="col-md-3">Email Id<strong>:</strong></div>
<div class="col-md-9"><?php echo $getdetails['email'];?></div>

<div class="col-md-3">Address <strong>:</strong></div>
<div class="col-md-9"><?php echo $getdetails['address'];?></div>

<div class="col-md-3">Requested For<strong>:</strong></div>
<div class="col-md-9"><?php 
echo $getuser['first_name'].' '.$getuser['last_name'].' ('.$getdetails['user_id'].')';
?> &nbsp;
<a target="_blank" href="<?php echo RE_HOME_ADMIN;?>reg_user_detail2.php?id=<?php echo base64_encode($getdetails['user_id']);?>">View Details</a> 
<!-- <button type="button" class="btn btn-default view-link" data-toggle="modal" data-target="#profileModal">
View Details
</button>  -->
</div>
<div class="col-md-3 rejection" style="display:none;">Reason for rejection <strong>:</strong></div>
<div class="col-md-4 rejection" style="display:none;"><input type="text" name="reason" class="form-control" id="reason" placeholder="Enter the reason here" maxlength="100"></div>
</div>
</div>
</div>


<?php  if($getdetails['request_status']!='N'){ ?>
<div class="admin-check-wrapper">
<div class="row">
<div class="col-md-6 text-center">
<label class="form-check-label admin-check">
<input type="radio" id="approve" name="status" value="1" class="form-check-input" checked>Approve
</label>
<label class="form-check-label admin-check">
<input type="radio" id="selectRadio" name="status" value="0" class="form-check-input">Reject
</label>
</div>
<?php } ?>
<div class="col-md-6 text-center">
<?php  if($getdetails['request_status']!='N'){ ?>
<button type="submit" name="submit" class="btn btn-success verify-user">Submit</button>
<?php } ?>
<a class="btn btn-danger" href="<?php echo RE_HOME_ADMIN; ?>opj_request.php">Back</a>
</div>

</div>
</div>

</div>
</div>
</form>
<?php  include "../../script.php" ?>
<script>
$(document).ready(function() {
$("input[name='status']").click(function() {
var status = $(this).val();
if(status=='0'){
$('.rejection').show();
$('#reason').attr('required',true);
}else{
$('.rejection').hide();	
}

});
});



</script>
<?php include "../../footer.php" ?>
</body>
</html>
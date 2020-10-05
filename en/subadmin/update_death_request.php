<?php 
include "../../config/config.php";

sub_admin_session_check();
include "../mail/index.php" ;
$token=base64_decode($_REQUEST['id']);
$resul21='select mr.reference_member_Id,mr.member_id,mr.new_request,mr.status_of_request,mr.type_of_request,mr.id,mr.record_inserted_dttm,com.member_id,com.mobile,com.email,mem.date_of_birth,mem.member_id,mem.first_name,mem.last_name,mem.middle_name from member_request as mr INNER JOIN communication as com on mr.member_id=com.member_id INNER JOIN member as mem on mem.member_id=mr.member_id where mr.id="'.$token.'" ';
$getvalutwor=mysqli_query($con,$resul21)or die(mysqli_error($con));
$getvalutwo =mysqli_fetch_array($getvalutwor);   
$reference_member_id1= $getvalutwo['reference_member_Id'];
$getvaluone=mysqli_fetch_array(mysqli_query($con,'select member_id,first_name,last_name,middle_name from member where member_id="'.$reference_member_id1.'" '));
$submitdate=date('Y-m-d H:i:s');

if(isset($_REQUEST['submit'])){
$status=mysqli_real_escape_string($con,trim($_REQUEST['status']));
$reason=mysqli_real_escape_string($con,trim($_REQUEST['reason']));
if($status==1){
mysqli_query($con,'update member set date_of_death="'.$getvalutwo['new_request'].'",Life_status="D" where member_id="'.$getvalutwo['member_id'].'" ');
mysqli_query($con,'update member_request set status_of_request="N" where id="'.$token.' AND  	type_of_request=death" ');

$subject="User Mobile No. Updation Successfully Approved From ".WEBSITE_NAME." ";
$mes='';
$mes.=" Dear ".$getvalutwo['first_name']." ".$getvalutwo['middle_name']." ".$getvalutwo['last_name'].", your mobile number updation successfully approved by the admin and your new mobile no is: <strong>".$getvalutwo['mobile']."</strong> ,if any query email us <a href='mailto:".FROM_EMAIL."'>".FROM_EMAIL."</a>";
$message=$mes;
$to=$getvalutwo['email'];
sendmails($to,$message,$subject);
redirect(RE_HOME_ADMIN."user_updation_request.php","User Death Requested successfully approved~@~".MSG_SUCCESS);
} 
if($status==0){
mysqli_query($con,'update member_request set status_of_request="R" ,reason_of_rejection="'.$reason.'" where id="'.$token.'" ');

$subject="User Mobile No. Updation Rejected From ".WEBSITE_NAME." ";
$mes='';
$mes.=" Dear ".$getvalutwo['first_name']." ".$getvalutwo['middle_name']." ".$getvalutwo['last_name'].", your mobile number updation rejected by the admin and reason is : <strong>".$reason."</strong> ,if any query email us <a href='".FROM_EMAIL."'>".FROM_EMAIL."</a>";
$message=$mes;
$to=$getvalutwo['email'];
sendmails($to,$message,$subject);
redirect(RE_HOME_ADMIN."user_updation_request.php","User Death Request successfully rejected~@~".MSG_SUCCESS);
}
    redirect(RE_HOME_ADMIN."user_updation_request.php","Error! Please try again~@~".MSG_ERROR);


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
<form method="post">
<div class="row user-profile">
<div class="col-md-12">
<div class="row info mb-4">
<div class="col-md-3">Member<strong>:</strong></div>
<div class="col-md-9"><?php echo $getvalutwo['first_name'].' '.$getvalutwo['middle_name'].' '.$getvalutwo['last_name'];  ?> <a target='blank' href="<?php echo RE_HOME_ADMIN;?>reg_user_detail2.php?id=<?php echo base64_encode($getvalutwo['member_id']);?>">View Details</a></div>
<div class="col-md-3">Requested By <strong>:</strong></div>
<div class="col-md-9"><?php echo $getvaluone['first_name'].' '.$getvaluone['middle_name'].' '.$getvaluone['last_name'];?> <a target='blank' href="<?php echo RE_HOME_ADMIN;?>reg_user_detail2.php?id=<?php echo base64_encode($getvalutwo['member_id']);?>">View Details</a> </div>

<div class="col-md-3">Email Id<strong>:</strong></div>
<div class="col-md-9"><?php echo $getvalutwo['email']; ?></div>

<div class="col-md-3">Requested On <strong>:</strong></div>
<div class="col-md-9"><?php echo date('d/m/Y',strtotime($getvalutwo['record_inserted_dttm'])); ?></div>

<div class="col-md-3">Date of Death <strong>:</strong></div>
<div class="col-md-9"><?php echo date('d/m/Y',strtotime($getvalutwo['new_request'])); ?></div>


<div class="col-md-3 rejection" style="display:none;">Reason for rejection <strong>:</strong></div>
<div class="col-md-4 rejection" style="display:none;"><input type="text" name="reason" name="reason" class="form-control" id="reason" placeholder="Enter the reason here" maxlength="100"></div>
</div>
</div>
</div>
<div class="admin-check-wrapper">
<div class="row">
<div class="col-md-6 text-center">
<?php if($getvalutwo['status_of_request']!='N'){?>
<label class="form-check-label admin-check">
<input type="radio" id="approve" name="status" value="1" class="form-check-input" checked>Approve
</label>
<label class="form-check-label admin-check">
<input type="radio" id="selectRadio" name="status" value="0" class="form-check-input">Reject
</label>
<?php } ?>
</div>
<div class="col-md-6 text-center">
<div class="sm-mt10">
<?php if($getvalutwo['status_of_request']!='N'){  ?>
<button class="btn btn-success" name="submit">Submit</button>
<?php } ?>
<a class="btn btn-danger" href="<?php echo RE_HOME_ADMIN; ?>user_updation_request.php">Back</a>
</div>
</div>
</div>
</div>

</div>
</form>
</div>

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
</body>
</html>
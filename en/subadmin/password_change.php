<?php include "../../config/config.php" ;
sub_admin_session_check();
if(isset($_REQUEST['passwordchange'])){

$oldpass=mysqli_real_escape_string($con,trim($_REQUEST['oldpassword']));
$newpass=mysqli_real_escape_string($con,trim($_REQUEST['newpassword']));
$cpassword=mysqli_real_escape_string($con,trim($_REQUEST['cpassword']));
if(($oldpass!='') && ($newpass!='')&& ($cpassword!='') ){
if(($newpass==$cpassword)){
$update=mysqli_query($con,'update sub_admin_login set password="'.base64_encode($newpass).'" where id="'.$_SESSION['sub_admin_id'].'"');
redirect(RE_HOME_ADMIN."password_change.php","Password updated successfully~@~".MSG_SUCCESS);
}
redirect(RE_HOME_ADMIN."password_change.php","Error! Confirm password is incorrect~@~".MSG_ERROR);
}
redirect(RE_HOME_ADMIN."password_change.php","Error! Please try again~@~".MSG_ERROR);

}

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
<div class="container shadow">
<h3 class="ticket-header">Admin Password Change</h3>
<br>
<form method="post" class="col-md-6" >
<?php echo show_message();?>
<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span> Old Password </label>	
<div class="col-md-8">
<input type="text" class="form-control" name="oldpassword" placeholder="Enter old password" onchange="return oldpass();" id="oldpassword" required>
<span id="errorold"></span>
</div>
</div>

<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span> New Password </label>	
<div class="col-md-8">
<input type="password" class="form-control" name="newpassword" minlength="4" maxlength="10" placeholder="Enter new password" id="newpassword" required>
</div>
</div>

<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span> Confirm New Password </label>	
<div class="col-md-8">
<input type="password" class="form-control" name="cpassword" maxlength="10" placeholder="Confirm new password" id="cpassword" required>
</div>
</div>

<div class="form-group row">

<div class="col-md-12 text-center">
<input type="submit" class="btn btn-success"  name="passwordchange" value="Submit" required>

</div><br><br>


</form>
<?php include "../../footer.php" ?>
</body>
<script>

function oldpass(){
var old=$('#oldpassword').val();
$.ajax({
method:'post',
url:'adminpasscheck.php',
data:{'old':old},
success:function(passchange){
if(passchange=='false'){
$('#oldpassword').val('');
$("#errorold").html("<div class='text-danger'>Please enter the valid password </div> ");
}
if(passchange=='true'){
$("#errorold").html("");
}
}

})

}




</script>

<?php include "../../script.php" ?>
</html>
<?php include "../../config/config.php" ;
include "../mail/index.php" ;
admin_session_check();
if(isset($_REQUEST['passwordchange'])){

$oldpass=mysqli_real_escape_string($con,trim($_REQUEST['oldpassword']));
$newpass=mysqli_real_escape_string($con,trim($_REQUEST['newpassword']));
$cpassword=mysqli_real_escape_string($con,trim($_REQUEST['cpassword']));
if(($oldpass!='') && ($newpass!='')&& ($cpassword!='') ){
if(($newpass==$cpassword)){
$update=mysqli_query($con,'update admin_login set password="'.base64_encode($newpass).'" where id=1');
$getemail=mysqli_fetch_array(mysqli_query($con,'select first_name,last_name,email from admin_login where id=1'));


$subject="Password Change from ".WEBSITE_NAME." ";
$mes='';
$mes.=" Dear ".$getemail['first_name']." ".$getemail['last_name'].", you are successfully change your password and your new password is :<strong>".$newpass."</strong>";
$message=$mes;
$to=$getemail['email'];

sendmails($to,$message,$subject);
redirect(RE_HOME_SUPERADMIN."password_change.php","Password updated successfully~@~".MSG_SUCCESS);
}
redirect(RE_HOME_SUPERADMIN."password_change.php","Error! Confirm password is incorrect~@~".MSG_ERROR);
}
redirect(RE_HOME_SUPERADMIN."password_change.php","Error! Please try again~@~".MSG_ERROR);

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
<h3 class="ticket-header text-center">Admin Password Change</h3>
<br>
<div class="row">
<form method="post" class="col-md-6 offset-md-3" >
<?php echo show_message();?>
<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span> Old Password </label>	
<div class="col-md-8">
<input type="password" class="form-control" name="oldpassword" maxlength="10" placeholder="Enter old password" onchange="return oldpass();" id="oldpassword" >
<span id="errorold"></span>
</div>
</div>

<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span> New Password </label>	
<div class="col-md-8">
<input type="password" class="form-control" name="newpassword" minlength="4" maxlength="10" placeholder="Enter new password" id="newpassword" >
</div>
</div>

<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span> Confirm New Password </label>	
<div class="col-md-8">
<input type="password" class="form-control" name="cpassword" minlength="4" maxlength="10" placeholder="Confirm new password" id="cpassword" required>
</div>
</div>

<div class="form-group row">

<div class="col-md-12 text-right">
<button type="submit" onclick="return passChange();" class="btn btn-success"  name="passwordchange" > Submit</button>

</div><br><br>


</form>
</div>

</body>
<script>

function oldpass(){
var old=$('#oldpassword').val();
$.ajax({
method:'post',
url:'adminpasscheck.php',
data:{'old':old},
success:function(passchange){
if(passchange.trim()=='false'){
$('#oldpassword').val('');
$("#errorold").html("<div class='text-danger'>Please enter the valid password </div> ");
}
if(passchange.trim()=='true'){
$("#errorold").html("");
}
}

})

}


function passChange(){
var oldpassword=$('#oldpassword').val();
var newpassword=$('#newpassword').val();
var cpassword=$('#cpassword').val();
if(oldpassword.trim()==''){
$('#oldpassword').focus();
$("#oldpassword").addClass("invalid");
return false;
}
else if(oldpassword.trim().length<4){
$('#oldpassword').focus();
$("#oldpassword").addClass("invalid");
return false;
}
else if(newpassword.trim()==''){
$('#newpassword').focus();
$("#newpassword").addClass("invalid");
return false;
}
else if(newpassword.trim().length<4){
$('#newpassword').focus();
$("#newpassword").addClass("invalid");
return false;
}
else if(cpassword.trim()==''){
$('#cpassword').focus();
$("#cpassword").addClass("invalid");
return false;
}
else if(cpassword.trim().length<4){
$('#cpassword').focus();
$("#cpassword").addClass("invalid");
return false;
}else{
    return true;
}

}

</script>

<?php include "../../script.php" ?>
</html>
<?php include "../../config/config.php" ;
include "../mail/index.php" ;
user_session_check();
if(isset($_REQUEST['passwordchange'])){

$oldpass=mysqli_real_escape_string($con,trim($_REQUEST['oldpassword']));
$newpass=mysqli_real_escape_string($con,trim($_REQUEST['newpassword']));
$cpassword=mysqli_real_escape_string($con,trim($_REQUEST['cpassword']));
if(($oldpass!='') && ($newpass!='')&& ($cpassword!='') ){
if(($newpass==$cpassword)){
$getemail=mysqli_fetch_array(mysqli_query($con,'select email from communication where member_id="'.$_SESSION['user_mid'].'" '));
$update=mysqli_query($con,'update key_member_id set password="'.base64_encode($newpass).'" where id="'.$_SESSION['user_mid'].'"');
$subject="Password Change from ".WEBSITE_NAME." ";
$mes='';
$mes.=" Dear User, you are successfully change your password and your new password is :<strong>".$newpass."</strong>";
$message=$mes;
$to=$getemail['email'];

sendmails($to,$message,$subject);
redirect(RE_HOME_USER."password_change.php","Password updated successfully~@~".MSG_SUCCESS);
}
redirect(RE_HOME_USER."password_change.php","Error! Confirm password is incorrect~@~".MSG_ERROR);
}
redirect(RE_HOME_USER."password_change.php","Error! Please try again~@~".MSG_ERROR);

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
<h3 class="ticket-header text-center">User Password Change</h3>
<br>
<div class="row">
<form method="post" class="col-md-6 offset-md-3" >
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

<div class="col-md-12 text-right">
<input type="submit" class="btn btn-success"  name="passwordchange" value="Submit" required>

</div><br><br>


</form>
</div>
<?php include "../../footer.php" ;?>
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




</script>

<?php include "../../script.php" ?>
</html>
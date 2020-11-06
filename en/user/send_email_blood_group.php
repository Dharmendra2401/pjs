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
<h3 class="ticket-header text-center">Post Your Blood Request</h3>
<br>
<div class="row">
<form method="post" class="col-md-6 offset-md-3" >
<?php echo show_message();?>
<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span> Patient Full Name </label>	
<div class="col-md-8">
<input type="text" class="form-control" name="fullname" placeholder="Enter patient full name " >
</div>
</div>

<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span> Patient Blood Group </label>	
<div class="col-md-8">
<select name="blood_group" class="custom-select" placeholder="Select blood group" id="blood_group" >
<option value="" selected>Select</option>
<?php 
$getblood=mysqli_query($con,'select DISTINCT(blood_group) from member GROUP BY blood_group');
$countblood=mysqli_num_rows($getblood); 
while($showblood=mysqli_fetch_array($getblood)){

	?>
<option value="<?php echo $showblood['blood_group'];?>"><?php echo $showblood['blood_group']; ?></option>
	<?php

}

?>
</select>
</div>
</div>

<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span> Patient Age </label>	
<div class="col-md-8">
<select name="age" class="form-control" id="age">
<option value="">Select</option>
<?php $j=100; for($i=0;$j>=$i;$i++){?>

<option value="<?php echo $i;?>"><?php echo $i;?></option>

<?php } ?>
</select>
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span> When you need blood? </label>	
<div class="col-md-8">
<input type="date" class="form-control" name="date" placeholder="Enter patient full name " min="<?php echo date('Y-m-d');?>" >
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span> How many units you need? </label>	
<div class="col-md-8">
<input type="number" class="form-control" name="fullname" maxlength="4" placeholder="Enter patient full name " onKeyPress="return isNumeric(event)"  >
</div>
</div>


<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span> Mobile no </label>
<div class="col-md-8">	
<div class="row">
<div class="col-md-12">
	<div class="row">
<div class="col-md-12">
	<div class="row" style="padding: 0 15px 0;">
<input type="tel" class="col-md-8 form-control input-phone" placeholder="Enter mobile no."   name="mobileno" id="mobileno"  onKeyPress="return isNumeric(event)" maxlength='15'>
</div>
</div>
</div>
</div>
</div>
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
<script>
	$( document ).ready(function() {
				$(".input-phone").CcPicker();
				$(".input-phone").CcPicker("setCountryByCode","in");
				$(".cc-picker").removeClass('col-md-2');
				$(".cc-picker").addClass('col-md-4');
			});
	</script>
</html>
<?php  include "modal.php"; ?>  
 
<div class="modal fade loginPopup" id="contactoption">
<div class="modal-dialog modal-dialog-centered lgn-sgn-container login-container">
<div class="modal-content contact-content">
<div class="">
<button type="button" id="close-login" class="close m-2" data-dismiss="modal">&times;</button>
</div> 
<div class="modal-body">
<div class="row">
<div class="col-md-6 border-dark border-right text-center">
<p class="mb-0">xyz Jain ?</p>
<p>To proceed please login</p>	
<button type="button" class="btn btn-primary open-login" data-toggle="modal" data-target="#login" onclick="loginhide();">Login</button>
<a href="signup.php" class="btn btn-primary">SignUp</a>
</div>
<div class="col-md-6 text-center">
<p>Others who still want to connect</p>	
<button type="button" class="btn btn-primary" onclick="return openadminpop();">Contact Admin</button>
</div>
</div>
</div>
</div>
</div>
</div>
 

<!----------------------CONTACT ADMIN------------------------------>

<div class="modal fade loginPopup" id="opjcontact">
<div class="modal-dialog modal-dialog-centered lgn-sgn-container login-container">
<div class="modal-content adminform">
<div class="modal-header">
<h3 class="modal-title">OPJ Cntact Request Form</h3>
<button type="button" id="close-login" class="close" data-dismiss="modal">×</button>
</div>
<div class="modal-body">
<p class="text-center bg-light">Fill Form To Connect With <?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name']; ?></p>
<form id="opform">
<input type="hidden" value="<?php echo $idd ;?>" idd="userid">
<div class="form-group row">
<label class="col-md-4 col-form-label "><span class="text-danger">*</span> First Name</label>
<div class="col-md-8">
<input type="text" class="form-control inputtext" maxlength="50" placeholder="Enter First Name" name="opjfirstname" id="opjfirstname">
</div>
</div>
<div class="form-group row">
<label class="col-md-4 col-form-label "><span class="text-danger">*</span> Last Name</label>
<div class="col-md-8">
<input type="text" class="form-control inputtext" maxlength="50"  placeholder="Enter Last Name" name="opjlastname" id="opjlastname">
</div>
</div>
<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span>  Mobile No.</label>	
<div class="col-md-8">
<input type="tel" class="form-control" placeholder="Enter Mobile no." maxlength="15" name="opjmobile" id="opjmobile" onKeyPress="return isNumeric(event)">
</div>
</div>
<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span>  Email Id</label>	
<div class="col-md-8">
<input type="email" class="form-control" placeholder="Enter Email Id" maxlength="50" name="opjemail" id="opjemail">
</div>
</div>
<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span>  Address</label>
<div class="col-md-8">
<textarea class="form-control inputtexttwo" rows="4" name="opjaddress" maxlength="100" placeholder="Enter your address" id="opjaddress"></textarea>
</div>
</div>
<div class="col-md-12"><div id="opjerror"></div></div>
<div class="text-right">
<small>Send contact request to admin</small><br>
<button type="button" class="btn btn-primary" onclick="return contactAdmin();">Submit </button>
</div>
</form>
</div>
</div>
</div>
</div>


<!-- <div class="modal fade" id="login" tabindex="-1" role="dialog">
<div class="modal-dialog modal-dialog-centered login-container">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title">Login</h3>
<button type="button" id="close-login" class="close" data-dismiss="modal">&times;</button>
</div> 
<div class="modal-body">
<form class="form-inline justify-content-md-center my-3" method="post">
<div class="form-group">
<label class="mr-5" for="email">Member ID </label>
<input type="number" class="form-control" placeholder="MID" name="mid" id="mid" onkeyup="return checkMid();"  required>
</div>
<span id="miderror" class="form-group"></span>
<div class="logincontents" >
<div class="form-group"  id="logincontents" style="display:none;">
<label class="otp-label" for="email">An OTP has been sent to your registered mobile number xxxxxxx<label id="mobilenumber"></label></label>
<input type="text" class="form-control" placeholder="Enter OTP" name="otp" id="otp" maxlength="4" onKeyPress="return isNumeric(event)">
</div>
<label class="mr-5" id="resend" style="display:none;">RESEND OTP :<span id="timer"></span></label>

<div class="col-md-12">
<div class="text-center my-4">
<button type="button"  id="getotp" style="display:none;" class="btn btn-primary" onclick="return getOtp();">GET OTP</button>
<button type="button" id="loginbtn" style="display:none;" class="btn btn-success" onclick="return Userlogin();" name="login">LOGIN</button>
</div>
</div>
</div>
</form>
<div class="text-center my-4">
<p class="m-1">Need Help in Logging in? <a type="button" class="signup-link" onclick="return signUp();" >Click Here</a></p>
<p>New to PJS? <a class="signup-link" href="<?php echo RE_EN_PATH;?>signup.php">SignUp Now</a></p>
</div>
</div>
</div>
</div>
</div> -->
<style>
.checkboxpassword{text-align: right;
    width: 100%;
    font-size: 13px;
	font-family: sans-serif;}
	.checkboxpassword span{	background: rgb(128 128 128 / 12%);
    display: inline-block;
    margin: 5px 0px 5px;
    padding: 1px 5px 1px;}
</style>


<div class="modal fade" id="login" tabindex="-1" role="dialog">
<div class="modal-dialog modal-dialog-centered login-container">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title">Login</h3>
<button type="button" id="close-login" class="close" data-dismiss="modal">&times;</button>
</div> 
<div class="modal-body container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<form  method="post" class="form-top" id="login-form-here">
			<div class="form-group row">
			<label class="col-form-label col-md-6 px-sm-0" for="email"> <span class="text-danger">*</span> Member ID </label>
			<input type="text" class="col-md-6 form-control text-uppercase" placeholder="MID" name="mid" id="mid" onchange="return checkMid();"  required>
			</div>

			<div class="form-group row">
			<label class="col-form-label col-md-6 px-sm-0" for="password"> <span class="text-danger">*</span> Password </label>
			<input type="password" class="col-md-6 form-control" placeholder="Enter password"  name="password" id="password"  required><div class="checkboxpassword"><span class=""><input type="checkbox" onclick="return togglerFunfction()"> Show Password</span></div>

			</div>
            
            <div class="row">
            	<div class="col-md-12 text-right pr-0">
					<span id="miderror"></span>
					<button type="button" id="loginbtn" class="btn btn-success" onclick="return Userlogin();" name="login">LOGIN</button>
				</div>
            </div>
			
			</form>
		</div>
	</div>

<div class="text-center my-4">
<p class="m-1">Forgot password and member id <a type="button" class="signup-link" onclick="return signUp();" >Click Here</a></p>
<p>New to PJS? <a class="signup-link" href="<?php echo RE_EN_PATH;?>signup.php">SignUp Now</a></p>
</div>
</div>
</div>
</div>
</div> 



<div class="modal fade help" id="help">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title">Forgot Member Id(MID) & Password</h3>	
<button type="button" id="close-login" class="close" data-dismiss="modal">&times;</button>
</div> 
<div class="modal-body">
<div class="container">



<form class="" id="forgot-login-form">
<h5 class="mb-2">Enter The Following Details</h5>
<div class="row">
<div class="col-md-6">
<label><span class="text-danger">*</span> First Name</label> 
</div>
<div class="col-md-6">
<div class="form-group">
<input class="form-control form-control-sm inputtext" maxlength="50" type="text" id="emailfirst_name" name="emailfirst_name" placeholder="Enter first name">
</div>
</div>


<div class="col-md-6">
<label><span class="text-danger">*</span> Last Name</label> 
</div>
<div class="col-md-6">
<div class="form-group">
<input class="form-control form-control-sm inputtext" maxlength="50" type="text" name="emaillast_name" id="emaillast_name" placeholder="Enter last name">
</div>
</div>

<div class="col-md-6">
<label><span class="text-danger">*</span> Fathers Name</label> 
</div>
<div class="col-md-6">
<div class="form-group">
<input class="form-control form-control-sm inputtexttwo"  maxlength="100" type="text" name="emailfathers_name" id="emailfathers_name" placeholder="Enter fathers name">
</div>
</div>

<div class="col-md-6">
<label><span class="text-danger">*</span> Date of Birth</label> 
</div>
<div class="col-md-6">
<div class="form-group">
<input class="form-control form-control-sm" type="date" name="emaildob" id="emaildob" placeholder="Enter date of birth" max="<?php echo date('Y-m-d');?>">
</div>
</div>
<div class="col-md-12">
<span id="errorcrediential"></span>
</div>

<div class="col-12 text-right">
<!-- <p class="mb-0 mt-2"><small class="bg-light">details to admin</small> </p> -->
<button type="button" onclick="return emailshoot();" class="btn btn-primary btn-sm">Send</button>
</div>
</div>

</form>
</div>	
</div>	
</div>
</div>





<!-- <div class="modal fade help" id="help">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title">Login Help</h3>	
<button type="button" id="close-login" class="close" data-dismiss="modal">&times;</button>
</div> 
<div class="modal-body">
<div class="container">
<ul class="list-unstyled">
<li class="row">
<div class="col-1"> 1.</div>
<div class="col-11">
<p class="points bg-light" onclick="displayFirt()">I want to update my mobile no. with new mobile no.</p>
<form class="update-number" id="update-number">
<h5 class="mb-2">Enter The Following Details</h5>
<div class="row">
<div class="col-md-5">
<label><span class="text-danger">*</span> New Mobile No.</label> 
</div>
<div class="col-md-7">
<div class="form-group">
<input class="form-control form-control-sm" type="tel" maxlength="15" onKeyPress="return isNumeric(event)"  name="newmobile" id="newmobile" placeholder="Enter new mobile no">
</div>
</div>

<div class="col-md-5">
<label><span class="text-danger">*</span> Old Mobile No.</label> 
</div>
<div class="col-md-7">
<div class="form-group"> 
<input class="form-control form-control-sm" type="tel" name="oldmobile" id="oldmobile" maxlength="15" onKeyPress="return isNumeric(event)" placeholder="Enter old mobile no">
</div>
</div>

<div class="col-md-5">
<label><span class="text-danger">*</span> Member Id (MID)</label> 
</div>
<div class="col-md-7">
<div class="form-group"> 
<input class="form-control form-control-sm text-uppercase"  type="text" maxlength="15" name="memberid" id="memberid" placeholder="member id (MID)">
</div>
</div>

<div class="col-md-5">
<label><span class="text-danger">*</span> Description</label> 
</div>
<div class="col-md-7">
<div class="form-group"> 
<textarea class="form-control form-control-sm" name="description" id="description" placeholder="Enter the description here"></textarea>
</div>
</div>


<div class="col-12">
<span id="errorfirst"></span>
</div>
<div class="col-12 text-right">
<p class="mb-0 mt-2"><small>Send details to admin</small> </p>
<button type="button" onclick="return UpdateNumber();" class="btn btn-primary btn-sm mb-2">Send</button>
</div>

</div>
</form>
</div> 
</li>
<li class="row">
<div class="col-1"> 2.</div>
<div class="col-11">
<p class="forgot-credential bg-light" onclick="return displaySecond()">Forgot all login credentials?</p>
<form class="forgot-login" id="forgot-login-form">
<h5 class="mb-2">Enter The Following Details</h5>
<div class="row">
<div class="col-md-6">
<label><span class="text-danger">*</span> First Name</label> 
</div>
<div class="col-md-6">
<div class="form-group">
<input class="form-control form-control-sm inputtext" maxlength="50" type="text" id="emailfirst_name" name="emailfirst_name" placeholder="Enter first name">
</div>
</div>


<div class="col-md-6">
<label><span class="text-danger">*</span> Last Name</label> 
</div>
<div class="col-md-6">
<div class="form-group">
<input class="form-control form-control-sm inputtext" maxlength="50" type="text" name="emaillast_name" id="emaillast_name" placeholder="Enter last name">
</div>
</div>

<div class="col-md-6">
<label><span class="text-danger">*</span> Fathers Name</label> 
</div>
<div class="col-md-6">
<div class="form-group">
<input class="form-control form-control-sm inputtexttwo"  maxlength="100" type="text" name="emailfathers_name" id="emailfathers_name" placeholder="Enter fathers name">
</div>
</div>

<div class="col-md-6">
<label><span class="text-danger">*</span> Date of Birth</label> 
</div>
<div class="col-md-6">
<div class="form-group">
<input class="form-control form-control-sm" type="date" name="emaildob" id="emaildob" placeholder="Enter date of birth">
</div>
</div>
<div class="col-md-12">
<span id="errorcrediential"></span>
</div>

<div class="col-12 text-right">
<p class="mb-0 mt-2"><small class="bg-light">details to admin</small> </p>
<button type="button" onclick="return emailshoot();" class="btn btn-primary btn-sm">Send</button>
</div>
</div>

</form>
</div>
</li>
</ul>
</div>
</div>	
</div>	
</div>
</div> -->

<div class="modal fade loginPopup" id="commonmodal">
<div class="modal-dialog modal-dialog-centered lgn-sgn-container login-container">
<div class="modal-content lgn-sgn-wrapper">
<div class="">
<button type="button" id="close-login" class="close m-2" data-dismiss="modal">&times;</button>
</div> 
<div class="modal-body">
<p class="mb-5">To proceed please login / signup</p>	
<button type="button" class="btn btn-secondary open-login">Login</button> 
<a href="signup.php" class="btn btn-secondary">SignUp</a>
</div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RE_HOME_PATH ; ?>js/jquery.steps.min.js"></script>
<script data-require="popper.js@*" data-semver="1.12.9" src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="<?php echo RE_HOME_PATH ; ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo RE_HOME_PATH ; ?>js/main.js"></script>
<script type="text/javascript" src="<?php echo RE_HOME_PATH; ?>js/sweetalert.min.js"></script>
<script  type="text/javascript" src="<?php echo RE_HOME_PATH; ?>js/sorttable.js"></script>
<script  type="text/javascript" src="<?php echo RE_HOME_PATH; ?>js/lightbox.js"></script>
<script  type="text/javascript" src="<?php echo RE_HOME_PATH; ?>js/bootbox.min.js"></script>

<script type="text/javascript" src="https://cdn.ckeditor.com/4.15.0/standard-all/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo RE_HOME_PATH; ?>js/BsMultiSelect.js"></script>
 <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
 <script type="text/javascript" src="<?php echo RE_HOME_PATH; ?>js/jquery.ccpicker.js"></script>

<script>

function openadminpop(){
$('#opjcontact').modal('show');
$('#contactoption').modal('hide');

}

function loginhide(){
$('#contactoption').modal('hide');

}

function signUp(){
$('#help').modal('show');
$('#login').modal('hide');
}

function displayFirt(){
$('#update-number').show();
$('#forgot-login-form').hide();
}
function displaySecond(){
$('#update-number').hide();
$('#forgot-login-form').show();
}

function UpdateNumber(){

var newnumber=$('#newmobile').val();
var oldnumber=$('#oldmobile').val();
var memberid=$('#memberid').val();
var description=$('#description').val();

if(newnumber==''){
$('#newmobile').focus();
$('#errorfirst').html('<div class="alert alert-danger alert-sm">Please enter new mobile number</div> ');
return false;
}
else if(newnumber==000000000){
$('#newmobile').focus();
$('#errorfirst').html('<div class="alert alert-danger alert-sm">Please enter valid new mobile number</div> ');
return false;
}
else if(newnumber.length<10){
$('#newmobile').focus();
$('#errorfirst').html('<div class="alert alert-danger alert-sm">Please enter valid new mobile number</div> ');
return false;
}
else if(oldnumber==''){
$('#oldmobile').focus();
$('#errorfirst').html('<div class="alert alert-danger alert-sm">Please enter old mobile number</div> ');
return false;
}
else if(oldnumber==000000000){
$('#oldmobile').focus();
$('#errorfirst').html('<div class="alert alert-danger alert-sm">Please enter valid old mobile number</div> ');
return false;
}
else if(newnumber.oldnumber<10){
$('#newmobile').focus();
$('#errorfirst').html('<div class="alert alert-danger alert-sm">Please enter valid old mobile number</div> ');
return false;
}
else if(memberid.trim()==''){
$('#memberid').focus();
$('#errorfirst').html('<div class="alert alert-danger alert-sm">Please enter member id</div> ');
return false;
}else if(description==''){
$('#description').focus();
$('#errorfirst').html('<div class="alert alert-danger alert-sm">Please enter description</div> ');
return false;
}else{
$('#loadergif').fadeIn();
$.ajax({
method:'POST',
url:'<?php echo RE_HOME_PATH ;?>newnumber.php',
data:{'newnumber':newnumber,'oldnumber':oldnumber,'memberid':memberid,'description':description},
success:function(data1234){
if(data1234.trim()=='true'){
$('#update-number')[0]. reset();
$('#help').modal('hide');
$('#update-number').hide();
$('#errorfirst').html('');
$('#loadergif').fadeOut();
bootbox.alert('Your details has been sent to Admin for verification, You will receive a callback soon on your new phone number');
}
if(data1234.trim()=='Error'){
$('#update-number')[0]. reset();
$('#errorfirst').html('<div class="alert alert-danger alert-sm">Please check your old mobile number and MEMBER ID(MID)</div>');
$('#loadergif').fadeOut();
}
if(data1234.trim()=='false'){
$('#update-number')[0]. reset();
//$('#update-number').hide();
//$('#help').modal('hide');
bootbox.alert('Error! Please fill out the fields and try again');
$('#loadergif').fadeOut();
}
}
});
}
}

function emailshoot(){
var firstname=$('#emailfirst_name').val();
//var middlename=$('#emailmiddle_name').val();
var lastname=$('#emaillast_name').val();
var fathersname=$('#emailfathers_name').val();
var dob=$('#emaildob').val();
if(firstname.trim()==''){
$('#emailfirst_name').focus(); 
$('#errorcrediential').html('<div class="alert alert-danger alert-sm">Please enter first name</div>');
return false;
}

else if(lastname.trim()==''){
$('#emaillast_name').focus(); 
$('#errorcrediential').html('<div class="alert alert-danger alert-sm">Please enter last name</div>');
return false;

}
else if(fathersname.trim()==''){
$('#fathersname').focus(); 
$('#errorcrediential').html('<div class="alert alert-danger alert-sm">Please enter fathers name</div>');
return false;

}
else if(dob==''){
$('#emaildob').focus(); 
$('#errorcrediential').html('<div class="alert alert-danger alert-sm">Please enter date of birth</div>');
return false;

}else{
$('#loadergif').fadeIn();
$.ajax({
method:'POST',
url:'<?php echo RE_HOME_PATH ;?>emailsend.php',
data:{'firstname':firstname,'lastname':lastname,'fathersname':fathersname,'dob':dob},
success:function(emailshoot){
if(emailshoot.trim()=='true'){
$('#forgot-login-form')[0]. reset();
$('#forgot-login-form').modal('hide');
$('#help').modal('hide');
$('#errorcrediential').html('');
$('#loadergif').fadeOut();
bootbox.alert("Your details has been sent to your registered email id");
}

if(emailshoot.trim()=='false'){
$('#forgot-login-form')[0]. reset();
$('#help').modal('hide');
//$('#forgot-login-form').modal('hide');
$('#errorcrediential').html('');
$('#loadergif').fadeOut();
bootbox.alert("Error! Please check your details and try again.");
}

}

});
}

}

function contactAdmin(){
var opjfirstname=$('#opjfirstname').val();
var opjlastname=$('#opjlastname').val();
var opjmobile=$('#opjmobile').val();
var opjemail=$('#opjemail').val();
var opjaddress=$('#opjaddress').val();
var userid="<?php echo $idd ;?>";
var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
if(opjfirstname.trim()==''){
$('#opjerror').html('<div class="alert alert-danger">Please enter the firstname</div>');
$('#opjfirstname').focus();
return false;
}
else if(opjlastname.trim()==''){
$('#opjerror').html('<div class="alert alert-danger">Please enter the lastname</div>');
$('#opjlastname').focus();
return false;
}
else if(opjmobile.trim()==''){
$('#opjerror').html('<div class="alert alert-danger">Please enter the mobile no</div>');
$('#opjmobile').focus();
return false;
}
else if(opjemail.trim()==''){
$('#opjerror').html('<div class="alert alert-danger">Please enter the email </div>');
$('#opjemail').focus();
return false;
}
else if (!testEmail.test(opjemail))
{   
$('#opjerror').html('<div class="alert alert-danger">Please enter the valid email </div>');
$('#opjemail').focus();
return false;
}
else if(opjaddress.trim()==''){
$('#opjerror').html('<div class="alert alert-danger">Please enter the mobile no</div>');
$('#opjaddress').focus();
return false;
}
else{ 
$('#loadergif').fadeIn();
$.ajax({
method:'POST',
url:'<?php echo RE_HOME_PATH ;?>opjsubmit.php',
data:{'opjfirstname':opjfirstname,'opjlastname':opjlastname,'opjmobile':opjmobile,'opjemail':opjemail,'opjaddress':opjaddress,'userid':userid},
success:function(opjrequest){
if(opjrequest.trim()=='true'){
$('#opform')[0]. reset();
$('#opjcontact').modal('hide');
$('#opjerror').html('');
$('#loadergif').fadeOut();
bootbox.alert("Your request has been send to admin for further verification");
}
if(opjrequest.trim()=='false'){
$('#opform')[0]. reset();
$('#opjcontact').modal('hide');
$('#opjerror').html('');
$('#loadergif').fadeOut();
bootbox.alert("Error! Please try again");
}
}

});

}

}
 

function checkMid(){
var mid=$('#mid').val();
$.ajax({
type:'POST',
url:'<?php echo RE_HOME_USER ;?>checkmid.php',
data:{'mid':mid,},
success:function(midsuccess){
if(midsuccess.trim()=='false'){
$('#miderror').html('<div class="alert alert-danger">Invalid Member Id (MID) you entered <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> ');
$('#mid').val('');
$('#getotp').hide();
return false;
}else{
$('#miderror').html(''); 
$('#getotp').show();

return false;
}
}
});
}

// function getOtp(){
// var mid=$('#mid').val();
// $('#loadergif').fadeIn();
// $.ajax({
// type:'POST',
// url:'<?php echo RE_HOME_USER ;?>otprequest.php',
// data:{'mid':mid},
// success:function(otpnumber){
// alert(otpnumber);
// if(otpnumber!=' '){
// timer(120);
// $('#mobilenumber').html(otpnumber);
// $('#logincontents').show();
// $('#getotp').hide();
// $('#loginbtn').show();
// $('#resend').show();
// $('#mid'). attr('disabled','disabled');
// $('#loadergif').fadeOut();
// return false; 
// }
// }
// }
// )
// }


function Userlogin(){
var mid=$('#mid').val(); 
var password=$('#password').val();
if(mid.trim()==''){
$('#miderror').html('<div class="alert alert-danger alert-sm">Please enter member id (MID) <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> ');
$('#mid').focus();
return false;
}
else if(password.trim()==''){
$('#miderror').html('<div class="alert alert-danger alert-sm">Please enter password <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> ');
$('#password').focus();
}else{
	$('#loadergif').fadeIn();
$.ajax({
method:'POST',
url:'<?php echo RE_HOME_USER ;?>loginuser.php',
data:{'mid':mid,'password':password},
success:function(userlog){
if(userlog.trim()=='false'){
$('#loadergif').fadeOut();
$('#miderror').html('<div class="alert alert-danger alert-sm">Error! Please fill out the fields! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> ');
$('#login-form-here')[0].reset();
}
if(userlog.trim()=='Error'){
$('#loadergif').fadeOut();
$('#miderror').html('<div class="alert alert-danger alert-sm">Error! Please enter the valid member id(MID) and password! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> ');
$('#login-form-here')[0].reset();
}
if(userlog.trim()=='Death'){
$('#loadergif').fadeOut();
$('#miderror').html('<div class="alert alert-danger alert-sm">Error! Sorry dead person may not login! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div> ');
$('#login-form-here')[0].reset();
}
if(userlog.trim()=='true'){
$('#loadergif').fadeOut();
//window.location.replace("<?php echo RE_EN_PATH; ?>");
location.reload(true);
}
}


})

}

}


let timerOn = true;

function timer(remaining) {
var m = Math.floor(remaining / 60);
var s = remaining % 60;

m = m < 10 ? '0' + m : m;
s = s < 10 ? '0' + s : s;
document.getElementById('timer').innerHTML = m + ':' + s;
remaining -= 1;
if(remaining >= 0 && timerOn) {
setTimeout(function() {
timer(remaining);
}, 1000);
return;
}

if(!timerOn) {
// Do validate stuff here
return;
}

// Do timeout stuff here
$('#timer').html('');
$('#getotp').show();

$('#resend').hide();
}

 <?php if($requestid==''){ ?>

$(function(){
$(".shortable").addSortWidget();
});
$(document).ready(function(){
$("#veiw_update_get_city").load("<?php echo RE_EN_PATH; ?>veiw_update_get_city.php");
$("#getcity").load("<?php echo RE_EN_PATH; ?>getcity.php");
$("#getcitytwo").load("<?php echo RE_EN_PATH; ?>getcity.php");
$("#getpincode").load("<?php echo RE_EN_PATH; ?>getpincode.php");
$("#getarea").load("<?php echo RE_EN_PATH; ?>area.php");
});
 <?php } ?>



function isNumeric (evt) {
var theEvent = evt || window.event;
var key = theEvent.keyCode || theEvent.which;
key = String.fromCharCode (key);
var regex = /[0-9]|\./;
if ( !regex.test(key) ) {
theEvent.returnValue = false;
if(theEvent.preventDefault) theEvent.preventDefault();
}
}


function getCity(){
var state= $('#state').val();
var cityname="<?php echo $row['city'];?>";
$('#loadergif').fadeIn();
$.ajax({
type:"POST",
url:"<?php echo RE_EN_PATH; ?>getcity.php",
data:{"state":state,"cityname":cityname},
success:function(data12){
$("#getarea").load("<?php echo RE_EN_PATH; ?>area.php");
$("#getpincode").load("<?php echo RE_EN_PATH; ?>getpincode.php");
//getpincodes();
//getArea();
$('#getcity').html(data12);
$('#loadergif').fadeOut();
}
});
}

// 

function veiw_update_get_city(){
var state= $('#state').val();
var city=$('#state').data("current_city");
$('#loadergif').fadeIn();
$.ajax({
type:"POST",
url:"<?php echo RE_EN_PATH; ?>veiw_update_get_city.php",
data:{"state":state,"city":city},
success:function(data12){
$("#getarea").load("<?php echo RE_EN_PATH; ?>veiw_update_get_city.php");
$("#getpincode").load("<?php echo RE_EN_PATH; ?>veiw_update_get_city.php");
$('#getcity').html(data12);
$('#loadergif').fadeOut();
}
});
}
// 

function getCitytwo(){
var state= $('#statetwo').val();
$('#loadergif').fadeIn();
$.ajax({
type:"POST",
url:"<?php echo RE_EN_PATH; ?>getcitytwo.php",
data:{"state":state},
success:function(data12){
$("#getarea").load("<?php echo RE_EN_PATH; ?>area.php");
$('#getcitytwo').html(data12);
$('#loadergif').fadeOut();
}
});
}
function getpincodes(){
var city= $('#city').val();
var state= $('#state').val();
//var cityname="<?php echo $row['city'];?>";

$('#loadergif').fadeIn();
$.ajax({
type:"POST",
url:"<?php echo RE_EN_PATH; ?>getpincode.php",
data:{"city":city,},
success:function(data122){
$("#getarea").load("<?php echo RE_EN_PATH; ?>area.php");
getArea();
$('#getpincode').html(data122);
$('#loadergif').fadeOut();
}
});
}

function view_update_getpincodes(){
var city= $('#city').val();
$('#loadergif').fadeIn();
$.ajax({
type:"POST",
url:"<?php echo RE_EN_PATH; ?>view_update_getpincodes.php",
data:{"city":city},
success:function(data122){
$("#getarea").load("area.php");
$('#getpincode').html(data122);
$('#loadergif').fadeOut();
}
});
}

function view_update_getArea(){
var states= $('#state').val();
var pincode= $('#pincodes').val();
$('#loadergif').fadeIn();
$.ajax({
type:"POST",
url:"<?php echo RE_EN_PATH; ?>view_update_getArea.php",
data:{"pincode":pincode},
success:function(data1224){
$('#getarea').html(data1224);
$('#loadergif').fadeOut();
}
});

}

function getArea(){
var pincode= $('#pincodes').val();
var pincodes= "<?php echo $row['area']; ?>";
$('#loadergif').fadeIn();
$.ajax({
type:"POST",
url:"<?php echo RE_EN_PATH; ?>area.php",
data:{"pincode":pincode,'pincodes':pincodes},
success:function(data1224){
$('#getarea').html(data1224);
$('#loadergif').fadeOut();
}
});

}

function searchbarclick(){
$('.searchdata').hide();
$('#search').val('');
$('.cancel-btn').hide();
}

function searchBar(x,y)
{

var search=$("#search").val();
if(search.trim()!=''){
y=10;
//$('#loadergif').fadeIn();
$.ajax({
type: 'POST',
url: "<?php echo RE_EN_PATH; ?>load_search.php",
data: {"page":x,"pagesize":y,"search":search},
success: function(search){
$('.searchdata').show();
$('.cancel-btn').show();
$('.searchbtn').removeAttr("disabled");
//$('#loadergif').fadeOut();
$("#searchdata").html(search);			    } 
});


}else{
$('.searchdata').hide();
$('.cancel-btn').hide();
$('.searchbtn').prop("disabled",true);
}

}
function searchbarclick1(){
$('.searchdata1').hide();
$('#search1').val('');
$('.cancel-btn1').hide();
}

function searchBar1(x,y)
{

var search=$("#search1").val();
if(search.trim()!=''){
y=10;
//$('#loadergif').fadeIn();
$.ajax({
type: 'POST',
url: "<?php echo RE_EN_PATH; ?>new_load_family_search.php",
data: {"search":search},
success: function(search){
$('.searchdata1').css("display","block");
$('.cancel-btn1').show();
$('.searchbtn1').removeAttr("disabled");
//$('#loadergif').fadeOut();
$("#searchdata1").html(search);			    } 
});


}else{
$('.searchdata1').css("display","none");
$('.cancel-btn1').css("display","none");
$('.searchbtn').prop("disabled",true);
}

}

function searchpage() {
var search=$("#search").val();
if(search.trim()!=''){
window.location.replace("<?php echo RE_EN_PATH; ?>load_search2.php?search="+search);}
} 
// 


	$(document).ready(function() {
			$("#feedback_submit_form").validate({
					rules: {
							feedback_desc1: "required",
							feedback_type1:"required" 
					},
					messages: {
							feedback_desc1: "Fill the Description",
							feedback_type1: "Please select type"
					}
			})
			$("#feedback_submit").on("click", function () {

			if (!$("#feedback_submit_form").valid()) { // Not Valid
				return false;
			} 
			else {
				var fd = new FormData();
				var feedback_type=$(".feedback_type:visible option:selected").val();
				var feedback_desc=$(".feedback_desc").val();
				var current_user=$(".curr_mid").val();
 				var home_path=$("#home_path").val();
				$.post("<?php echo RE_HOME_PATH; ?>en/PJS-demo/feedback_submit.php",
				{
					current_user:current_user,
					feedback_type: feedback_type,
					feedback_desc:feedback_desc
				},
				function(data,status){
						var status1=status;
						console.log(status1);
						if (status1=='success') {
						// window.location.reload();
						$('#modal45').modal('hide')
						$('#feedback_alert').modal('show')
					}
					else{
					alert("Data: not updated");
				}
				});
			}
				
		})

});

$('#modal45').on('hide.bs.modal', function (e) {
 var mid=$(".feedback_type").val('');
var dod=$(".feedback_desc").val('');
$("label.error").hide();
$('.succ.msg').hide();
$('.err.msg').hide();
})

// $("#feedback_submit").on("click", function () {
// //$_SESSION['user_mid']
// var feedback_type=$(".feedback_type:visible option:selected").val();
// var feedback_desc=$(".feedback_desc").val();
// var current_user=$(".curr_mid").val();
// //
// $.post("<?php echo RE_HOME_PATH; ?>en/PJS-demo/feedback_submit.php",
// {
// 	current_user:current_user,
// 	feedback_type: feedback_type,
// 	feedback_desc:feedback_desc
// },
// function(data,status){
// 		var status1=status;
// 		console.log(status1);
// 		if (status1=='success') {
// 		// window.location.reload();
// 		$('#modal45').modal('hide')
// 		$('#feedback_alert').modal('show')
// 	}
// 	else{
// 	alert("Data: not updated");
// }
// });

// })

$('.inputtexttwo').bind('keyup',function(){ 
var node = $(this);
node.val(node.val().replace(/[^a-zA-Z _]/g,'') ); }
);

$(".inputtext").keyup(function(e) {
// Our regex
// a-z => allow all lowercase alphabets
// A-Z => allow all uppercase alphabets
// 0-9 => allow all numbers
// @ => allow @ symbol
var regex = /^[a-zA-Z _ ]+$/;
// This is will test the value against the regex
// Will return True if regex satisfied
if (regex.test(this.value) !== true)
//alert if not true
//alert("Invalid Input");

// You can replace the invalid characters by:
this.value = this.value.replace(/[^a-zA-Z _ ]+/, '');
});



$(document).mouseup(function (e) { 
if ($(e.target).closest(".searchdata").length 
=== 0) { 
$('.searchdata').hide(); 
} 
});

$(".death_update").on("click", function () {
var mid=$(".mid").val();
var dod=$(".dod").val();
var current_user=$(".curr_mid").val();
$.post("<?php echo RE_HOME_PATH; ?>en/PJS-demo/death_checker.php",
{
	current_user:current_user,
	dod: dod,
	mid:mid
},
function(data,status){
		var status1=status;
		//console.log(data);
		if (status1=='success') {
		var da=$.trim(data);
		if (da=="Thanks for the update") {
		console.log(da+"12");
		$('.err.msg').hide();
		$('.succ.msg').show();
		$('.succ.msg').text(da);
		$('.succ.msg').css("padding","10px");
		}
		else{
			console.log($('.succ.msg').length);
			$('.succ.msg').hide();
			$('.err.msg').show();
		$('.err.msg').text(da);
		$('.err.msg').css("padding","10px");
		}
	}
	else{
		alert("Data: not updated");
	}
});

})


$('#death_update').on('hide.bs.modal', function (e) {
 var mid=$(".mid").val('');
var dod=$(".dod").val('');
$('.succ.msg').hide();
$('.err.msg').hide();
})
$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    //alert(maxDate);
    $('.dod').attr('max', maxDate);
});


$("#dob").on("click", function () {


})

$('.modal').on('hidden.bs.modal', function (e) {
  $(this)
    .find("input,textarea,select")
       .val('')
       .end()
    .find("input[type=checkbox], input[type=radio]")
       .prop("checked", "")
       .end();
})

function togglerFunfction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
//load notification 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"<?php echo RE_HOME_PATH?>en/PJS-demo/notification.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.notification-menu').html(data.notification);
   
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
     $('.count').css("padding", "4px");
    }
    if (data.unseen_notification == 0) {
    	$('.notification').children("span.label-pill").css("padding","0px");
    }
   }
  });
 }
 

$(document).on('click', '.notification', function(){ 
	$('.count').html('');
	$('.notification').children("span.label-pill").css("padding","0px");
	load_unseen_notification('yes');
});

 // setInterval(function(){ 
 //  load_unseen_notification(); 
 // }, 5000);
load_unseen_notification()
</script>

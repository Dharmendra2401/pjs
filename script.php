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
<button type="button" class="btn btn-secondary open-login">Login</button>
<a href="signup.php" class="btn btn-secondary">SignUp</a>
</div>
<div class="col-md-6 text-center">
<p>Others who still want to connect</p>	
<button type="button" class="btn btn-secondary" onclick="return openadminpop();">Contact Admin</button>
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
<input type="text" class="form-control"  placeholder="Enter First Name" name="opjfirstname" id="opjfirstname">
</div>
</div>
<div class="form-group row">
<label class="col-md-4 col-form-label "><span class="text-danger">*</span> Last Name</label>
<div class="col-md-8">
<input type="text" class="form-control"  placeholder="Enter Last Name" name="opjlastname" id="opjlastname">
</div>
</div>
<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span>  Mobile No.</label>	
<div class="col-md-8">
<input type="number" class="form-control" placeholder="Enter Mobile no." name="opjmobile" id="opjmobile">
</div>
</div>
<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span>  Email Id</label>	
<div class="col-md-8">
<input type="email" class="form-control" placeholder="Enter Email Id" name="opjemail" id="opjemail">
</div>
</div>
<div class="form-group row">
<label class="col-md-4 col-form-label"><span class="text-danger">*</span>  Address</label>
<div class="col-md-8">
<textarea class="form-control" rows="4" name="opjaddress" placeholder="Enter your address" id="opjaddress"></textarea>
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


<div class="modal fade" id="login" tabindex="-1" role="dialog">
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
</div>




<div class="modal fade help" id="help">
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
<p class="points" onclick="displayDetailForm()">I want to update my mobile no. with new mobile no.</p>
<form class="update-number" id="update-number">
<h5 class="mb-2">Enter The Following Details</h5>
<div class="row">
<div class="col-md-5">
<label>New Mobile No.</label> 
</div>
<div class="col-md-7">
<div class="form-group">
<input class="form-control form-control-sm" type="text" name="">
</div>

</div>

<div class="col-md-5">
<label>Old Mobile No.</label> 
</div>
<div class="col-md-7">
<div class="form-group"> 
<input class="form-control form-control-sm" type="text" name="">
</div>
</div>

<div class="col-md-5">
<label>Member Id</label> 
</div>
<div class="col-md-7">
<div class="form-group"> 
<input class="form-control form-control-sm" type="text" name="">
</div>
</div>

<div class="col-md-5">
<label>Name</label> 
</div>
<div class="col-md-7">
<div class="form-group"> 
<input class="form-control form-control-sm" type="text" name="">
</div>
</div>

<div class="col-md-5">
<label>Date of Birth</label>
</div>
<div class="col-md-7">
<div class="form-group"> 
<input class="form-control form-control-sm" type="date" name="">
</div>
</div>

<div class="col-md-5">
<label>Email id</label> 
</div>
<div class="col-md-7">
<div class="form-group"> 
<input class="form-control form-control-sm" type="email" name="">
</div>
</div>

<div class="col-12 text-right">
<p class="mb-0 mt-2"><small>Send details to admin</small> </p>
<button type="submit" class=" btn btn-primary btn-sm">Send</button>
</div>
</div>
</form>
</div> 
</li>
<li class="row">
<div class="col-1"> 2.</div>
<div class="col-11">
<p class="forgot-credential" onclick="displayForm()">Forgot all login credentials?</p>
<form class="forgot-login" id="forgot-login-form">
<h5 class="mb-2">Enter The Following Details</h5>
<div class="row">
<div class="col-md-6">
<label>First Name</label> 
</div>
<div class="col-md-6">
<div class="form-group">
<input class="form-control form-control-sm" type="text" name="">
</div>
</div>

<div class="col-md-6">
<label>Middle Name</label> 
</div>
<div class="col-md-6">
<div class="form-group">
<input class="form-control form-control-sm" type="text" name="">
</div>
</div>

<div class="col-md-6">
<label>Last Name</label> 
</div>
<div class="col-md-6">
<div class="form-group">
<input class="form-control form-control-sm" type="text" name="">
</div>
</div>

<div class="col-md-6">
<label>Date of Birth</label> 
</div>
<div class="col-md-6">
<div class="form-group">
<input class="form-control form-control-sm" type="date" name="">
</div>
</div>

<div class="col-md-6">
<label>New mobile number</label> 
</div>
<div class="col-md-6">
<div class="form-group">
<input class="form-control form-control-sm" type="text" name="">
</div>
</div>
<div class="col-12 text-right">
<p class="mb-0 mt-2"><small>Send details to admin</small> </p>
<button type="submit" class="send-credential btn btn-primary btn-sm">Send</button>
</div>
</div>
</form>
</div>
</li>
</ul>
<button class="btn btn-primary btn-sm float-right done">Done</button>
</div>
</div>	
</div>	
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


<script>

function openadminpop(){
$('#opjcontact').modal('show');
$('#contactoption').modal('hide');

}

function signUp(){
$('#help').modal('show');
$('#login').modal('hide');
}

function displayDetailForm(){
$('#update-number').show();
$('#forgot-login-form').hide();
}

function contactAdmin(){
var opjfirstname=$('#opjfirstname').val();
var opjlastname=$('#opjlastname').val();
var opjmobile=$('#opjmobile').val();
var opjemail=$('#opjemail').val();
var opjaddress=$('#opjaddress').val();
var userid="<?php echo $idd ;?>";
var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
if(opjfirstname==''){
  $('#opjerror').html('<div class="alert alert-danger">Please enter the firstname</div>');
  $('#opjfirstname').focus();
  return false;
}
else if(opjlastname==''){
  $('#opjerror').html('<div class="alert alert-danger">Please enter the lastname</div>');
  $('#opjlastname').focus();
  return false;
}
else if(opjmobile==''){
  $('#opjerror').html('<div class="alert alert-danger">Please enter the mobile no</div>');
  $('#opjmobile').focus();
  return false;
}
else if(opjemail==''){
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
else if(opjaddress==''){
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
if(opjrequest=='true'){
$('#opform')[0]. reset();
$('#opjcontact').modal('hide');
$('#opjerror').html('');
$('#loadergif').fadeOut();
bootbox.alert("Your request has been send to admin for further verification");
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
data:{'mid':mid},
success:function(midsuccess){
  alert(midsuccess);
if(midsuccess=='false'){
$('#miderror').html('<div class="text-danger">Invalid MID you entered</div> ');
//$('#mid').val('');
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

function getOtp(){
var mid=$('#mid').val();
$('#loadergif').fadeIn();
$.ajax({
type:'POST',
url:'<?php echo RE_HOME_USER ;?>otprequest.php',
data:{'mid':mid},
success:function(otpnumber){
  alert(otpnumber);
if(otpnumber!=' '){
timer(120);
$('#mobilenumber').html(otpnumber);
$('#logincontents').show();
$('#getotp').hide();
$('#loginbtn').show();
$('#resend').show();
$('#mid'). attr('disabled','disabled');
$('#loadergif').fadeOut();
return false; 
}
}
}
)
}


function Userlogin(){
 
var mid=$('#mid').val(); 
var otp=$('#otp').val();
if(mid==''){
  swal({
  title: "Error",
  text: "Please fill the MID",
  icon: "error",
});
return false;
}
else if(otp==''){
  swal({
  title: "Error",
  text: "Please fill the OTP",
  icon: "error",
});

}else{
$.ajax({
method:'POST',
url:'<?php echo RE_HOME_USER ;?>loginuser.php',
data:{'mid':mid,'otp':otp},
success:function(userlog){
alert(userlog);
if(userlog=='false'){
  swal({
  title: "Error",
  text: "Error! Please enter the valid otp! ",
  icon: "error",
});
}
if(userlog=='true'){
  window.location.replace("<?php echo RE_EN_PATH; ?>");
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



  $(function(){
	$(".shortable").addSortWidget();
});
$(document).ready(function(){
			$("#getcity").load("<?php echo RE_EN_PATH; ?>getcity.php");
      $("#getcitytwo").load("<?php echo RE_EN_PATH; ?>getcity.php");
      $("#getpincode").load("<?php echo RE_EN_PATH; ?>getpincode.php");
      $("#getarea").load("<?php echo RE_EN_PATH; ?>area.php");
	
});




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
$('#loadergif').fadeIn();
$.ajax({
type:"POST",
url:"<?php echo RE_EN_PATH; ?>getcity.php",
data:{"state":state},
success:function(data12){
$("#getarea").load("area.php");
$("#getpincode").load("getpincode.php");
$('#getcity').html(data12);
$('#loadergif').fadeOut();
}
});
}

function getCitytwo(){
var state= $('#statetwo').val();
$('#loadergif').fadeIn();
$.ajax({
type:"POST",
url:"<?php echo RE_EN_PATH; ?>getcitytwo.php",
data:{"state":state},
success:function(data12){
$("#getarea").load("area.php");
$('#getcitytwo').html(data12);
$('#loadergif').fadeOut();
}
});
}
function getpincodes(){
var city= $('#city').val();
$('#loadergif').fadeIn();
$.ajax({
type:"POST",
url:"<?php echo RE_EN_PATH; ?>getpincode.php",
data:{"city":city},
success:function(data122){
$("#getarea").load("area.php");
$('#getpincode').html(data122);
$('#loadergif').fadeOut();
}
});
}

function getArea(){
var states= $('#state').val();
var pincode= $('#pincodes').val();
$('#loadergif').fadeIn();
$.ajax({
type:"POST",
url:"<?php echo RE_EN_PATH; ?>area.php",
data:{"pincode":pincode},
success:function(data1224){
$('#getarea').html(data1224);
$('#loadergif').fadeOut();
}
});

}


function searchBar(x,y)
{
  	
  var search=$("#search").val();
 if(search!=''){
  y=10;
  //$('#loadergif').fadeIn();
  $.ajax({
  type: 'POST',
  url: "<?php echo RE_EN_PATH; ?>load_search.php",
  data: {"page":x,"pagesize":y,"search":search},
  success: function(search){
   $('.searchdata').show();
	//$('#loadergif').fadeOut();
  $("#searchdata").html(search);			    } 
});

 }
 else{
   $('.searchdata').hide();

 }

}

function searchpage() {
   var search=$("#search").val();
   if(search!=''){
        window.location.replace("<?php echo RE_EN_PATH; ?>load_search2.php?search="+search);
   }
    } 

</script>

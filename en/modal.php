<?php 
require_once("../config/config.php");


?>

<div class="modal fade" id="forgotpass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
...
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Save changes</button>
</div>
</div>
</div>
</div>

<div class="modal fade loginPopup" id="loginPopup" tabindex="-1" role="dialog">
<div class="modal-dialog modal-dialog-centered login-container">
<div class="modal-content loginContent">
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
<p class="m-1">Need Help in Logging in? <a type="button" class="help-link" >Click Here</a></p>
<p>New to PJS? <a class="signup-link" href="<?php echo RE_EN_PATH;?>signup.php">SignUp Now</a></p>
</div>
</div>
</div>
</div>
</div>




<div class="modal fade loginPopup" id="modal1">
<div class="modal-dialog modal-dialog-centered contact-container login-container">
<div class="modal-content login-help">
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
<p class="points" onclick="displayInput()">
I have forgotten member id
</p>
<div class="member-id">
<div class="row">
<div class="col-md-8">
<input class="form-control form-control-sm mr-2" type="text" name="" placeholder="Enter your registered mobile number">
</div>
<div class="col-md-4">
<button type="submit" class="submit btn btn-primary btn-sm">Submit</button>
</div>
</div>
</div>
</div>
</li>
<li class="row">
<div class="col-1">2.</div>
<div class="col-11">
<p class="points" onclick="displayEmailInput()">I have forgotten member id and register mobile number</p>
<div class="email-id">
<div class="row">
<div class="col-md-8">
<input class="form-control form-control-sm mr-2" type="text" name="" placeholder="Enter your registered email id">
</div>
<div class="col-md-4">
<button type="submit" class="submit btn btn-primary btn-sm">Submit</button>
</div>
</div>	
</div>
</div> 
</li>
<li class="row">
<div class="col-1"> 3.</div>
<div class="col-11">
<p class="points" onclick="displayDetailForm()">I want to update my mobile no. with new mobile no.</p>
<form class="update-number">
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
<button type="submit" class="send-credential btn btn-primary btn-sm">Send</button>
</div>
</div>
</form>
</div> 
</li>
<li class="row">
<div class="col-1"> 4.</div>
<div class="col-11">
<p class="forgot-credential" onclick="displayForm()">Forgot all login credentials?</p>
<form class="forgot-login">
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


<div class="modal fade loginPopup" id="modal2">
<div class="modal-dialog modal-dialog-centered lgn-sgn-container login-container">
<div class="modal-content submit-contact">
<div class="modal-header">
<h2 class="modal-title">Successful</h2>
<button type="button" id="close-login" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<h6 class="my-4 text-center">Your MID has been sent to your registered phone number</h6>
</div>
</div> 


<div class="modal-content credential-msg">
<div class="modal-header">
<button type="button" id="close-login" class="close" data-dismiss="modal">&times;</button>
</div> 
<div class="modal-body">
<div class="my-auto">
<p>Your details has been sent to admin for verification</p>
<p>You will receive a callback soon on your new phone number</p>
</div>
</div>
</div>

</div>
</div>


<!----------------------FEEDBACK------------------------------>

<div class="modal fade loginPopup" id="modal45">
<div class="modal-dialog modal-dialog-centered lgn-sgn-container login-container">
<div class="feeback">
<div class="col-md-10 offset-md-1">
<h3 class="text-center mb-2">Feedback Form</h3>
<form>
<div class="row">
<div class="col-md-5">
<p>Feedback Type</p>
</div>
<div class="col-md-7">
<select>
<option value="">Select feedback type</option>
<option value="">1</option>
<option value="">2</option>
<option value="">3</option>
</select>
</div>
<div class="col-md-5">
<p>Feedback</p>
</div>
<div class="col-md-7">
<textarea cols="30" placeholder="write your feedback here"></textarea>
<button class="btn btn-primary float-right" type="submit">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>






<!-------------------------------UPDATE------------------------------>
<div class="modal fade loginPopup" id="modal2">
<div class="modal-dialog modal-dialog-centered lgn-sgn-container login-container">
<div class="modal-content death-update">
<div class="">
<button type="button" id="close-login" class="close m-2" data-dismiss="modal">&times;</button>
</div> 
<div class="modal-body">
<div class="row">
<div class="col-md-10 offset-md-1">
<h3 class="text-center mb-3">Request for Death Update</h3>
<form>
<div class="row">
<div class="col-md-5">
<p>Member Id</p>
</div>
<div class="col-md-7">
<input type="number" name="">
</div>
<div class="col-md-5">
<p>Date of Death</p>
</div>
<div class="col-md-7">
<input type="date" name="">
<button class="btn btn-primary float-right mt-2" type="submit">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>





<div class="modal fade loginPopup" id="modal2">
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


<!-- -----------------------VERIFY CONTACT MODAL-------------------- -->
<div class="verify-msg text-center">
<p>Your request has been sent to admin for further verification</p>
</div>
<!-- -----------------------VERIFY CONTACT MODAL ENDS-------------------- -->


<!-- <div class="modal-content profile-modal">  -->

<!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title">User Profile</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<!-- Modal body -->
<div class="modal-body">
Modal body..
</div>
</div>
</div>
</div>

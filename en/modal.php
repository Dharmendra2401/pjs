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

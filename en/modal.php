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
	<div class="alert alert-success feedback_alert" style="display: none;text-align: center;margin-bottom:0px;" >
	<strong>feedback submitted successfully.</strong>
	</div>
	<div class="modal-dialog modal-dialog-centered lgn-sgn-container login-container">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Feedback Form</h3>
				<button type="button" id="close-login" class="close" data-dismiss="modal">×</button>
			</div>
			<div class="feeback">
				<div class="modal-body">
					<div class="col-md-10 offset-md-1">
						<form>
							<div class="row">
								<div class="col-md-5">
									<p>Feedback Type</p>
								</div>
								<div class="col-md-7">
									<select class="feedback_type">
										<option value="">Select feedback type</option>
										<option value="General">General</option>
										<option value="Related to Website">Related to Website</option>
										<option value="Feature you need">Feature you need</option>
									</select>
								</div>
								<div class="col-md-5">
									<p>Feedback</p>
								</div>
								<div class="col-md-7">
									<textarea cols="30" placeholder="write your feedback here" class="feedback_desc"></textarea>
									<button class="btn btn-primary float-right" type="button" id="feedback_submit">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>	
	        </div>
		</div>		
	</div>
</div>

<div class="modal fade loginPopup" id="feedback_alert">
	<div class="modal-dialog modal-dialog-centered lgn-sgn-container login-container">
		<div class="modal-content">
			<div class="feeback">
				<div class="modal-body">
					<div class="col-md-10 offset-md-1">
						<div class="alert alert-success ">
						<strong>feedback submitted successfully.</strong>
						</div>
					</div>
				</div>	
	        </div>
		</div>		
	</div>
</div>






<!-------------------------------UPDATE------------------------------>
<div class="modal fade loginPopup" id="death_update">
	<div class="modal-dialog modal-dialog-centered lgn-sgn-container login-container">
		<div class="modal-content death-update">
			<div class="modal-header">
				<h3 class="text-center modal-title">Request for Death Update</h3>
				<button type="button" id="close-login" class="close" data-dismiss="modal">×</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<form>
							<div class="row">
								<div class="col-md-5">
									<p>Member Id</p>
								</div>
								<div class="col-md-7">
									<input type="text" name="" placeholder="MID" class="mid">
								</div>
								<div class="col-md-5">
									<p>Date of Death</p>
								</div>
								<div class="col-md-7">
									<input type="text" class="datepicker">
									<input type="date" name="" style="width: 100%;" class="dod">
								</div>
								<div class="col-md-12">
									<button class="btn btn-primary float-right mt-2 death_update" type="button">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade loginPopup" id="modal21">
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
	</div>
</div>

<!-- Request Sent -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Send Request To</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<input type="hidden" class="form-control" id="referenc-id">
						<input type="hidden" class="form-control" id="Member_Id">
					</div>
					 <div class="form-group" id="live_relation_type">
							<select class="form-control female" style="display: none">
								<option value="Grandmother">Grandmother</option>
								<option value="Mother">Mother</option>                
								<option value="Daughter">Daughter</option>                
								<option value="Sister">Sister</option>
							</select>
							<select class="form-control male" style="display: none;">
								<option value="Grandfather">Grandfather</option>              
								<option value="Father">Father</option>
								<option value="Brother">Brother</option>
								<option value="Son">Son</option>
							</select>

						</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary send_request">Save</button>
			</div>
		</div>
	</div>
</div>
<!---->

 
<!-- Modal -->

<div id="success_tic" class="modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered">

	<!-- Modal content-->
		<div class="modal-content">
			<a class="close close-icn" href="#" data-dismiss="modal">&times;</a>
			<div class="page-body">
				<div class="head">  
					<h3 style="margin-top:5px;">Request Sent Successfully</h3>
				</div>

				<h1 style="text-align:center;">
					<div class="checkmark-circle">
						<div class="background"></div>
						<div class="checkmark draw"></div>
					</div>
				<h1>
			</div>
		</div>
	</div>

</div>
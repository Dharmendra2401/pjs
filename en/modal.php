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


<style type="text/css">
	label.error{
		color: red;
	}
</style>

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
							<p class="err msg" style="background: red;color:#fff;font-weight:400;"></p>
									<p class="succ msg" style="background: green;color:#fff;font-weight:400;"></p>
							<div class="row">
								<div class="col-md-5">
									<p>Member Id</p>
								</div>
								<div class="col-md-7">
									<input type="text" name="" placeholder="MID" class="mid text-uppercase">
								</div>
								<div class="col-md-5">
									<p>Date of Death</p>
								</div>
								<div class="col-md-7">
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
			<div class="modal-header">
				<h3 class="modal-title">Please login / signup</h3>
				<button type="button" id="close-login" class="close" data-dismiss="modal">&times;</button>
			</div> 
			<div class="modal-body text-center">
				<p class="mb-0">To proceed please login</p>
				<button type="button" class="btn btn-success open-login w-25">Login</button>
				<p>New to PJS? <a class="signup-link" href="<?php echo RE_EN_PATH;?>signup.php">SignUp Now</a></p>
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
				<form id="send_request_form">
					<div class="form-group">
						<input type="hidden" class="form-control" id="referenc-id">
						<input type="hidden" class="form-control" id="Member_Id">
					</div>
					<p class="err msg" style="background: red;color:#fff;font-weight:400;"></p>
					 <div class="form-group" id="live_relation_type">
							<select class="form-control female" style="display: none" name="relationship_type_select">
								<option value="">Select</option> 
								<option value="Grandmother">Grandmother</option>
								<option value="Mother">Mother</option>                
								<option value="Daughter">Daughter</option>                
								<option value="Sister">Sister</option>
							</select>
							<select class="form-control male" style="display: none;" name="relationship_type_select">
								<option value="">Select</option> 
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
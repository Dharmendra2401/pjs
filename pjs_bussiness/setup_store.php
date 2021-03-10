<?php include "../config/config.php" ;
?>


<!DOCTYPE>
<html>
<head>

<?php  include "styles.php" ?>
    

</head>
<body>

<?php  include "header.php" ?>
<div>
<div class="banner-enterprise">
    <div class="bg-color">
    </div>
</div>
</div>

<div class="container bp parent-cont" >

	<div class="container stages">
		<div class="row">
			<div class="col pr-0">
				<span class=" s1 step">
					<i class="fas fa-check-circle fa-lg"></i>	
					<p>Set up store</p>
				</span>
			</div>

			<div class="col pr-0">
				<span class=" s2 step">
					<i class="fas fa-check-circle fa-lg"></i>	
					<p >Contact details</p>
				</span>
			</div>

			<div class="col">
				<span class=" s3 step">
					<i class="fas fa-check-circle fa-lg"></i>	
					<p>Business address</p>
				</span>
			</div>
		</div>
	</div>

	<div class="container pt-5 mt-5" style=" width: 85%; border-radius: 5px; box-shadow: 0px 0px 30px #00000029;">
		<form id="regForm">
			<!-- stage-1 code -->
			<div class="content-1 tab active px-2">
			
				<div class="row mb-4"> 
					<div class="col-md-3">
						<img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/Group 846.jpg" style="width: 70px; margin-left: 20px; ">
					</div>
					<div class="col-md-9">
						<div >
							<p style="color: #2C2C2C; font-size: 24px; font-weight: 600;">Let's set up your store</p>
							<p style="color: #A5A5A5; font-size: 14px; margin-top: -10px;">You can change this information later in your profile page</p>
						</div>
					</div>
				</div>

				<div class="row mb-4">
					<div class="col-md-3">
						<i class="fas fa-plus-circle plus-circle fa-4x"></i>
					</div>
					<div class="col-md-9">
						<div >
							<p style="color: #676767; font-size: 18px; font-weight: 600;">Business Logo/Image</p>
							<button type="button" class="btn btn-primary" style="width: 92px; height: 28px; padding:0; background-color: #446EB6;">
							  <label for="file" >
							    Upload
							  </label>
							</button>
							<input type="file" id="file" style="display:none;"/>
							
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						    <input type="text" placeholder="Business Name" class="form-control" id="" >
						    
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						    <select class="custom-select" id="inputGroupSelect01">
							    <option selected>Business Mode</option>
							    <option value="1">One</option>
							    <option value="2">Two</option>
							    <option value="3">Three</option>
							</select>
						    <i class="fas fa-caret-down"></i>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
						    <select class="custom-select" id="inputGroupSelect01">
							    <option selected>Business Type</option>
							    <option value="1">One</option>
							    <option value="2">Two</option>
							    <option value="3">Three</option>
							</select>
						    <i class="fas fa-caret-down"></i>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						    <textarea class="form-control ta" id="ta" rows="2" placeholder="Business description" ></textarea>
						</div>
					</div>
				</div>

			</div>
			<!-- stage-1 end -->

			<!-- stage-2 start -->
			<div class="content-2 tab ">
				<div class="row"> 
					<div class="col-md-3">
						<img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/Group 846.jpg" style="width: 90px;">
					</div>
					<div class="col-md-9">
						<div >
							<p style="color: #2C2C2C; font-size: 24px; font-weight: 600;">Help us to know your contact details</p>
							<p style="color: #A5A5A5; font-size: 14px;">You can change this information later in your profile page</p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						    <input type="text" placeholder="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						    
						</div>
					</div>
				</div>

				<div class="row"> 
					<div class="col-md-3 mb-3">
						<img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/pro1.png" style="width: 69px; border-radius: 50px;">
					</div>
					<div class="col-md-9">
						<div class="d-flex content-align-center">
							<input type="text" placeholder="Enter Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						    <input type="text" placeholder="Mobile Number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						    
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						    <input type="text" placeholder="Alternate mobile number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						    
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						    <input type="text" placeholder="E-mail Id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						    
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						    <input type="text" placeholder="Alternate E-mail Id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						    
						</div>
					</div>
				</div>
			</div>
			<!-- stage-2 end -->	

			<!-- stage-3 start -->
			<div class="content-3 tab">
				<div class="row"> 
					<div class="col-md-3">
						<img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/Group 846.jpg" style="width: 90px; ">
					</div>
					<div class="col-md-9">
						<div >
							<p style="color: #2C2C2C; font-size: 24px; font-weight: 600;">Hi Kumar,<br> what's your business address?</p>
							
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<p>We have your residential address</p>
						<input type="radio" name="" id="">
						<span>Use the same as my business address</span>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						    <select class="custom-select" id="inputGroupSelect01">
							    <option selected>Country</option>
							    <option value="1">One</option>
							    <option value="2">Two</option>
							    <option value="3">Three</option>
							</select>
							<i class="fas fa-caret-down"></i>  
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						    <select class="custom-select" id="inputGroupSelect01">
							    <option selected>State</option>
							    <option value="1">One</option>
							    <option value="2">Two</option>
							    <option value="3">Three</option>
							</select>
							<i class="fas fa-caret-down"></i>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						    <select class="custom-select" id="inputGroupSelect01">
							    <option selected>city</option>
							    <option value="1">One</option>
							    <option value="2">Two</option>
							    <option value="3">Three</option>
							</select>
							<i class="fas fa-caret-down"></i>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						    <select class="custom-select" id="inputGroupSelect01">
							    <option selected>Pincode</option>
							    <option value="1">One</option>
							    <option value="2">Two</option>
							    <option value="3">Three</option>
							</select>
						    <i class="fas fa-caret-down"></i>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
						    <select class="custom-select" id="inputGroupSelect01">
							    <option selected>Area</option>
							    <option value="1">One</option>
							    <option value="2">Two</option>
							    <option value="3">Three</option>
							</select>
						    <i class="fas fa-caret-down"></i>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
						    <textarea class="form-control ta" id="ta" rows="2" placeholder="Address" ></textarea>
						</div>
					</div>
				</div>
			</div>	
			<!-- stage-3 end -->

			<!-- button-start -->
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="form-group" style="margin-left: 255px;">
                        <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                </div>
            </div>
				
                <!-- button-end -->	

		</form>
	</div>
</div>




<?php  include "script.php" ?>
</body>
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:

  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() 
{
	var valid=true;
	if (valid) 
	{
    document.getElementsByClassName("step")[currentTab].className += " finish";
  	}
  	return valid;
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}

</script>
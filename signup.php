<!DOCTYPE html>
<html>
<head>
	 <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap4/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome5/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-3">
    			<img class="" width="110" src="images/flooop.png">
    		</div>
    		<div class="col-md-6 d-flex justify-content-center">
    			<div class="input-group my-auto">
				  <div class="input-group-prepend">
				    <span class="input-group-text"><i class="fa fa-search"></i></span>
				  </div>
				  <input type="text" class="form-control" placeholder="Search" aria-label="Username">
				</div>
    		</div>
    		<div class="col-md-3 align-self-center text-right">
				 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginPopup">
				    LOGIN/SIGUP
				  </button>
    		</div>
    		<div class="col-md-12">
				<nav class="navbar navbar-expand-sm">
				  <ul class="navbar-nav">
				    <li class="nav-item">
				      <a class="nav-link" href="#">About Us</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#">Events</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#">Gallery</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#">Schemes</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="#">Zones</a>
				    </li>
				  </ul>
				</nav>
		    </div>
		    <div class="col-md-2">
		    	<!-- <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Personal Details</a>

				  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Residential Details</a>

				  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Educational & Occupational Details</a>

				  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Upload Photo</a>
				</div> -->

				<ul class="list-unstyled form-steps">
			       <li class="step">Personal Details</li>
			       <li class="step">Residential Details</li>
			       <li class="step">Educational & Occupational Details</li>
			       <li class="step">Upload Photo</li>
			    </ul>
			</div>
			<div class="col-md-10">	
				<form class="container signup-form">
	                    <div class="row">
	                    	<div class="col-md-9 tab">
	                    		<h3 class="mb-3">Please Enter Personal Details <span class="text-danger">(* Required Fields)</span></h3>
	                    		<div class="form-group row">
	                    		   <label class="col-md-3 col-form-label "><span class="text-danger">*</span> First Name</label>
								   <div class="col-md-9">
								   	   <input type="text" class="form-control"  placeholder="Enter First Name">
								   </div>
							    </div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Middle Name</label>
								   <div class="col-md-9">
								   	   <input type="text" class="form-control" placeholder="Enter Middle Name">
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Last Name</label>	
								   <div class="col-md-9">
								   	  <input type="text" class="form-control" placeholder="Enter Last Name">
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"> Popular Name</label>	
								   <div class="col-md-9">
								   	  <input type="text" class="form-control" placeholder="Enter Popular Name">
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Date of Birth	</label>	
								   <div class="col-md-9">
								   	  <input type="date" class="form-control" placeholder="Enter Date of Birth">
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"> Birth Time</label>	
								   <div class="col-md-9">
								   	   <input type="time" class="form-control">
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"> Birth Place</label>	
								   <div class="col-md-9">
								   	  <input type="text" class="form-control">
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3"><span class="text-danger">*</span> Gender</label>	
								   <div class="col-md-9">
								   	   <input type="radio"> <label class="mr-5">Male</label>
								   	   <input type="radio"> <label>Female</label>
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3"><span class="text-danger">*</span> Status</label>	
								   <div class="col-md-9">
								   	  <input type="radio"> <label class="mr-4">Single</label>
								   	   <input type="radio"> <label>Married</label>
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Mobile No.</label>	
								   <div class="col-md-9">
								   	   <input type="number" class="form-control" placeholder="Enter Mobile no.">
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Email Id</label>	
								   <div class="col-md-9">
								   	  <input type="email" class="form-control" placeholder="Enter Email Id">
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Blood Group</label>	
								   <div class="col-md-9">
								   	   <input type="text" class="form-control" placeholder="Enter Blood Group">
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"> Height</label>	
								   <div class="col-md-9">
								   	   <input type="number" step="any" class="form-control" placeholder="Enter">
								   </div>
								</div>
	                    	</div>
	                    </div>
					  

	                    <div class="row">
	                    	<div class="col-md-9 tab">
	                    		 <h3 class="mb-3">Please Enter Residential Details <span class="text-danger">(* Required Fields)</span></h3>
	                    		<div class="form-group row">
	                    		   <label class="col-md-3 col-form-label "><span class="text-danger">*</span> Country</label>
								   <div class="col-md-9">
								   	   <select class="custom-select">
								          <option selected>Select Country</option>
								          <option value="1">india</option>
								          <option value="2">japan</option>
								       </select>
								   </div>
							    </div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> State</label>
								   <div class="col-md-9">
								   	     <select class="custom-select">
								          <option selected>Select State</option>
								          <option value="1">mp</option>
								          <option value="2">hp</option>
								         </select>
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span>Name of city/town/village</label>	
								   <div class="col-md-9">
								   	  <input type="text" class="form-control" placeholder="Enter">
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Address</label>
								   <div class="col-md-9">
								   	  <textarea class="form-control" rows="4"></textarea>
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span>Pin Code</label>	
								   <div class="col-md-9">
								   	  <input type="number" class="form-control">
								   </div>
								</div>
	                    	</div>
	                    </div>
					
	                    <div class="row">
	                    	<div class="col-md-9 tab">
	                    		<h3 class="mb-3">Please Enter Your Educational & Occupational Details <span class="text-danger">(* Required Fields)</span></h3>
	                    		<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span>Highest Education</label>	
								   <div class="col-md-9">
								   	  <input type="text" class="form-control">
								   </div>
								</div>
	                    		<div class="form-group row">
	                    		   <label class="col-md-3 col-form-label "><span class="text-danger">*</span> Occupation</label>
								   <div class="col-md-9">
								   	   <select class="custom-select">
								          <option selected>Job/Bussiness/Housewife/Student</option>
								          <option value="1">other</option>
								          <option value="2">other1</option>
								       </select>
								   </div>
							    </div>

								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Please Add Details</label>
								   <div class="col-md-9">
								   	  <textarea class="form-control" rows="4"></textarea>
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Income</label>
								   <div class="col-md-9">
								   	     <select class="custom-select">
								          <option selected>Select Income Range</option>
								          <option value="1">100000</option>
								          <option value="2">200000</option>
								         </select>
								   </div>
								</div>
	                    	</div>
	                    </div>
					
	                    <div class="row">
	                    	<div class="col-md-9 tab">
	                    		<h3 class="mb-3">Please Upload Your Own <span class="text-danger">(* Required Fields)</span></h3>
	                    		<div class="form-group row">
								   <label class="col-md-12 col-form-label">Profile photo size must be 1mb or less </label>	
								   <div class="col-md-9">
									   	<div class="pic-wrapper">
									   		<input type="file" class="form-control profile-pic">
								   	        <i class="fas fa-plus-circle add-icon"></i>
									   	</div>
								   </div>
								</div>
	                    	</div>
	                    </div>
					    
					    <div class="row">
					    	<div class="col-md-12">
					    		<div style="overflow:auto;">
						            <div style="float:right;">
						              <button class="btn" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
						              <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Save & Next</button>
						            </div>
						        </div>
					    	</div>
					    </div>
				</form>
		    </div>
		</div>	
    	</div>
    </div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap4/dist/js/bootstrap.min.js"></script>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
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
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</html>
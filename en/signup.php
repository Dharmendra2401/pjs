<?php 

include "../config/config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<?php include "../styles.php";  ?>

</head>
<body>
    <div class="container-fluid">
    	
		<?php include "header.php";  ?>
		<div class="col-md-12"><?php echo show_message();?></div>
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
			
			<div class="formerror"></div>
				<form class="container" id="regForm" method="post" action="formsubmit.php" enctype="multipart/form-data">
	                    <div class="row tab">
	                    	<div class="col-md-9 ">
	                    		<h3 class="mb-3">Please Enter Personal Details <span class="text-danger">(* Required Fields)</span></h3>
	                    		<div class="form-group row">
	                    		   <label class="col-md-3 col-form-label "><span class="text-danger">*</span> First Name</label>
								   <div class="col-md-9">
								   	   <input type="text" class="form-control" name="firstname"  placeholder="Enter first name" id="firstname">
								   </div>
							    </div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Middle Name</label>
								   <div class="col-md-9">
								   	   <input type="text" class="form-control" placeholder="Enter middle name" name="middlename"  id="middlename">
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Last Name</label>	
								   <div class="col-md-9">
								   	  <input type="text" class="form-control" placeholder="Enter last name" name="lastname" id="lastname">
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"> Popular Name</label>	
								   <div class="col-md-9">
								   	  <input type="text" name="popularnamess" class="form-control" placeholder="Enter popular name" id="popular">
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Date of Birth	</label>	
								   <div class="col-md-9">
								   	  <input type="date" class="form-control" placeholder="Enter date of birth" name="dob"  id="dob">
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"> Birth Time</label>	
								   <div class="col-md-9">
								   	   <input type="time" class="form-control" name="birthtime" id="birthtime"   placeholder="Enter birth time" >
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"> Birth Place</label>	
								   <div class="col-md-9">
								   	  <input type="text" class="form-control" name="birthplace" placeholder="Enter birth place" id="birthplace" >
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3"><span class="text-danger">*</span> Gender</label>	
								   <div class="col-md-9">
								   	   <input type="radio" name="gender" value="1" checked> <label class="mr-5">Male</label>
								   	   <input type="radio" name="gender" value="2"> <label>Female</label>
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3"><span class="text-danger">*</span> Status</label>	
								   <div class="col-md-9">
								   	  <input type="radio" value="single" name="status" checked> <label class="mr-4">Single</label>
								   	   <input type="radio" value="married" name="status"> <label>Married</label>
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Mobile No.</label>	
								   <div class="col-md-9">
								   	   <input type="number" class="form-control" placeholder="Enter mobile no."  name="mobileno" id="mobileno"  onKeyPress="return isNumeric(event)">
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Email Id</label>	
								   <div class="col-md-9">
								   	  <input type="email" class="form-control" placeholder="Enter email id" id="email" name="email"><span id="emailerror"></span>
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Blood Group</label>	
								   <div class="col-md-9">
								   	   <!-- <input type="text" class="form-control" placeholder="Enter blood group" name="bloodgroup" id="bloodgroup"> -->
								   	   <select class="form-control" name="bloodgroup">
								   	   	      <option value="">Select your blood group</option>
								   	   	      <option value="1">A+</option>
								   	   	      <option value="2">B+</option>
								   	   	      <option value="3">AB+</option>
								   	   	      <option value="4">O+</option>
								   	   	      <option value="5">O-</option>
								   	   </select>
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"> Height</label>	
								   <div class="col-md-9">
								   	   <input type="number" step="any" class="form-control" placeholder="Enter height" name="height" id="height" onKeyPress="return isNumeric(event)">
								   </div>
								</div>
	                    	</div>
	                    </div>
					  

	                    <div class="row tab" >
	                    	<div class="col-md-9 ">
	                    		 <h3 class="mb-3">Please Enter Residential Details <span class="text-danger">(* Required Fields)</span></h3>
	                    		<div class="form-group row">
	                    		   <label class="col-md-3 col-form-label "><span class="text-danger">*</span> Country</label>
								   <div class="col-md-9">
								   	   <select class="custom-select" id="country" name="country">
								          <option value="" selected>Select Country</option>
								          <option value="India">India</option>
								         
								       </select>
								   </div>
							    </div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> State</label>
								   <div class="col-md-9">
								   	     <select class="custom-select" id="state" onchange="return getCity();" name="state">
										  <option value="" selected>Select State</option>
										  <?php
										 $state=mysqli_query($con,'select DISTINCT(state) from states_city_country where state!="CHANDIGARG" and state!=""');
										 while($show=mysqli_fetch_array($state)){ 
										  
										  ?>
										  <option value="<?php echo $show['state'];  ?>"><?php echo $show['state'];  ?></option>
										  <?php 
										 } 
										  ?>
								         </select>
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span>Name of district/town/village</label>	
								   <div class="col-md-9">
								  <span id="getcity"></span>
								   </div>
								</div>

								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span>Pin Code</label>	
								   <div class="col-md-9">
								   	 <span id="getpincode"></span>
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Address</label>
								   <div class="col-md-9">
								   	  <textarea class="form-control" rows="4" id="address" name="address" placeholder="Enter address"></textarea>
								   </div>
								</div>
							
	                    	</div>
	                    </div>
					
	                    <div class="row tab" >
	                    	<div class="col-md-9">
	                    		<h3 class="mb-3">Please Enter Your Educational & Occupational Details <span class="text-danger">(* Required Fields)</span></h3>
	                    		<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span>Highest Education</label>	
								   <div class="col-md-9">
								   	  <input type="text" class="form-control" placeholder="Enter highest qualification" name="highest" id="highest">
								   </div>
								</div>
	                    		<div class="form-group row">
	                    		   <label class="col-md-3 col-form-label "><span class="text-danger">*</span> Occupation</label>
								   <div class="col-md-9">
								   	   <select class="custom-select" name="occupation" id="occupation">
								          <option value="" selected>Select occupation</option>
								          <option value="1">Job</option>
										  <option value="2">Bussiness</option>
										  <option value="3">Housewife</option>
										  <option value="3">Student</option>
										  

										  
								       </select>
								   </div>
							    </div>

								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Please Add Details</label>
								   <div class="col-md-9">
								   	  <textarea class="form-control" rows="4" name="details" id="details" placeholder="Enter detail"></textarea>
								   </div>
								</div>
								<div class="form-group row">
								   <label class="col-md-3 col-form-label"><span class="text-danger">*</span> Income</label>
								   <div class="col-md-9">
								   	     <select class="custom-select" name="income" id="income">
								          <option value="" selected>Select Income Range</option>
								          <option value="1">Less than 1 lakh</option>
										  <option value="2">1 lakh to 2 lakh</option>
										  <option value="3">2 lakh to 3 lakh</option>
										  <option value="4">3 lakh to 4 lakh</option>
										  <option value="5">more than 4 lakh</option>
										  
								         </select>
								   </div>
								</div>
	                    	</div>
	                    </div>
					
	                    <div class="row tab image-tab" >
	                    	<div class="col-md-9 ">
	                    		<h3 class="mb-3">Please Upload Your Own <span class="text-danger">(* Required Fields)</span></h3>
	                    		<div class="form-group row">
								   <label class="col-md-12 col-form-label">Profile photo size must be 1mb or less </label>	
								   <div class="col-md-9">
									   	<div class="pic-wrapper">
									   		<input type="file" class="form-control profile-pic" onchange="GetFileSize()" id="file" name="profile" accept="image/*" >
											   <i class="fas fa-plus-circle add-icon"></i>
											   <p id="fp"></p>
											   <img id="blah" src="<?php echo RE_HOME_PATH ;?>/upload/demo.jpg" alt="your image" style="  position: absolute;
    top: 0px;
    width: 200px;
    z-index: -1;
    height: 200px;
"/><span id="fileerror"><sapn>
									   	</div>
								   </div>
								</div>
	                    	</div>
	                    </div>
					    
					    <div class="row">
					    	<div class="col-md-12">
								<div class="formerror"></div>
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
<?php  include "../script.php" ;?>

<script>
$(document).ready(function(){
			$("#getcity").load("getcity.php");
			$("#getpincode").load("getpincode.php");
	
});



function getCity(){
var state= $('#state').val();
$('#loadergif').fadeIn();
$.ajax({
type:"POST",
url:"getcity.php",
data:{"state":state},
success:function(data12){
$("#getpincode").load("getpincode.php");
$('#getcity').html(data12);
$('#loadergif').fadeOut();
}
});
}
function getpincodes(){
var city= $('#city').val();
$('#loadergif').fadeIn();
$.ajax({
type:"POST",
url:"getpincode.php",
data:{"city":city},
success:function(data122){
$('#getpincode').html(data122);
$('#loadergif').fadeOut();
}
});
}






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
	var x, y, i, 
	valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  
  // A loop that checks every input field in the current tab:
  if(currentTab==0){
  var firstname=$('#firstname').val();
  var middlename=$('#middlename').val();
  var lastname=$('#lastname').val();
  var popularname=$('#popularname').val();
  var dob=$('#dob').val();
  var mobileno=$('#mobileno').val();
  var email=$('#email').val();
  var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
  var bloodgroup=$('#bloodgroup').val();

	if(firstname==''){
	$('#firstname').focus();
	$("#firstname").addClass("invalid");
	return false;
	}

	else if(lastname==''){
	$('#lastname').focus();
	$("#lastname").addClass("invalid");
	return false;
	}
	else if(lastname==''){
	$('#lastname').focus();
	$("#lastname").addClass("invalid");
	return false;
	}
	else if(dob==''){
	$('#dob').focus();
	$("#dob").addClass("invalid");
	return false;
	}
	else if(mobileno==''){
	$('#mobileno').focus();
	$("#mobileno").addClass("invalid");
	return false;
	}

	else if(mobileno==''){
	$('#mobileno').focus();
	$("#mobileno").addClass("invalid");
	return false;
	}
	else if(email==''){
	$('#email').focus();
	$("#email").addClass("invalid");
	return false;
	}


	else if (!testEmail.test(email))
	{   $('#email').focus();
		//$('#emailerror').html("<span class='text-danger'>Please enter valid email<span>");
	$("#email").addClass("invalid");
	return false;
	}

	else if(bloodgroup==''){
	$('#bloodgroup').focus();
	$("#bloodgroup").addClass("invalid");
	return false;
	}else{
	return true;

	}

	}
	else if(currentTab==1){

		var country=$('#country').val();
		var state=$('#state').val();
		var city=$('#city').val();
		var address=$('#address').val();
		var pincode=$('#pincode').val();

	if(country==''){
	$('#country').focus();
	$("#country").addClass("invalid");
	return false;
	}
	else if(state==''){
	$('#state').focus();
	$("#state").addClass("invalid");
	return false;
	}
	else if(city==''){
	$('#city').focus();
	$("#city").addClass("invalid");
	return false;
	}
	else if(address==''){
	$('#address').focus();
	$("#address").addClass("invalid");
	return false;
	}
	else if(pincode==''){
	$('#pincode').focus();
	$("#pincode").addClass("invalid");
	return false;
	}

	}
	else if(currentTab==2){
	var highest=$('#highest').val();
	var occupation=$('#occupation').val();
	var details=$('#details').val();
	var income=$('#income').val();
	if(highest==''){
	$('#highest').focus();
	$("#highest").addClass("invalid");
	return false;
	}
	else if(occupation==''){
	$('#occupation').focus();
	$("#occupation").addClass("invalid");
	return false;
	}
	else if(details==''){
	$('#details').focus();
	$("#details").addClass("invalid");
	return false;
	}
	else if(income==''){
	$('#income').focus();
	$("#income").addClass("invalid");
	return false;
	}
	else{
	return	true;
	}

	}
	else if(currentTab==3){
	var file=$('#file').val();
	if(file==''){
		$('#fileerror').html('<div class="text-danger">Please select image</div>');
		return false;
	}else{

		return true;
	}


	}

	else{
        $('.image-tab').show();
		return true;
	}

  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status}
}


function GetFileSize() {
        var fi = document.getElementById('file'); // GET THE FILE INPUT.

        // VALIDATE OR CHECK IF ANY FILE IS SELECTED.
        if (fi.files.length > 0) {
            // RUN A LOOP TO CHECK EACH SELECTED FILE.
            for (var i = 0; i <= fi.files.length - 1; i++) {

                var fsize = fi.files.item(i).size; 
				// THE SIZE OF THE FILE.
                // document.getElementById('fp').innerHTML =
                //     document.getElementById('fp').innerHTML + '<br /> ' +
                //         '<b>' + Math.round((fsize / 1024)) + '</b> KB';
					var sizemain=Math.round((fsize / 1024)) ;
					if(sizemain>1024){
                    $('#file').val('');
					$('#fileerror').html('<div class="text-danger">Please select image size 1mb or less then</div>');
                    $('#blah').attr('src', '<?php echo RE_HOME_PATH ;?>/upload/demo.jpg');
					}else{
						$('#fileerror').html('');
					}
            }
        }
    }
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#file").change(function(){
        readURL(this);
    });
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
<?php 
include "../config/config.php";
$year= date('Y'); $setyear=$year-1;
?>

<!DOCTYPE html>
<html>
<head>
<?php include "../styles.php";  ?>

</head>
<body>
<div class="container-fluid">

<?php include "header.php";  ?>

<div class="col-md-2 bg-color pt-3">

<ul class="list-unstyled form-steps">
<li class="step alert btn-primary" id="step">Personal Details</li>
<li class="step step1" id="step1">Residential Details</li>
<li class="step step2" id="step2">Educational & Occupational Details</li>
<li class="step step3" id="step3">Upload Photo</li>
</ul>
</div>
<div class="col-md-10 shadow pt-4 mb-3">	
<div class="col-md-12"><?php echo show_message();?></div>
<div class="formerror"></div>
<form class="container mb-3" id="regForm" method="post" action="formsubmit.php" enctype="multipart/form-data">
<div class="row tabone">
<div class="col-md-9 ">
<h3 class="mb-3">Please Enter Personal Details <span class="text-danger">(* Required Fields)</span></h3>
<div class="form-group row">
<label class="col-md-3 col-form-label "><span class="text-danger">*</span> First Name</label>
<div class="col-md-9">
<input type="text" class="form-control inputtexttwo" maxlength='50'  name="firstname"  placeholder="Enter first name" id="firstname" onchange="return chechSrc();">
</div>
</div>

<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Last Name</label>	
<div class="col-md-9">
<input type="text" class="form-control inputtexttwo" maxlength='50' placeholder="Enter last name" name="lastname" id="lastname" onchange="return chechSrc();">
</div>
</div>
<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Age </label>	
<div class="col-md-9">
<input type="tel" maxlength="3" class="form-control" placeholder="Enter age"  name="age" id="age"  onKeyPress="return isNumeric(event)" disabled title="Select date of birth to change the age">
</div>
</div>

<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Father's Name</label>	
<div class="col-md-9">
<input type="text" class="form-control inputtext" placeholder="Enter father name" name="fathername" id="fathername" onchange="return chechSrc();">
</div>
</div>

<div class="form-group row">
<label class="col-md-3 col-form-label"> Popular Name</label>	
<div class="col-md-9">
<input type="text" name="popularnamess" class="form-control inputtexttwo" placeholder="Enter popular name" id="popular">
</div>
</div>
<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Date of Birth	</label>	
<div class="col-md-9">
<input type="date" class="form-control" placeholder="Enter date of birth" name="dob"  id="dob" onchange="return chechSrc();" max="<?php echo date(''.$setyear.'-m-d');?>" min="1600-01-01" >
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
<input type="text" class="form-control inputtext" name="birthplace" maxlength='50' placeholder="Enter birth place" id="birthplace" >
</div>
</div>
<div class="form-group row">
<label class="col-md-3"><span class="text-danger">*</span> Gender</label>	
<div class="col-md-9">
<input type="radio" name="gender" value="M" checked> <label class="mr-5">Male</label>
<input type="radio" name="gender" value="F"> <label>Female</label>
</div>
</div>
<div class="form-group row">
<label class="col-md-3"><span class="text-danger">*</span> Status</label>	
<div class="col-md-9">
<input type="radio" value="single" name="status" checked id="single" > <label class="mr-4">Single</label>
<input type="radio" value="married" name="status" id="married"> <label>Married</label>
</div>
</div>

<!-- <div class="form-group row" id="gethusbanddiv" style="display:none;">
<label class="col-md-3 col-form-label"> <span class="text-danger">*</span> Husband's Name</label>
<div class="col-md-9">
<input type="text" class="form-control inputtext" maxlength='50'  placeholder="Enter husband's name" name="husbandname"  id="husbandname">
</div>
</div> -->

<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Mobile No.</label>	
<div class="col-md-9">
<input type="tel" class="form-control" placeholder="Enter mobile no."   name="mobileno" id="mobileno"  onKeyPress="return isNumeric(event)" maxlength='15'>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Email Id</label>	
<div class="col-md-9">
<input type="email" class="form-control" placeholder="Enter email id" id="email" name="email"  maxlength='150'><span id="emailerror"></span>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Blood Group</label>	
<div class="col-md-9">
<!-- <input type="text" class="form-control" placeholder="Enter blood group" name="bloodgroup" id="bloodgroup"> -->
<select class="form-control" id="bloodgroup" name="bloodgroup">
<option value="">Select your blood group</option>
<option value="1">A+</option>
<option value="2">B+</option>
<option value="3">AB+</option>
<option value="4">O+</option>
<option value="5">A-</option>
<option value="6">B-</option>
<option value="7">AB-</option>
<option value="8">O-</option>
<option value="9">Other</option>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 col-form-label"> Height</label>	
<div class="col-md-3">
<input type="tel" step="any" class="form-control" placeholder="Enter feet" maxlength="2" name="feet" id="feet" onKeyPress="return isNumeric(event)"><span class="label-two">Feet</span>
</div>
<div class="col-md-3">
<input type="tel" step="any" class="form-control" placeholder="Enter inches" maxlength="2" name="inches" id="inches" onKeyPress="return isNumeric(event)"><span class="label-two">Inches</span>
</div>
</div>

<div style="overflow:auto;">
<div style="float:right;">
<!-- <button class="btn" type="button" id="prevBtn" >Previous</button> -->
<button class="btn btn-primary" type="button"  onclick="return firstform();">Save & Next</button>
</div>
</div>

</div>
</div>


<div class="row tabtwo" style="display:none;">
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
<label class="col-md-3 col-form-label"><span class="text-danger">*</span>Name of city/town/village</label>	
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
<label class="col-md-3 col-form-label"><span class="text-danger">*</span>Area</label>	
<div class="col-md-9">
<span id="getarea"></span>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Address</label>
<div class="col-md-9">
<textarea class="form-control " rows="4" id="address"  maxlength='250' name="address" placeholder="Enter address"></textarea>
</div>
</div>
<div style="overflow:auto;">
<div style="float:right;">
<button class="btn" type="button" id="prevBtn" onclick="return preone();" >Previous</button>
<button class="btn btn-primary" type="button"  onclick="return formtwo();">Save & Next</button>
</div>
</div>
</div>
</div>





<div class="row tabthree" style="display:none;">
<div class="col-md-9">
<h3 class="mb-3">Please Enter Your Educational & Occupational Details <span class="text-danger">(* Required Fields)</span></h3>
<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span>Highest Education</label>	
<div class="col-md-9">
<input type="text" class="form-control" placeholder="Enter highest qualification" name="highest" id="highest"  maxlength='50'>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 col-form-label "><span class="text-danger">*</span> Occupation</label>
<div class="col-md-9">
<select class="custom-select" name="occupation" id="occupation" onchange="return getincome();">
<option value="" selected>Select occupation</option>
<option value="1">Job</option>
<option value="2">Business </option>
<option value="3">Housewife</option>
<option value="4">Student</option>
<!-- <option value="5">Nothing</option> -->



</select>
</div>
</div>

<div class="form-group row" id="occdetails" style="display:none;">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Please Add Details</label>
<div class="col-md-9">
<textarea class="form-control " rows="4" name="details" id="details" placeholder="Enter detail"  maxlength='50'></textarea>
</div>
</div>

<div class="form-group row" id="income-div" style="display:none;">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Income</label>
<div class="col-md-9">
<select class="custom-select" name="income" id="income">
<option value="" >Select income</option>
<option value="1" >Less than 1 lakh</option>
<option value="2">1 lakh to 2 lakh</option>
<option value="3">2 lakh to 3 lakh</option>
<option value="4">3 lakh to 4 lakh</option>
<option value="5">more than 4 lakh</option>

</select>
</div>
</div>
<div style="overflow:auto;">
<div style="float:right;">
<button class="btn" type="button" id="prevBtn" onclick="return pretwo();" >Previous</button>
<button class="btn btn-primary" type="button"  onclick="return formthree();">Save & Next</button>
</div>
</div>
</div>
</div>




<div class="row tabfour"  style="display:none;">
<div class="col-md-9 " >
<h3 class="mb-3">Please Upload Your Own <span class="text-danger">(* Required Fields)</span></h3>
<div class="form-group row">
<label class="col-md-12 col-form-label">Please select profile image size of maximum 1mb in size. </label>	
<div class="col-md-9">
<div class="pic-wrapper">
<input type="file" class="form-control profile-pic"  id="file" name="profile" onchange="return GetFileSize();" accept="image/png, image/jpeg" title="Select profile image">
<i class="fas fa-plus-circle add-icon"></i>
<p id="fp"></p>
<img id="blah" src="<?php echo RE_HOME_PATH ;?>uploads/dummy.png" alt="your image" style="  position: absolute;
top: 0px;
width: 200px;
z-index: -1;
height: 200px;
"/>
</div>
<div class="col-md-9">
	<br>
<div class="row p-3 mb-2 bg-warning text-white rounded">Please add your own photo for successful registration</div>
</div>

<div class="form-group row policy">
<input type="checkbox" value="privacy" name="privacy" id="privacy"><label>Accept Our <a href="../uploads/privacy/PJS_Privacy_Policy.pdf" target="_blank">privacy policy</a> </label>
</div>

<div class="row"><div class="col-md-12"><div class="form-group" id="fileerror"><div></div></div>
</div>

</div>
<div style="overflow:auto;">
<div style="float:right;">
<button class="btn" type="button" id="prevBtn" onclick="return prethree();" >Previous</button>
<button class="btn btn-primary" type="submit"  onclick="return formfour();">Submit</button>
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
$("#feet").on("change paste keyup", function() {
   if($(this).val()==0){
   $('#feet').val('');
   $("#feet").addClass("invalid");
   } 
});

$(document).on('input', '#dob', function() {
var date = new Date($('#dob').val());
var day = date.getDate();
var year = date.getFullYear();
var dateed=new Date();
var getdate=('0' + dateed.getDate()).slice(-2) ;
var getmonth=('0' + (dateed.getMonth()+1)).slice(-2);
var getyear=dateed.getFullYear();
var getdob=getyear-year;

//var year=dob.getYear();
$('#age').val(getdob);

});
		$("#feet").click( 
          function(event) { 
            if(feet==00){
	$('#feet').focus();
	$("#feet").addClass("invalid");
	return false;
	 
	}
	if(inches==00){
	$('#inches').focus();
	$("#inches").addClass("invalid");
	return false;
	 
	}  
        }); 
function preone(){
$('.tabone').show();
$('.tabtwo').hide();
$("#step1").removeClass("btn-primary");
$("#step").addClass("btn-primary");
}
function pretwo(){
$('.tabthree').hide();
$('.tabtwo').show();
$("#step2").removeClass("btn-primary");
$("#step1").addClass("btn-primary");
}
function prethree(){
$('.tabthree').show();
$('.tabfour').hide();
$("#step3").removeClass("btn-primary");
$("#step2").addClass("btn-primary");
}

function getincome(){
var occupation=$('#occupation').val();
if((occupation==3) || (occupation==4) || (occupation==5) ){
$('#income-div').hide();
$('#occdetails').hide();
}else{
$('#income-div').show();
$('#occdetails').show();

}
}

function firstform(){

var dateed=new Date();
var getdate=('0' + dateed.getDate()).slice(-2) ;
var getmonth=('0' + (dateed.getMonth()+1)).slice(-2);
var getyear=dateed.getFullYear()-1;
var totaldate=getyear+'-'+getmonth+'-'+getdate;
var letters = /^[A-Za-z ]+$/;
var firstname=$('#firstname').val();
//var husbandname=$('#husbandname').val();
var fathername=$('#fathername').val();
var lastname=$('#lastname').val();
var popularname=$('#popularname').val();
var dob=$('#dob').val();
var mobileno=$('#mobileno').val();
var email=$('#email').val();
var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
var bloodgroup=$('#bloodgroup').val();
var age=$('#age').val();
var status=$("input[name='status']:checked"). val();
var mobilevalidate = /^\d{10}$/;
var feet = $('#feet').val();
var inches = $('#inches').val();
  
  
  

	if(firstname.trim()==''){
	$('#firstname').focus();
	$("#firstname").addClass("invalid");
	return false;
	}
	else if(!letters.test(firstname))
      {
	$('#firstname').focus();
	$("#firstname").addClass("invalid");
    return false;
      }
	else if(lastname.trim()==''){
	$('#lastname').focus();
	$("#lastname").addClass("invalid");
	return false;
	}
	else if(!letters.test(lastname))
      {
	$('#lastname').focus();
	$("#lastname").addClass("invalid");
    return false;
      }
	else if((age=='')){
	$('#age').focus();
	$("#age").addClass("invalid");
	return false;
	}
	else if(age<=00){
	$('#age').focus();
	$("#age").addClass("invalid");
	return false;
	}

	else if(fathername.trim()==''){
	$('#fathername').focus();
	$("#fathername").addClass("invalid");
	return false;
	}
	else if(!letters.test(fathername))
      {
	$('#fathername').focus();
	$("#fathername").addClass("invalid");
    return false;
      }
	else if((dob=='')){
	$('#dob').focus();
	$("#dob").addClass("invalid");
	return false;
	}

	else if((dob>totaldate)){
	$('#dob').focus();
	$("#dob").addClass("invalid");
	return false;
	}

	else if(mobileno==''){
	$('#mobileno').focus();
	$("#mobileno").addClass("invalid");
	return false;
	}
	else if(mobileno<=99999999){
	$('#mobileno').focus();
	$("#mobileno").addClass("invalid");
	return false;
	}
	
	else if(mobileno.length>15){
	$('#mobileno').focus();
	$("#mobileno").addClass("invalid");
	return false;
	}
	else if(email.trim()==''){
	$('#email').focus();
	$("#email").addClass("invalid");
	return false;
	}
	else if (!testEmail.test(email))
	{   
	$('#email').focus();
	//$('#emailerror').html("<span class='text-danger'>Please enter valid email<span>");
	$("#email").addClass("invalid");
	return false;
	}

	else if(bloodgroup==''){
	$('#bloodgroup').focus();
	$("#bloodgroup").addClass("invalid");
	return false;
	 
	}


	else{
	$('.tabtwo').show();
	$('.tabone').hide();
    $("#step").removeClass("btn-primary");
    $("#step1").addClass("btn-primary");
	}
}

function formtwo(){
var country=$('#country').val();
var state=$('#state').val();
var city=$('#city').val();
var address=$('#address').val();
var pincode=$('#pincodes').val();
var area=$('#area').val();

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

else if(pincode==''){
$('#pincodes').focus();
$("#pincodes").addClass("invalid");
return false;
}
else if(area==''){
$('#area').focus();
$("#area").addClass("invalid");
return false;
}
else if(address.trim()==''){
$('#address').focus();
$("#address").addClass("invalid");
return false;
}
else{
$('.tabtwo').hide();
$('.tabthree').show();
$("#step1").removeClass("btn-primary");
$("#step2").addClass("btn-primary");
}


}


function formthree(){
var highest=$('#highest').val();
var occupation=$('#occupation').val();
var details=$('#details').val();
var income=$('#income').val();
if(highest.trim()==''){
$('#highest').focus();
$("#highest").addClass("invalid");
return false;
}
else if(occupation.trim()==''){
$('#occupation').focus();
$("#occupation").addClass("invalid");
return false;
}
else if((occupation!=3) && (occupation!=4) && (occupation!=5)){
if(details.trim()==''){
$('#details').focus();
$("#details").addClass("invalid");
return false;
}
else if(income==''){
$('#income').focus();
$("#income").addClass("invalid");
return false;
}else{
$('.tabthree').hide();
$('.tabfour').show();
$("#step2").removeClass("btn-primary");
$("#step3").addClass("btn-primary");
}
return true;
}

else{
$('.tabthree').hide();
$('.tabfour').show();
$("#step2").removeClass("btn-primary");
$("#step3").addClass("btn-primary");
}


}

function formfour(){
var privacy=$("input[name='privacy']:checked").val();
var file=$('#file').val();
if(file==''){
 $('#fileerror').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Please select image <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
 return false;
 }
if(privacy!= 'privacy'){
$('#fileerror').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Please accept our privacy policy.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
return false;
}
}

// function getstatus(){
// var status=$("input[name='status']:checked"). val();
// if(status=='married'){
// $('#gethusbanddiv').show();
// }else{
// $('#gethusbanddiv').hide();	
// }
// }

function chechSrc(){
var firstname=$('#firstname').val();
var lastname=$('#lastname').val();
var fathername=$('#fathername').val();
var dob=$('#dob').val();


$.ajax({
method:'POST',
url:'checksrc.php',
data:{'firstname':firstname,'lastname':lastname,'fathername':fathername,'dob':dob},
success:function(verify){
if(verify>0){swal({
title: "Sorry!",
text: "User already exist!",
icon: "error",
button: "ok",
});
$("#firstname").val('');
$("#lastname").val('');
$("#dob").val('');
$("#fathername").val('');
}

}

})


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
$('#fileerror').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Please select image size of maximum 1mb in size.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
$('#blah').attr('src', '<?php echo RE_HOME_PATH ;?>uploads/dummy.png');
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
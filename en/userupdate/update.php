<?php 
include "../../config/config.php";
$year= date('Y'); $setyear=$year-1;
$requestid=base64_decode($_REQUEST['token']);
$detail=mysqli_query($con,'select * from staging_approval where request_id="'.$requestid.'" and active_status="R" ');
$countt=mysqli_num_rows($detail);
if(mysqli_num_rows($detail)==0){ 
redirect(RE_EN_PATH."userupdate/error.php","");
}
else{
$row=mysqli_fetch_array($detail);

?>

<!DOCTYPE html>
<html>
<head>
<?php include "../../styles.php";  ?>
<style>.headerudate{    box-shadow: 0px 0px 13px #0000003d;
    /* padding: 0 0 43px; */
    margin: 0px 0 12px;
    padding: 19px 0 20px;}
	
	.headerudate h3 span{text-decoration:underline; }
	</style>
</head>
<body>
<div class="container-fluid">


<div class="row bg-color">


<div class="col-md-12 text-center headerudate"> <a class="logo-link" href="<?php echo  RE_EN_PATH;  ?>"><img class="sm-image" width="110" src="<?php echo  RE_HOME_PATH;  ?>images/logo1.png"></a> <br> <h3><span>User Updation Details</span></h3></div>
<div class="col-md-2 sign-up-tab pt-3">

<ul class="list-unstyled form-steps">
<li class="step alert btn-primary" id="step">Personal Details</li>
<li class="step step1" id="step1">Residential Details</li>
<li class="step step2" id="step2">Educational & Occupational Details</li>
<li class="step step3" id="step3">Upload Photo</li>
</ul>
</div>

<div class="col-md-10 shadow mobile-form pt-4 mb-5">	
<div class="col-md-12"><?php echo show_message();?></div>
<div class="formerror"></div>
<form class="container mb-3" id="regForm" method="post" action="formsubmit.php" enctype="multipart/form-data" autocomplete="off">
<input type="hidden" value="<?php echo $requestid; ?>" name="requestid">
<div class="row tabone">
<div class="col-md-9 ">
<h3 class="mb-3">Update Personal Details <span class="text-danger">(* Required Fields)</span></h3>
<div class="form-group row">
<label class="col-md-3 col-form-label "><span class="text-danger">*</span> First Name</label>
<div class="col-md-9">
<input type="text" class="form-control inputtexttwo" maxlength='50'  name="firstname"  placeholder="Enter first name" id="firstname" onchange="return chechSrc();" value="<?php echo $row['first_name']; ?>">
</div>
</div>

<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Last Name</label>	
<div class="col-md-9">
<input type="text" class="form-control inputtexttwo" maxlength='50' placeholder="Enter last name" name="lastname" id="lastname" onchange="return chechSrc();" value="<?php echo $row['last_name']; ?>">
</div>
</div>
<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Age </label>	
<div class="col-md-9">
<input type="text" maxlength="3" class="form-control" placeholder="Age will be auto calculated"  name="ageone" id="age"  onKeyPress="return isNumeric(event)"  title="Select actual date of birth to change the age" value="<?php echo $row['age']; ?>" readonly>
</div>
</div>

<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Father's Name</label>	
<div class="col-md-9">
<input type="text" class="form-control inputtext" placeholder="Enter father name" name="fathername" id="fathername" maxlength='50' onchange="return chechSrc();" value="<?php echo $row['fathers_name']; ?>">
</div>
</div>

<div class="form-group row">
<label class="col-md-3 col-form-label"> Popular Name</label>	
<div class="col-md-9">
<input type="text" name="popularnamess" class="form-control inputtexttwo" placeholder="Enter popular name" id="popular" maxlength='50' value="<?php echo $row['popular_name']; ?>">
</div>
</div>
<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Date of Birth	</label>	
<div class="col-md-9">
<input type="date" class="form-control" placeholder="Enter date of birth" name="dob"  id="dob" onchange="return chechSrc();" max="<?php echo date(''.$setyear.'-m-d');?>" min="1600-01-01" value="<?php echo $row['date_of_birth']; ?>" >
</div>
</div>
<div class="form-group row">
<label class="col-md-3 col-form-label"> Birth Time</label>	
<div class="col-md-9">
<input type="time" class="form-control" name="birthtime" id="birthtime"   placeholder="Enter birth time" value="<?php echo $row['time_of_birth']; ?>">
</div>
</div>
<div class="form-group row">
<label class="col-md-3 col-form-label"> Birth Place</label>	
<div class="col-md-9">
<input type="text" class="form-control inputtext" name="birthplace" maxlength='50' placeholder="Enter birth place" id="birthplace" value="<?php echo $row['place_of_birth']; ?>" >
</div>
</div>
<div class="form-group row">
<label class="col-md-3"><span class="text-danger">*</span> Gender</label>	
<div class="col-md-9">
<input type="radio" name="gender" value="M" onchange="return statushere();" <?php if($row['gender']=='M'){echo "checked";}  ?>> <label class="mr-5">Male</label>
<input type="radio" name="gender" value="F" onchange="return statushere();" <?php if($row['gender']=='F'){echo "checked";}  ?>> <label>Female</label>
</div>
</div>
<div class="form-group row">
<label class="col-md-3"><span class="text-danger">*</span> Status</label>	
<div class="col-md-9">
<input type="radio" value="single" name="status" id="single" onchange="return statushere();" <?php if($row['martial_status']=='single'){echo "checked";}  ?>> <label class="mr-4">Single</label>
<input type="radio" value="married" name="status" id="married" onchange="return statushere();" <?php if($row['martial_status']=='married'){echo "checked";}  ?>> <label>Married</label>
</div>
</div>
<?php if($row['martial_status']=='married'){ ?>
<div class="form-group row" id="gethusbanddiv" >
<label class="col-md-3 col-form-label"> <span class="text-danger">*</span> <span id="hus_wife"><?php if($row['gender']=='M'){ echo "Wife's Name";}else{echo "Husband's Name";} ?> </span></label>
<div class="col-md-9">
<input type="text" class="form-control inputtext" maxlength='50'   name="husbandname"  id="husbandname" value="<?php echo $row['husband_wife_name'];  ?>">
</div>
</div>
<?php } ?>
<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Mobile No.</label>
	
<div class="col-md-9">
<div class="row padding-manage">
<input type="tel" class="form-control input-phone col-md-10" placeholder="Enter mobile no."   name="mobileno" id="mobileno"  onKeyPress="return isNumeric(event)" maxlength='15' value="<?php echo $row['mobile']; ?>">
</div>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Email Id</label>	
<div class="col-md-9">
<input type="email" class="form-control" placeholder="Enter email id" id="email" name="email"  maxlength='150' value="<?php echo $row['email']; ?>"><span id="emailerror" ></span>
</div>
</div>
<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Blood Group</label>	
<div class="col-md-9">
<!-- <input type="text" class="form-control" placeholder="Enter blood group" name="bloodgroup" id="bloodgroup"> -->
<select class="form-control" id="bloodgroup" name="bloodgroup">
<option value="">Select your blood group</option>
<option value="A+" <?php if( $row['blood_group']=='A+'){echo "selected";} ?>>A+</option>
<option value="B+" <?php if( $row['blood_group']=='B+'){echo "selected";} ?>>B+</option>
<option value="AB+" <?php if($row['blood_group']=='AB+'){echo "selected";} ?>>AB+</option>
<option value="O+" <?php if( $row['blood_group']=='O+'){echo "selected";} ?>>O+</option>
<option value="A-" <?php if( $row['blood_group']=='A-'){echo "selected";} ?>>A-</option>
<option value="B-" <?php if( $row['blood_group']=='B-'){echo "selected";} ?>>B-</option>
<option value="AB-" <?php if( $row['blood_group']=='AB-'){echo "selected";} ?>>AB-</option>
<option value="O-" <?php if( $row['blood_group']=='O-'){echo "selected";} ?>>O-</option>
<option value="9" <?php if( ($row['blood_group']!='A+')|| ( $row['blood_group']!='B+')|| ($row['blood_group']!='AB+')||( $row['blood_group']!='O+')||( $row['blood_group']!='A-')|| ( $row['blood_group']!='B-') || ( $row['blood_group']!='AB-') || ( $row['blood_group']!='O-') || ( $row['blood_group']!='A+') ) { echo "selected";}?>>Other</option>
</select>
</div>
</div>

<div class="form-group row"   id="otherblooddiv"    
style="<?php if( ($row['blood_group']!='A+')|| ( $row['blood_group']!='B+')|| ($row['blood_group']!='AB+')||( $row['blood_group']!='O+')||( $row['blood_group']!='A-')|| ( $row['blood_group']!='B-') || ( $row['blood_group']!='AB-') || ( $row['blood_group']!='O-') || ( $row['blood_group']!='A+') ) { echo "display:flex;";} else{ echo "display:none;";}?>"
>
<label class="col-md-3 col-form-label"> <span class="text-danger">*</span> Other Blood Group</label>	
<div class="col-md-9">
<input type="text" name="otherbloodgroup" class="form-control" placeholder="Enter other blood group" id="otherbloodgroup" maxlength='3' value="<?php echo $row['blood_group']; ?>">
</div>
</div>


<div class="form-group row">
<label class="col-md-3"><span class="text-danger">*</span> Are you willing to donate?
</label>	
<div class="col-md-3">
<input type="radio" name="donate" value="Yes" <?php if($row['blood_donate']=='Yes'){ echo "checked";} ?> > <label class="mr-5">Yes</label>
<input type="radio" name="donate" value="No" <?php if($row['blood_donate']=='No'){ echo "checked";} ?> > <label>No</label> 
</div><div class="col-md-6"><span id="blood_donate_text" class="bg-warning rounded"> <?php if($row['blood_donate']=='Yes'){ echo "( आपका नाम और फ़ोन नंबर ब्लड ग्रुप सर्च में दिखाई देगा। )"; }  else{echo "( आपका नाम और फ़ोन नंबर ब्लड ग्रुप सर्च में नहीं दिखाई देगा। )
";} ?> </span></div>
</div>

<div class="form-group row">
<label class="col-md-3 col-form-label"> Height</label>	
<div class="col-md-3">
	<div class="input-group feet">
<input type="tel" step="any" class="form-control" placeholder="Enter feet" maxlength="2" name="feet" id="feet" onKeyPress="return isNumeric(event)" value="<?php echo $row['feet']; ?>">
    <div class="input-group-append">
      <span class="input-group-text">Feet</span>
    </div>
    </div>
</div>
<div class="col-md-3">
<input type="tel" step="any" class="form-control" placeholder="Enter inches" maxlength="2" name="inches" id="inches" onKeyPress="return isNumeric(event)"  value="<?php echo $row['inches']; ?>"><span class="label-two">Inches</span>
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
<h3 class="mb-3">Update Residential Details <span class="text-danger">(* Required Fields)</span></h3>
<div class="form-group row">
<label class="col-md-3 col-form-label "><span class="text-danger">*</span> Country</label>
<div class="col-md-9">
<select class="custom-select" id="country" name="country" onchange="return countryies();">
<option value="" selected>Select Country</option>
<option value="India" <?php if($row['country']=='India'){ echo "selected";} ?> >India</option>
<option value="Outside India" <?php if($row['country']!='India'){ echo "selected";} ?>>Outside India</option>
</select>
</div>
</div>


<div class="form-group row" id="statetop" style="<?php if($row['country']=='India'){ echo "display:flex;" ;} else { echo "display:none;";}?>">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> State</label>
<div class="col-md-9">
<select class="custom-select" id="state" onchange="return getCity();" name="state">
<option value="" selected>Select State</option>
<?php
$state=mysqli_query($con,'select DISTINCT(state) from states_city_country where state!="CHANDIGARG" and state!=""');
while($show=mysqli_fetch_array($state)){ 

?>
<option value="<?php echo $show['state'];  ?>" <?php if($row['state']==$show['state']){ echo "selected";}   ?>><?php echo $show['state'];  ?></option>
<?php 
} 
?>
</select>
</div>
</div>
<div class="form-group row" id="citytop" style="<?php if($row['country']=='India'){ echo "display:flex;" ;} else { echo "display:none;";}?>">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Name of city/town/village</label>	
<div class="col-md-9">
<span id="getcity">

<select class="custom-select ucity" id="city" onchange="return getpincodes();" name="city">
<?php 
$selectcity=mysqli_query($con,"select state,city,pincode from states_city_country where state='".$row['state']."' GROUP BY city ");

while($showcity=mysqli_fetch_array($selectcity)){
?>
<option value="<?php  echo $showcity['city']; ?>" <?php if($row['city']==$showcity['city']){echo "selected";} ?>> <?php echo $showcity['city']; ?> </option>
<?php  }?>
</select>
</span>
</div>
</div>

<div class="form-group row" id="pincodetop" style="<?php if($row['country']=='India'){ echo "display:flex;" ;} else { echo "display:none;";}?>">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Pin Code</label>	
<div class="col-md-9">
<span id="getpincode"><select class="custom-select upincode" id="pincodes" name="pincode" onchange="return getArea();" >
<?php  
echo "<option>Select pincodes</option>";
$selectcity=mysqli_query($con,"select city,postoffice,pincode from states_city_country where city='".$row['city']."' GROUP BY pincode order by pincode asc");
while($showcity=mysqli_fetch_array($selectcity)){
?>
<option value="<?php echo $showcity['pincode']; ?>" <?php if($showcity['pincode']==$row['pincode']){echo "selected";} ?>><?php echo $showcity['pincode'];?> </option>
<?php } ?>

</select></span>
</div>
</div>
<div class="form-group row" id="areatop" style="<?php if($row['country']=='India'){ echo "display:flex;" ;} else { echo "display:none;";}?>">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Area</label>	
<div class="col-md-9">
<span id="getarea"><select class="custom-select" id="area" name="area">

<?php 
echo '<option value="" selected>Select Area</option>';
$selectarea=mysqli_query($con,"select state,city,pincode,postoffice from states_city_country where pincode='".$row['pincode']."' GROUP BY postoffice" );
while($showareas=mysqli_fetch_array($selectarea)){
?>
<option value="<?php echo $showareas['postoffice']; ?>" <?php if($showareas['postoffice']==$row['area']){echo "selected";}  ?>><?php echo $showareas['postoffice']; ?> </option>
<?php } ?>

</select></span>
</div>
</div>

<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Address</label>
<div class="col-md-9">
<textarea class="form-control " rows="4" id="address"  maxlength='250' name="address" placeholder="Enter address"><?php echo $row['full_address'];?></textarea>
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
<h3 class="mb-3">Update Educational & Occupational Details <span class="text-danger">(* Required Fields)</span></h3>
<div class="form-group row">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span>Highest Education</label>	
<div class="col-md-9">
<input type="text" class="form-control" placeholder="Enter highest qualification" name="highest" id="highest"  maxlength='50' value="<?php echo $row['highest_edu'];?>">
</div>
</div>
<div class="form-group row">
<label class="col-md-3 col-form-label "><span class="text-danger">*</span> Occupation</label>
<div class="col-md-9">
<select class="custom-select" name="occupation" id="occupation" onchange="return getincome();">
<option value="" selected>Select occupation</option>
<option value="1" <?php if($row['occupation']==1){echo "Selected" ;}?> >Job</option>
<option value="2" <?php if($row['occupation']==2){echo "Selected" ;}?>>Business </option>
<option value="3" <?php if($row['occupation']==3){echo "Selected" ;}?>>Housewife</option>
<option value="4" <?php if($row['occupation']==4){echo "Selected" ;}?>>Student</option>
<!-- <option value="5">Nothing</option> -->



</select>
</div>
</div>

<div class="form-group row" id="occdetails" style="<?php if(($row['occupation']==1)|| ($row['occupation']==2)){echo "display:flex;";}else{echo "display:none;";}?>">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Please Add Details</label>
<div class="col-md-9">
<textarea class="form-control " rows="4" name="details" id="details" placeholder="Enter detail"  maxlength='50' value="<?php echo $row['ocp_details'];?>"></textarea>
</div>
</div>

<div class="form-group row" id="income-div" style="<?php if(($row['occupation']==1)|| ($row['occupation']==2)){echo "display:flex;";}else{echo "display:none;";}?>">
<label class="col-md-3 col-form-label"><span class="text-danger">*</span>Annual Income</label>
<div class="col-md-9">
<select class="custom-select" name="income" id="income">
<option value="" >Select income</option>
<option value="1" <?php if($row['income']==1){echo "selected";} ?> >Less than 1 lakh</option>
<option value="2" <?php if($row['income']==2){echo "selected";} ?>>1 lakh to 2 lakh</option>
<option value="3" <?php if($row['income']==3){echo "selected";} ?>>2 lakh to 3 lakh</option>
<option value="4" <?php if($row['income']==4){echo "selected";} ?>>3 lakh to 4 lakh</option>
<option value="5" <?php if($row['income']==5){echo "selected";} ?>>more than 4 lakh</option>

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
<h3 class="mb-3">Update Upload Your Own <span class="text-danger">(* Required Fields)</span></h3>
<div class="form-group row">
<label class="col-md-12 col-form-label">Please select profile image size of maximum 1mb in size. </label>	
<div class="col-md-9">
<div class="pic-wrapper">
<input type="file" class="form-control profile-pic"  id="file" name="profile" onchange="return GetFileSize();" accept="image/png, image/jpeg" title="Select profile image">
<i class="fas fa-plus-circle add-icon"></i>
<p id="fp"></p>
<img id="blah" src="<?php echo RE_HOME_PATH.''.$row['display_pic'] ;?>" alt="your image" style="  position: absolute;
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
<input type="checkbox" value="privacy" name="privacy" id="privacy"><label>I accept the <a href="../uploads/privacy/PJS_Privacy_Policy.pdf" target="_blank">privacy policy</a> .</label>
</div>

<div class="row"><div class="col-md-12"><div class="form-group" id="fileerror"><div></div></div>
</div>

</div>
<div style="overflow:auto;">
<div style="float:right;">
<button class="btn" type="button" id="prevBtn" onclick="return prethree();" >Previous</button>
<button class="btn btn-primary" type="submit"  onclick="return formfour();">Update</button>
</div>
</div>
</div>
</div>

</form>
</div>
</div>	
</div>
</div>
  <?php include "../footer.php" ?>
</body>
<?php  include "../../script.php" ;?>
  
<script>

			$( document ).ready(function() {
				$(".input-phone").CcPicker();
				$(".input-phone").CcPicker("setCountryByCode","<?php echo $row['country_flag'];?>");
				//$(".input-phone").CcPicker({"countryCode":"in"});
				// $(".input-phone").CcPicker();
				// $(".input-phone").on("countrySelect", function(e, i){
				// 										alert(i.countryName + " " + i.phoneCode +" "+i.code);
				// 									});
			});
		

function countryies(){
var countries=$('#country').val();
if(countries=='Outside India'){
$('#state').val('');
$('#statetop').hide();
$('#citytop').hide();
$('#pincodetop').hide();
$('#areatop').hide();
getCity();
}else{
$('#state').val('');
$('#statetop').show();
$('#citytop').show();
$('#pincodetop').show();
$('#areatop').show();
getCity();
}

}

function statushere(){
var statuss=$("input[name='status']:checked"). val();
var genderr=$("input[name='gender']:checked"). val();
if((statuss=='married')&& (genderr=='F') ){
$('#gethusbanddiv').show();
$('#hus_wife').html("Husband's Name");
$("#husbandname").attr("placeholder", "Enter husband's name");
}
else if((statuss=='married')&& (genderr=='M') ){
$('#gethusbanddiv').show();
$('#hus_wife').html("Wife's Name");
$("#husbandname").attr("placeholder", "Enter wife's name");
}
else{
$('#gethusbanddiv').hide();
}
}

$("#feet").on("change paste keyup", function() {
if($(this).val()==0){
$('#feet').val('');
$("#feet").addClass("invalid");
} 
});

$(document).ready(function(){
$('input[name=donate]').on('change', function() {
if($(this).val()=='No'){
$('#blood_donate_text').html('( आपका नाम और फ़ोन नंबर ब्लड ग्रुप सर्च में नहीं दिखाई देगा। ) ');	
}else{
$('#blood_donate_text').html(' ( आपका नाम और फ़ोन नंबर ब्लड ग्रुप सर्च में दिखाई देगा। ) '); 
}
});

$('select[name=bloodgroup]').on('change', function() {
if($(this).val()==9){
$('#otherblooddiv').show();	
}else{
$('#otherblooddiv').hide(); 
$('#otherbloodgroup').val(''); 

}
});

});


$(document).on('input', '#dob', function() {
var dob = new Date($('#dob').val());
var today = new Date();
var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
$('#age').val(age);
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
var husbandname=$('#husbandname').val();
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
var statuss=$("input[name='status']:checked"). val();
var genderr=$("input[name='gender']:checked"). val();

var countryflag=$('#flagname').val();
var countrycode=$('.cc-picker-code').html();
var otherbloodgroup=$('#otherbloodgroup').val();
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
else if((statuss=='married')&&(husbandname.trim()=='')){
	
	$('#husbandname').focus();
	$("#husbandname").addClass("invalid");
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
	else if((otherbloodgroup=='')&&(bloodgroup==9)){
	$('#otherbloodgroup').focus();
	$("#otherbloodgroup").addClass("invalid");
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
var othercounties=$('#othercounties').val();


if(country==''){
$('#country').focus();
$("#country").addClass("invalid");
return false;
}

else if((state=='') && (country!='Outside India')){
$('#state').focus();
$("#state").addClass("invalid");
return false;
}
else if((city=='')&& (country!='Outside India')){
$('#city').focus();
$("#city").addClass("invalid");
return false;
}

else if((pincode=='')&& (country!='Outside India')){
$('#pincodes').focus();
$("#pincodes").addClass("invalid");
return false;
}
else if((area=='')&& (country!='Outside India')){
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
// if(file==''){
//  $('#fileerror').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Please select image <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
//  return false;
//  }
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
url:'<?php echo RE_HOME_PATH; ?>checksrc.php',
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
<?php } ?>
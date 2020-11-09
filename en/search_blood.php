<?php  
include "../config/config.php";
if($_SESSION['user_mid']!=''){
redirect(RE_HOME_PATH."index.php","");
}
?>
<!DOCTYPE html>
<html>
<?php include "../styles.php";  ?>
<body>
<div class="container-fluid">

<?php include "header.php";  ?>
<div class="col-md-10 offset-md-1 content-container" id="addoffsetclass">
<h3 class="ticket-header text-center">Search For Blood Donor</h3>
<br>
<form id="searchform">
<div class="row col-md-12 offset-md-1">
<div class="form-group col-md-2 col-sm-4 col-12 addclass" id="bloodgroupclass">
<label class="col-form-label"><span class="text-danger">*</span> Blood Group</label>	
<?php ?>
<select name="blood_group" class="custom-select" placeholder="Select blood group" id="blood_group" >
<option value="" selected>Select</option>
<?php 
$getblood=mysqli_query($con,'select DISTINCT(blood_group) from member GROUP BY blood_group');
$countblood=mysqli_num_rows($getblood); 
while($showblood=mysqli_fetch_array($getblood)){

	?>
<option value="<?php echo $showblood['blood_group'];?>"><?php echo $showblood['blood_group']; ?></option>
	<?php

}

?>
</select>

</div>

<div class="form-group  col-md-2 col-sm-4 col-12 addclass" id="countryclass">
<label class="col-form-label"> Country</label>	
<select class="custom-select" id="country" name="country" onchange="return countryies();">
<option value="" selected>Select</option>
<option value="India">India</option>
<option value="Outside India">Outside India</option>
</select>
</div>


<div class="form-group col-md-2 col-sm-4 col-12" id="statetop">
<label class="col-form-label"> State</label>	
<select class="custom-select" id="state" onchange="return getCity();" name="state">
<option value="" selected>Select </option>
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

<div class="form-group col-md-2 col-sm-4 col-12" id="citytop">
<label class="col-form-label"> City</label>	
<span id="getcity"></span>
</div>


<div class="form-group col-md-2 col-sm-4 col-12" id="pincodetop">
<label class="col-form-label"> Pincode</label>	
<span id="getpincode"></span>
</div>


<br><br>

</div>
<div class="col-md-12 text-center">
<button type="button" class="btn btn-success"   value="Search" onclick="return BtnClickPagetwo(1,10);" >Search</button> <button type="button" class="btn btn-info"   value="Clear All" onclick="return emptyForm(1,10);" >Clear All</button>
<br>
<br>
</div>
</form>
<div id="getblood">

</div>
<?php include "../footer.php" ?>
</body>

<?php include "../script.php" ?>
<script>
function countryies(){
var countries=$('#country').val();
if(countries=='Outside India'){
$('#bloodgroupclass').removeClass('col-md-2');
$('#bloodgroupclass').addClass('col-md-4');

$('#countryclass').removeClass('col-md-2');
$('#countryclass').addClass('col-md-4');
$('#state').val('');
$('#statetop').hide();
$('#citytop').hide();
$('#pincodetop').hide();
$('#areatop').hide();
getCity();
}else{
$('#countryclass').addClass('col-md-2');
$('#countryclass').removeClass('col-md-4');

$('#bloodgroupclass').addClass('col-md-2');
$('#bloodgroupclass').removeClass('col-md-4');

$('#state').val('');
$('#statetop').show();
$('#citytop').show();
$('#pincodetop').show();
$('#areatop').show();
getCity();
}

}


function BtnClickPagetwo(x,y)
{

var bloodgroup=$("#blood_group").val();
var country=$("#country").val();		
var statetwo=$("#state").val();	
var citytwo=$("#city").val();
var pincodes=$("#pincodes").val();
if(bloodgroup==''){
$('#blood_group').focus();
$('#getblood').html('<div class="alert alert-danger alert-dismissible fade show col-md-6 offset-3" role="alert">Please select blood group<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
}else{
y=10;
$('#loadergif').fadeIn();
$.ajax({
type: 'POST',
url: "load_search_blood_group.php",
data: {"page":x,"pagesize":y,"statetwo":statetwo,"citytwo":citytwo,"pincodes":pincodes,"bloodgroup":bloodgroup,"country":country},
success: function(data122){
$('#loadergif').fadeOut();
$("#getblood").html(data122);			    } 
});
}	
}

function emptyForm(){
$('#loadergif').fadeIn();
$('#searchform')[0].reset();
$('#loadergif').fadeOut();
$("#getblood").html('');
}

</script>

</html>

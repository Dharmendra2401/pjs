<?php
include "../../config/config.php" ;   
sub_admin_session_check();
?>

<!DOCTYPE>
<html>
<head>
<?php include "../../styles.php";  ?>

</head>
</head>
<body>
<div class="container-fluid">
<?php include "../header.php" ?>



<div class="col-md-2 px-0 bg-white shadow">
<div class="filter-header">
<span class="header-txt">Filters</span>
<i class="fas fa-plus"></i> 
<button class="btn btn-default custom-btn reset-btn" onclick="return clearAll();">Clear All</button>
</div>
<form class="mb-0" id="filterForm">
<ul class="list-unstyled sidebar">
<li class="collapse-wrapper">
<div id="age-filter">
<div class="card card-body">
<div>AGE</div>
<div>

<input id="range1" type="range" value="0"  min="0" max="100" oninput="amount1.value=range1.value" />
<span>Min</span>:
<span id="amount1" class="maxmin">0</span>


</div><br>
<div>
<input id="rangeInput" type="range" value="0"   max="100"  />
<span>Max</span>:
<span id="amount"  class="maxmin"  >0</span>
</div>
</div>
</div>
</li>

<li class="collapse-wrapper">
<a class="btn btn-default w-100" data-toggle="collapse" href="#state" role="button" aria-expanded="false" aria-controls="state">
<span class="float-left">STATE</span>
</a>
<i class="fas fa-angle-down"></i>
<div class="collapse" id="state">
<select class="select form-control" id="multiselectwithsearch" multiple="multiple">

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
</li>
<li class="collapse-wrapper">
<a class="btn btn-default w-100" data-toggle="collapse" href="#gender" role="button" aria-expanded="false" aria-controls="gender">
<span class="float-left">GENDER</span>
</a>
<i class="fas fa-angle-down"></i>
<div class="collapse" id="gender">
<div class="card card-body">
<input  type="radio" name="gender" id="male"  value="M">
<label for="male">Male</label><br>
<input type="radio" name="gender" id="female"  value="F">
<label for="female">Female</label><br>
</div>
</div>
</li>
<li class="collapse-wrapper">
<a class="btn btn-default w-100" data-toggle="collapse" href="#status" role="button" aria-expanded="false" aria-controls="status">
<span class="float-left">STATUS</span>
</a>
<i class="fas fa-angle-down"></i>
<div class="collapse" id="status">
<div class="card card-body">
<input type="radio" id="single" name="status"  value="single">
<label for="single">Single</label><br>
<input type="radio" id="married" name="status" value="married">
<label for="married">Married</label><br>
</div>
</div>
</li>
<li class="collapse-wrapper">
<a class="btn btn-default w-100" data-toggle="collapse" href="#age" role="button" aria-expanded="false" aria-controls="age">
<span class="float-left">AGE</span>
</a>
<i class="fas fa-angle-down"></i>
<div class="collapse" id="age" multiple="multiple">
<div class="card card-body">
<select class="select form-control" id="ageone" multiple="multiple" >
<?php 
$j=100;
for($i=1;$j>=$i;$i++){
?>
<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php } ?>
</select>
</div>
</div>
</li>
<li class="collapse-wrapper">
<a class="btn btn-default w-100" data-toggle="collapse" href="#blood-group" role="button" aria-expanded="false" aria-controls="blood-group">
<span class="float-left">BLOOD GROUP</span>
</a>
<i class="fas fa-angle-down"></i>
<div class="collapse" id="blood-group">
<div class="card card-body">
<select class="select form-control" id="bloodgroupone" multiple="multiple" >

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
</li>
<li class="collapse-wrapper">
<a class="btn btn-default w-100" data-toggle="collapse" href="#occupation" role="button" aria-expanded="false" aria-controls="occupation">
<span class="float-left">OCUCUPATION</span>
</a>
<i class="fas fa-angle-down"></i>
<div class="collapse" id="occupation">
<div class="card card-body">
<select class="select form-control" id="occupationone" multiple="multiple" name="occupation">
<option value="1">Job</option>
<option value="2">Business </option>
<option value="3">Housewife</option>
<option value="4">Student</option>
<!-- <option value="5">Nothing</option> -->



</select>
</div>
</div>
</li>
<li class="collapse-wrapper">
<a class="btn btn-default w-100" data-toggle="collapse" href="#income" role="button" aria-expanded="false" aria-controls="income">
<span class="float-left">INCOME</span>
</a>
<i class="fas fa-angle-down"></i>
<div class="collapse" id="income">
<div class="card card-body">
<select class="custom-select" class="form-control" id="incomeone"  name="income" >
<option value="">Select income</option>
<option value="1">Less than 1 lakh</option>
<option value="2">1 lakh to 2 lakh</option>
<option value="3">2 lakh to 3 lakh</option>
<option value="4">3 lakh to 4 lakh</option>
<option value="5">More than 4 lakh</option>

</select>
</div>
</div>
</li>
<li class="collapse-wrapper text-right">
<button type="button" class="btn btn-primary" onclick="return BtnClickPage(1,10);">APPLY</button>
<button type="button" class="btn btn-success" onclick="return clearAll();">CLEAR ALL</button>

</li>
</ul>
</form>
</div>
<div class="col-md-10 bg-white shadow">
<h3 class="text-center pt-3">Registered Users</h3>
<div class="text-right">
<button type="button" onclick="return userExport()" class="btn btn-outline-primary my-4" >Export</button>
</div>

<div id="gridviewone">
<?php include 'load_user_reports.php'; ?>
</div>
</div>
</div>
</div>	
</div>
<?php  include '../../script.php'; ?>
<script>
$( document ).ready(function() {
   $('#ageone').val('');
});

function BtnClickPage(x,y)
{
var mini=$("#amount1").val();
var max=$("#rangeInput").val();	
var state=$("#multiselectwithsearch").val();
var gender=$("input[name='gender']:checked").val();
var status=$("input[name='status']:checked").val();
var age=$("#ageone").val();
var bloodgroupone=$("#bloodgroupone").val();
var occupationone=$("#occupationone").val();
var incomeone=$("#incomeone").val();

y=10;
$('#loadergif').fadeIn();
$.ajax({
type: 'POST',
url: "load_user_reports.php",
data: {"page":x,"pagesize":y,"mini":mini,"max":max,"state":state,"age":age,"bloodgroupone":bloodgroupone,"occupationone":occupationone,"incomeone":incomeone,"gender":gender,"status":status},
success: function(data12){
$('#loadergif').fadeOut();
$("#gridviewone").html(data12);			    } 
});	

}

$(".select").bsMultiSelect({cssPatch : {
choices: {columnCount:'6' },
}});

function userExport(){
var mini=$("#amount1").val();
var max=$("#rangeInput").val();
 var state=$("#multiselectwithsearch").val();
 var gender=$("input[name='gender']:checked").val();
 var status=$("input[name='status']:checked").val();
 var age=$("#ageone").val();
 var bloodgroupone=$("#bloodgroupone").val();
 var occupationone=$("#occupationone").val();
 var incomeone=$("#incomeone").val();
 window.location.replace("<?php echo RE_HOME_ADMIN; ?>reports/users_excel.php/?mini="+mini+"&max="+ max);
 
}

function clearAll(){
$('#filterForm')[0]. reset();
$("#rangeInput").attr('min',0);
$("#amount").attr('min',0);
$('#amount1').val('');
$('#amount1').html('0');
$('#amount').html('0');
$('#rangeInput').val('0');
var mini='';
var max='';
BtnClickPage(1,10)

}



$(document).on('input', '#rangeInput', function() {
    $('#amount').html( $(this).val() );
});



$(document).on('input', '#range1', function() {
   $('#amount1').html( $(this).val() );
   
   var renn=$("#rangeInput").val();
   $('#rangeInput').attr('min',$(this).val());
   if(renn<$(this).val()){

$('#amount').html( $(this).val() );

//alert( $(this).val() );

   }
   
});

</script>
<?php include "../../footer.php" ?>
</body>
</html>
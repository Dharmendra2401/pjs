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
				    <button class="btn btn-default custom-btn reset-btn">Clear All</button>
				</div>
				<form class="mb-0" id="filterForm">
	                <ul class="list-unstyled sidebar">
	                	<li class="collapse-wrapper">
	                        <div id="age-filter">
							  <div class="card card-body">
							      <div>AGE</div>
									  <div>
									   
									    <input id="range1" type="range" value="0"  oninput="amount1.value=range1.value" />
									    <span>Min</span>
									    <input id="amount1" type="number" value="0" min="0" max="100" oninput="range1.value=amount1.value" disabled/>
									 

									  </div><br>
									  <div>
									    <input id="rangeInput" type="range" value="0" min="0"  max="100" oninput="amount.value=rangeInput.value" />
									    <span>Max</span>
									    <input id="amount" type="number" value="0" min="0" max="100" oninput="rangeInput.value=amount.value" disabled/>
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
							<select id="multiselectwithsearch" multiple="multiple">
    <option value="India">India</option>
    <option value="Australia">Australia</option>
    <option value="United State">United State</option>
    <option value="Canada">Canada</option>
    <option value="Taiwan">Taiwan</option>
    <option value="Romania">Romania</option>
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
							      <input  type="radio" id="male"  value="male">
								  <label for="male">Male</label><br>
								  <input type="radio" id="female" value="female">
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
							      <input type="radio" id="single"  value="single">
								  <label for="male">Single</label><br>
								  <input type="radio" id="married" value="married">
								  <label for="female">Married</label><br>
							  </div>
							</div>
					    </li>
					    <li class="collapse-wrapper">
					        <a class="btn btn-default w-100" data-toggle="collapse" href="#age" role="button" aria-expanded="false" aria-controls="age">
							    <span class="float-left">AGE</span>
							</a>
							<i class="fas fa-angle-down"></i>
	                        <div class="collapse" id="age">
							  <div class="card card-body">
							      <select class="form-control">
							      	   <option>Select your age</option>
							      	   <option>10</option>
							      	   <option>20</option>
							      	   <option>30</option>
							      	   <option>40</option>
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
							      <select class="form-control">
							      	   <option>Select your blood group</option>
							      	   <option>A+</option>
							      	   <option>B+</option>
							      	   <option>AB+</option>
							      	   <option>O+</option>
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
							      <input class="form-control" type="text" name="" placeholder="enter your occupation">
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
							      <input class="form-control" type="text" name="" placeholder="enter your income">
							  </div>
							</div>
					    </li>
					    <li class="collapse-wrapper text-right">
					        <button type="button" class="btn btn-primary" onclick="return BtnClickPage(0,10);">APPLY</button>
					    </li>
	                </ul>
                </form>
			</div>
			<div class="col-md-10 bg-white shadow">
				<h3 class="text-center pt-3">Registered Users</h3>
				<div class="text-right">
					<button class="btn btn-outline-primary my-4">Export</button>
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
function BtnClickPage(x,y)
{
var mini=$("#range1").val();
var max=$("#rangeInput").val();	
var max=$("#rangeInput").val();	
var state=$("#multiselectwithsearch").val();
alert(state);
y=10;
$('#loadergif').fadeIn();
$.ajax({
type: 'POST',
url: "load_user_reports.php",
data: {"page":x,"pagesize":y,"state":state,"city":city,"submitdate":submitdate,"refrenceidone":refrenceidone},
success: function(data12){
$('#loadergif').fadeOut();
$("#gridviewone").html(data12);			    } 
});	
}

$('#multiselectwithsearch').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            filterPlaceholder: 'Search for something...'
        }); 

  </script>
</body>
</html>
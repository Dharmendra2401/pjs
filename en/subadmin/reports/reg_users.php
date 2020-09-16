<!DOCTYPE>
<html>
<head>
	<head>
	 <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

	<title>Vts</title>

	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../../../fontawesome5/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style.css">
</head>
</head>
<body>
     
    <div class="container-fluid">
        <div class="row bg-white">
            <div class="col-md-3 sm-image-wrapper">
            	<i class="fas fa-bars mobile-menu-icon"></i>
    			<img class="sm-image" width="110" src="../../../images/flooop.png">
    		</div>
    		<div class="col-md-6 d-flex justify-content-center">
    			<div class="input-group my-auto">
				  <!-- <input type="text" class="form-control" placeholder="Search" aria-label="Username"> -->
				  <input type="text" class="form-control" placeholder="Search member by name or member id" size="30" onkeyup="showResult(this.value)">
				   <div class="input-group-append">
				    <span class="input-group-text"><i class="fa fa-search"></i></span>
				  </div>
                  <div id="livesearch"></div>
				</div>
    		</div>
    		<div class="col-md-3 align-self-center text-right">
    			 <i class="fas fa-language sm-icon-language"></i>
    			 <i class="far fa-bell sm-icon-alert"></i>
				 
				  <div class="dropdown loggedin">
				    <button type="button" class="btn btn-mobile btn-outline-primary dropdown-toggle" data-toggle="dropdown">
				      Username
				    </button>
				    <div class="dropdown-menu custom-dropdwn mt-2">
				      <a class="dropdown-item" href="index.php">Logout</a>
				      <div class="triangle-up-black"></div>
				      <div class="triangle-up-white"></div>
				    </div>
				  </div>
    		</div>

            <div class="col-md-12 navbar-menu">
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
				    <li class="nav-item">
				      <a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown">Reports</a>
				      <div class="dropdown-menu custom-dropdwn">	
					      <a class="dropdown-item" href="reg_users.php">Registered Users Count</a>
					      <a class="dropdown-item" href="death_count.php">Death Count</a>
					      <a class="dropdown-item" href="req_report.php">OPJ Requests Report</a>
					      <a class="dropdown-item" href="update_request.php">Update Request Count</a>
					  </div>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown" href="#">Tickets</a>
				       <div class="dropdown-menu custom-dropdwn">	
					      <a class="dropdown-item" href="../reg_request.php">New User Registration Requests</a>
					      <a class="dropdown-item" href="../contact_request.php">OPJ Contact Requests</a>
					      <a class="dropdown-item" href="../update_request.php">User Updation Requests</a>
					      <a class="dropdown-item" href="../other_request.php">Fake/Duplicate/Death Requests </a>
					   </div>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>

		<div class="row">
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
									    <input id="rangeInput" type="range" min="0" max="100" oninput="amount.value=rangeInput.value" />
									    <span>Min</span>
									    <input id="amount" type="number" value="100" min="0" max="100" oninput="rangeInput.value=amount.value" />
									  </div><br>
									  <div>
									    <input id="rangeInput" type="range" min="0" max="100" oninput="amount.value=rangeInput.value" />
									    <span>Max</span>
									    <input id="amount" type="number" value="100" min="0" max="100" oninput="rangeInput.value=amount.value" />
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
							  <div class="card card-body">
							      
							  </div>
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
					        <button class="btn btn-primary">APPLY</button>
					    </li>
	                </ul>
                </form>
			</div>
			<div class="col-md-10 bg-white shadow">
				<h3 class="text-center pt-3">Registered Users</h3>
				<div class="text-right">
					<button class="btn btn-outline-primary my-4">Export</button>
				</div>
				
				<div class="table-responsive">
					<table id="openEntries" class="table table-striped table-bordered" style="width:100%">
			        <thead>
			            <tr>
			                <th>S.no.</th>
			                <th>User Name</th>
			                <th>MID</th>
			                <th>Mobile No.</th>
			                <th>State</th>
			                <th>C/T/V</th>
			                <th>Gender</th>
			                <th>Status</th>
			                <th>Age</th>
			                <th>Blood</th>
			                <th>Occupation</th>
			                <th>Income</th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			                <td>1</td>
			                <td>Lavish</td>
			                <td>Mis1234567</td>
			                <td>5839020394</td>
			                <td>Madhya Pradesh</td>
			                <td>Indore</td>
			                <td>Male</td>
			                <td>Single</td>
			                <td>22</td>
			                <td>AB+</td>
			                <td>Job</td>
			                <td>2-3 lakh</td>
			            </tr>
			            <tr>
			                <td>1</td>
			                <td>Lavish</td>
			                <td>Mis1234567</td>
			                <td>5839020394</td>
			                <td>Madhya Pradesh</td>
			                <td>Indore</td>
			                <td>Male</td>
			                <td>Single</td>
			                <td>22</td>
			                <td>AB+</td>
			                <td>Job</td>
			                <td>2-3 lakh</td>
			            </tr>
			            <tr>
			                <td>1</td>
			                <td>Lavish</td>
			                <td>Mis1234567</td>
			                <td>5839020394</td>
			                <td>Madhya Pradesh</td>
			                <td>Indore</td>
			                <td>Male</td>
			                <td>Single</td>
			                <td>22</td>
			                <td>AB+</td>
			                <td>Job</td>
			                <td>2-3 lakh</td>
			            </tr>
			        </tbody>
			    </table>
				</div>
			</div>
	    </div>
		 	
    </div>
    <script data-require="popper.js@*" data-semver="1.12.9" src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../../js/main.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
   <script type="text/javascript">
    	$(document).ready(function() {
		    $('#openEntries, #pendingEntries, #closedEntries').DataTable();

		    $(".reset-btn").click(function(){
			    $("#filterForm").trigger("reset");
			});
	
		});
    </script>
</body>
</html>
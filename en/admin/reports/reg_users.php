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
				    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
				      Username
				    </button>
				    <div class="dropdown-menu custom-dropdwn mt-2">
				     <!--  <a class="dropdown-item" href="profile.php">View & update profile</a>
				      <a class="dropdown-item" href="saved_profile.php">Saved profiles</a>
				      <a class="dropdown-item openBtn-feed" type="button" data-toggle="modal" data-target="#feed">Feedback</a> -->
				      <a class="dropdown-item" href="index.php">Logout</a>
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
					      <a class="dropdown-item" href="reg_request.php">Registered Users Count</a>
					      <a class="dropdown-item" href="contact_request">Death Count</a>
					      <a class="dropdown-item" href="#">OPJ Requests Report</a>
					      <a class="dropdown-item" href="#">Update Request Count</a>
					  </div>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown" href="#">Tickets</a>
				      <div class="dropdown-menu custom-dropdwn">	
					      <a class="dropdown-item" href="#">New User Registration Requests</a>
					      <a class="dropdown-item" href="#">OPJ Contact Requests</a>
					      <a class="dropdown-item" href="#">User Updation Requests</a>
					      <a class="dropdown-item" href="#">Fake/Duplicate/Death Requests </a>
					  </div>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>

		<div class="row">
			<div class="col-md-2 px-0 bg-white shadow">
				<h4 class="header">Filters</h4>
				<input type="range" id="myRange" value="" min="" max="">
                <div id="rangeValue">1</div>
                <ul class="list-unstyled sidebar">
                	<li class="">
                		<div class="state">
                			<span>STATE</span>
                		    <i class="fas fa-angle-down"></i>
                		</div>
                		<select class="test">
                			<option>1</option>
                			<option>2</option>
                			<option>3</option>
                		</select>
                		
                	</li>
                </ul>
			</div>
			<div class="col-md-10 bg-white shadow">
				<div class="text-right">
					<button class="btn btn-outline-primary my-4">Export</button>
				</div>
				
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
    <script data-require="popper.js@*" data-semver="1.12.9" src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
    	
    	$(document).ready(function() {
		    $('#openEntries, #pendingEntries, #closedEntries').DataTable();

		    $('#myRange').mousemove(function(){
			    $('#rangeValue').text($('#myRange').val());
			});

			 $(".state").click(function(){
			    $(".test").toggle();
			    $("i").toggleClass("fa-angle-down fa-angle-up");
			  });
		} );
    </script>
    
</body>
</html>
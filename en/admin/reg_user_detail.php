<!DOCTYPE>
<html>
<head>
	<head>
	 <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

	<title>Vts</title>

	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../../fontawesome5/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
</head>
<body>
	<div class="container-fluid">
		<div class="row bg-white">
            <div class="col-md-3 sm-image-wrapper">
            	<i class="fas fa-bars mobile-menu-icon"></i>
    			<img class="sm-image" width="110" src="../../images/flooop.png">
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
					      <a class="dropdown-item" href="#">Death Count</a>
					      <a class="dropdown-item" href="#">OPJ Requests Report</a>
					      <a class="dropdown-item" href="#">Update Request Count</a>
					  </div>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown" href="#">Tickets</a>
				      <div class="dropdown-menu custom-dropdwn">	
					      <a class="dropdown-item" href="reg_request.php">New User Registration Requests</a>
					      <a class="dropdown-item" href="contact_request.php">OPJ Contact Requests</a>
					      <a class="dropdown-item" href="#">User Updation Requests</a>
					      <a class="dropdown-item" href="#">Fake/Duplicate/Death Requests </a>
					  </div>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
		<div class="container mb-4 px-0 shadow">
			<h2 class="header">User Details</h2>
			<div class="row user-profile">
                <div class="col-md-12">
                    <h3>Personal Info</h3>
                    <hr>
                    <div class="row info mb-4">
                        <div class="col-md-3">First Name <strong>:</strong></div>
                        <div class="col-md-9">lavish</div>

                        <div class="col-md-3">Middle Name<strong>:</strong></div>
                        <div class="col-md-9">lavish</div>

                        <div class="col-md-3">Last Name <strong>:</strong></div>
                        <div class="col-md-9">male</div>

                        <div class="col-md-3">Popular Name <strong>:</strong></div>
                        <div class="col-md-9">single</div>

                        <div class="col-md-3">Gender<strong>:</strong></div>
                        <div class="col-md-9">b+</div>

                        <div class="col-md-3">Status <strong>:</strong></div>
                        <div class="col-md-9">5'9"</div>

                        <div class="col-md-3">Blood Group<strong>:</strong></div>
                        <div class="col-md-9">b+</div>

                        <div class="col-md-3">Height <strong>:</strong></div>
                        <div class="col-md-9">5'9"</div>

                        <div class="col-md-3">Date of Birth <strong>:</strong></div>
                        <div class="col-md-9">01/01/01</div>

                        <div class="col-md-3">Birth Time<strong>:</strong></div>
                        <div class="col-md-9">2:00 am</div>

                        <div class="col-md-3">Birth Place <strong>:</strong></div>
                        <div class="col-md-9">maheshwar</div>
                    </div>
                    <h3>Contact Info</h3>
                    <hr>
                    <div class="row info mb-4">
                        <div class="col-md-3">Mobile No. <strong>:</strong></div>
                        <div class="col-md-9">1234567890</div>

                        <div class="col-md-3">Email Id<strong>:</strong></div>
                        <div class="col-md-9">lavish@gmail.com</div>
                    </div>
                    <h3>Address Info</h3>
                    <hr>
                    <div class="row info mb-4">
                        <div class="col-md-3">Address  <strong>:</strong></div>
                        <div class="col-md-9 address">J-11 DHANVANTRI APPARTMENT M.O.G LINE</div>

                        <div class="col-md-3">Name of city/town/village <strong>:</strong></div>
                        <div class="col-md-9">indore</div>

                        <div class="col-md-3">Pin Code  <strong>:</strong></div>
                        <div class="col-md-9">452001</div>

                        <div class="col-md-3">State <strong>:</strong></div>
                        <div class="col-md-9">madya pradesh</div>

                        <div class="col-md-3">Country <strong>:</strong></div>
                        <div class="col-md-9">India</div>
                    </div>
                    <h3>Education</h3>
                    <hr>
            		<div class="row info mb-4">
            			<div class="col-md-3">Education <strong>:</strong></div>
            			<div class="col-md-9">bachelor of engineering</div>
            		</div>
            		<h3>Work</h3>
                    <hr>
            		<div class="row info mb-4">
            			<div class="col-md-3">Occupation <strong>:</strong></div>
            			<div class="col-md-9">job/software engineer</div>

            			<div class="col-md-3">Income<strong>:</strong></div>
            			<div class="col-md-9">1-2 lakh</div>
            		</div>
                </div>
            </div>
            <div class="admin-check-wrapper">
            	<div class="row">
            	<div class="col-md-6 text-center">
            		<label class="form-check-label admin-check">
		                <input type="radio" class="form-check-input" checked>Approve
		            </label>
		            <label class="form-check-label admin-check">
		                <input type="radio" class="form-check-input">Reject
		            </label>
            	</div>
            	<div class="col-md-6 text-center">
            		<button class="btn btn-success">Submit</button>
            		<button class="btn btn-warning">Pending</button>
            		<button class="btn btn-danger">Back</button>
            	</div>
            </div>
            </div>
            
		</div>
	</div>

	<script data-require="popper.js@*" data-semver="1.12.9" src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
</body>
</html>
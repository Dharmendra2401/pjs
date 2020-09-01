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
					      <a class="dropdown-item" href="reports/reg_users.php">Registered Users Count</a>
					      <a class="dropdown-item" href="reports/death_count.php">Death Count</a>
					      <a class="dropdown-item" href="reports/req_report.php">OPJ Requests Report</a>
					      <a class="dropdown-item" href="reports/update_request.php">Update Request Count</a>
					  </div>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown" href="#">Tickets</a>
				       <div class="dropdown-menu custom-dropdwn">	
					      <a class="dropdown-item" href="reg_request.php">New User Registration Requests</a>
					      <a class="dropdown-item" href="contact_request.php">OPJ Contact Requests</a>
					      <a class="dropdown-item" href="update_request.php">User Updation Requests</a>
					      <a class="dropdown-item" href="other_request.php">Fake/Duplicate/Death Requests </a>
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
                        <div class="col-md-3">Name <strong>:</strong></div>
                        <div class="col-md-9">lavish</div>

                        <div class="col-md-3">Mobile Number<strong>:</strong></div>
                        <div class="col-md-9">2345623178</div>

                        <div class="col-md-3">Email Id<strong>:</strong></div>
                        <div class="col-md-9">xyz@gmail.com</div>

                        <div class="col-md-3">Address <strong>:</strong></div>
                        <div class="col-md-9">Regal-square, Indore</div>

                        <div class="col-md-3">Requested For<strong>:</strong></div>
                        <div class="col-md-9">xyz jain(test20) &nbsp;
                            <a target="_blank" href="reg_user_detail.php">View Details</a> 
                        	<!-- <button type="button" class="btn btn-default view-link" data-toggle="modal" data-target="#profileModal">
							  View Details
							</button>  -->
						</div>
                    </div>
                </div>
            </div>

            
            <!-- The Modal -->
  <div class="modal" id="profileModal">
    <div class="modal-dialog profile-detail">
     <!-- modal loads from modal.html -->
    </div>
  </div>
  
</div>


            <div class="admin-check-wrapper">
            	<div class="row">
            	<div class="col-md-6 text-center">
            		<label class="form-check-label admin-check">
		                <input type="radio" id="approve" name="radio" class="form-check-input">Approve
		            </label>
		            <label class="form-check-label admin-check">
		                <input type="radio" id="selectRadio" name="radio" class="form-check-input">Reject
		            </label>
            	</div>
            	<div class="col-md-6 text-center">
            		<button class="btn btn-success verify-user">Verified & Forward to User</button>
            		<button class="btn btn-danger">Back</button>
            	</div>
            </div>
            </div>
            
		</div>
	</div>

	<script data-require="popper.js@*" data-semver="1.12.9" src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/main.js"></script>
</body>
</html>
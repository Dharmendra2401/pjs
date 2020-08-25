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

		
		<div class="container shadow">
			<h3 class="ticket-header">OPJ Contact Request</h3>
			<div class="tab-bar">
				<div class="row">
					<div class="col-md-6">
						<ul class="nav nav-tabs">
						    <li class="nav-item">
						      <a class="nav-link active" data-toggle="tab" href="#open"><div class="triangle-down"></div>Open</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#pending"><div class="triangle-down"></div>Pending </a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#closed"><div class="triangle-down"></div>Closed </a>
						    </li>
						  </ul>
					</div>
					<div class="col-md-6 align-self-center text-right">
						
					</div>
				</div>
		    </div>
			<div class="row">
				<div class="col-md-12 tab-content">
				    <div id="open" class="tab-pane table-responsive active pb-3"><br>
				        <table id="openEntries" class="table table-striped table-bordered" style="width:100%">
					        <thead>
					            <tr>
					                <th>S.no.</th>
					                <th>Name</th>
					                <th>Requested for</th>
					                <th>Requested Date</th>
					                <th>View Details</th>
					            </tr>
					        </thead>
					        <tbody>
					            <tr>
					                <td>1</td>
					                <td>Lavish</td>
					                <td>xyz jain (test20)</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>2</td>
					                <td>Munish</td>
					                <td>abc (test40)</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>3</td>
					                <td>Sidhu</td>
					                <td>asd jain(test2)</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>4</td>
					                <td>jain</td>
					                <td>asd jain(test5)</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>5</td>
					                <td>Customer Support</td>
					                <td>qwe jain(test80)</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					        </tbody>
					    </table>
				    </div>
				    <div id="pending" class="tab-pane table-responsive fade"><br>
				    	<table id="pendingEntries" class="table table-striped table-bordered" style="width:100%">
					        <thead>
					            <tr>
					                <th>S.no.</th>
					                <th>Name</th>
					                <th>Requested for</th>
					                <th>Requested Date</th>
					                <th>View Details</th>
					            </tr>
					        </thead>
					        <tbody>
					            <tr>
					                <td>1</td>
					                <td>Lavish</td>
					                <td>xyz jain (test20)</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>2</td>
					                <td>Munish</td>
					                <td>abc (test40)</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>3</td>
					                <td>Sidhu</td>
					                <td>asd jain(test2)</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>4</td>
					                <td>jain</td>
					                <td>asd jain(test5)</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>5</td>
					                <td>Customer Support</td>
					                <td>qwe jain(test80)</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					        </tbody>
					    </table>
				    </div>
				    <div id="closed" class="tab-pane table-responsive fade"><br>
				    	<table id="closedEntries" class="table table-striped table-bordered" style="width:100%">
					        <thead>
					            <tr>
					                <th>S.no.</th>
					                <th>Name</th>
					                <th>Requested for</th>
					                <th>Requested Date</th>
					                <th>View Details</th>
					            </tr>
					        </thead>
					        <tbody>
					            <tr>
					                <td>1</td>
					                <td>Lavish</td>
					                <td>xyz jain (test20)</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>2</td>
					                <td>Munish</td>
					                <td>abc (test40)</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>3</td>
					                <td>Sidhu</td>
					                <td>asd jain(test2)</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>4</td>
					                <td>jain</td>
					                <td>asd jain(test5)</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>5</td>
					                <td>Customer Support</td>
					                <td>qwe jain(test80)</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					        </tbody>
					    </table>
				    </div>
				</div>
		    </div>
		</div> 	
    </div>
    <script data-require="popper.js@*" data-semver="1.12.9" src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
    	
    	$(document).ready(function() {
		    $('#openEntries, #pendingEntries, #closedEntries').DataTable();
		} );
    </script>
    
</body>
</html>
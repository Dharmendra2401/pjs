<?php 
include "../../config/config.php";
sub_admin_session_check();

?>
<!DOCTYPE>
<html>
<head>
<?php 
include "../../styles.php"
?>
</head>
<body>
     
<div class="container-fluid">
<?php include "../header.php"  ?>
</div>

		
		<div class="container shadow">
			<h3 class="ticket-header">Death/Duplicate Requests</h3>
			<div class="tab-bar">
				<div class="row">
					<div class="col-md-6">
						<ul class="nav nav-tabs">
						    <li class="nav-item">
						      <a class="nav-link active" data-toggle="tab" href="#open"><div class="triangle-down"></div>Open</a>
						    </li>
						    <!-- <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#pending"><div class="triangle-down"></div>Pending </a>
						    </li> -->
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
					                <th>Member Name</th>
					                <th>MID</th>
					                <th>Request Type</th>
					                <th>View Details</th>
					            </tr>
					        </thead>
					        <tbody>
					            <tr>
					                <td>1</td>
					                <td>Lavish</td>
					                <td>123123213</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>2</td>
					                <td>Munish</td>
					                <td>2342342</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>3</td>
					                <td>Sidhu</td>
					                <td>34345435</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>4</td>
					                <td>jain</td>
					                <td>455345345</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>5</td>
					                <td>Customer Support</td>
					                <td>4535345</td>
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
					                <th>Member Name</th>
					                <th>MID</th>
					                <th>Request Type</th>
					                <th>View Details</th>
					            </tr>
					        </thead>
					        <tbody>
					            <tr>
					                <td>1</td>
					                <td>Lavish</td>
					                <td>123123213</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>2</td>
					                <td>Munish</td>
					                <td>2342342</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>3</td>
					                <td>Sidhu</td>
					                <td>34345435</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>4</td>
					                <td>jain</td>
					                <td>455345345</td>
					                <td>21/02/20</td>
					                <td><a href="#">Show Details</a></td>
					            </tr>
					            <tr>
					                <td>5</td>
					                <td>Customer Support</td>
					                <td>4535345</td>
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
    <?php include "../../footer.php" ?>
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
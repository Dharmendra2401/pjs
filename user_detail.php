<!DOCTYPE html>
<html>
<head>
	 <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap4/dist/css/bootstrap.min.css">
	<link data-require="bootstrap-select@*" data-semver="1.13.5" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.5/css/bootstrap-select.css" />
	<link rel="stylesheet" type="text/css" href="fontawesome5/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<img class="" width="110" src="images/flooop.png">
			</div>
			<div class="col-md-6 d-flex justify-content-center">
				<div class="input-group my-auto">
				  <div class="input-group-prepend">
				    <span class="input-group-text"><i class="fa fa-search"></i></span>
				  </div>
				  <input type="text" class="form-control" placeholder="Search" list="userlist">
				  <datalist id="userlist">
				    <option value="user1">
				    <option value="user2">
				    <option value="user3">
				    <option value="user4">
				    <option value="user5">
				  </datalist>
				</div>
			</div>
			<div class="col-md-3 align-self-center text-right">
				 <button type="button" class="btn btn-primary open-login" data-toggle="modal" data-target="#loginPopup">
				    LOGIN/SIGUP
				  </button>
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
				  </ul>
				</nav>
			</div>
		</div>
	    
		<div class="row user-container">
			<div class="col-md-2 text-right">
				<img class="user-img img-fluid" src="images/dummy.png">
			</div>
			<div class="col-md-4 pl-0 align-self-end">
			    <h2 class="mb-1">Lavish Jain</h2>
			    <h5>MID1234567</h5>
			</div>
			<div class="col-md-6 align-self-end text-right">
				<a type="button" class="btn btn-info mr-3 login-signup" data-toggle="modal" data-target="#modal2">Save Profile</a>
			    <a type="button" class="btn btn-warning login-signup" data-toggle="modal" data-target="#modal2">Add Member</a>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="tab-bar">
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-3">
							<ul class="nav nav-tabs">
							    <li class="nav-item">
							      <a class="nav-link active" data-toggle="tab" href="#about">About</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" data-toggle="tab" href="#familyTree">Family Tree</a>
							    </li>
							  </ul>
						</div>
						<div class="col-md-6 align-self-center text-right">
								<i type="button" class="fas fa-phone-alt mx-2 contact-modal" data-toggle="modal" data-target="#modal1"></i>
								<i type="button" class="fas fa-download mx-2 login-signup" data-toggle="modal" data-target="#modal2"></i>
								<i type="button" class="fas fa-share mx-2 login-signup" data-toggle="modal" data-target="#modal2"></i>
						</div>
					</div>
			    </div>
				<div class="row">
					<div class="col-md-12 tab-content">
					    <div id="about" class="tab-pane active"><br>
					      <div class="container user-details">
						      <h3>Personal Details</h3>
					      	  <div class="row">
						      	  <div class="col-md-3">
						      	  	  <p>Full Name <strong>:</strong></p>
						      	  	  <p>Popular Name <strong>:</strong></p>
						      	  	  <p>Date of Birth <strong>:</strong></p>
						      	  	  <p>Age <strong>:</strong></p>
						      	  	  <p>Gender <strong>:</strong></p>
						      	  	  <p>Status <strong>:</strong></p>
						      	  	  <p>Mobile No. <strong>:</strong></p>
						      	  	  <p>Email id <strong>:</strong></p>
						      	  	  <p>Blood Group <strong>:</strong></p>
						      	  	  <p>Birth Time <strong>:</strong></p>
						      	  	  <p>Birth Place <strong>:</strong></p>
						      	  	  <p>Height <strong>:</strong></p>
						      	  </div>
						      	  <div class="col-md-9 text-uppercase">
						      	  	  <h5>Lavish Jain</h5>
						      	  	  <h5>Lavish</h5>
						      	  	  <h5>10/01/2010</h5>
						      	  	  <h5>40</h5>
						      	  	  <h5>Male</h5>
						      	  	  <h5>Single</h5>
						      	  	  <h5>xxxxxxx100</h5>
						      	  	  <h5>xxxxxx@gmail.com</h5>
						      	  	  <h5>B+</h5>
						      	  	  <h5>xx : xx</h5>
						      	  	  <h5>xxxxxx</h5>
						      	  	  <h5>xx</h5>
						      	  </div>
						      	  <div class="col-12 text-center">
								      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal1">More Details</button>
								  </div>
					          </div>
					          <h3>About Us</h3>
					          <div class="row">
					          	  <div class="col-md-3">
					          	  	  <p>Present Address <strong>:</strong></p>
					          	  </div>
					          	  <div class="col-md-9">
					          	  	  <h5>xxxxxx</h5>
					          	  </div>
					          </div>
					          <h3>Education</h3>
					          <div class="row">
					          	  <div class="col-md-3">
					          	  	  <p>Highest Education <strong>:</strong></p>
					          	  </div>
					          	  <div class="col-md-9">
					          	  	  <h5>Bachelor of Engineering</h5>
					          	  </div>
					          </div>
					          <h3>Occupation</h3>
					          <div class="row">
					          	  <div class="col-md-3">
					          	  	  <p>Occupation <strong>:</strong></p>
					          	  </div>
					          	  <div class="col-md-9">
					          	  	  <h5>Job/Software Engineer</h5>
					          	  </div>
					          </div>
					      </div>
					    </div>
					    <div id="familyTree" class="tab-pane fade"><br>
					    	<div class="container">
					    		<p>tree map</p>
					    	</div>
					    </div>
					</div>
			    </div>
			</div>    
		</div>    
			
			
         <!------------------- Login Modal ----------------------------->
		  <div class="modal fade loginPopup" id="loginPopup">
		    <div class="modal-dialog modal-dialog-centered login-container">
		        <!---------------- loads from modal.html---------- -->
		    </div>
		  </div>

			  
				 <!-- ---------------The Modal-1 ----------------------->
		  <div class="modal fade loginPopup" id="modal1">
		    <div class="modal-dialog modal-dialog-centered contact-container login-container">
		     
		    </div>
		  </div>
		         <!--------------- ----The Modal-1 ends---------------------->

		         		 <!-- ---------------The Modal-2 ----------------------->
		  <div class="modal fade loginPopup" id="modal2">
		    <div class="modal-dialog modal-dialog-centered lgn-sgn-container login-container">
		        
		    </div>
		  </div>
		         <!--------------- ----The Modal-2 ends---------------------->
	  </div>       
    
</body>
<script data-require="popper.js@*" data-semver="1.12.9" src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.min.js"></script>
 <!-- <script data-require="bootstrap-select@*" data-semver="1.13.5" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.5/js/bootstrap-select.min.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap4/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script>



	

	


	// var prevContent2 = $('.restoreModal2').html();
	

	// $(document).on('click', '.openBtn2',function(){
		
	//     $('.modal-body2').load('modal.html .loginContent');
	// });

</script>

</html>
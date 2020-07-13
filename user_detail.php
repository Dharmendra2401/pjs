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
				 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginPopup">
				    LOGIN/SIGUP
				  </button>
    		</div>
    		<div class="col-md-12">
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

		<div class="row">
			<div class="col-md-2 pr-0">
				<img class="user-img" src="images/dummy.png">
			</div>
			<div class="col-md-4 pl-0 align-self-end">
			    <h2 class="mb-1">Lavish Jain</h2>
			    <h5>MID1234567</h5>
			</div>
			<div class="col-md-6 align-self-end text-right">
				<a type="button" class="btn btn-info mr-3" data-toggle="modal" data-target="#modal2">Save Profile</a>
			    <a type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal2">Add Member</a>
			</div>
		</div>
		
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
					<i type="button" class="fas fa-phone-alt mx-2" data-toggle="modal" data-target="#modal1"></i>
					<i type="button" class="fas fa-download mx-2" data-toggle="modal" data-target="#modal2"></i>
					<i type="button" class="fas fa-share mx-2" data-toggle="modal" data-target="#modal2"></i>
			</div>
			</div>
		</div>

					 <!-- ---------------The Modal-1 ----------------------->
			  <div class="modal fade loginPopup" id="modal1">
			    <div class="modal-dialog modal-dialog-centered">
			      <div class="modal-content">
			        <div class="">
			          <button type="button" id="closeModal1" class="close mr-3" data-dismiss="modal">&times;</button>
			        </div>
			        
			        <!-- Modal body -->
			        <div class="restoreModal">
				        <div class="modal-body  py-5">
				          <div class="row">
				          	  <div class="col-md-6 border-dark border-right text-center">
				          	  	<p class="mb-0">xyz Jain ?</p>
				          	  	<p>To proceed please login</p>	
				          	  	<button type="button" class="btn btn-secondary openBtn">Login</button>
				          	  	<a href="signup.php" class="btn btn-secondary">SignUp</a>
				          	  </div>
				          	  <div class="col-md-6 text-center">
				          	  	   <p>Others who still want to cnnect</p>	
				          	  	   <button type="button" class="btn btn-secondary contact">Contact Admin</button>
				          	  </div>
				          </div>
				        </div>
			        </div>
			      </div>
			    </div>
			  </div>
			         <!--------------- ----The Modal-1 ends---------------------->

			         		 <!-- ---------------The Modal-2 ----------------------->
			  <div class="modal fade loginPopup" id="modal2">
			    <div class="modal-dialog modal-dialog-centered">
			      <div class="modal-content">
			        <div>
			          <button type="button" id="closeModal2" class="close mr-3" data-dismiss="modal">&times;</button>
			        </div>
			        
			        <div class="restoreModal2">
				        <!-- Modal body -->
				        <div class="modal-body2 mx-3 py-5 text-center">
			          	  	<p class="mb-5">To proceed please login / signup</p>	
			          	  	<button type="button" class="btn btn-secondary openBtn2">Login</button> 
			          	  	<a href="signup.php" class="btn btn-secondary">SignUp</a> 
				        </div>
			        </div>
			      </div>
			    </div>
			  </div>
			         <!--------------- ----The Modal-2 ends---------------------->

		<div class="row">
			<div class="col-md-12 tab-content">
			    <div id="about" class="tab-pane active"><br>
			      <div class="container">
			      	<h3 class="mb-md-3">Personal Details</h3>
			      	  <div class="row personal-details">
				      	  <div class="col-md-3">
				      	  	  <p>Full Name <strong class="float-right">:</strong></p>
				      	  	  <p>Popular Name <strong class="float-right">:</strong></p>
				      	  	  <p>Date of Birth <strong class="float-right">:</strong></p>
				      	  	  <p>Age <strong class="float-right">:</strong></p>
				      	  	  <p>Gender <strong class="float-right">:</strong></p>
				      	  	  <p>Status <strong class="float-right">:</strong></p>
				      	  	  <p>Mobile No. <strong class="float-right">:</strong></p>
				      	  	  <p>Email id <strong class="float-right">:</strong></p>
				      	  	  <p>Blood Group <strong class="float-right">:</strong></p>
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
				      	  </div>
				      	  <div class="col-12 text-center">
						      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal1">More Details</button>
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
    
</body>
<script data-require="popper.js@*" data-semver="1.12.9" src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.min.js"></script>
 <!-- <script data-require="bootstrap-select@*" data-semver="1.13.5" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.5/js/bootstrap-select.min.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap4/dist/js/bootstrap.min.js"></script>

<script>

	var prevContent = $('.restoreModal').html();
	$(document).on('click', '#closeModal1', function(){
	  $( ".modal-body").replaceWith(prevContent);
	});

	$(document).on('click', '.openBtn',function(){
		
	    $('.modal-body').load('modal.html .loginContent');
	});

	$(document).on('click', '.contact',function(){
		
	    $('.modal-body').load('modal.html .adminform');
	});


	var prevContent2 = $('.restoreModal2').html();
	$(document).on('click', '#closeModal2', function(){
	  $( ".modal-body2").replaceWith(prevContent2);
	});

	$(document).on('click', '.openBtn2',function(){
		
	    $('.modal-body2').load('modal.html .loginContent');
	});

</script>

</html>
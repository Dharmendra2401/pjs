<!DOCTYPE html>
<html>
<head>
	 <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
				<!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginPopup">
				    LOGIN/SIGUP
				  </button> -->
				  <div class="dropdown">
				    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				      loggedin
				    </button>
				    <div class="dropdown-menu">
				      <a class="dropdown-item" href="profile.php">View & update profile</a>
				      <a class="dropdown-item" href="saved_profile.php">Saved profiles</a>
				      <a class="dropdown-item openBtn-feed" type="button" data-toggle="modal" data-target="#feed">Feedback</a>
				      <a class="dropdown-item" href="index.php">Logout</a>
				    </div>
				  </div>
				  <!-- <button class="btn btn-primary openBtn-feed" data-toggle="modal" data-target="#feed">modal</button> -->  
			</div>
			<!-----------------------FEEDBACK MODEL------------------ -->
			 <div class="modal fade loginPopup" id="feed">
			    <div class="modal-dialog modal-dialog-centered">
			      <div class="modal-content">
			        <div class="">
			          <button type="button" id="closeModal1" class="close mr-3" data-dismiss="modal">&times;</button>
			        </div>
				        <div class="modal-body feeback-body">
				           <!-- loads from modal.html -->
				        </div>
			      </div>
			    </div>
		    </div>
            <!-----------------------DEATH UPDATE MODEL------------------ -->
		    <div class="modal fade loginPopup" id="update">
			    <div class="modal-dialog modal-dialog-centered">
			      <div class="modal-content">
			        <div class="">
			          <button type="button" id="closeModal1" class="close mr-3" data-dismiss="modal">&times;</button>
			        </div>
				        <div class="modal-body update-body">
				           <!-- loads from modal.html -->
				        </div>
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
				      <a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown">Family</a>
				      <div class="dropdown-menu custom-dropdwn">
					      <a class="dropdown-item" href="#">Family Tree</a>
					      <a class="dropdown-item" href="#">Birthday's</a>
					      <a class="dropdown-item open-update" type="button" data-toggle="modal" data-target="#update">Death Update</a>
					  </div>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<ul class="list-unstyled user-list">
					<li class="user-list-box">
						<a href="profile.php">
							<ul class="list-unstyled list-inline">
								<li class="list-inline-item">
									<i class="fas fa-heart"></i>
									<img class="user-list-img" src="images/dummy.png">
								</li>
								<li class="list-inline-item">
									<p>Lavish Jain</p>
							        <p>MID1234567</p>
							        <i class="far fa-trash-alt"></i>
								</li>
						    </ul>
					    </a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
<script data-require="popper.js@*" data-semver="1.12.9" src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).on('click', '.openBtn-feed',function(){
		
	    $('.feeback-body').load('modal.html .feeback');
	});
	$(document).on('click', '.open-update',function(){
		
	    $('.update-body').load('modal.html .death-update');
	});
</script>
</html>
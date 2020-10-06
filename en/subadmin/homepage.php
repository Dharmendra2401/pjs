<?php 

include "../../config/config.php";
sub_admin_session_check();

?>

<!DOCTYPE>
<html>
<head>
	<head>
	 <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

	<title>Vts</title>

	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
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
				      <a class="dropdown-item" href="<?php echo RE_HOME_ADMIN ;?>logout_admin.php">Logout</a>
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
					      <a class="dropdown-item" href="#">Registered Users Count</a>
					      <a class="dropdown-item" href="#">Death Count</a>
					      <a class="dropdown-item" href="#">OPJ Requests Report</a>
					      <a class="dropdown-item" href="#">Update Request Count</a>
					  </div>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown" href="#">Tickets</a>
				      <div class="dropdown-menu custom-dropdwn">	
					      <a class="dropdown-item" href="reg_request.php">New User Registration Requests</a>
					      <a class="dropdown-item" href="#">OPJ Contact Requests</a>
					      <a class="dropdown-item" href="#">User Updation Requests</a>
					      <a class="dropdown-item" href="#">Fake/Duplicate/Death Requests </a>
					  </div>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>	
		  
		  

    		<!-- carousel with thumnail -->
			<div class="carousel-container">
			    <div class="row">
			        <div class="col-md-12 px-0">
			            <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
			                <!-- slides -->
			                <div class="carousel-inner">
			                    <div class="carousel-item active"> <img class="img-fluid" src="https://i.imgur.com/weXVL8M.jpg" alt="Events"> </div>
			                    <div class="carousel-item"> <img class="img-fluid" src="https://i.imgur.com/Rpxx6wU.jpg" alt="Event"> </div>
			                    <div class="carousel-item"> <img class="img-fluid" src="https://i.imgur.com/83fandJ.jpg" alt="Event"> </div>
			                    <div class="carousel-item"> <img class="img-fluid" src="https://i.imgur.com/JiQ9Ppv.jpg" alt="Event"> </div>
			                </div> 
			                <!-- Left right -->
			                 <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> 
			                 	<i class="fas fa-chevron-left"></i>
		                 	 </a> 
		                 	 <a class="carousel-control-next" href="#custCarousel" data-slide="next">
			                 	 <i class="fas fa-chevron-right"></i>
		                 	 </a> 
			                 <!-- Thumbnails -->
			                  <ol class="carousel-indicators list-inline">
			                    <li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> <img src="https://i.imgur.com/weXVL8M.jpg" class="img-fluid"> </a> </li>
			                    <li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel"> <img src="https://i.imgur.com/Rpxx6wU.jpg" class="img-fluid"> </a> </li>
			                    <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel"> <img src="https://i.imgur.com/83fandJ.jpg" class="img-fluid"> </a> </li>
			                    <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="3" data-target="#custCarousel"> <img src="https://i.imgur.com/JiQ9Ppv.jpg" class="img-fluid"> </a> </li>
			                  </ol>
			            </div>
			        </div>
			    </div>
            </div>
    </div>
    <?php include "../../footer.php" ?>
    <script data-require="popper.js@*" data-semver="1.12.9" src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    
    
</body>
</html>
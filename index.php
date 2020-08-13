<!DOCTYPE html>
<html>
<head>
	 <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

	<title>vts </title>

	<link rel="stylesheet" type="text/css" href="bootstrap4/dist/css/bootstrap.min.css">
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
				  <!-- <input type="text" class="form-control" placeholder="Search" aria-label="Username"> -->
				  <input type="text" class="form-control" placeholder="Search" size="30" onkeyup="showResult(this.value)">
                  <div id="livesearch"></div>
				</div>
    		</div>
    		<div class="col-md-3 align-self-center text-right">
				 <button type="button" class="btn btn-primary open-login" data-toggle="modal" data-target="#loginPopup">
				    LOGIN/SIGUP
				  </button>
    		</div>
    		<div class="col-md-12 mb-2">
    			<nav class="navbar navbar-expand-sm nav-bg">
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

		  <!------------------- Login Modal ----------------------------->
			  <div class="modal fade loginPopup" id="loginPopup">
			    <div class="modal-dialog modal-dialog-centered login-container">
			        <!---------------- loads from modal.html---------- -->
			    </div>
			  </div>
		 

    		<!-- carousel with thumnail -->
    		<div class="row">
    		    <div class="col-md-12">
	    			<div class="carousel-container">
					    <div class="row">
					        <div class="col-md-12">
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
    		</div>
    </div>
  
</body>

<script data-require="popper.js@*" data-semver="1.12.9" src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap4/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</html>

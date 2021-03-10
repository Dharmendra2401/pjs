
<nav class="navbar navbar-expand-lg navbar-dark bg-navbar">
	<div class="container">
	  <a class="logo-link mt-0" href="<?php echo  RE_BUSSINESS_PATH;  ?>">
	  	<img class="sm-image" width="50px"  src="<?php echo  RE_BUSSINESS_PATH;  ?>images/logo.png">
	  </a>
	  <button type="button" class="toggle-menu btn btn-primary">menu</button>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	  	<form class="form-inline my-2 my-lg-0 ml-auto">
	  	  <select class="form-control mr-2">
		    <option selected>Selet City</option>
		    <option value="indore">Indore</option>
		    <option value="mumbai">Mumbai</option>
		    <option value="delhi">Delhi</option>
		  </select>	
	      <input class="form-control mr-sm-2 search" type="search" placeholder="Search" aria-label="Search">
	    </form>
	    <ul class="navbar-nav ml-auto d-flex align-items-center">
	      <li class="nav-item">
	        <a class="nav-link" href="filter.php">Categories</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="community.php">Community</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#" data-toggle="modal" data-target="#login">Login/Signup</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link text-center" href="#">
	        <i class="fas fa-briefcase d-block"></i> 	
	        My Bussiness
	        </a>
	      </li>
	    </ul>
	  </div>
    </div>
</nav>

<div class="modal fade show" id="login" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered login-container">
		<div class="modal-content business-login">
			<div class="modal-header">
			   <h3 class="modal-title">Login</h3>
			    <button type="button" id="close-login" class="close" data-dismiss="modal">×</button>
			</div> 
			<div class="modal-body container">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<form method="post" class="form-top" id="login-form-here">
						<div class="form-group row">
						<label class="col-form-label col-md-6 px-sm-0" for="email"> <span class="text-danger">*</span> Member ID </label>
						<input type="text" class="col-md-6 form-control text-uppercase" placeholder="MID" name="mid" id="mid" required="">
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-6 px-sm-0" for="password"> 
								<span class="text-danger">*</span> Password 
							</label>
							<input type="password" class="col-md-6 form-control" placeholder="Enter password" name="password" id="password" required="">

							<div class="text-right w-100 mt-2">
								<span class=""><input type="checkbox"> Show Password</span>
							</div>
						</div>
			            
			            <div class="row">
			            	<div class="col-md-12 text-right pr-0">
								<span id="miderror"></span>
								<button type="button" id="loginbtn" class="btn btn-success" name="login">LOGIN</button>
							</div>
			            </div>
						
						</form>
					</div>
				</div>
				<div class="text-center my-4">
					<p class="m-1">Forgot password and member id <a type="button" class="signup-link" >Click Here</a>
					</p>
				    <p>New to PJS? <a class="signup-link" href="http://www.porwadjain.com/en/signup.php">SignUp Now</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

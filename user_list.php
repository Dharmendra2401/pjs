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
		<div class="row">
			<div class="col-12">
				<ul class="list-unstyled user-list">
					<li class="user-list-box">
						<ul class="list-unstyled list-inline">
							<li class="list-inline-item">
								<img class="user-list-img" src="images/dummy.png">
							</li>
							<li class="list-inline-item">
								<p>Lavish Jain</p>
						        <p>MID1234567</p>
							</li>
					    </ul>
					</li>
					<li class="user-list-box">
						<ul class="list-unstyled list-inline">
							<li class="list-inline-item">
								<img class="user-list-img" src="images/dummy.png">
							</li>
							<li class="list-inline-item">
								<p>Lavish Jain</p>
						        <p>MID1234567</p>
							</li>
					    </ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
<?php 
include "../config/config.php";

?>

<!DOCTYPE html>
<html>
<head>
 <?php include "../styles.php" ?>
</head>
	<body>
	 <div class="container-fluid">
			 
				<?php include "header.php";  ?>
				<input type="hidden" id="current-users" value="<?php $current_user=1021;echo $current_user;?>">
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
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php include "../script.php"; ?>
</html>
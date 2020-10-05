<?php 
include "../config/config.php";
include 'PJS-demo/selectfunction.php';

?>

<!DOCTYPE html>
<html>
<head>
 <?php include "../styles.php" ?>
</head>
	<body>
	 <div class="container-fluid">
			 
				<?php include "header.php";  ?>
			</div>

			<div class="row">
				<div class="col-12">
					<ul class="list-unstyled user-list">
						<?php $saved_user_profile=get_all_saved_profile(); 
							if(mysqli_num_rows($saved_user_profile)>0) {
								while( $row1 = mysqli_fetch_assoc($saved_user_profile)){
						?>
									<li class="user-list-box">
										<a href="#">
											<ul class="list-unstyled list-inline">
												<li class="list-inline-item">
													<img class="user-list-img" src="<?php echo RE_HOME_PATH.''.$row1['display_pic'] ;?>">
												</li>
												<li class="list-inline-item">
													<p><?php echo $row1['first_name']; ?></p>
											        <p ><?php echo $row1['reference_member_Id']; ?></p>
											        <i class="far fa-trash-alt save_profile_delete" id="<?php echo $row1['reference_member_Id']; ?>"></i>
												</li>
										    </ul>
									    </a>
									</li>
							<?php  }
							}
							else{
						?>
								<li class="user-list-box">
										<a href="#">
											<ul class="list-unstyled list-inline">
												<li class="list-inline-item">
													<p>no record found</p>
												</li>
										    </ul>
									    </a>
									</li>
								<?php 
							}
					 	?>
					</ul>
				</div>
			</div>
			<?php include "../footer.php" ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php include "../script.php"; ?>
</html>
<style type="text/css">
	.fa-trash-alt:hover{
		color: red !important; 
	}
</style>
<script type="text/javascript">
		$(".save_profile_delete").on("click", function () {
		var reference=$(this).attr('id');
		$.post("<?php echo RE_HOME_PATH; ?>en/PJS-demo/save_profile_delete.php",
			{
				reference_id:reference
			},
		function(data,status){
			var status1=status;
			console.log(status1);
			if (status1=='success') {
				 window.location.reload();
				//console.log($(this).closest('.user-list-box'));

			}
			else{
				alert("Data: not updated");
			}
		});

	})
 
</script>

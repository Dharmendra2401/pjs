<?php 
include "../config/config.php";

?>
<!DOCTYPE html>
<html>
<?php include "../styles.php";  ?>
<body>
	<div class="container-fluid">
		<?php include "header.php";  ?>
			<div class="col-12 px-0">
				<img class="about-us-banner" src="https://i.imgur.com/Rpxx6wU.jpg" alt="Event">
			</div>
			<div class="col-md-10 offset-md-1 accordion" id="accordionExample">
				
				<?php 
				$getevent=mysqli_query($con,'select * from events where status="Y" ');
				$countevent=mysqli_num_rows($getevent);$count=0;
				while($showevent=mysqli_fetch_array($getevent)){
				
				?>
				<div class="row my-4">
					<div class="col-md-3 position-relative">
						<img class="img-fluid" src="<?php echo RE_HOME_PATH.'/'.$showevent['short_image']; ?>" alt="<?php  echo  $showevent['title']; ?>" title="<?php  echo  $showevent['title']; ?>">
						<div class="event-name"><?php  echo  $showevent['title']; ?></div>
					</div>
					<div class="col-md-9">
					
						<?php   
						echo '<span>'.substr($showevent['content'],0,700).'<span>';
						
						if(substr($showevent['content'],700)!=''){
                        echo '..... <a class="btn btn-primary btn-sm" href="'.base64_encode($showevent['id']).'">Read more</a>';

						}
							 ?>
					</div>
					</div>
				<?php $count++;} ?>
				</div>
				
			</div>
				
	</div>
	<?php include "../footer.php" ?>
</body>
<?php include "../script.php" ?>
</html>
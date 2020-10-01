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
				<h4 class="my-4">
				  इस सेक्शन में पोरवाड़ सामाजिक मंच के इवेंट्स (पुराने और आने वाले) के बारे में बताए
				</h4>

				<?php 
				$getevent=mysqli_query($con,'select * from events where status="Y" order by id desc');
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
						if (substr($showevent['content'],700)!=''){ echo '<div id="demo'.$count.'" class="collapse">
						'.substr(trim($showevent['content']),700).'
						</div><a data-toggle="collapse" href="#" data-target="#demo'.$count.'">Show more</a>';}
							 ?>
						
					</div>
					</div>
				<?php $count++;} if($countevent==0){
					echo "<div class='col-md-12 text-center'>No Records Found</div><br>";
				} ?>
				</div>
				
			</div>
				
	</div>
</body>
<?php include "../script.php" ?>
</html>
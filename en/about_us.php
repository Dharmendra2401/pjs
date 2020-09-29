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
			
		<div class="col-md-10 offset-md-1 about-us-bg">
		    <h2 class="my-4 text-center">About Us</h2>
		    <div>
			   <?php $getaboutus=mysqli_fetch_array(mysqli_query($con,'select content from about_us where id=1'));
			   if($getaboutus['content']!=''){
                echo $getaboutus['content'];
			   }else{
				   echo "<div class='alert alert-danger text-center'>No Records Founds </div> ";
			   }
			     
			   ?>
			</div>
        </div>
	</div>
</body>
<?php include "../script.php" ?>
</html>
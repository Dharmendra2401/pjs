<?php 
include "../config/config.php";
?>
<!DOCTYPE html>
<html>
<?php include "../styles.php";  ?>
<body>
	<div class="container-fluid">
		<?php include "header.php";  ?>
			<!-- <div class="col-12 px-0">
				<img class="about-us-banner" src="https://i.imgur.com/Rpxx6wU.jpg" alt="Event">
			</div> -->
			<div class="col-12">
				<div class="container">

  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Gallery</h1>

  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">
<?php $gallery=mysqli_query($con,'select * from gallery where status="Y" order by id desc'); 
$count=mysqli_num_rows($gallery);
while($getgallery=mysqli_fetch_array($gallery)){

?>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo RE_HOME_PATH.'/'.$getgallery['short_image']; ?>" alt="">
          </a>
    </div>
<?php } if ($count==0) { echo "<div class='col-md-12 text-center'>No Records Found</div><br><br>";}?>
  </div>

</div>
			</div>
		
	</div>
	<?php include "../footer.php" ?>
</body>
<?php include "../script.php" ?>
</html>

<?php  
include "../config/config.php";

?>
<!DOCTYPE html>
<html>
<?php include "../styles.php";  ?>
<body>
<div class="container-fluid">

<?php include "header.php";  ?>
</div>




<!-- carousel with thumnail -->
<div class="carousel-container">
<div class="row">
<div class="col-md-12 px-0">
<div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
<!-- slides -->
<div class="carousel-inner">
<?php 
$slider=mysqli_query($con,'select * from slider where status="Y"'); 
$countslider=mysqli_num_rows($slider);
$i=0;
while($getslider=mysqli_fetch_array($slider)){

?>
<div class="carousel-item <?php if($i==0){echo 'active';}; ?>"> <img class="img-fluid" src="<?php echo RE_HOME_PATH.$getslider['image']; ?>" alt="Events"> </div>
<?php $i++;} ?>
</div> 
<!-- Left right -->
<?php if($countslider>1){ ?>
<a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> 
<i class="fas fa-chevron-left"></i>
</a>
<a class="carousel-control-next" href="#custCarousel" data-slide="next">
<i class="fas fa-chevron-right"></i>
</a>
<?php } ?> 
<!-- Thumbnails -->
<!-- <ol class="carousel-indicators list-inline">
<li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> <img src="https://i.imgur.com/weXVL8M.jpg" class="img-fluid"> </a> </li>
<li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel"> <img src="https://i.imgur.com/Rpxx6wU.jpg" class="img-fluid"> </a> </li>
<li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel"> <img src="https://i.imgur.com/83fandJ.jpg" class="img-fluid"> </a> </li>
<li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="3" data-target="#custCarousel"> <img src="https://i.imgur.com/JiQ9Ppv.jpg" class="img-fluid"> </a> </li>
</ol> -->
</div>
</div>
<div class="col-md-12 home-card">
<h3>Offers and Discounts for Registered Members Coming Soon</h3>
</div>
</div>
</div>

</div>
<?php include "../footer.php" ?>
    		<!-- carousel with thumnail -->
			<div class="carousel-container">
			    <div class="row">
			        <div class="col-md-12 px-0">
			            <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
			                <!-- slides -->
			                <div class="carousel-inner">
							<?php 
							$slider=mysqli_query($con,'select * from slider where status="Y"'); 
							$countslider=mysqli_num_rows($slider);
							$i=0;
							while($getslider=mysqli_fetch_array($slider)){
							
							?>
			                    <div class="carousel-item <?php if($i==0){echo 'active';}; ?>"> <img class="img-fluid" src="<?php echo RE_HOME_PATH.$getslider['image']; ?>" alt="Events"> </div>
			                <?php $i++;} ?>
			                </div> 
			                <!-- Left right -->
						<?php if($countslider>0){ ?>
			                  <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> 
			                 	<i class="fas fa-chevron-left"></i>
		                 	 </a>
		                 	 <a class="carousel-control-next" href="#custCarousel" data-slide="next">
			                 	 <i class="fas fa-chevron-right"></i>
		                 	 </a>
							<?php } ?> 
			                 <!-- Thumbnails -->
			                  <!-- <ol class="carousel-indicators list-inline">
			                    <li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> <img src="https://i.imgur.com/weXVL8M.jpg" class="img-fluid"> </a> </li>
			                    <li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel"> <img src="https://i.imgur.com/Rpxx6wU.jpg" class="img-fluid"> </a> </li>
			                    <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel"> <img src="https://i.imgur.com/83fandJ.jpg" class="img-fluid"> </a> </li>
			                    <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="3" data-target="#custCarousel"> <img src="https://i.imgur.com/JiQ9Ppv.jpg" class="img-fluid"> </a> </li>
			                  </ol> -->
			            </div>

			            <div id="custCarousel1" class="carousel slide d-sm" data-ride="carousel" align="center">
			                <!-- slides -->
			                <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img src="http://www.porwadjain.com/uploads/slider/02c2d5d45c4b2f50e72c83beb4229df7ff6e1d46-1349x450.jpg" alt="Los Angeles">
							    </div>
							    <div class="carousel-item">
							      <img src="http://www.porwadjain.com/uploads/slider/02c2d5d45c4b2f50e72c83beb4229df7ff6e1d46-1349x450.jpg" alt="Chicago">
							    </div>
							    <div class="carousel-item">
							      <img src="http://www.porwadjain.com/uploads/slider/16e1435fac44889c10776b0e103ead4493ebe494-1349x450.jpg" alt="New York">
							    </div>
			                 
				            </div>
				             <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> 
			                 	<i class="fas fa-chevron-left"></i>
		                 	 </a>
		                 	 <a class="carousel-control-next" href="#custCarousel" data-slide="next">
			                 	 <i class="fas fa-chevron-right"></i>
		                 	 </a>
				        </div>
			        <div class="col-md-12 home-card">
			        	<h3>Offers and Discounts for Registered Members Coming Soon</h3>
			        </div>
			    </div>
            </div>
    		    
    </div>
  <?php include "../footer.php" ?>
</body>

<?php include "../script.php" ?>
</html>

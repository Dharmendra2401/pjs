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

  <div class="row text-center text-lg-left gallery-wrapper">
<?php $gallery=mysqli_query($con,'select * from gallery where status="Y" order by id desc'); 
$count=mysqli_num_rows($gallery);$countImg = 1;
while($getgallery=mysqli_fetch_array($gallery)){
	
?>
    <div class="col-lg-3 col-md-4 col-6 gallery">
      <a href="#" class="d-block mb-4 h-100">
        <img class="img-fluid hover-shadow cursor" src="<?php echo RE_HOME_PATH.'/'.$getgallery['short_image']; ?>" onclick="openModal();currentSlide(<?php echo $countImg; ?>)" alt="">
      </a>
    </div>
  

    

    
  
   
<?php $countImg++;} if ($count==0) { echo "<div class='col-md-12 text-center'>No Records Found</div><br><br>";}?>

<div id="myModal" class="modal">
    	<span class="close cursor" onclick="closeModal()">&times;</span>
    	<div class="modal-content">
    		<?php   $gallerys=mysqli_query($con,'select * from gallery where status="Y" order by id desc'); $countt=mysqli_num_rows($gallerys);$countImgg = 1;
				while($gallerysss=mysqli_fetch_array($gallerys)){
				?>
    		 <div class="mySlides">
		     <!--   <div class="numbertext"><?php echo $countImgg; ?></div> -->
		       <img src="<?php echo RE_HOME_PATH.'/'.$gallerysss['long_image']; ?>" style="width:100%">
		     </div>
             
            
		     <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		    <a class="next" onclick="plusSlides(1)">&#10095;</a>

		    <!-- <div class="caption-container">
		      <p id="caption"></p>
		    </div> -->
             <?php $countImgg++;} ?>

    	</div>

    </div>
  </div>


</div>
			</div>
		
	</div>


<script>
	// var n = '<?php echo $countImg; ?>';
	// alert(n);
	function openModal() {
	  document.getElementById("myModal").style.display = "block";
	}

	function closeModal() {
	  document.getElementById("myModal").style.display = "none";
	}

	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	  
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("demo");
	  var captionText = document.getElementById("caption");
	  if (n > slides.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";
	  // dots[slideIndex-1].className += " active";
	  // captionText.innerHTML = dots[slideIndex-1].alt;
	}
</script>

	<?php include "../footer.php" ?>
</body>
<?php include "../script.php" ?>
</html>
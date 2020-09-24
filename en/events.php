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
				<div class="row my-4">
					<div class="col-md-3 position-relative">
						<img class="img-fluid" src="https://i.imgur.com/Rpxx6wU.jpg" alt="Event">
						<div class="event-name">Event Name</div>
					</div>
					<div class="col-md-9">
						<p>
						   It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).	
						</p>
						<p>
						   It is a long established fact that a reader will be distracted by the readable content of a 
						</p>    
						<p id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">   page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem
						   Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).	
						</p>
						 <span class="more" data-toggle="collapse" data-target="#collapseOne">Show More</span>
					</div>
				</div>
				<div class="row my-4">
					<div class="col-md-3 position-relative">
						<img class="img-fluid" src="https://i.imgur.com/Rpxx6wU.jpg" alt="Event">
						<div class="event-name">Event Name</div>
					</div>
					<div class="col-md-9">
						<p>
						   It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).	
						</p>
						<p>
						   It is a long established fact that a reader will be distracted by the readable content of a 
						</p>    
						<p id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">   page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem
						   Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).	
						</p>
						 <span class="collapsed more" data-toggle="collapse" data-target="#collapseTwo">Show More</span>
					</div>
				</div>
			</div>
				
	</div>
</body>
<script data-require="popper.js@*" data-semver="1.12.9" src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</html>
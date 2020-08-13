
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
			
		  <!------------------- Login Modal ----------------------------->
		  <div class="restoreModal">
			  <div class="modal fade loginPopup" id="loginPopup">
			    <div class="modal-dialog modal-dialog-centered">
			      <div class="modal-content">
			        <div class="">
			          <button type="button" id="close-login" class="close m-2" data-dismiss="modal">&times;</button>
			        </div> 
			        <div class="modal-body login-container">
			        	<!-- loads from modal.html -->
			        </div>
			      </div>
			    </div>
			  </div>
		  </div>

    		<!-- carousel with thumnail -->
    		<div class="row">
    		    <div class="col-md-12">
	    			<div class="carousel-container">
					    <div class="row">
					        <div class="col-md-12">
					            <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
					                <!-- slides -->
					                <div class="carousel-inner">
					                    <div class="carousel-item active"> <img class="img-fluid" src="https://i.imgur.com/weXVL8M.jpg" alt="Events"> </div>
					                    <div class="carousel-item"> <img class="img-fluid" src="https://i.imgur.com/Rpxx6wU.jpg" alt="Event"> </div>
					                    <div class="carousel-item"> <img class="img-fluid" src="https://i.imgur.com/83fandJ.jpg" alt="Event"> </div>
					                    <div class="carousel-item"> <img class="img-fluid" src="https://i.imgur.com/JiQ9Ppv.jpg" alt="Event"> </div>
					                </div> 
					                <!-- Left right -->
					                 <a class="carousel-control-prev" href="#custCarousel" data-slide="prev"> 
					                 	<i class="fas fa-chevron-left"></i>
				                 	 </a> 
				                 	 <a class="carousel-control-next" href="#custCarousel" data-slide="next">
					                 	 <i class="fas fa-chevron-right"></i>
				                 	 </a> 
					                 <!-- Thumbnails -->
					                  <ol class="carousel-indicators list-inline">
					                    <li class="list-inline-item active"> <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel"> <img src="https://i.imgur.com/weXVL8M.jpg" class="img-fluid"> </a> </li>
					                    <li class="list-inline-item"> <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel"> <img src="https://i.imgur.com/Rpxx6wU.jpg" class="img-fluid"> </a> </li>
					                    <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel"> <img src="https://i.imgur.com/83fandJ.jpg" class="img-fluid"> </a> </li>
					                    <li class="list-inline-item"> <a id="carousel-selector-2" data-slide-to="3" data-target="#custCarousel"> <img src="https://i.imgur.com/JiQ9Ppv.jpg" class="img-fluid"> </a> </li>
					                  </ol>
					            </div>
					        </div>
					    </div>
	                </div>
    		    </div>	
    		</div>
    </div>
  
</body>

<?php include "../script.php" ?>
</html>

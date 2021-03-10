<?php include "../config/config.php" ;

?>

<!DOCTYPE>
<html>
<head>

<?php  include "styles.php" ?>
    
</head>

<body>
<?php  include "header.php" ?>

<div class="row mx-0">
    <div class="col-md-2 px-0">
       <button type="button" class="toggle-menu btn btn-primary">menu</button>
       <div class="filter-container">
           <div class="filter-heading">Filters</div>
           <ul class="list-unstyled filter-list">
               <li>Location</li>
               <li>Rating</li>
               <li>Price</li>
               <li>Offers</li>
               <li>
                   <select class="custom-select">
                      <option selected>Category</option>
                      <option value="1">Food</option>
                      <option value="2">Clothes</option>
                      <option value="3">Automobiles</option>
                      <option value="4">Spa</option>
                   </select>
               </li>
               <li>
                   <select class="custom-select">
                      <option selected>Company Mode</option>
                      <option value="1">Service</option>
                      <option value="2">Product</option>
                   </select>
               </li>
           </ul> 
       </div> 
    </div>
    <div class="col-md-9 ml-60">
        <div class="filter-wrapper">
            <div class="row card-container mx-0">
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="position-relative">
                        <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/sweter.jpg"  class="img-fluid card-img" alt="...">
                        <span class="offer">20% OFF</span>
                        <span class="category-text">Product</span>
                        </div>
                      <div class="card-body card-content">
                        <h6 class="card-title text-center">Product Name</h6>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <div class="d-flex justify-content-between mb-2">
                            <span><i class="fas fa-rupee-sign"></i> 350</span>
                            <span><i class="fas fa-star"></i> 3.5</span>
                        </div>
                        <span><i class="fas fa-map-marker-alt"></i> Indore</span>
                        <a href="#" class="btn btn-primary d-block mt-3">Get Enquiry</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="position-relative">
                        <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/pant.jpg"  class="img-fluid card-img" alt="...">
                        <span class="offer">20% OFF</span>
                        <span class="category-text">Service</span>
                        </div>
                      <div class="card-body card-content">
                        <h6 class="card-title text-center">Product Name</h6>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <div class="d-flex justify-content-between mb-2">
                            <span><i class="fas fa-rupee-sign"></i> 350</span>
                            <span><i class="fas fa-star"></i> 3.5</span>
                        </div>
                        <span><i class="fas fa-map-marker-alt"></i> Indore</span>
                        <a href="#" class="btn btn-primary d-block mt-3">Get Enquiry</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="position-relative">
                        <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/shirts.jpg"  class="img-fluid card-img" alt="...">
                        <span class="offer">20% OFF</span>
                        <span class="category-text">Product</span>
                        </div>
                      <div class="card-body card-content">
                        <h6 class="card-title text-center">Product Name</h6>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <div class="d-flex justify-content-between mb-2">
                            <span><i class="fas fa-rupee-sign"></i> 350</span>
                            <span><i class="fas fa-star"></i> 3.5</span>
                        </div>
                        <span><i class="fas fa-map-marker-alt"></i> Indore</span>
                        <a href="#" class="btn btn-primary d-block mt-3">Get Enquiry</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="position-relative">
                        <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/shirt.jpg"  class="img-fluid card-img" alt="...">
                        <span class="offer">20% OFF</span>
                        <span class="category-text">Service</span>
                        </div>
                      <div class="card-body card-content">
                        <h6 class="card-title text-center">Product Name</h6>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <div class="d-flex justify-content-between mb-2">
                            <span><i class="fas fa-rupee-sign"></i> 350</span>
                            <span><i class="fas fa-star"></i> 3.5</span>
                        </div>
                        <span><i class="fas fa-map-marker-alt"></i> Indore</span>
                        <a href="#" class="btn btn-primary d-block mt-3">Get Enquiry</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="position-relative">
                        <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/clothes.jpg"  class="img-fluid card-img" alt="...">
                        <span class="offer">20% OFF</span>
                        <span class="category-text">Product</span>
                        </div>
                      <div class="card-body card-content">
                        <h6 class="card-title text-center">Product Name</h6>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <div class="d-flex justify-content-between mb-2">
                            <span><i class="fas fa-rupee-sign"></i> 350</span>
                            <span><i class="fas fa-star"></i> 3.5</span>
                        </div>
                        <span><i class="fas fa-map-marker-alt"></i> Indore</span>
                        <a href="#" class="btn btn-primary d-block mt-3">Get Enquiry</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="position-relative">
                        <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/sweter.jpg"  class="img-fluid card-img" alt="...">
                        <span class="offer">20% OFF</span>
                        <span class="category-text">Product</span>
                        </div>
                      <div class="card-body card-content">
                        <h6 class="card-title text-center">Product Name</h6>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <div class="d-flex justify-content-between mb-2">
                            <span><i class="fas fa-rupee-sign"></i> 350</span>
                            <span><i class="fas fa-star"></i> 3.5</span>
                        </div>
                        <span><i class="fas fa-map-marker-alt"></i> Indore</span>
                        <a href="#" class="btn btn-primary d-block mt-3">Get Enquiry</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="position-relative">
                        <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/pant.jpg"  class="img-fluid card-img" alt="...">
                        <span class="offer">20% OFF</span>
                        <span class="category-text">Service</span>
                        </div>
                      <div class="card-body card-content">
                        <h6 class="card-title text-center">Product Name</h6>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <div class="d-flex justify-content-between mb-2">
                            <span><i class="fas fa-rupee-sign"></i> 350</span>
                            <span><i class="fas fa-star"></i> 3.5</span>
                        </div>
                        <span><i class="fas fa-map-marker-alt"></i> Indore</span>
                        <a href="#" class="btn btn-primary d-block mt-3">Get Enquiry</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="position-relative">
                        <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/shirts.jpg"  class="img-fluid card-img" alt="...">
                        <span class="offer">20% OFF</span>
                        <span class="category-text">Product</span>
                        </div>
                      <div class="card-body card-content">
                        <h6 class="card-title text-center">Product Name</h6>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        <div class="d-flex justify-content-between mb-2">
                            <span><i class="fas fa-rupee-sign"></i> 350</span>
                            <span><i class="fas fa-star"></i> 3.5</span>
                        </div>
                        <span><i class="fas fa-map-marker-alt"></i> Indore</span>
                        <a href="#" class="btn btn-primary d-block mt-3">Get Enquiry</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "script.php"; ?>

<script>
$(document).ready(function(){
  $(".toggle-menu").click(function(){
    $(".filter-container").toggle();
  });
});
</script>
</body>
</html>
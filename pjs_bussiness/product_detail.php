<?php include "../config/config.php" ;

?>

<!DOCTYPE>
<html>
<head>

<?php  include "styles.php" ?>
</head>

<body>
<?php  include "header.php" ?>

<div class="container product-container">
    <div class="row mx-0">
        <div class="col-md-5">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-3 pr-0 d-flex justify-content-between flex-column">
                      <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/clothes.jpg"  class="img-fluid preview-img" alt="...">

                      <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/pant.jpg"  class="img-fluid preview-img" alt="...">
                      <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/shirt.jpg"  class="img-fluid preview-img" alt="...">
                  </div>
                  <div class="col-9">
                    <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/clothes.jpg"  class="img-fluid selected-img" alt="...">
                  </div>
                  <div class="col-md-6 mt-3">
                      <a href="#" class="btn btn-primary d-block">Share</a>
                  </div>
                  <div class="col-md-6 mt-3">
                      <a href="#" class="btn btn-primary d-block">Get Enquiry</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card view-seller">
                <h5>Seller Information</h5>
                <div class="row">
                    <div class="col-4 logo">
                        <img class="img-fluid"  src="<?php echo  RE_BUSSINESS_PATH;  ?>images/logo.png">
                    </div>
                    <div class="col-8">
                         <h4>SKS World Enterprises</h4>
                         <a href="#" class="btn btn-primary mt-2 px-5 view-btn">View</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="text-heading">Product Name</div>
            <span class="price"><i class="fas fa-rupee-sign"></i> 800</span>
            <del class="offer">1000</del>
            <span class="discount">20% off</span>
            <div class="location-txt"><i class="fas fa-map-marker-alt"></i> <span>indore</span></div>
            <span class="category-txt">
                <span>Category : </span>
                <strong> Clothing</strong>
            </span>
            
            <h5 class="mt-4">Product Details</h5>
            
            <div class="row detail-list">
                <div class="col-md-2 col-4">
                    <span>Size <span class="float-right">:</span></span>
                </div>
                <div class="col-md-10 col-8">
                    <span class="font-weight-bold">L</span>
                </div>
                <div class="col-md-2 col-4">
                    <span>Color <span class="float-right">:</span></span>
                </div>
                <div class="col-md-10 col-8">
                    <span class="font-weight-bold">Red</span>
                </div>
                <div class="col-md-2 col-4">
                    <span>Brand <span class="float-right">:</span></span>
                </div>
                <div class="col-md-10 col-8">
                    <span class="font-weight-bold">Peter England</span>
                </div>
            </div>
            <div class="description">
                <h5>Product Description</h5>
                <p>
                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </p>
            </div>
            <div class="review">
                <h5>Ratings and Reviews</h5> 
                <div class="row">
                    <div class="col-md-3 d-flex align-items-center flex-column border-right">
                      <div class="d-flex align-items-center">
                        <span class="rating-no">3.2 </span>
                        <span> <i class="fas fa-star primary-text"></i></span>
                      </div>
                        <p>Verified Customers</p>
                    </div>
                    <div class="col-md-7 pl-0">
                        <div class="row">
                            <div class="col-2 pr-0 d-flex justify-content-center">
                                <p class="">5 <i class="fas fa-star primary-text"></i></p>
                            </div>
                            <div class="col-9 pl-0">
                                <div class="progress">
                                  <div class="progress-bar success-bg" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-1 pl-0">
                                <p class="">39</p>
                            </div>

                            <div class="col-2 pr-0 d-flex justify-content-center">
                                <p class="">4 <i class="fas fa-star primary-text"></i></p>
                            </div>
                            <div class="col-9 pl-0">
                                <div class="progress">
                                  <div class="progress-bar success-bg" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-1 pl-0">
                                <p class="">21</p>
                            </div>

                            <div class="col-2 pr-0 d-flex justify-content-center">
                                <p class="">3 <i class="fas fa-star primary-text"></i></p>
                            </div>
                            <div class="col-9 pl-0">
                                <div class="progress">
                                  <div class="progress-bar success-bg" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-1 pl-0">
                                <p class="">12</p>
                            </div>

                            <div class="col-2 pr-0 d-flex justify-content-center">
                                <p class="">2 <i class="fas fa-star primary-text"></i></p>
                            </div>
                            <div class="col-9 pl-0">
                                <div class="progress">
                                  <div class="progress-bar success-bg" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-1 pl-0">
                                <p class="">7</p>
                            </div>

                            <div class="col-2 pr-0 d-flex justify-content-center">
                                <p class="">1 <i class="fas fa-star primary-text"></i></p>
                            </div>
                            <div class="col-9 pl-0">
                                <div class="progress">
                                  <div class="progress-bar success-bg" role="progressbar" style="width: 5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-1 pl-0">
                                <p class="">3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-list">
                <div class="row review-desc">
                    <div class="col-md-1 col-2 pr-0">
                      <div class="rating">
                          <span>5 </span>
                          <i class="fas fa-star"></i>
                      </div>
                    </div>
                    <div class="col-md-11 col-10">
                        <p>
                          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        </p>
                    </div>
                </div>
                <div class="row review-desc">
                    <div class="col-md-1 col-2 pr-0">
                      <div class="rating">
                          <span>5 </span>
                          <i class="fas fa-star"></i>
                      </div>
                    </div>
                    <div class="col-md-11 col-10">
                        <p>
                          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        </p>
                    </div>
                </div>
            </div>
            <div class="add-review">
                <div class="row">
                    <div class="col-6">
                        <p class="add-txt">Add a Review</p>
                        <p class="username">User name</p>
                          <i class="far fa-star"></i>
                          <i class="far fa-star"></i>
                          <i class="far fa-star"></i>
                          <i class="far fa-star"></i>
                          <i class="far fa-star"></i>
                    </div>
                    <div class="col-6 text-right">
                        <i class="fas fa-lock lock"></i>
                        <p class="date">02-02-2021</p>
                    </div>  
                    <div class="col-12">
                        <form>
                             <input type="text" name="" placeholder="Add Review here" class="form-control">
                        </form>  
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 related-products">
            <h4>Related Products</h4>
            <div class="px-5 px-sm-0">
                <div class="owl-carousel owl-theme card-container">
                    <div class="item">
                      <div class="card">
                          <div class="position-relative">
                              <div>
                                 <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/sweter.jpg"  class="img-fluid card-img" alt="...">
                              </div>
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
                          
                        </div>
                      </div>
                    </div>
                    <div class="item">
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
                            
                          </div>
                        </div>
                    </div>
                    <div class="item">
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
                            
                          </div>
                        </div>
                    </div>
                    <div class="item">
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
                            
                          </div>
                        </div>
                    </div>
                    <div class="item">
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
                            
                          </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="position-relative">
                                <div>
                                   <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/sweter.jpg"  class="img-fluid card-img" alt="...">
                                </div>
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
                            
                          </div>
                        </div>
                    </div>
                    <div class="item">
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
                            
                          </div>
                        </div>
                    </div>
                    <div class="item">
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
                            
                          </div>
                        </div>
                    </div>
                    <div class="item">
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
                            
                          </div>
                        </div>
                    </div>
                    <div class="item">
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
                            
                          </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>


<?php  include "script.php" ?> 
<script>
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

});
</script>
</body>
</html>
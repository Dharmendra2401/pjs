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
    <div class="col-md-2 px-0 menu-wrapper">
        <?php  include "sidebar.php" ?>
    </div>
    <div class="col-md-9 ml-60">
        <div class="dashboard-wrapper">
            <div class="row">
                <div class="col-md-4 mb-sm-10">
                    <div class="dashboard-card">
                        <div class="row">
                            <div class="col-6 txt-body">
                                 <h6 class="primary-text font-weight-bold">There is still need to update your business profile</h6>
                                 <button type="button" class="btn btn-primary">Update</button> 
                            </div>
                            <div class="col-6">
                              <img  class="img-fluid dashboard-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/user.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-sm-10">
                    <div class="dashboard-card">
                        <div class="row">
                            <div class="col-6 txt-body">
                                 <h6 class="primary-text font-weight-bold">There is still need to update your business profile</h6>
                                 <button type="button" class="btn btn-primary">Share</button> 
                            </div>
                            <div class="col-6">
                              <img  class="img-fluid dashboard-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/store.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row mx-sm-0 small-card danger-bg">
                        <div class="col-8">
                            <h6>My Inventory</h6>
                            <h6>5 Items</h6>
                        </div>
                        <div class="col-4 text-right pr-0">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>

                    <div class="row mx-sm-0 small-card success-bg">
                        <div class="col-8">
                            <h6>My Ratings</h6>
                            <h6>3.5/5</h6>
                        </div>
                        <div class="col-4 text-right pr-0">
                            <i class="fas fa-star"></i>
                        </div>
                    </div> 
                </div>
            </div>

            <div class="row listing">
                <div class="col-12 pr-0 pl-sm-0 card-container">
                  <div class="card">
                      <div class="card title">
                          <div class="row ">
                              <div class="col-md-6 mb-sm-10">
                                <h4 class="d-inline">My listings</h4>
                              </div>
                              <div class="col-md-6 d-flex justify-content-end align-items-center">
                                   <select class="form-control select-product">
                                      <option selected>All Products</option>
                                      <option value="indore">Product 1</option>
                                      <option value="mumbai">Product 2</option>
                                      <option value="delhi">Product 3</option>
                                   </select>
                              </div>
                          </div>
                      </div>
                      <h5 class="list-title">Clothes</h5>
                      <div class="row card-listing">
                          <div class="col-md-3">
                            <div class="card">
                                <div class="position-relative">
                                    <div>
                                       <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/sweter.jpg"  class="img-fluid card-img" alt="...">
                                    </div>
                                    <span class="offer">20% OFF</span>
                                    <span class="category-text">Product</span>
                                </div>
                                <div class="card-body card-content">
                                  <p class="font-weight-bold text-center mb-2">Product Name</p>
                                  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                  <div class="d-flex justify-content-between mb-2">
                                      <span><i class="fas fa-rupee-sign"></i> 350</span>
                                      <span><i class="fas fa-star"></i> 3.5</span>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="card">
                                <div class="position-relative">
                                    <div>
                                       <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/sweter.jpg"  class="img-fluid card-img" alt="...">
                                    </div>
                                    <span class="offer">20% OFF</span>
                                    <span class="category-text">Product</span>
                                </div>
                                <div class="card-body card-content">
                                  <p class="font-weight-bold text-center mb-2">Product Name</p>
                                  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                  <div class="d-flex justify-content-between mb-2">
                                      <span><i class="fas fa-rupee-sign"></i> 350</span>
                                      <span><i class="fas fa-star"></i> 3.5</span>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="card">
                                <div class="position-relative">
                                    <div>
                                       <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/sweter.jpg"  class="img-fluid card-img" alt="...">
                                    </div>
                                    <span class="offer">20% OFF</span>
                                    <span class="category-text">Product</span>
                                </div>
                                <div class="card-body card-content">
                                  <p class="font-weight-bold text-center mb-2">Product Name</p>
                                  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                  <div class="d-flex justify-content-between mb-2">
                                      <span><i class="fas fa-rupee-sign"></i> 350</span>
                                      <span><i class="fas fa-star"></i> 3.5</span>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="card">
                                <div class="position-relative">
                                    <div>
                                       <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/sweter.jpg"  class="img-fluid card-img" alt="...">
                                    </div>
                                    <span class="offer">20% OFF</span>
                                    <span class="category-text">Product</span>
                                </div>
                                <div class="card-body card-content">
                                  <p class="font-weight-bold text-center mb-2">Product Name</p>
                                  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                  <div class="d-flex justify-content-between mb-2">
                                      <span><i class="fas fa-rupee-sign"></i> 350</span>
                                      <span><i class="fas fa-star"></i> 3.5</span>
                                  </div>
                                </div>
                            </div>
                          </div>
                      </div>

                       <h5 class="list-title">Automobiles</h5>
                       <div class="row card-listing">
                          <div class="col-md-3">
                            <div class="card">
                                <div class="position-relative">
                                    <div>
                                       <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/sweter.jpg"  class="img-fluid card-img" alt="...">
                                    </div>
                                    <span class="offer">20% OFF</span>
                                    <span class="category-text">Product</span>
                                </div>
                                <div class="card-body card-content">
                                  <p class="font-weight-bold text-center mb-2">Product Name</p>
                                  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                  <div class="d-flex justify-content-between mb-2">
                                      <span><i class="fas fa-rupee-sign"></i> 350</span>
                                      <span><i class="fas fa-star"></i> 3.5</span>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="card">
                                <div class="position-relative">
                                    <div>
                                       <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/sweter.jpg"  class="img-fluid card-img" alt="...">
                                    </div>
                                    <span class="offer">20% OFF</span>
                                    <span class="category-text">Product</span>
                                </div>
                                <div class="card-body card-content">
                                  <p class="font-weight-bold text-center mb-2">Product Name</p>
                                  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                  <div class="d-flex justify-content-between mb-2">
                                      <span><i class="fas fa-rupee-sign"></i> 350</span>
                                      <span><i class="fas fa-star"></i> 3.5</span>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="card">
                                <div class="position-relative">
                                    <div>
                                       <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/sweter.jpg"  class="img-fluid card-img" alt="...">
                                    </div>
                                    <span class="offer">20% OFF</span>
                                    <span class="category-text">Product</span>
                                </div>
                                <div class="card-body card-content">
                                  <p class="font-weight-bold text-center mb-2">Product Name</p>
                                  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                  <div class="d-flex justify-content-between mb-2">
                                      <span><i class="fas fa-rupee-sign"></i> 350</span>
                                      <span><i class="fas fa-star"></i> 3.5</span>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="card">
                                <div class="position-relative">
                                    <div>
                                       <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/sweter.jpg"  class="img-fluid card-img" alt="...">
                                    </div>
                                    <span class="offer">20% OFF</span>
                                    <span class="category-text">Product</span>
                                </div>
                                <div class="card-body card-content">
                                  <p class="font-weight-bold text-center mb-2">Product Name</p>
                                  <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                  <div class="d-flex justify-content-between mb-2">
                                      <span><i class="fas fa-rupee-sign"></i> 350</span>
                                      <span><i class="fas fa-star"></i> 3.5</span>
                                  </div>
                                </div>
                            </div>
                          </div>
                       </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php  include "script.php" ?>
<?php  include "modal.php" ?>



<script>
$(document).ready(function(){
  $(".toggle-menu").click(function(){
    $(".menu").toggle();
  });
});
</script>
</body>

</html>
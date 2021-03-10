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
    <div class="col-md-2 menu-wrapper">
        <?php  include "sidebar.php" ?> 
    </div>
    <div class="col-md-9 ml-60">
        <div class="dashboard-wrapper manage-product">
            <div class="row listing">
                <div class="col-12 pr-0 card-container">
                  <div class="card">
                      <div class="card title">
                          <div class="row ">
                              <div class="col-md-12">
                                  <ul class="nav nav-tabs" role="tablist">
                                      <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#activeproduct">Active Products</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#inactiveproducts">Inactive Products</a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="col-md-12 my-4">
                                    <span class="float-right">
                                         <span class="category-txt">Category</span>
                                         <select class="form-control select-product">
                                            <option selected>All Products</option>
                                            <option value="indore">Product 1</option>
                                            <option value="mumbai">Product 2</option>
                                            <option value="delhi">Product 3</option>
                                         </select>
                                    </span>    
                              </div>
                          </div>
                      </div>

                      <div class="tab-content">
                          <div id="activeproduct" class="tab-pane active">
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
                                      <label class="switch" data-toggle="modal" data-target="#Modal4">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                      </label>
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
                                      <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                      </label>
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
                                      <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                      </label>
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
                                      <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                      </label>
                                    </div>
                                </div>
                              </div>
                          </div>
                          </div>
                          <div id="inactiveproducts" class="tab-pane fade">
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
                                          <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                          </label>
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
</div>

<?php  include "script.php" ?>
</body>
<?php  include "modal.php" ?>  
</html>
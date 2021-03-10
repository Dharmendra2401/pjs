<?php include "../config/config.php" ;

?>

<!DOCTYPE>
<html>
<head>

<?php  include "styles.php" ?>
    
</head>

<body>
<?php  include "header.php" ?>

<div class="container">
    <div class="community-header">
        <img width="80px" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/profile.png">
        <h2>Welcome to Community</h2>
    </div>
    <div class="card-container community-body">
        <div class="card">
            <h3>Post your Requirement</h3>

            <div class="row add-post">
                <div class="col-md-1">
                    <img width="80px" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/profile.png">
                </div> 
                <div class="col-md-11">
                    <form>
                         <input type="text" name="" placeholder="Write your post here" class="form-control"> 
                         <div class="row">
                             <div class="col-md-2">
                                <div class="add-photos">
                                    <h3 class="fas fa-plus"></h3>
                                    <h4>Add Photos</h4>
                                    <input type="file" name="">
                                </div>
                             </div>
                             <div class="col-md-2">
                                <div class="add-photos">
                                    <h3 class="fas fa-plus"></h3>
                                    <h4>Add Photos</h4>
                                    <input type="file" name="">
                                </div>
                             </div>
                             <div class="col-md-2">
                                <div class="add-photos">
                                    <h3 class="fas fa-plus"></h3>
                                    <h4>Add Photos</h4>
                                    <input type="file" name="">
                                </div>
                             </div>
                             <div class="col-md-2">
                                <div class="add-photos">
                                    <h3 class="fas fa-plus"></h3>
                                    <h4>Add Photos</h4>
                                    <input type="file" name="">
                                </div>
                             </div>
                             <div class="col-12 text-right mt-4">
                                 <button type="button" class="btn btn-primary">Post</button>
                             </div>
                         </div>       
                    </form>
                </div>
            </div>
        </div>
        
        <div class="card mt-5 posts">
            <h3>Your Posts</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mt-4">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center">
                                <img class="mr-3 profile-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/profile.png">
                                <div class="profile-detail">
                                   <h4>Kumar Sanu</h4>
                                   <p>Posted on : <span>01/02/21</span></p> 
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4 pr-sm-0">
                                <img  class="img-fluid mr-3 post-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/pant.jpg">
                            </div>
                            <div class="col-8 post-txt">
                                <p>
                                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  
                                </p>

                                <div class="row">
                                    <div class="col-md-6 d-flex align-items-center">
                                        <span class="primary-text px-3 mb-sm-10">Remove Post</span>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary d-block">Share</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mt-4">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center">
                                <img class="mr-3 profile-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/profile.png">
                                <div class="profile-detail">
                                   <h4>Kumar Sanu</h4>
                                   <p>Posted on : <span>01/02/21</span></p> 
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4">
                                <img  class="img-fluid mr-3 post-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/pant.jpg">
                            </div>
                            <div class="col-8 post-txt">
                                <p>
                                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  
                                </p>

                                <div class="row">
                                    <div class="col-md-6 d-flex align-items-center">
                                        <span class="primary-text px-3 mb-sm-10">Remove Post</span>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary d-block">Share</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mt-4">
                        <div class="row">
                            <div class="col-8 d-flex align-items-center">
                                <img class="mr-3 profile-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/profile.png">
                                <div class="profile-detail">
                                   <h4>Kumar Sanu</h4>
                                   <p>Posted on : <span>01/02/21</span></p> 
                                </div>
                                
                            </div>
                            <div class="col-4">
                                <span class="float-right">Individual</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4">
                                <img  class="img-fluid mr-3 post-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/pant.jpg">
                            </div>
                            <div class="col-8 post-txt">
                                <p>
                                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary d-block mb-sm-10">Share</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary d-block">Get Quotes</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mt-4">
                        <div class="row">
                            <div class="col-8 d-flex align-items-center">
                                <img class="mr-3 profile-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/profile.png">
                                <div class="profile-detail">
                                   <h4>Kumar Sanu</h4>
                                   <p>Posted on : <span>01/02/21</span></p> 
                                </div>
                                
                            </div>
                            <div class="col-4">
                                <span class="float-right">Individual</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4">
                                <img  class="img-fluid mr-3 post-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/pant.jpg">
                            </div>
                            <div class="col-8 post-txt">
                                <p>
                                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary d-block mb-sm-10">Share</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary d-block">Get Quotes</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mt-4">
                        <div class="row">
                            <div class="col-8 d-flex align-items-center">
                                <img class="mr-3 profile-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/profile.png">
                                <div class="profile-detail">
                                   <h4>Kumar Sanu</h4>
                                   <p>Posted on : <span>01/02/21</span></p> 
                                </div>
                                
                            </div>
                            <div class="col-4">
                                <span class="float-right">Individual</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4">
                                <img  class="img-fluid mr-3 post-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/pant.jpg">
                            </div>
                            <div class="col-8 post-txt">
                                <p>
                                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary d-block mb-sm-10">Share</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary d-block">Get Quotes</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mt-4">
                        <div class="row">
                            <div class="col-8 d-flex align-items-center">
                                <img class="mr-3 profile-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/profile.png">
                                <div class="profile-detail">
                                   <h4>Kumar Sanu</h4>
                                   <p>Posted on : <span>01/02/21</span></p> 
                                </div>
                                
                            </div>
                            <div class="col-4">
                                <span class="float-right">Individual</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4">
                                <img  class="img-fluid mr-3 post-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/pant.jpg">
                            </div>
                            <div class="col-8 post-txt">
                                <p>
                                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary d-block mb-sm-10">Share</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary d-block">Get Quotes</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mt-4">
                        <div class="row">
                            <div class="col-8 d-flex align-items-center">
                                <img class="mr-3 profile-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/profile.png">
                                <div class="profile-detail">
                                   <h4>Kumar Sanu</h4>
                                   <p>Posted on : <span>01/02/21</span></p> 
                                </div>
                                
                            </div>
                            <div class="col-4">
                                <span class="float-right">Individual</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4">
                                <img  class="img-fluid mr-3 post-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/pant.jpg">
                            </div>
                            <div class="col-8 post-txt">
                                <p>
                                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary d-block mb-sm-10">Share</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary d-block">Get Quotes</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mt-4">
                        <div class="row">
                            <div class="col-8 d-flex align-items-center">
                                <img class="mr-3 profile-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/profile.png">
                                <div class="profile-detail">
                                   <h4>Kumar Sanu</h4>
                                   <p>Posted on : <span>01/02/21</span></p> 
                                </div>
                                
                            </div>
                            <div class="col-4">
                                <span class="float-right">Individual</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4">
                                <img  class="img-fluid mr-3 post-img" src="<?php echo  RE_BUSSINESS_PATH;  ?>images/pant.jpg">
                            </div>
                            <div class="col-8 post-txt">
                                <p>
                                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.  
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary d-block mb-sm-10">Share</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary d-block">Get Quotes</a> 
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
    
</html>
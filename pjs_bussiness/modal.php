<!-- <button type="button" class="btn btn-primary mt-5 ml-5" data-toggle="modal" data-target="#staticBackdrop">
  Launch the Model-2
</button> -->

<div class="modal fade modal1" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      	<div class="header-cont">
	      	<img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/user-logo.png">
	        <p class="modal-title" id="staticBackdropLabel">Tell us what you Need</p>
        </div>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true"><i class="far fa-times-circle"></i></span>
	        </button>
      </div>
       <div class="modal-body">
      		
			<form>
			<div class="form">
  				<div class="row mx-5 mb-2">
    				<div class="col-md-6">
    					<div class="form-group">
	      					<input type="text" class="form-control" placeholder="First name" style="::placeholder { color:#A5A5A5; }">
	      					<i class="fas fa-user"></i>
      					</div>
    				</div>
    				<div class="col-md-6">
    					<div class="form-group">
	      					<input type="text" class="form-control" placeholder="Contact number">
	      					<i class="fas fa-phone-alt"></i>
      					</div>
    				</div>
  				</div>
  				<div class="row mx-5 mb-2">
    				<div class="col-md-6">
    					<div class="form-group">
      						<input type="text" class="form-control" placeholder="E-mail address">
      						<i class="fas fa-envelope"></i>
      					</div>
    				</div>
    				<div class="col-md-6">
    					<div class="form-group">
							<select class="form-control">
  								<option selected>Category</option>
  								<option value="1">One</option>
    							<option value="2">Two</option>
    							<option value="3">Three</option>
							</select>
							<i class="fas fa-list"></i>
							<i class="fas fa-caret-down cd"></i>
						</div>
    				</div>
  				</div>
  				<div class="row mx-5 mb-2">
  					<div class="col-md-12">
  						<div class="form-group">

  							<textarea class="form-control ta" id="exampleFormControlTextarea1" rows="2" placeholder="Enter your requirements"></textarea>
  							<i class="fas fa-clipboard-list ta-i"></i>
  						</div>
  					</div>
  				</div>


  				<div class="row mx-5 mb-2">
  					<div class="col-md-12">
  						<div class="form-group">
  							<button class="btn btn-block" style="background-color: #446EB6; color: white; font-weight: 500; 
    						border-radius: 5px;">
    							Get Quotes
    						</button>
  						</div>
  					</div>
  				</div>
  			</div>
			</form>
      </div>
    </div>
  </div>
</div>

<!-- Modal-1 end -->

<!-- Modal-2 Start -->
<!-- <button type="button" class="btn btn-primary mt-5 ml-5" data-toggle="modal" data-target="#staticmodel2">
  Launch the Model-2
</button> -->

<div class="modal fade modal2" id="staticmodel2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered md">
    	<div class="modal-content" style="border-radius: 10px; border: none;">

				<div class="modal-header" style="border:none;">
								   
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						        <span aria-hidden="true"><i class="far fa-times-circle ci" ></i></span>
						</button>   
				</div>
		    	<div class="modal-body">
		    		
		    		<div class="row">

		    			<div class="col-md-4" style="">
		    				<div class="card" style="width: 205px">
							  <img src="<?php echo  RE_BUSSINESS_PATH;  ?>images/cloth-img.png" class="card-img-top" alt="...">
							  <div class="card-body">
							    <ul>
							    	<li><strong>Product name</strong></li>
							    	<li>Price:<strong> 300</strong></li>
							    	<li>Sold by:<strong> SKS World</strong></li>
							    	<li>Location:<strong> Indore</strong></li>
							    </ul>
							  </div>
							</div>
		    			</div>

		    			<div class="col-md-8">
		    				
					 		<div class="header-contnt mb-4">
								<p class="modal-title" id="staticBackdropLabel">Get an enquiry for this product</p>
							</div>
		      		
					<form>
					<div class="form">
		  				<div class="row mx-5 mb-2">
		    				<div class="col-md-6">
		    					<div class="form-group">
			      					<input type="text" class="form-control" placeholder="Enter name" style="::placeholder { color:#A5A5A5; }">
			      					<i class="fas fa-user"></i>
		      					</div>
		    				</div>
		    				<div class="col-md-6">
		    					<div class="form-group">
			      					<input type="text" class="form-control" placeholder="Contact number">
			      					<i class="fas fa-phone-alt"></i>
		      					</div>
		    				</div>
		  				</div>
		  				<div class="row mx-5 mb-2">
		    				<div class="col-md-6">
		    					<div class="form-group">
		      						<input type="text" class="form-control" placeholder="E-mail address">
		      						<i class="fas fa-envelope"></i>
		      					</div>
		    				</div>
		    				<div class="col-md-6">
		    					<div class="form-group">
									<select class="form-control">
		  								<option selected>Cloths</option>
		  								<option value="1">One</option>
		    							<option value="2">Two</option>
		    							<option value="3">Three</option>
									</select>
									<i class="fas fa-list"></i>
									<i class="fas fa-caret-down cd"></i>
								</div>
		    				</div>
		  				</div>
		  				<div class="row mx-5 mb-2">
		  					<div class="col-md-12">
		  						<div class="form-group">

		  							<textarea class="form-control ta" id="exampleFormControlTextarea1" rows="2" placeholder="Enter your requirements"></textarea>
		  							<i class="fas fa-clipboard-list ta-i"></i>
		  						</div>
		  					</div>
		  				</div>


		  				<div class="row mx-5 mb-2">
		  					<div class="col-md-12">
		  						<div class="form-group">
		  							<button class="btn btn-block" style="background-color: #446EB6; color: white; font-weight: 500; 
		    						border-radius: 5px;">
		    							Submit Requirements
		    						</button>
		  						</div>
		  					</div>
		  				</div>
		      		  </div>
					</form>
		      </div>
		    </div>
		</div>
    	</div>
    </div>
</div>

<!-- Modal-2 END -->

<!-- Modal-3 Start -->

<!-- <button type="button" class="btn btn-primary mt-5 ml-5" data-toggle="modal" data-target="#staticmodel3">
  Launch the Model-3
</button> -->

<div class="modal fade modal3" id="staticmodel3" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered md">
    	<div class="modal-content">
				<div class="modal-header">

						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						        <span aria-hidden="true"><i class="far fa-times-circle ci" ></i></span>
						</button>   
				</div>
		    	<div class="modal-body">
		    		
		<div class="row">

		    		<div class="col-md-4">
		    			<div class="card">
							<div class="card-body">
								<div class="container card-cont text-center">
							    	<i class="fas fa-cloud-upload-alt fa-3x"></i>
							    	<p class="upload-pro">Upload product image</p>
							    	<p class="s">(upto xxxxx size)</p>
							    	<button type="button" class="btn upload-btn">
									  <label for="file">
									    Upload
									  </label>
									</button>
									<input type="file" id="file" style="display:none;"/>
							    	<p class="first-pic">First uploaded photo will display first.</p>
							    	<p class="max-pic">Max 4 photos per product</p>
							    </div>
							</div>
						</div>
		    		</div>

		    		<div class="col-md-8">
		    				
					 		<div class="header-contnt mb-4">
								<p class="modal-title" id="staticBackdropLabel">Add a product</p>
							</div>
		      		
					<form>
					<div class="form">
						<div class="row ml-3 mr-5 mb-2">
							<div class="col-md-12">
								<div class="form-group">
									<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <span class="input-group-text" id="basic-addon1"><i class="fas fa-shopping-bag" ></i></span>
									  </div>
									  <input type="text" class="form-control" placeholder="Product name" aria-label="Username" aria-describedby="basic-addon1">
									</div>
								</div>
							</div>
						</div>
		  				<div class="row ml-3 mr-5 mb-2">
		    				<div class="col-md-6">
		    					<div class="form-group">
			      					<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <span class="input-group-text tf-row" id="basic-addon1" >INR</span>
									  </div>
									  	<input type="text" class="form-control" placeholder="Selling price" aria-label="Username" aria-describedby="basic-addon1">
									</div>
		      					</div>
		    				</div>
		    				<div class="col-md-6">
		    					<div class="form-group">
			      					<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <span class="input-group-text tf-row" id="basic-addon1" >INR</span>
									  </div>
									  <input type="text" class="form-control" placeholder="Original price" aria-label="Username" aria-describedby="basic-addon1">
									</div>
		      					</div>
		    				</div>
		  				</div>
		  				<div class="row ml-3 mr-5 mb-2">
		    				<div class="col-md-12">
		    					<div class="form-group">
									<div class="input-group mb-3 select-1">
									  <div class="input-group-prepend">
									    <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-list"></i></label>
									  </div>
									  <select class="custom-select" id="inputGroupSelect01">
									    <option selected>Category</option>
									    <option value="1">One</option>
									    <option value="2">Two</option>
									    <option value="3">Three</option>
									  </select>
									  <i class="fas fa-caret-down"></i>
									</div>
								</div>
		    				</div>
		  				</div>
		  				<div class="row ml-3 mr-5 mb-2">
		    				<div class="col-md-12">
		    					<div class="form-group">
									<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-list"></i></label>
									  </div>
									  <select class="custom-select" id="inputGroupSelect01">
									    <option selected>Product details</option>
									    <option value="1">One</option>
									    <option value="2">Two</option>
									    <option value="3">Three</option>
									  </select>
									  <i class="fas fa-caret-down"></i>
									</div>
								</div>
		    				</div>
		  				</div>
		  				<div class="row ml-3 mr-5 mb-2">
		  					<div class="col-md-12">
		  						<div class="form-group">
		  							<textarea class="form-control ta" id="ta" rows="2" placeholder="Product description" ></textarea>
		  							<i class="fas fa-clipboard-list ta-i"></i>
		  						</div>
		  					</div>
		  				</div>


		  				<div class="row ml-3 mx-5 mb-2">
		  					<div class="col-md-12">
		  						<div class="form-group btn-grp">
		  							
		  								<button type="button" data-dismiss="modal" class="btn btn-cncl">Cancel</button>
	        							<button type="button"  class="btn btn-primary btn-save">Save</button>
	        						
		  						</div>
		  					</div>
		  				</div>
		      		  </div>
					</form>
		      </div>
		    </div>
		</div>
    	</div>
    </div>
</div>

<!-- Modal-3 END -->

<!-- Modal-4 START -->

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal4">
  Launch modal-4
</button> -->


<div class="modal fade modal4" id="Modal4" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered md">
    	<div class="modal-content">
     	<div class="modal-header" >
        	<p class="modal-title" id="exampleModalLabel" >Do you want to deactivate this product?</p>
     
        
      	</div>
      <div class="modal-body">
        <p >This action will remove the product from the list and will shift to Inactive products.</p>
      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn1">Yes</button>
	        <button type="button" data-dismiss="modal" class="btn btn-primary btn2">Cancel</button>
	      </div>
    </div>
  </div>
</div>

<div class="menu">
    <div class="add-product">
       <button type="button" data-toggle="modal" data-target="#staticmodel3"><i class="fas fa-plus-circle"></i> Add Product</button>
   </div>
   <ul class="list-unstyled menu-list">
      <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
      <li class="active"><a href="#"><i class="fas fa-user"></i> Business Profile</a></li>
      <li><a href="#"><i class="fas fa-shopping-cart"></i> Manage Products</a></li>
      <li><a href="#"><i class="fas fa-question-circle"></i> Help</a></li>
      <li><a href="#" ><i class="fas fa-list-ul"></i> Category</a></li>
   </ul>
</div>

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editcategory">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade editcat" id="editcategory" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel" style="color: #676767; font-size: 25px; font-weight: 500;">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true"><i class="far fa-times-circle ci" ></i></span>
        </button>
      </div>
      <div class="modal-body mt-3">
        <div class="row">
        	<div class="col-md-8">
        		<div class="form-group">
        			<p>Category name</p>
	      			<input type="text" class="form-control mb-4" placeholder="Enter name" style="::placeholder { color:#A5A5A5; }">
	      			<a class="addmore" href="#"><i class="fas fa-plus"></i>  Add more Category</a>
      			</div>
        	</div>
        	<div class="col-md-4">
        		<div class="form-group text-center">
        			<button type="button" style="background-color:white; border: none; margin: 0; padding: 0;">
					  <label for="file">
					    <i class="fas fa-plus-circle fa-4x"></i>
					  </label>
					</button>
					<input type="file" id="file" style="display:none;"/>
        			<p class="mt-1">Category Logo</p>
        		</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn mb-5">Submit</button>
      </div>
    </div>
  </div>
</div>
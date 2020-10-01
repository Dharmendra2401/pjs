<?php 
include "../config/config.php";
?>

<!DOCTYPE html>
<html>
<head>
<?php include "../styles.php";  ?>
</head>
<body>
<div class="container-fluid">

<?php include "header.php";  ?>

<div class="col-md-2 user-tab bg-color pt-3">
				<ul class="nav nav-tabs">
					<li class="nav-item"><a class="nav-link active" href="#overview">Overview</a></li>
					<li class="nav-item"><a class="nav-link" href="#basic-info">Basic Info</a></li>
					<li class="nav-item"><a class="nav-link" href="#contact">Contact & Address Info</a></li>
					<li class="nav-item"><a class="nav-link" href="#education">Education & Work</a></li>
				</ul>
			</div>
			<div class="col-md-10 tab-content user-profile shadow">	
				<div id="overview" class="tab-pane active">
					<div class="row">
						<div class="col-md-12 tab">
							<h3>Personal Info &nbsp;&nbsp; 
								<span class="edit-link edit-basic-info"><i class="fas fa-edit"></i> edit</span>
							</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3">Full Name <strong>:</strong></div>
								<div class="col-md-9">lavish lokendra jain</div>

								<div class="col-md-3">Popular Name<strong>:</strong></div>
								<div class="col-md-9">
								lavish
								</div>

								<div class="col-md-3">Gender <strong>:</strong></div>
								<div class="col-md-9">male</div>

								<div class="col-md-3">Status <strong>:</strong></div>
								<div class="col-md-9">single</div>

								<div class="col-md-3">Blood Group<strong>:</strong></div>
								<div class="col-md-9">b+</div>

								<div class="col-md-3">Height <strong>:</strong></div>
								<div class="col-md-9">5'9"</div>
							</div>
							<h3>Birth Details &nbsp;&nbsp; 
								<span class="edit-link edit-basic-info"><i class="fas fa-edit"></i> edit</span>
							</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3">Date of Birth <strong>:</strong></div>
								<div class="col-md-9">lavish lokendra jain</div>

								<div class="col-md-3">Birth Time<strong>:</strong></div>
								<div class="col-md-9">lavish</div>

								<div class="col-md-3">Birth Place <strong>:</strong></div>
								<div class="col-md-9">male</div>
							</div>
							<h3>Contact Info &nbsp;&nbsp; 
								<span class="edit-link edit-contact-info"><i class="fas fa-edit"></i> edit</span>
							</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3">Mobile No. <strong>:</strong></div>
								<div class="col-md-9">1234567890</div>

								<div class="col-md-3">Email Id<strong>:</strong></div>
								<div class="col-md-9">lavish@gmail.com</div>
							</div>
							<h3>Address Info &nbsp;&nbsp; 
								<span class="edit-link edit-contact-info"><i class="fas fa-edit"></i> edit</span>
							</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3">Address <strong>:</strong></div>
								<div class="col-md-9">
									<p class="address">J-11 DHANVANTRI APPARTMENT M.O.G LINE,</p>
									<p>BALSAMAD, MADHYA PRADESH, INDIA</p>
									<p>452001</p>
								</div>
							</div>
							<h3>Education &nbsp;&nbsp; 
								<span class="edit-link edit-education-info"><i class="fas fa-edit"></i> edit</span>
							</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3">Education <strong>:</strong></div>
								<div class="col-md-9">bachelor of engineering</div>
							</div>
							<h3>Work &nbsp;&nbsp; 
								<span class="edit-link edit-education-info"><i class="fas fa-edit"></i> edit</span>
							</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3">Occupation <strong>:</strong></div>
								<div class="col-md-9">job/software engineer</div>

								<div class="col-md-3">Income<strong>:</strong></div>
								<div class="col-md-9">1-2 lakh</div>
							</div>
						</div>
					</div>
				</div>
				<div id="basic-info" class="tab-pane">
					<div class="row">
						<div class="col-md-12 tab">
							<h3>Personal Info</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3">First Name <strong>:</strong></div>
								<div class="col-md-9">lavish</div>

								<div class="col-md-3">Middle Name<strong>:</strong></div>
								<div class="col-md-9">lavish</div>

								<div class="col-md-3">Last Name <strong>:</strong></div>
								<div class="col-md-9">
									Singh
								</div>

								<div class="col-md-3">Popular Name <strong>:</strong></div>
								<div class="col-md-9 edit-wrapper">
								   <span class="data">test</span> 
								   <form class="edit-form">
										<input type="text" class="edit-input" name="">
										<button class="btn btn-primary save-change">Save Changes</button>
										<button class="cancel btn btn-secondary	 btn btn-secondary">Cancel</button>
								   </form>
								   <span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
								</div>

								<div class="col-md-3">Gender<strong>:</strong></div>
								<div class="col-md-9">
									<span class="data">male</span> 
									<form class="edit-form">
										<input type="text" class="edit-input" name="">
										<button class="btn btn-primary save-change">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
								   </form>
								   <span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
								</div>

								<div class="col-md-3">Status <strong>:</strong></div>
								<div class="col-md-9">
									<span class="data">Single</span> 
									<form class="edit-form">
										<input type="text" class="edit-input" name="">
										<button class="btn btn-primary save-change">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
									</form>
									<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
								</div>

								<div class="col-md-3">Blood Group<strong>:</strong></div>
								<div class="col-md-9">
								    <span class="data">b+</span>
								    <form class="edit-form">
										<input type="text" class="edit-input" name="">
										<button class="btn btn-primary save-change">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
									</form>
									<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
							    </div>

								<div class="col-md-3">Height <strong>:</strong></div>
								<div class="col-md-9">
								    <span class="data">5'9"</span> 
								    <span class="privacy">Global</span> 
									<form class="edit-form">
										<input type="text" class="edit-input" name="">
										<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div>
										<button class="btn btn-primary save-change">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
									</form>
									<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
							    </div>
							</div>
							<h3>Birth Details</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3">Date of Birth <strong>:</strong></div>
								<div class="col-md-9">
								    <span class="data">01/01/01</span>
								    <span class="privacy">Global</span> 
									<form class="edit-form">
										<input type="text" class="edit-input" name="">
										<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div>
										<button class="btn btn-primary save-change">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
									</form>
									<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
							    </div>

								<div class="col-md-3">Birth Time<strong>:</strong></div>
								<div class="col-md-9">
								     <span class="data">2:00 am</span> 
								     <span class="privacy">Global</span>
									<form class="edit-form">
										<input type="text" class="edit-input" name="">
										<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div>
										<button class="btn btn-primary save-change">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
									</form>
									<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
							    </div>

								<div class="col-md-3">Birth Place <strong>:</strong></div>
								<div class="col-md-9">
								     <span class="data">maheshwar</span> 
								     <span class="privacy">Global</span>
									<form class="edit-form">
										<input type="text" class="edit-input" name="">
										<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div>
										<button class="btn btn-primary save-change">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
									</form>
									<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span> 
							    </div>
							</div>
						</div>
					</div>
				</div>
				<div id="contact"  class="tab-pane">
				   
						<h3>Contact Info</h3>
						<hr>
						<div class="row info mb-4">
							<div class="col-md-3">Mobile No. <strong>:</strong></div>
							<div class="col-md-9">
						        <span class="data">1234567890</span> 
						        <span class="privacy">Global</span>
								<form class="edit-form">
									<input type="text" class="edit-input" name="">
									<div class="btn-group privacy-setting">
									    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
									    <ul class="dropdown-menu">
									      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
									      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
									    </ul>
								    </div>
									<button class="btn btn-primary save-change">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form>
								<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
						    </div>

							<div class="col-md-3">Email Id<strong>:</strong></div>
							<div class="col-md-9">
							    <span class="data">lavish@gmail.com</span> 
							    <span class="privacy">Global</span>
								<form class="edit-form">
									<input type="text" class="edit-input" name="">
									<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div>
									<button class="btn btn-primary save-change">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form>
								<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
						    </div>
						</div>
						<h3>Address Info</h3>
						<hr>
						<div class="row info mb-4">
							<div class="col-md-3">Address  <strong>:</strong></div>
							<div class="col-md-9 address">
							    <span class="data">J-11 DHANVANTRI APPARTMENT M.O.G LINE</span>
							    <span class="privacy">Global</span> 
								<form class="edit-form">
									<input type="text" class="edit-input" name="">
									<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div>
									<button class="btn btn-primary save-change">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form>
								<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
						    </div>

							<div class="col-md-3">Name of city/town/village <strong>:</strong></div>
							<div class="col-md-9">
							    <span class="data">indore</span> 
							    <span class="privacy">Global</span>
								<form class="edit-form">
									<input type="text" class="edit-input" name="">
									<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div>
									<button class="btn btn-primary save-change">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form>
								<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
						    </div>

							<div class="col-md-3">Pin Code  <strong>:</strong></div>
							<div class="col-md-9">
							    <span class="data">452001</span>
							    <span class="privacy">Global</span> 
								<form class="edit-form">
									<input type="text" class="edit-input" name="">
									<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div>
									<button class="btn btn-primary save-change">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form>
								<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
						    </div>

							<div class="col-md-3">State <strong>:</strong></div>
							<div class="col-md-9">
							    <span class="data">madya pradesh</span> 
							    <span class="privacy">Global</span>
								<form class="edit-form">
									<input type="text" class="edit-input" name="">
									<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div>
									<button class="btn btn-primary save-change">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form>
								<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
						    </div>

							<div class="col-md-3">Country <strong>:</strong></div>
							<div class="col-md-9">
							    <span class="data">India</span>
							    <span class="privacy">Global</span> 
								<form class="edit-form">
									<input type="text" class="edit-input" name="">
									<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div>
									<button class="btn btn-primary save-change">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form>
								<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
						    </div>
						</div>
					
				</div>
				<div id="education"  class="tab-pane">
						<h3>Education</h3>
						<hr>
						<div class="row info mb-4">
							<div class="col-md-3">Education <strong>:</strong></div>
							<div class="col-md-9">
							    <span class="data">bachelor of engineering</span> 
								<form class="edit-form">
									<input type="text" class="edit-input" name="">
									<button class="btn btn-primary save-change">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form>
								<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
						    </div>
						</div>
						<h3>Work</h3>
						<hr>
						<div class="row info mb-4">
							<div class="col-md-3">Occupation <strong>:</strong></div>
							<div class="col-md-9">
							    <span class="data">job/software engineer</span> 
								<form class="edit-form">
									<input type="text" class="edit-input" name="">
									<button class="btn btn-primary save-change">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form>
								<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
						    </div>

							<div class="col-md-3">Income<strong>:</strong></div>
							<div class="col-md-9">
							    <span class="data">1-2 lakh</span> 
							    <span class="privacy">Global</span>
								<form class="edit-form">
									<input type="text" class="edit-input" name="">
									<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div>
									<button class="btn btn-primary save-change">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form>
								<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
						    </div>
						</div>
				</div>
			</div>

</div>	
</div>
</div>
</body>
<?php  include "../script.php" ;?>
<script>
$(document).ready(function(){

  $(".nav-tabs a").click(function(){
	$(this).tab('show');
  });

  $('.nav-tabs a').on('shown.bs.tab', function(event){
	var x = $(event.target).text();         // active tab
	var y = $(event.relatedTarget).text();  // previous tab
	$(".act span").text(x);
	$(".prev span").text(y);
  });


 $(".edit").on("click", function(){ 
	 $(this).siblings('.data').hide();	
	 $(this).siblings('.privacy').hide();	
	 $(this).siblings('.data').text();
	 $(this).siblings('.privacy').text();
	 var inputData = $(this).siblings('.data').text();
	 $(this).parent('.col-md-9').css({"background-color": "#eeeeee", "padding": "20px", "margin-bottom":"10px"});
	 $(this).siblings(".edit-form").css("display", "inline-block");
	 // $(this).siblings(".edit-form").toggle();
	 $(this).siblings(".edit-form").children('input').css("display", "block");
	 $(this).siblings('form').children('input').val(inputData);
	 
  });

   var selText = "";
 $(".dropdown-menu li").click(function(){
  selText = $(this).text();
  $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
});


	$(".save-change").on("click", function(){ 	    
	   // $(this).siblings(".edit-form").hide();
	   var parent = $(this).parent(".edit-form");
	   var inputValue = $(this).siblings("input").val();
	   $(this).parent(".edit-form").hide();
	   $(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
	   $(this).parent(".edit-form").siblings(".data").show().text(inputValue);
       $(this).parent(".edit-form").siblings(".privacy").show().text(selText);

  });

	$(".cancel").on("click", function(){ 	
	   var parent = $(this).parent(".edit-form");
	   $(this).parent(".edit-form").hide();
	   $(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
	   $(this).parent(".edit-form").siblings(".data").show();
	   $(this).parent(".edit-form").siblings(".privacy").show();
  });



$('.nav-tabs' ).on("click", function() {
	if ($(this).children(".active")) {
		   $(".tab-content").find(".active").show();
           $(".tab-content").find(".tab-pane:not(.active)").css("display", "none");
			}
});
   
$(".edit-link").on("click", function() {

    $(".nav-link").removeClass("active");
    $(".tab-pane").removeClass("active"); 

    if ($(this).hasClass("edit-basic-info")) {
    	$( 'a[ href="#basic-info" ]' ).addClass("active");
    	$( "div#basic-info" ).show();
    	$( "div#basic-info" ).addClass("active");
    	$("div#contact").removeClass("active");
    	$("div#education").removeClass("active");
    }

    else if($(this).hasClass("edit-contact-info")) {
    	$( 'a[ href="#contact" ]' ).addClass("active");
    	$( "div#contact" ).show();
    	$( "div#contact" ).addClass("active");
    	$("div#education").removeClass("active");
    	$( "div#basic-info" ).removeClass("active");


    }

     else if($(this).hasClass("edit-education-info")) {
    	$( 'a[ href="#education" ]' ).addClass("active");
    	$( "div#education" ).show();
    	$( "div#education" ).addClass("active");
    	$( "div#basic-info" ).removeClass("active");
    	$("div#contact").removeClass("active");

    }

});
  
});
</script>

</html>
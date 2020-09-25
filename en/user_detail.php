<?php 
include "../config/config.php";

$idd=base64_decode($_REQUEST['token']);

if($idd==''){
	redirect(RE_EN_PATH."index.php");
}
$login_user='';
if (isset($_SESSION['user_mid'])) {
	$login_user=$_SESSION['user_mid'];
}
else{
$login_user='';
}


$row=mysqli_fetch_array(mysqli_query($con,"SELECT if(sp.member_Id='$login_user' AND sp.reference_member_Id='$idd' ,'saved','notsaved') as sp_status,mem.member_id,mem.middle_name,mem.first_name,mem.last_name,addrss.full_address,addrss.city,comm.email,mem.fathers_name,mem.gender,mem.age,mem.date_of_birth,mem.place_of_birth,mem.time_of_birth,mem.marital_status,mem.blood_group,mem.popular_name,mem.height,mem.marital_status,addrss.member_id,addrss.full_address,addrss.city,addrss.state,addrss.country,addrss.pincode,comm.member_id,comm.mobile,comm.email,edu.member_id,edu.highest_edu,edu.occupation,edu.ocp_details,edu.income,keyy.id,keyy.display_pic from member as mem INNER JOIN address as addrss on mem.member_id=addrss.member_id INNER JOIN communication as comm on mem.member_id=comm.member_id INNER JOIN education_ocp as edu on mem.member_id=edu.member_id INNER JOIN key_member_id as keyy on mem.member_id=keyy.id LEFT join saved_profile as sp on  mem.member_id=sp.reference_member_Id  where mem.member_id= '$idd'"));
?>
<!DOCTYPE html>
<html>
<head>
<?php include "../styles.php" ?>
</head>
<body>
	<div class="container-fluid">
		<?php include "header.php" ?>
		</div>
	    
	    <div class="user-container">
	    	<div class="container">
		    	<div class="row">
					<div class="col-md-2 text-right">
					<a data-lightbox="example-1" href="<?php echo RE_HOME_PATH.''.$row['display_pic'] ;?>">	<img class="user-img img-fluid" src="<?php echo RE_HOME_PATH.''.$row['display_pic'] ;?>"></a>
					</div>
					<div class="col-md-4 pl-0 align-self-end sm-tr">
					    <h2 class="text-white mb-1"><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name']; ?></h2>
					    <h5 class="text-white"><?php echo $row['member_id'] ;?></h5>
					</div>
					<div class="col-md-6 align-self-end text-right sm-mt10">
						<?php if (isset($_SESSION['user_mid'])) { if ( $row['sp_status']=='saved') {?>
							<a type="button" class="btn btn-info mr-3 login-signup" style="background-color:#72bf55">Saved</a>
						<?php } else {?>
							<a type="button" class="btn btn-info mr-3 login-signup save_user_profile" id="<?php echo $row['member_id'] ;?>" data-current="<?php echo $_SESSION['user_mid'];?>">Save Profile  </a>
						<?php }?>
			

						<?php   } else { ?> 
							<a type="button" class="btn btn-info mr-3 login-signup" data-toggle="modal" data-target="#modal21">Save Profile</a>
						<?php }  ?>
						
					    <a type="button" class="btn btn-warning add-relation" data-toggle="modal" data-target="<?php if (isset($_SESSION['user_mid'])){echo '#relation';}else{echo '#modal21';} ?>">Add Member</a>
					</div>
				</div>
		    </div>
	    </div>
		
		<div class="modal fade" id="relation">
			<div class="modal-dialog modal-dialog-centered relation-wrapper login-container">
			<div class="modal-content relation-wrapper">
			<div class="">
			<button type="button" id="close-login" class="close m-2" data-dismiss="modal">&times;</button>
			</div> 
			<div class="modal-body">
				<h3>Select Relation</h3>
			    <select class="form-control">
			    	  <option>Grandfather</option>
			    	  <option>Grandmother</option>
			    	  <option>Father</option>
			    	  <option>Mother</option>
			    	  <option>Son</option>
			    	  <option>Daughter</option>
			    	  <option>Brother</option>
			    	  <option>Sister</option>
			    	  <option>Son-in-law</option>
			    	  <option>Son-in-daughter</option>
			    </select>
			    <button class="btn btn-primary float-right my-3">Save</button>
			</div>
			</div>
			</div>
		</div>

		
		<div class="container shadow mb-4 pb-3">
			<div class="tab-bar">
				<div class="row">
					<div class="col-md-6">
						<ul class="nav nav-tabs">
						    <li class="nav-item">
						      <a class="nav-link active" data-toggle="tab" href="#about"><div class="triangle-down"></div>About</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#familyTree"><div class="triangle-down"></div>Family Tree</a>
						    </li>
						  </ul>
					</div>
					<div class="col-md-6 align-self-center text-right">
						<div class="icon-mobile">
							<i type="button" class="fas fa-phone-alt mx-2" data-toggle="modal" data-target="#contactoption"></i>
							<i type="button" class="fas fa-download mx-2 login-signup" data-toggle="modal" data-target="#modal21"></i>
							<i type="button" class="fas fa-share mx-2 login-signup" data-toggle="modal" data-target="#modal21"></i>
						</div>
					</div>
				</div>
		    </div>
			<div class="row">
				<div class="col-md-12 tab-content">
				    <div id="about" class="tab-pane active"><br>
				      <div class="container user-details">
					      <h3>Personal Details</h3>
				      	  <div class="row">
					      	  <div class="col-md-3">
					      	  	  <p>Full Name <strong>:</strong></p>
                              </div>
                              <div class="col-md-9 text-uppercase">
                              	  <h5><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'] ; ?></h5>
                              </div>

                              <div class="col-md-3">
					      	  	  <p>Popular Name <strong>:</strong></p>
					      	  </div>
					      	  <div class="col-md-9 text-uppercase">
					      	  	<h5><?php echo $row['popular_name']; ?></h5>
					      	  </div>
					      	  
					      	  <div class="col-md-3">	
					      	  	  <p>Date of Birth <strong>:</strong></p>
					      	  </div>
					      	  <div class="col-md-9 text-uppercase">
					      	      <h5><?php echo date('d/m/Y',strtotime($row['date_of_birth'])); ?></h5>
					      	  </div>
					      	  
					      	  <div class="col-md-3">    	  
					      	  	  <p>Age <strong>:</strong></p>
					      	  </div>
					      	  <div class="col-md-9 text-uppercase">
					      	      <h5><?php echo $row['age']; ?></h5>
					      	  </div>
					      	  
					      	  <div class="col-md-3">     	  
					      	  	  <p>Gender <strong>:</strong></p>
					      	  </div>

                              <div class="col-md-9 text-uppercase">
                              	  <h5><?php if($row['gender']==1){echo 'Male';}else{echo 'Female';} ?></h5>
					      	  </div>
					      	  
                              <div class="col-md-3">
                              	  <p>Status <strong>:</strong></p>
                              </div>
                              <div class="col-md-9 text-uppercase">
                              	  <h5><?php echo $row['marital_status']; ?></h5>
                              </div>
                              
                              <div class="col-md-3">	  
					      	  	  <p>Mobile No. <strong>:</strong></p>
					      	  </div>
					      	  <div class="col-md-9 text-uppercase">	
					      	      <h5><?php echo $row['mobile']; ?></h5>
					      	  </div>
					      	  
					      	  <div class="col-md-3">      
					      	  	  <p>Email id <strong>:</strong></p>
					      	  </div>
					      	  <div class="col-md-9 text-uppercase">	
					      	      <h5><?php echo $row['email']; ?></h5>
					      	  </div>
					      	  
					      	  <div class="col-md-3">       
					      	  	  <p>Blood Group <strong>:</strong></p>
					      	  </div>
					      	  <div class="col-md-9 text-uppercase">
					      	  	  <h5><?php if($row['blood_group']==1){echo 'A+';} else if($row['blood_group']==2){echo 'B+';}
                        else if($row['blood_group']==3){echo 'AB+';}else if($row['blood_group']==4){echo 'O+';}else if($row['blood_group']==5){echo 'A+';}else if($row['blood_group']==6){echo 'B-';} else if($row['blood_group']==7){echo 'AB-';}else if($row['blood_group']==8){echo 'O-';} else {echo 'NA';}  ; ?></h5>
					      	  </div>
					      	  
					      	  <div class="col-md-3">	  
					      	  	  <p>Birth Time <strong>:</strong></p>
					      	  </div>
					      	  <div class="col-md-9 text-uppercase">
					      	      <h5><?php if($row['time_of_birth']!='00:00:00') {echo date('H:i',strtotime($row['time_of_birth'])); } else{ echo "NA";} ?></h5>
					      	  </div>
					      	  
					      	  <div class="col-md-3">    	  
					      	  	  <p>Birth Place <strong>:</strong></p>
					      	  </div>
					      	  <div class="col-md-9 text-uppercase">	  
					      	  	  <h5><?php if($row['place_of_birth']!=''){echo $row['place_of_birth'];}else{echo "NA";} ?></h5>
					      	  </div>

					      	  <div class="col-md-3">
					      	  	  <p>Height <strong>:</strong></p>
					      	  </div>
					      	  <div class="col-md-9 text-uppercase">
					      	  	  <h5><?php echo $row['height'];  ?></h5>
					      	  </div>
					      	  <div class="col-12 text-center">
					      	  	<?php if (isset($_SESSION['user_mid']) || isset($_SESSION['user_mid']) || isset($_SESSION['user_mid'])) {?>
					      	  		 <button type="button" class="btn btn-info btn-more">More Details</button>
					      	  <?php 	} else { ?>
					      	  	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#login"
>More Details</button>
					      	  <?php } ?>
							     
							  </div>
				          </div>
				          <div class="more-info">
				          	  <h3>About Us</h3>
					          <div class="row">
					          	  <div class="col-md-3">
					          	  	  <p>Present Address <strong>:</strong></p>
					          	  </div>
					          	  <div class="col-md-9">
					          	  	  <h5><?php echo $row['full_address'];  ?></h5>
					          	  </div>
					          </div>
					          <h3>Education</h3>
					          <div class="row">
					          	  <div class="col-md-3">
					          	  	  <p>Highest Education <strong>:</strong></p>
					          	  </div>
					          	  <div class="col-md-9">
					          	  	  <h5><?php echo $row['highest_edu'];  ?></h5>
					          	  </div>
					          </div>
					          <h3>Occupation</h3>
					          <div class="row">
					          	  <div class="col-md-3">
					          	  	  <p>Occupation <strong>:</strong></p>
					          	  </div>
					          	  <div class="col-md-9">
					          	  	  <h5>
										  <?php if($row['occupation']==1){ echo "
											Job";} else if($row['occupation']==2) { echo "Bussiness";}
											else if($row['occupation']==3) { echo "Housewife";} else if($row['occupation']==4) { echo "Student";}else if($row['occupation']==5) { echo "Nothing";}else{ echo 'NA';} ?>
										  </h5>
					          	  </div>
					          </div>
				          </div>
				      </div>
				    </div>
				    <div id="familyTree" class="tab-pane fade"><br>
				    	<div class="container">
				    		<p>tree map</p>
				    	</div>
				    </div>
				</div>
		    </div>
		</div>    
			
		
	  </div>       
    
</body>
<?php include "../script.php"; ?>

</html>
<script type="text/javascript">
	$('.save_user_profile').on('click', function (event) {
		//$_SESSION['user_mid']
		var user_mid = $(this).data('current') // Extract info from data-* attributes
		var reference_user_mid=$(this).attr('id');
		//
		$.post("/pjs_user/en/PJS-demo/save_user_profile.php",
		{
			current_user:user_mid,
			reference_user_mid: reference_user_mid
		},
		function(data,status){
			var status1=status;
			console.log(status1);
			if (status1=='success') {
			// window.location.reload();
			$('.save_user_profile').text('Saved');
			$('.save_user_profile').css('background-color','#72bf55');
			}
			else{
				$('.save_user_profile').text('something is not good please try again')
			}
		});
		//

	})
</script>
<?php 
include "../config/config.php";
$current_user_id=$_SESSION['user_mid'];
$fire=mysqli_query($con,"SELECT mem.feet,mem.inches, mem.member_id,mem.middle_name,mem.first_name,mem.last_name,addrss.full_address,addrss.city,comm.email,mem.fathers_name,mem.gender,mem.age,mem.date_of_birth,mem.place_of_birth,mem.time_of_birth,mem.marital_status,mem.blood_group,mem.popular_name,mem.marital_status,addrss.member_id,addrss.full_address,addrss.city,addrss.state,addrss.country,addrss.pincode,comm.member_id,comm.mobile,comm.email,edu.member_id,edu.highest_edu,edu.occupation,edu.ocp_details,edu.income,keyy.id,keyy.display_pic,addrss.city,addrss.state,addrss.pincode,addrss.country,mp.* from member as mem INNER JOIN address as addrss on mem.member_id=addrss.member_id INNER JOIN communication as comm on mem.member_id=comm.member_id INNER JOIN education_ocp as edu on mem.member_id=edu.member_id INNER JOIN key_member_id as keyy on mem.member_id=keyy.id INNER JOIN member_privacy mp on mem.member_id=mp.member_id where mem.member_id= '$current_user_id'")or die(mysqli_error($con));

$row=mysqli_fetch_array($fire);
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
								<div class="col-md-9"><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name']; ?></div>

								<div class="col-md-3">Popular Name<strong>:</strong></div>
								<div class="col-md-9">
								<?php echo $row['popular_name']; ?>
								</div>

								<div class="col-md-3">Gender <strong>:</strong></div>
								<div class="col-md-9"><?php if($row['gender']=='M'){echo 'Male';}else{echo 'Female';} ?></div>

								<div class="col-md-3">Status <strong>:</strong></div>
								<div class="col-md-9"><?php echo $row['marital_status']; ?></div>

								<div class="col-md-3">Blood Group<strong>:</strong></div>
								<div class="col-md-9"><?php if($row['blood_group']==1){echo 'A+';} else if($row['blood_group']==2){echo 'B+';}
                        else if($row['blood_group']==3){echo 'AB+';}else if($row['blood_group']==4){echo 'O+';}else if($row['blood_group']==5){echo 'A+';}else if($row['blood_group']==6){echo 'B-';} else if($row['blood_group']==7){echo 'AB-';}else if($row['blood_group']==8){echo 'O-';} else {echo 'NA';}  ; ?></div>

								<div class="col-md-3">Height <strong>:</strong></div>
								<div class="col-md-9"><?php  if($row['feet']!=''){ echo $row['feet'];}else{echo "NA";}  ?> </div>
							</div>
							<h3>Birth Details &nbsp;&nbsp; 
								<span class="edit-link edit-basic-info"><i class="fas fa-edit"></i> edit</span>
							</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3">Date of Birth <strong>:</strong></div>
								<div class="col-md-9"><?php echo date('d/m/Y',strtotime($row['date_of_birth'])); ?></div>

								<div class="col-md-3">Birth Time<strong>:</strong></div>
								<div class="col-md-9"><?php if($row['time_of_birth']!='00:00:00') {echo date('H:i',strtotime($row['time_of_birth'])); } else{ echo "NA";} ?></div>

								<div class="col-md-3">Birth Place <strong>:</strong></div>
								<div class="col-md-9"><?php if($row['place_of_birth']!=''){echo $row['place_of_birth'];}else{echo "NA";} ?></div>
							</div>
							<h3>Contact Info &nbsp;&nbsp; 
								<span class="edit-link edit-contact-info"><i class="fas fa-edit"></i> edit</span>
							</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3">Mobile No. <strong>:</strong></div>
								<div class="col-md-9"><?php echo $row['mobile']; ?></div>

								<div class="col-md-3">Email Id<strong>:</strong></div>
								<div class="col-md-9"><?php echo $row['email']; ?></div>
							</div>
							<h3>Address Info &nbsp;&nbsp; 
								<span class="edit-link edit-contact-info"><i class="fas fa-edit"></i> edit</span>
							</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3">Address <strong>:</strong></div>
								<div class="col-md-9">
									<p class="address"><?php echo $row['full_address'];  ?></p>
								</div>
							</div>
							<h3>Education &nbsp;&nbsp; 
								<span class="edit-link edit-education-info"><i class="fas fa-edit"></i> edit</span>
							</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3">Education <strong>:</strong></div>
								<div class="col-md-9"><?php echo $row['highest_edu'];  ?></div>
							</div>
							<h3>Work &nbsp;&nbsp; 
								<span class="edit-link edit-education-info"><i class="fas fa-edit"></i> edit</span>
							</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3">Occupation <strong>:</strong></div>
								<div class="col-md-9"><?php if($row['occupation']==1){ echo "
											Job";} else if($row['occupation']==2) { echo "Bussiness";}
											else if($row['occupation']==3) { echo "Housewife";} else if($row['occupation']==4) { echo "Student";}else if($row['occupation']==5) { echo "Nothing";}else{ echo 'NA';} ?></div>

								<div class="col-md-3">Income<strong>:</strong></div>
									<div class="col-md-9"><?php if($row['income']==1){ echo "Less than 1 lakh";}
										else if($getdate['row']==2){ echo "1 lakh to 2 lakh";}
										else if($getdate['row']==3){ echo "2 lakh to 3 lakh";}
										else if($getdate['row']==4){ echo "3 lakh to 4 lakh";}
										else if($getdate['row']==5){ echo "more than 4 lakh";}
										else{ echo "NA";}
									?>
									</div>
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
								<div class="col-md-9"><?php echo $row['first_name'];?></div>

								<div class="col-md-3">Middle Name<strong>:</strong></div>
								<div class="col-md-9"><?php echo $row['middle_name']; ?></div>

								<div class="col-md-3">Last Name <strong>:</strong></div>
								<div class="col-md-9">
									<?php echo $row['last_name']; ?>
								</div>

								<div class="col-md-3">Popular Name <strong>:</strong></div>
								<div class="col-md-9 edit-wrapper">
								   <span class="data"><?php echo $row['popular_name'];?></span> 
								   <form class="edit-form" data-columnname='popular_name' data-tablename='member' id="popular_name_frm">
										<input type="text" class="edit-input" name="popular_name">
										<button class="btn btn-primary save-change" id="popular_name_btn">Save Changes</button>
										<button class="cancel btn btn-secondary	 btn btn-secondary">Cancel</button>
								   </form>
								   <span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
								</div>

								<div class="col-md-3">Gender<strong>:</strong></div>
								<div class="col-md-9">
									<span class="dropdwn-txt"><?php if($row['gender']=='M'){echo 'Male';}else{echo 'Female';} ?></span>
									<form class="edit-form" data-columnname='gender' data-tablename='member' id="gender_frm">
									    <select class="select-text form-control mb-2" name="gender_name">
									    	<option value="">Select Gender</option>
									    	<option value="M">Male</option>
									    	<option value="F">Female</option>
									    </select>
										<!-- <input type="text" class="edit-input" name=""> -->
										<button class="btn btn-primary save-change" id="gender_btn">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
								   </form>
								   <span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
								</div>

								<div class="col-md-3">Status <strong>:</strong></div>
								<div class="col-md-9">
									<span class="dropdwn-txt"><?php echo $row['marital_status']; ?></span> 
									<form class="edit-form" data-columnname='marital_status' data-tablename='member'  id="marital_status_frm" >
										<!-- <input type="text" class="edit-input" name=""> -->
										<select class="select-text form-control mb-2" name="marital_status_name">
											<option value="">Select Status</option>
											<option value="single">Single</option>
											<option value="married">Married</option>
										</select>
										<button class="btn btn-primary save-change" id="marital_status_btn">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
									</form>
									<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
								</div>

								<div class="col-md-3">Blood Group<strong>:</strong></div>
								<div class="col-md-9">
								    	    <span class="dropdwn-txt"><?php if($row['blood_group']==1){echo 'A+';} else if($row['blood_group']==2){echo 'B+';}
                        else if($row['blood_group']==3){echo 'AB+';}else if($row['blood_group']==4){echo 'O+';}else if($row['blood_group']==5){echo 'A-';}else if($row['blood_group']==6){echo 'B-';} else if($row['blood_group']==7){echo 'AB-';}else if($row['blood_group']==8){echo 'O-';} else {echo 'NA';}  ; ?></span>
								    <form class="edit-form" data-columnname='blood_group' data-tablename='member' id="blood_group_frm">
										<select class="select-text" name="blood_group_name">
											<option value="">Select Blood Group</option>
											<option value="1">A+</option>
											<option value="2">B+</option>
											<option value="3">AB+</option>
											<option value="4">O+</option>
											<option value="5">A-</option>
											<option value="6">B-</option>
											<option value="7">AB-</option>
											<option value="8">O-</option>
										</select>
										<button class="btn btn-primary save-change" id="blood_group_btn">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
									</form>
									<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
							    </div>

								<div class="col-md-3">Height <strong>:</strong></div>
								<div class="col-md-9">
									<span class="feet">5</span>' 
									<span class="inch">9</span>"
									<span class="privacy">Global</span> 
									<form class="edit-form" data-columnname='feet' data-tablename='member' id="height_frm">
										<input type="tel" class="edit-input-feet" name="height_feet" maxlength="2" onkeypress="return isNumeric(event)">
										<input type="tel" class="edit-input-inch" name="height_inch" maxlength="2" onkeypress="return isNumeric(event)">
<!-- 										<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div> -->
										<select class="privacy-setting" name="privacy_setting_name">
											<option value="">Select Privacy</option>
											<option value="N">Private</option>
											<option value="Y">Global</option>
										</select>
										<button class="btn btn-primary save-change" id="height_btn">Save Changes</button>
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
								    <span class="data"><?php echo date('d/m/Y',strtotime($row['date_of_birth'])); ?></span>
								    <span class="privacy"><?php if($row['Date_Of_Birth']=='Y'){echo "Global";}else{ echo "Private";} ?></span> 
									<form class="edit-form" data-columnname='date_of_birth' data-tablename='member'>
										<input type="date" class="edit-input" name="">
<!-- 										<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div> -->
										<select class="privacy-setting">
											<option value="">Select Privacy</option>
											<option value="N">Private</option>
											<option value="Y">Global</option>
										</select>
										<button class="btn btn-primary save-change">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
									</form>
									<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
							    </div>

								<div class="col-md-3">Birth Time<strong>:</strong></div>
								<div class="col-md-9">
								     <span class="data"><?php if($row['time_of_birth']!='00:00:00') {echo date('H:i',strtotime($row['time_of_birth'])); } else{ echo "NA";} ?></span> 
								     <span class="privacy"><?php if($row['Time_Of_Birth']=='Y'){echo "Global";}else{ echo "Private";} ?></span>
									<form class="edit-form" data-columnname='time_of_birth' data-tablename='member'>
											<input type="time" class="edit-input" name="">
<!-- 										<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div> -->
											<select class="privacy-setting">
												<option value=" ">Select Privacy</option>
												<option value="N">Private</option>
												<option value="Y">Global</option>
											</select>
										<button class="btn btn-primary save-change">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
									</form>
									<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
							    </div>

								<div class="col-md-3">Birth Place <strong>:</strong></div>
								<div class="col-md-9">
								     <span class="data"><?php if($row['place_of_birth']!=''){echo $row['place_of_birth'];}else{echo "NA";} ?></span> 
								     <span class="privacy"><?php if($row['Place_Of_Birth']=='Y'){echo "Global";}else{ echo "Private";} ?></span>
									<form class="edit-form" data-columnname='place_of_birth' data-tablename='member'>
										<input type="text" class="edit-input" name="">
<!-- 										<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div> -->
										<select class="privacy-setting">
											<option value="">Select Privacy</option>
											<option value="N">Private</option>
											<option value="Y">Global</option>
										</select>
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
						        <span class="data"><?php echo $row['mobile']; ?></span> 
						        <span class="privacy"><?php if($row['Mobile']=='Y'){echo "Global";}else{ echo "Private";} ?></span>
								<form class="edit-form" data-columnname='mobile' data-tablename='communication'>
									<input type="text" class="edit-input" name="">
<!-- 									<div class="btn-group privacy-setting">
									    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
									    <ul class="dropdown-menu">
									      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
									      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
									    </ul>
								    </div> -->
									<select class="privacy-setting">
										<option value="">Select Privacy</option>
										<option value="N">Private</option>
										<option value="Y">Global</option>
									</select>
									<button class="btn btn-primary save-change">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form>
								<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
						    </div>

							<div class="col-md-3">Email Id<strong>:</strong></div>
							<div class="col-md-9">
							    <span class="data"><?php echo $row['email']; ?></span> 
<!-- 							<span class="privacy">Global</span> -->
								<form class="edit-form" data-columnname='email' data-tablename='communication'>
									<input type="text" class="edit-input" name="">
									<!--<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div> -->
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
							<div class="col-md-9 address" >
							    <span class="data"><?php echo $row['full_address'];?></span>
<!-- 							    <span class="privacy">Global</span>  -->
								<form class="edit-form" data-columnname='full_address' data-tablename='address'>
									<input type="text" class="edit-input" name="">
<!-- 									<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div>
 -->									<button class="btn btn-primary save-change">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form>
								<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
						    </div>

							<div class="col-md-3">Name of city/town/village <strong>:</strong></div>
							<div class="col-md-9">
							    <span class="data"><?php echo $row['city'];?></span> 
							    <!-- <span class="privacy">Global</span> -->
								<form class="edit-form" data-columnname='city' data-tablename='address'>
									<select class="select-text">
										<option value="">Select City/Town/Village</option>
										<option value="Indore">Indore</option>
										<option value="Bhopal">Bhopal</option>
									</select>
<!-- 									<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div> -->
									<button class="btn btn-primary save-change">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form>
								<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
						    </div>

							<div class="col-md-3">Pin Code  <strong>:</strong></div>
							<div class="col-md-9">
							    <span class="dropdwn-txt"><?php echo $row['pincode'];?></span>
							   <!--  <span class="privacy">Global</span>  -->
								<form class="edit-form" data-columnname='pincode' data-tablename='address'>
									<input type="text" class="edit-input" name="">
										<select class="select-text">
											<option value="">Pin Code</option>
											<option value="">1001</option>
											<option value="">190002</option>
										</select>
<!-- 									<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div> -->
									<button class="btn btn-primary save-change">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form>
								<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
						    </div>

							<div class="col-md-3">State <strong>:</strong></div>
							<div class="col-md-9"> 
							    <span class="dropdwn-txt"><?php echo $row['state'];?></span> 
							<!--     <span class="privacy">Global</span> -->
								<form class="edit-form" data-columnname='state' data-tablename='address'>
										<select class="select-text">
											<option value="">Select State</option>
											<option value="Madhya Pradesh">Madhya Pradesh</option>
											<option value="Karnataka">Karnataka</option>
										</select>
<!-- 									<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div> -->
									<button class="btn btn-primary save-change">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form>
								<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
						    </div>

							<div class="col-md-3">Country <strong>:</strong></div>
							<div class="col-md-9">
							    <span class="dropdwn-txt"><?php echo $row['country'];?></span>
							   <!--  <span class="privacy">Global</span>  -->
								<form class="edit-form" data-columnname='country' data-tablename='address'>
									<select class="select-text">
										<option value="">Select State</option>
										<option value="India">India</option>
									</select>
<!-- 									<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div> -->
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
							    <span class="data"><?php echo $row['highest_edu']; ?></span> 
								<form class="edit-form" data-columnname='highest_edu' data-tablename='education_ocp'>
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
							    <span class="dropdwn-txt"> <?php if($row['occupation']==1){ echo "
											Job";} else if($row['occupation']==2) { echo "Bussiness";}
											else if($row['occupation']==3) { echo "Housewife";} else if($row['occupation']==4) { echo "Student";}else if($row['occupation']==5) { echo "Nothing";}else{ echo 'NA';} ?></span> 
								<form class="edit-form" data-columnname='occupation' data-tablename='education_ocp'>
									<select class="select-text">
										<option value="">Select Occupation</option>
										<option value="1">Job</option>
										<option value="2">Business</option>
										<option value="3">Housewife</option>
										<option value="4">Student</option>
									</select>
									<button class="btn btn-primary save-change">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form>
								<span class="edit float-right"><i class="fas fa-edit"></i> Edit</span>
						    </div>

							<div class="col-md-3">Income<strong>:</strong></div>
							<div class="col-md-9" >
							    <span class="dropdwn-txt"><?php if($row['income']==1){ echo "Less than 1 lakh";}
										else if($getdate['row']==2){ echo "1 lakh to 2 lakh";}
										else if($getdate['row']==3){ echo "2 lakh to 3 lakh";}
										else if($getdate['row']==4){ echo "3 lakh to 4 lakh";}
										else if($getdate['row']==5){ echo "more than 4 lakh";}
										else{ echo "NA";}
									?></span> 
							    <!-- <span class="privacy">Global</span> -->
								<form class="edit-form" data-columnname='income' data-tablename='education_ocp'>
									<select class="select-text">
										<option value="">Select Income</option>
										<option value="1">Less than 1 lakh</option>
										<option value="2">1 lakh to 2 lakh</option>
										<option value="3">2 lakh to 3 lakh</option>
										<option value="4">3 lakh to 4 lakh</option>
										<option value="5">more than 4 lakh</option>
									</select>
									<!-- <input type="text" class="edit-input" name=""> -->
<!-- 									<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle"     data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Global</li>
										    </ul>
									    </div>

 -->									<button class="btn btn-primary save-change">Save Changes</button>
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
<input type="hidden" name="" id="home_path" value="<?php echo RE_HOME_PATH;?>">
<?php include "../footer.php" ?>
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
	 $(this).siblings('.feet, .inch, .male, .female').hide();	
	 $(this).siblings('.privacy').hide();	
	 $(this).siblings('.dropdwn-txt').hide();	
	 $(this).siblings('.data').text();
	 $(this).siblings('.privacy').text();
	 $(this).siblings('.dropdwn-txt').text();
	 var inputData = $(this).siblings('.data').text();
	 var inputFeet = $(this).siblings('.feet').text();
	 var inputInch = $(this).siblings('.inch').text();
	 $(this).parent('.col-md-9').css({"background-color": "#eeeeee", "padding": "20px", "margin-bottom":"10px"});
	 $(this).siblings(".edit-form").css("display", "inline-block");
	 // $(this).siblings(".edit-form").toggle();
	 $(this).siblings(".edit-form").children('input').css("display", "block");
	 $(this).siblings('form').children('input.edit-input').val(inputData);
	 $(this).siblings('form').children('input.edit-input-feet').val(inputFeet);
	 $(this).siblings('form').children('input.edit-input-inch').val(inputInch);
	 
  });

//    var selText = "";
//  $(".dropdown-menu li").click(function(){
//   selText = $(this).text();
//   $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
// });

	$("#popular_name_btn").on("click", function(){ 	
			event.preventDefault();  
			var parent = $(this).parent(".edit-form");
			var inputValue = $(this).siblings("input").val();
			$(this).siblings(".edit-form").hide();
			var parent = $(this).parent(".edit-form");
			var current_users=$(this);
			var columnname = $(this).parent(".edit-form").data('columnname');
			var tablename = $(this).parent(".edit-form").data('tablename');
			var inputValue = $(this).siblings("input").val();
			var home_path = $("#home_path").val();
			$.post(home_path+"en/PJS-demo/view_and_update_profile1.php",
			{
				tablename:tablename,
				columnname:columnname,
				inputValue: inputValue
			},
			function(data,status){
				var status1=status;

				if (status1=='success') {
				//location.reload(true);
				current_users.parent(".edit-form").hide();
				$(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
				current_users.parent(".edit-form").siblings(".data").show().text(inputValue);
				}
				else{
				alert("Data: not updated");

				}
			});
  });

	$("#gender_frm").validate({
			rules: {
					gender_name: "required"

			},
			messages: {
					gender_name: "please select gender"
			}
	})
	$("#gender_btn").on("click", function(){ 	
			event.preventDefault();  
			if (!$("#gender_frm").valid()) { // Not Valid
				return false;
			} 
	   else{   
		var inputValue = $(this).siblings( ".select-text" ).children("option:selected").val();   
	   // $(this).siblings(".edit-form").hide();
	   var parent = $(this).parent(".edit-form");
			var parent = $(this).parent(".edit-form");
			$(this).siblings(".edit-form").hide();
			var parent = $(this).parent(".edit-form");
			var current_users=$(this);
			var columnname = $(this).parent(".edit-form").data('columnname');
			var tablename = $(this).parent(".edit-form").data('tablename');
			var home_path = $("#home_path").val();
			$.post(home_path+"en/PJS-demo/view_and_update_profile1.php",
			{
				tablename:tablename,
				columnname:columnname,
				inputValue: inputValue
			},
			function(data,status){
				var status1=status;

				if (status1=='success') {
				//location.reload(true);
				if(inputValue=="M"){
					inputValue="Male";
				}
				else{
					inputValue="Female";
				}
				current_users.parent(".edit-form").hide();
				$(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
				current_users.parent(".edit-form").siblings(".dropdwn-txt").show().text(inputValue);
				}
				else{
				alert("Data: not updated");

				}
			});

   }
  });

	$("#marital_status_frm").validate({
			rules: {
					marital_status_name: "required"

			},
			messages: {
					marital_status_name: "please select marital status"
			}
	})
	$("#marital_status_btn").on("click", function(){ 	
			event.preventDefault();  
			if (!$("#marital_status_frm").valid()) { // Not Valid
				return false;
			} 
	   else{   
		var inputValue = $(this).siblings( ".select-text" ).children("option:selected").val();   
	   // $(this).siblings(".edit-form").hide();
	   var parent = $(this).parent(".edit-form");
			var parent = $(this).parent(".edit-form");
			$(this).siblings(".edit-form").hide();
			var parent = $(this).parent(".edit-form");
			var current_users=$(this);
			var columnname = $(this).parent(".edit-form").data('columnname');
			var tablename = $(this).parent(".edit-form").data('tablename');
			var home_path = $("#home_path").val();
			$.post(home_path+"en/PJS-demo/view_and_update_profile1.php",
			{
				tablename:tablename,
				columnname:columnname,
				inputValue: inputValue
			},
			function(data,status){
				var status1=status;

				if (status1=='success') {
				//location.reload(true);
				current_users.parent(".edit-form").hide();
				$(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
					current_users.parent(".edit-form").siblings(".dropdwn-txt").show().text(inputValue);
				}
				else{
				alert("Data: not updated");
				}
			});

   }
  });

		$("#blood_group_frm").validate({
			rules: {
					blood_group_name: "required"

			},
			messages: {
					blood_group_name: "please select blood group"
			}
	})
		//
	$("#blood_group_btn").on("click", function(){ 	
			event.preventDefault();  
			if (!$("#blood_group_frm").valid()) { // Not Valid
				return false;
			} 
	   else{   
		var inputValue = $(this).siblings( ".select-text" ).children("option:selected").val();   
	   // $(this).siblings(".edit-form").hide();
	   var parent = $(this).parent(".edit-form");
			var parent = $(this).parent(".edit-form");
			$(this).siblings(".edit-form").hide();
			var parent = $(this).parent(".edit-form");
			var current_users=$(this);
			var columnname = $(this).parent(".edit-form").data('columnname');
			var tablename = $(this).parent(".edit-form").data('tablename');
			var home_path = $("#home_path").val();
			$.post(home_path+"en/PJS-demo/view_and_update_profile1.php",
			{
				tablename:tablename,
				columnname:columnname,
				inputValue: inputValue
			},
			function(data,status){
				var status1=status;

				if (status1=='success') {
				//location.reload(true);
					 if(inputValue==1){
					 	inputValue='A+';
					 } 
					 else if(inputValue==2){
					 	inputValue='B+';
					}
					else if(inputValue==3){
						inputValue='AB+';
					}else if(inputValue==4){
						inputValue= 'O+';
					}
					else if(inputValue==5){
						inputValue='A-';
					}else if(inputValue==6){
						inputValue= 'B-';
					} else if(inputValue==7){
						inputValue='AB-';
					}
					else if(inputValue==8){
						inputValue='O-';
					} else {
						inputValue='NA';
					}  
				current_users.parent(".edit-form").hide();
				$(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
					current_users.parent(".edit-form").siblings(".dropdwn-txt").show().text(inputValue);
				}
				else{
				alert("Data: not updated");
				}
			});

   }
  });

		$("#height_frm").validate({
			rules: {
					privacy_setting_name: "required"

			},
			messages: {
					privacy_setting_name: "please select privacy setting"
			}
	})
		//
	$("#height_btn").on("click", function(){ 	
			event.preventDefault();  
 if (!$("#height_frm").valid()) { // Not Valid
				return false;
			} 
	   else{   
		//var inputValue = $(this).siblings( ".select-text" ).children("option:selected").val();   
	   // $(this).siblings(".edit-form").hide();
	   	// var inputValue = $(this).siblings("input").val();
	   	var selText = $(this).siblings( ".privacy-setting" ).children("option:selected").val();  
	   var inputValueFeet = $(this).siblings("input.edit-input-feet").val();
	   var inputValueInch = $(this).siblings("input.edit-input-inch").val();
	   var parent = $(this).parent(".edit-form");
			var parent = $(this).parent(".edit-form");
			$(this).siblings(".edit-form").hide();
			var parent = $(this).parent(".edit-form");
			var current_users=$(this);
			var columnname = $(this).parent(".edit-form").data('columnname');
			var tablename = $(this).parent(".edit-form").data('tablename');
			var home_path = $("#home_path").val();
			$.post(home_path+"en/PJS-demo/view_and_update_profile2.php",
			{
				tablename:tablename,
				columnname:columnname,
				inputValueFeet: inputValueFeet,
				inputValueInch:inputValueInch,
				privacy_setting:selText
			},
			function(data,status){
				var status1=status;

				if (status1=='success') {
				//location.reload(true); 
				if (selText=='Y') {
					selText="Global"
				}
				else{
					selText="Private"
				}
				current_users.parent(".edit-form").hide();
				$(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
					current_users.parent(".edit-form").siblings(".privacy").show().text(Private);
					current_users.parent(".edit-form").siblings(".feet").show().text(inputValueFeet);
					current_users.parent(".edit-form").siblings(".inch").show().text(inputValueInch);
				}
				else{
				alert("Data: not updated");
				}
			});
}
  });

	$(".cancel").on("click", function(){ 	
		event.preventDefault();
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
<style type="text/css">
	label.error{
		display: block;
	}
</style>
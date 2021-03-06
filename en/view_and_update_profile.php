<?php 
include "../config/config.php";
user_session_check();
$current_user_id=$_SESSION['user_mid'];
$fire=mysqli_query($con,"SELECT mem.feet,mem.inches, mem.member_id,mem.middle_name,mem.husband_wife_name,mem.first_name,mem.last_name,addrss.full_address,addrss.city,comm.email,mem.fathers_name,mem.gender,mem.age,mem.date_of_birth,mem.place_of_birth,mem.time_of_birth,mem.marital_status,mem.blood_group,mem.popular_name,mem.marital_status,mem.blood_donate,addrss.member_id,addrss.full_address,addrss.city,addrss.state,addrss.country,addrss.pincode,comm.member_id,comm.mobile,comm.email,comm.country_flag,comm.country_code,edu.member_id,edu.highest_edu,edu.occupation,edu.ocp_details,edu.income,keyy.id,keyy.display_pic,addrss.city,addrss.state,addrss.pincode,addrss.country,mp.* from member as mem INNER JOIN address as addrss on mem.member_id=addrss.member_id INNER JOIN communication as comm on mem.member_id=comm.member_id INNER JOIN education_ocp as edu on mem.member_id=edu.member_id INNER JOIN key_member_id as keyy on mem.member_id=keyy.id INNER JOIN member_privacy mp on mem.member_id=mp.member_id where mem.member_id= '$current_user_id'")or die(mysqli_error($con));

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
<style>
.cc-picker-code-select-enabled {
    cursor: pointer;    float: left;
    padding-right: 0px;padding-left: 5px;
    position: relative;
    margin: 0px;
    border: 1px solid rgba(0, 0, 0, 0.2901960784313726);
    border-radius: 5px;
    padding-top: 0px!important;
    padding-bottom: 0px;
    height: 37px;
    width: 100px;
    background: white;

}
</style>
<div class="col-md-2 user-tab bg-color pt-3">
				<ul class="nav nav-tabs">
					<li class="nav-item"><a class="nav-link active" href="#overview">Overview</a></li>
					<li class="nav-item"><a class="nav-link" href="#basic-info">Basic Info</a></li>
					<li class="nav-item"><a class="nav-link" href="#contact">Contact & Address Info</a></li>
					<li class="nav-item"><a class="nav-link" href="#education">Education & Work</a></li>
					<li class="nav-item"><a class="nav-link" href="#profilepic">Profile Image</a></li>
				</ul>
			</div>
			<div class="col-md-10 tab-content user-profile shadow">	
				<div id="overview" class="tab-pane active">
					<div class="row">
						<div class="col-md-12 tab">
							<h3>Personal Info &nbsp;&nbsp; 
								<span class="edit-link edit-basic-info"><i class="fas fa-edit"></i> <span class="d-md"> Edit</span></span>
							</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3 col-5">Full Name <strong>:</strong></div>
								<div class="col-md-9 col-7"><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name']; ?></div>

								<div class="col-md-3 col-5">Popular Name<strong>:</strong></div>
								<div class="col-md-9 col-7 po_name">
								<?php echo $row['popular_name']; ?>
								</div>

								<div class="col-md-3 col-5">Father Name<strong>:</strong></div>
								<div class="col-md-9 col-7 fa_name">
								<?php echo $row['fathers_name']; ?>
								</div>

								<div class="col-md-3 col-5">Gender <strong>:</strong></div>
								<div class="col-md-9 col-7 gender_cl"><?php if($row['gender']=='M'){echo 'Male';}else{echo 'Female';} ?></div>

								<div class="col-md-3 col-5">Status <strong>:</strong></div>
								<div class="col-md-9 col-7 mari_sta" ><?php echo $row['marital_status']; ?></div>

                                <div class="col-md-3 col-5 gethusbanddiv hus_wife"><?php if(($row['marital_status']=='married')&&($row['gender']=='M')){echo "Wife's name";}else{echo "Husband's name"; } ?> <strong>:</strong></div>
								<div class="col-md-9 col-7 husband_val gethusbanddiv" ><?php echo $row['husband_wife_name']; ?></div>

								<div class="col-md-3 col-5">Blood Group<strong>:</strong></div>
								<div class="col-md-9 col-7 bld_grp"><?php if($row['blood_group']==1){echo 'A+';} else if($row['blood_group']==2){echo 'B+';}
                        else if($row['blood_group']==3){echo 'AB+';}else if($row['blood_group']==4){echo 'O+';}else if($row['blood_group']==5){echo 'A+';}else if($row['blood_group']==6){echo 'B-';} else if($row['blood_group']==7){echo 'AB-';}else if($row['blood_group']==8){echo 'O-';} else {echo $row['blood_group'] ;}  ; ?></div>
                                 
                                 <div class="col-md-3 col-5"> Are you willing to donate? <strong>:</strong></div>
								<div class="col-md-9 col-7 blood_donate_text_here"> <?php echo $row['blood_donate'];?> </div>


								<div class="col-md-3 col-5">Height <strong>:</strong></div>
								<div class="col-md-9 col-7 height_ov"><!-- <?php  if($row['feet']!='' && $row['inches']!=''){ echo $row['feet']."' ".$row['inches']."'' ";}else{echo "NA";}  ?>  -->
								<span class="feet_text"><?php if($row['feet']!=''){echo $row['feet'];}else{echo "";}?></span> <span>ft.</span>
									<span class="inch_text"><?php  if($row['inches']!=''){echo $row['inches']; }else{ echo "";}?></span><span> in</span>
							</div>
							</div>
							<h3>Birth Details &nbsp;&nbsp; 
								<span class="edit-link edit-basic-info"><i class="fas fa-edit"></i> <span class="d-md"> Edit</span></span>
							</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3 col-5">Date of Birth <strong>:</strong></div>
								<div class="col-md-9 col-7 dob_ov"><?php echo date('d/m/Y',strtotime($row['date_of_birth'])); ?></div>

								<div class="col-md-3 col-5">Birth Time<strong>:</strong></div>
								<div class="col-md-9 col-7 time_ov"><?php if($row['time_of_birth']!='00:00:00') {echo date('H:i',strtotime($row['time_of_birth'])); } else{ echo "NA";} ?></div>

								<div class="col-md-3 col-5">Birth Place <strong>:</strong></div>
								<div class="col-md-9 col-7 plof_ov"><?php if($row['place_of_birth']!=''){echo $row['place_of_birth'];}else{echo "NA";} ?></div>
							</div>
							<h3>Contact Info &nbsp;&nbsp; 
								<span class="edit-link edit-contact-info"><i class="fas fa-edit"></i> <span class="d-md"> Edit</span></span>
							</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3 col-5">Mobile No. <strong>:</strong></div>
								<div class="col-md-9 col-7">
									<div class="cc-picker cc-picker-code-select-enabled" style="background: #80808017;"><div class="cc-picker-flag <?php echo $row['country_flag']; ?> getcountryflag"></div><span class="cc-picker-code getcountrycode"><?php echo $row['country_code']; ?></span> </div><span class="mob_ov"><?php echo $row['mobile']; ?></span></div>

								<div class="col-md-3 col-5">Email Id<strong>:</strong></div>
								<div class="col-md-9 col-7 email_ov"><?php echo $row['email']; ?></div>
							</div>
							<h3>Address Info &nbsp;&nbsp; 
								<span class="edit-link edit-contact-info"><i class="fas fa-edit"></i> <span class="d-md"> Edit</span></span>
							</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3 col-5">Address <strong>:</strong></div>
								<div class="col-md-9 col-7">
									<p class="address address_ov"><?php echo $row['full_address'];  ?></p>
								</div>
							</div>
							<h3>Education &nbsp;&nbsp; 
								<span class="edit-link edit-education-info"><i class="fas fa-edit"></i> <span class="d-md"> Edit</span></span>
							</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3 col-5">Education <strong>:</strong></div>
								<div class="col-md-9 col-7 highest_edu_ov"><?php echo $row['highest_edu'];  ?></div>
							</div>
							<h3>Work &nbsp;&nbsp; 
								<span class="edit-link edit-education-info"><i class="fas fa-edit"></i> <span class="d-md"> Edit</span></span>
							</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3 col-5">Occupation <strong>:</strong></div>
								<div class="col-md-9 col-7 occupation_ov"><?php if($row['occupation']==1){ echo "
											Job";} else if($row['occupation']==2) { echo "Bussiness";}
											else if($row['occupation']==3) { echo "Housewife";} else if($row['occupation']==4) { echo "Student";}else if($row['occupation']==5) { echo "Nothing";}else{ echo 'NA';} ?></div>

								<div class="col-md-3 col-5">Income<strong>:</strong></div>
									<div class="col-md-9 col-7 income_ov"><?php if($row['income']==1){ echo "Less than 1 lakh";}
										else if($row['income']==2){ echo "1 lakh to 2 lakh";}
										else if($row['income']==3){ echo "2 lakh to 3 lakh";}
										else if($row['income']==4){ echo "3 lakh to 4 lakh";}
										else if($row['income']==5){ echo "more than 4 lakh";}
										else{ echo "NA";}
									?>
									</div>
							</div>



							<h3>Profile Image &nbsp;&nbsp; 
								<span class="edit-link edit-profile-pic"><i class="fas fa-edit"></i> <span class="d-md"> Edit</span></span>
							</h3>
							<hr>
							<div class="row info mb-4">
							<div class="col-md-12 col-5">
								<img src="<?php echo RE_HOME_PATH.''.$row['display_pic'];  ?>" alt="profile pic" title="profile pic" width="200px" id="profilepics">
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
								<div class="col-md-3 col-5">First Name <strong>:</strong></div>
								<div class="col-md-9 col-7"><?php echo $row['first_name'];?></div>


								<div class="col-md-3 col-5">Father Name <strong>:</strong></div>
								<div class="col-md-9 col-7 edit-wrapper">
								   <span class="data"><?php echo $row['fathers_name'];?></span> 
<!-- 								   <form class="edit-form" data-columnname='fathers_name' data-tablename='member' id="fathers_frm">
										<input type="text" class="edit-input" name="fathers_name">
										<button class="btn btn-primary save-change" id="fathers_name_btn">Save Changes</button>
										<button class="cancel btn btn-secondary	 btn btn-secondary">Cancel</button>
								   </form>
								   <span class="edit float-right"><i class="fas fa-edit"></i> <span class="d-md"> Edit</span></span> -->
								</div>

								<div class="col-md-3 col-5">Last Name <strong>:</strong></div>
								<div class="col-md-9 col-7">
									<?php echo $row['last_name']; ?>
								</div>

								<div class="col-md-3 col-5">Popular Name <strong>:</strong></div>
								<div class="col-md-9 col-7 edit-wrapper">
								   <span class="data"><?php echo $row['popular_name'];?></span> 
								   <form class="edit-form" data-columnname='popular_name' data-tablename='member' id="popular_name_frm">
										<input type="text" class="edit-input" name="popular_name">
										<button class="btn btn-primary save-change" id="popular_name_btn">Save Changes</button>
										<button class="cancel btn btn-secondary	 btn btn-secondary">Cancel</button>
								   </form>
								   <span class="edit float-right"><i class="fas fa-edit"></i> <span class="d-md"> Edit</span></span>
								</div>

								<div class="col-md-3 col-5">Gender<strong>:</strong></div>
								<div class="col-md-9 col-7">
									<span class="dropdwn-txt"><?php if($row['gender']=='M'){echo 'Male';}else{echo 'Female';} ?></span>
									<form class="edit-form" data-columnname='gender' data-tablename='member' id="gender_frm">
									    <select class="select-text form-control mb-2" name="gender_name" onchange="return statushere();" id="gender_name">
									    	<option value="">Select Gender</option>
									    	<option value="M" <?php if($row['gender']=='M'){echo "selected";} ?>>Male</option>
									    	<option value="F" <?php if($row['gender']=='F'){echo "selected";} ?>>Female</option>
									    </select>
										<!-- <input type="text" class="edit-input" name=""> -->
										<button class="btn btn-primary save-change" id="gender_btn">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
								   </form>
								   <span class="edit float-right"><i class="fas fa-edit"></i> <span class="d-md"> Edit</span></span>
								</div>

								<div class="col-md-3 col-5">Status <strong>:</strong></div>
								<div class="col-md-9 col-7">
									<span class="dropdwn-txt text-capitalize"><?php echo ucwords($row['marital_status']); ?></span> 
									<form class="edit-form" data-columnname='marital_status' data-tablename='member'  id="marital_status_frm" >
										<!-- <input type="text" class="edit-input" name=""> -->
										<select class="select-text form-control mb-2" name="marital_status_name" onchange="return statushere();" id="marital_status_name">
											<option value="">Select Status</option>
											<option value="single" <?php if($row['marital_status']=='single'){echo "selected";} ?>>Single</option>
											<option value="married" <?php if($row['marital_status']=='married'){echo "selected";} ?>>Married</option>
										</select>
										
										<div class="gethusbanddiv">
										<input type="text" class="form-control inputtext" maxlength='50'   name="husbandname" value="<?php echo $row['husband_wife_name']; ?>"  id="husbandname">
										</div>
										
										<button class="btn btn-primary save-change " id="marital_status_btn">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
									</form>
									<span class="edit float-right"><i class="fas fa-edit"></i> <span class="d-md"> Edit</span></span>
								</div>
								
								<div class="col-md-3 col-5 gethusbanddiv hus_wife" > <?php if(($row['marital_status']=='married')&&($row['gender']=='M')){echo "Wife's name";}else{echo "Husband's name"; } ?>  <strong>:</strong></div>
								<div class="col-md-9 col-7 gethusbanddiv" >
									<span class="data husband_val" id=""><?php echo $row['husband_wife_name']; ?></span> 
								</div>

								<div class="col-md-3 col-5">Blood Group<strong>:</strong></div>
								<div class="col-md-9 col-7">
								    	    <span class="dropdwn-txt"><?php if($row['blood_group']==1){echo 'A+';} else if($row['blood_group']==2){echo 'B+';}
                        else if($row['blood_group']==3){echo 'AB+';}else if($row['blood_group']==4){echo 'O+';}else if($row['blood_group']==5){echo 'A-';}else if($row['blood_group']==6){echo 'B-';} else if($row['blood_group']==7){echo 'AB-';}else if($row['blood_group']==8){echo 'O-';} else {echo $row['blood_group'];}  ; ?></span>
								    <form class="edit-form" data-columnname='blood_group' data-tablename='member' id="blood_group_frm">
										<select class="select-text form-control" name="blood_group_name">
											<option value="">Select Blood Group</option>
											<option value="A+">A+</option>
											<option value="B+">B+</option>
											<option value="AB+">AB+</option>
											<option value="O+">O+</option>
											<option value="A-">A-</option>
											<option value="B-">B-</option>
											<option value="AB-">AB-</option>
											<option value="O-">O-</option>
											<option value="9">Other</option>
										</select>
										<div class="form-group row" style="display:none;" id="otherblooddiv">
<label class="col-md-12 col-form-label"> <span class="text-danger">*</span> Other Blood Group</label>	
<div class="col-md-12">
<input type="text" name="otherbloodgroup" class="form-control" placeholder="Enter other blood group" id="otherbloodgroup" maxlength='3'>
</div>
<div class="col-md-12 text-danger errorblood"></div>
</div>


										<button class="btn btn-primary save-change" id="blood_group_btn">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
									</form>




									<span class="edit float-right"><i class="fas fa-edit"></i> <span class="d-md"> Edit</span></span>
							    </div>






<div class="col-md-3 col-5">Are you willing to donate?<strong>:</strong></div>
<div class="col-md-9 col-7 no-css">
<span class="dropdwn-txt blood_donate_text_here" id="blood_donate_text_here"><?php echo $row['blood_donate'];?></span>
<form class="edit-form donate-css" data-columnname='blood_group' data-tablename='member' id="blood_donate">
	<div class="row">
<div class="col-md-6">
<input type="radio" name="donate" value="Yes" checked> <label class=""> Yes</label>
</div>
<div class="col-md-6">
<input type="radio" name="donate" value="No"> <label> No</label> 
</div>
</div>

<button type="button" class="btn btn-primary save-change" id="blood_donate_btn">Save Changes</button>
<button class="cancel btn btn-secondary	">Cancel</button>
</form>
<span class="edit float-right"><i class="fas fa-edit"></i> <span class="d-md"> Edit</span></span>
</div>






								<div class="col-md-3 col-5">Height <strong>:</strong></div>
								<div class="col-md-9 col-7">
									<span class="feet"><?php if($row['feet']!=''){echo $row['feet'];}else{echo "";}?></span><span class="ft1">ft.</span>
									<span class="inch"><?php  if($row['inches']!=''){echo $row['inches']; }else{ echo "";}?></span><span class="in2"> in</span>
									<span class="privacy"><?php print $row['Height'] == 'N' ? 'Private' : 'Public';?> </span> 
									<form class="edit-form" data-columnname='feet' data-tablename='member' id="height_frm">
										<input type="tel" class="edit-input-feet form-control mb-2" name="height_feet" maxlength="2" onkeypress="return isNumeric(event)">
										<input type="tel" class="edit-input-inch form-control" name="height_inch" maxlength="2" onkeypress="return isNumeric(event)">
<!-- 										<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Public</li>
										    </ul>
									    </div> -->
										<select class="privacy-setting" name="privacy_setting_name">
											<!-- <option value="">Select Privacy</option> -->
											<option value="N" <?php if($row['Height'] == 'N'){ echo 'selected'; }?>>Private</option>
											<option value="Y" <?php if($row['Height'] == 'Y'){ echo 'selected'; }?>>Public</option>
										</select>
										<button class="btn btn-primary save-change" id="height_btn">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
									</form>
									<span class="edit float-right"><i class="fas fa-edit"></i> <span class="d-md"> Edit</span></span>
							    </div>
							</div>
							<h3>Birth Details</h3>
							<hr>
							<div class="row info mb-4">
								<div class="col-md-3 col-5">Date of Birth <strong>:</strong></div>
								<div class="col-md-9 col-7">
								    <span class="data"><?php echo date('d/m/Y',strtotime($row['date_of_birth'])); ?></span>
								    <span class="privacy"><?php if($row['Date_Of_Birth']=='Y'){echo "Public";}else{ echo "Private";} ?></span> 
									<form class="edit-form" data-columnname='date_of_birth' data-tablename='member'  id="date_of_birth_frm">
										<input type="hidden" class="edit-input" name="date_of_birth_name" value="<?php echo date('d/m/Y',strtotime($row['date_of_birth']));?>">
<!-- 										<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Public</li>
										    </ul>
									    </div> -->
										<select class="privacy-setting">
											<!-- <option value="">Select Privacy</option> -->
											<option value="N" <?php if($row['Date_Of_Birth'] == 'N'){ echo 'selected'; }?>>Private</option>
											<option value="Y" <?php if($row['Date_Of_Birth'] == 'Y'){ echo 'selected'; }?>>Public</option>
										</select>
										<button class="btn btn-primary save-change" id="date_of_birth_btn">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
									</form>
									<span class="edit float-right"><i class="fas fa-edit"></i> <span class="d-md"> Edit</span></span>
							    </div>

								<div class="col-md-3 col-5">Birth Time<strong>:</strong></div>
								<div class="col-md-9 col-7">
								     <span class="data"><?php if($row['time_of_birth']!='00:00:00') {echo date('H:i',strtotime($row['time_of_birth'])); } else{ echo "NA";} ?></span> 
								     <span class="privacy"><?php if($row['Time_Of_Birth']=='Y'){echo "Public";}else{ echo "Private";} ?></span>
									<form class="edit-form" data-columnname='time_of_birth' data-tablename='member' id="time_of_birth_frm">
										<input type="time" class="edit-input" name="time_of_birth_name">
<!-- 										<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Public</li>
										    </ul>
									    </div> -->
										<select class="privacy-setting">
										<!-- 	<option value=" ">Select Privacy</option> -->
											<option value="N" <?php if($row['Time_Of_Birth'] == 'N'){ echo 'selected'; }?>>Private</option>
											<option value="Y" <?php if($row['Time_Of_Birth'] == 'Y'){ echo 'selected'; }?>>Public</option>
										</select>
										<button class="btn btn-primary save-change" id="time_of_birth_btn">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
									</form>
									<span class="edit float-right"><i class="fas fa-edit"></i> <span class="d-md"> Edit</span></span>
							    </div>

								<div class="col-md-3 col-5">Birth Place <strong>:</strong></div>
								<div class="col-md-9 col-7">
								     <span class="data"><?php if($row['place_of_birth']!=''){echo $row['place_of_birth'];}else{echo "NA";} ?></span> 
								     <span class="privacy"><?php if($row['Place_Of_Birth']=='Y'){echo "Public";}else{ echo "Private";} ?></span>
									<form class="edit-form" data-columnname='place_of_birth' data-tablename='member' id="place_of_birth_frm">
										<input type="text" class="edit-input" name="">
<!-- 										<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Public</li>
										    </ul>
									    </div> -->
										<select class="privacy-setting">
											<!-- <option value="">Select Privacy</option> -->
											<option value="N" <?php if($row['Place_Of_Birth'] == 'N'){ echo 'selected'; }?>>Private</option>
											<option value="Y" <?php if($row['Place_Of_Birth'] == 'Y'){ echo 'selected'; }?>>Public</option>
										</select>
										<button class="btn btn-primary save-change" id="place_of_birth_btn">Save Changes</button>
										<button class="cancel btn btn-secondary	">Cancel</button>
									</form>
									<span class="edit float-right"><i class="fas fa-edit"></i><span class="d-md"> Edit</span></span> 
							    </div>
							</div>
						</div>
					</div>
				</div>
				<div id="contact"  class="tab-pane">
				   
						<h3>Contact Info</h3>
						<hr>
						<div class="row info mb-4">
							<div class="col-md-3 col-5">Mobile No. <strong>:</strong></div>
							<div class="col-md-9 col-7">

						       <div class="top-mobile-class"> <span class="data"><?php echo $row['mobile']; ?></span> <div class="cc-picker cc-picker-code-select-enabled" style="background: #80808017;"><div class="cc-picker-flag <?php echo $row['country_flag']; ?> getcountryflag"></div><span class="cc-picker-code getcountrycode"><?php echo $row['country_code']; ?></span> </div> </div>
						        	
						        <span class="privacy"><?php if($row['Mobile']=='Y'){echo "Public";}else{ echo "Private";} ?></span>
								<form class="edit-form" data-columnname='mobile' data-tablename='communication' id="mobile_frm">
									
									<input type="tel" class="edit-number input-phone" value="" placeholder="" name="mobile_name" onkeypress="return isNumeric(event)" maxlength="15">
									<select class="privacy-setting" style="left: 377px;">
										<!-- <option value="">Select Privacy</option> -->
										<option value="N" <?php if($row['Mobile'] == 'N'){ echo 'selected'; }?>>Private</option>
										<option value="Y" <?php if($row['Mobile'] == 'Y'){ echo 'selected'; }?>>Public</option>
									</select>
								
<!-- 									<div class="btn-group privacy-setting">
									    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
									    <ul class="dropdown-menu">
									      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
									      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Public</li>
									    </ul>
								    </div> -->
									
									<button class="btn btn-primary save-change" id="mobile_btn">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form>
								<span class="edit float-right"><i class="fas fa-edit"></i> <span class="d-md">Edit</span></span>
						    </div>

							<div class="col-md-3 col-5">Email Id<strong>:</strong></div>
							<div class="col-md-9 col-7">
							    <span class="data"><?php echo $row['email']; ?></span> 
<!-- 							<span class="privacy">Public</span> -->
								<form class="edit-form" data-columnname='email' data-tablename='communication' id="email_frm">
									<input type="email" class="edit-input" name="email_name" maxlength="150">
									<!--<div class="btn-group privacy-setting">
										    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fas fa-lock"></i> <span class="caret"></span></a>
										    <ul class="dropdown-menu">
										      <li class="dropdown-item"><i class="fas fa-lock"></i>&nbsp; Private</li>
										      <li class="dropdown-item"><i class="fas fa-globe-africa"></i>&nbsp;Public</li>
										    </ul>
									    </div> -->
									<button class="btn btn-primary save-change" id="email_btn">Save Changes</button>
									<button class="cancel btn btn-secondary	">Cancel</button>
								</form> 
								<span class="edit float-right"><i class="fas fa-edit"></i> <span class="d-md">Edit</span></span>
						    </div>
						</div>
						<h3>Address Info</h3>
						<hr>
						<div class="row info mb-4">
							<div class="col-md-9 ">
								<form class="" data-columnname='email' data-tablename='communication' id="Add_frm">
								<!-- <h3 class="mb-3">Please Enter Residential Details <span class="text-danger">(* Required Fields)</span></h3> -->
								<div class="form-group row">
									<label class="col-md-3 col-form-label "><span class="text-danger">*	</span> Country</label>
									<div class="col-md-9">
										<select class="custom-select" id="country" name="country" onclick="return countryies();">
										<option value="">Select Country</option>
										<option value="India" <?php if($row['country'] == 'India'){ echo 'selected'; }?>>India</option>
										<option value="Outside India" <?php if($row['country'] == 'Outside India'){ echo 'selected'; }?>>Outside India</option>

										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 col-form-label"><span class="text-danger">*</span> State</label>
									<div class="col-md-9">
										<select class="custom-select" id="state" onchange="return veiw_update_get_city();" name="state" data-current_city="<?php echo $row['city'];?>">
											<option value="" selected>Select State</option>
											<?php
											$state=mysqli_query($con,'select DISTINCT(state) from states_city_country where state!="CHANDIGARG" and state!=""');
											while($show=mysqli_fetch_array($state)){ 

											?>
												<option value="<?php echo $show['state']; ?>" <?php if($row['state'] == $show['state']){ echo 'selected'; } ?>><?php echo $show['state'];  ?></option>
											<?php 
											} 
											?>
										</select>
									</div>
								</div>
								<div class="form-group row">
										<label class="col-md-3 col-form-label"><span class="text-danger">*</span>Name of city/town/village</label>	
									<div class="col-md-9">
										<span id="getcity"></span>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-md-3 col-form-label"><span class="text-danger">*</span>Pin Code</label>	
									<div class="col-md-9">
										<span id="getpincode"></span>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 col-form-label"><span class="text-danger">*</span>Area</label>	
									<div class="col-md-9">
										<span id="getarea"></span>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 col-form-label"><span class="text-danger">*</span> Address</label>
									<div class="col-md-9">
										<textarea class="form-control " rows="4" id="address"  maxlength='250' name="address" placeholder="Enter address"><?php echo $row['full_address'];?></textarea>
									</div>
								</div>
								<div style="overflow:auto;">
									<div style="float:right;">
										<!-- <button class="btn" type="button" id="prevBtn" onclick="return preone();" >Previous</button> -->
										<button class="btn btn-primary" type="button" id="save_address_btn">Save Changes</button>
									</div>
								</div>
							</form>
							</div>


				</div>
			</div>

			<div id="education"  class="tab-pane">
					<h3>Education</h3>
					<hr>
					<div class="row info mb-4">
						<div class="col-md-3 col-5">Education <strong>:</strong></div>
						<div class="col-md-9 col-7">
						    <span class="data"><?php echo $row['highest_edu']; ?></span> 
							<form class="edit-form" data-columnname='highest_edu' data-tablename='education_ocp' id="highest_edu_frm">
								<input type="text" class="edit-input" name="highest_edu_name" >
								<button class="btn btn-primary save-change" id="highest_edu_btn">Save Changes</button>
								<button class="cancel btn btn-secondary	">Cancel</button>
							</form>
							<span class="edit float-right"><i class="fas fa-edit"></i><span class="d-md"> Edit</span></span>
					    </div>
					</div>
					<h3>Work</h3>
					<hr>
					<div class="row info mb-4">
						<div class="col-md-3 col-5">Occupation <strong>:</strong></div>
						<div class="col-md-9 col-7">
						    <span class="dropdwn-txt"> <?php if($row['occupation']==1){ echo "
										Job";} else if($row['occupation']==2) { echo "Bussiness";}
										else if($row['occupation']==3) { echo "Housewife";} else if($row['occupation']==4) { echo "Student";}else if($row['occupation']==5) { echo "Nothing";}else{ echo 'NA';} ?></span> 
							<form class="edit-form" data-columnname='occupation' data-tablename='education_ocp'         id="income_frm">
                                <!-- <select class="select-text">
									<option value="">Select Occupation</option>
									<option value="1">Job</option>
									<option value="2">Business</option>
									<option value="3">Housewife</option>
									<option value="4">Student</option>
								</select> -->
								<select class="custom-select" name="occupation" id="occupation" onchange="return getincome();">
									<option value="">Select occupation</option>
									<option value="1" <?php if($row['occupation']==1){ echo "
										selected";}?>>Job</option>
									<option value="2" <?php if($row['occupation']==2){ echo "
										selected";}?>>Business </option>
									<option value="3" <?php if($row['occupation']==3){ echo "
										selected";}?>>Housewife</option>
									<option value="4" <?php if($row['occupation']==4){ echo "
										selected";}?>>Student</option>
								<!-- <option value="5">Nothing</option> -->
								</select>
								<div class="form-group row" id="occdetails">
									<label class="col-md-12 col-form-label"><span class="text-danger">*</span> Please Add Details</label>
									<div class="col-md-12">
									<textarea class="form-control " rows="4" name="details" id="details" placeholder="Enter detail" maxlength="50"><?php echo  $row['ocp_details']; ?></textarea>
									</div>
								</div>
								<div class="form-group row" id="income-div" >
								    <label class="col-md-12 col-form-label"><span class="text-danger">*</span> Income</label>
									<div class="col-md-12">
										<select class="custom-select" name="income" id="income">
										<option value="">Select income</option>
										<option value="1" <?php if($row['income']==1){echo "selected";}?>>Less than 1 lakh</option>
										<option value="2" <?php if($row['income']==2){echo "selected";}?>>1 lakh to 2 lakh</option>
										<option value="3" <?php if($row['income']==3){echo "selected";}?>>2 lakh to 3 lakh</option>
										<option value="4" <?php if($row['income']==4){echo "selected";}?>>3 lakh to 4 lakh</option>
										<option value="5" <?php if($row['income']==5){echo "selected";}?>>more than 4 lakh</option>

										</select>
									</div>
								</div>
								<button class="btn btn-primary save-change" id="income_btn">Save Changes</button>
								<button class="cancel btn btn-secondary	">Cancel</button>
							</form>
							<span class="edit float-right"><i class="fas fa-edit"></i><span class="d-md"> Edit</span></span>
					    </div>

						<div class="col-md-3 col-5">Income<strong>:</strong></div>
						<div class="col-md-9 col-7" >
						    <span class="dropdwn-txt" id="income-drp"><?php if($row['income']==1){ echo "Less than 1 lakh";}
									else if($row['income']==2){ echo "1 lakh to 2 lakh";}
									else if($row['income']==3){ echo "2 lakh to 3 lakh";}
									else if($row['income']==4){ echo "3 lakh to 4 lakh";}
									else if($row['income']==5){ echo "more than 4 lakh";}
									else{ echo "NA";}
								?></span> 
						    <!-- <span class="privacy">Public</span> -->
							<!-- <span class="edit float-right"><i class="fas fa-edit"></i> Edit</span> -->
					    </div>
					</div>
				</div>


				<div id="profilepic"  class="tab-pane">
					<h3>Profile Image</h3>
					<hr>
					<div class="row info mb-4">
						<div class="col-md-3 col-5">Profile Image <strong>:</strong></div>
						<div class="col-md-9 col-7">
						    <span class="data" ><img src="<?php echo RE_HOME_PATH.''.$row['display_pic'];?>" alt="profile pic" id="imageimage" title="profile pic" width="200px"></span> 
							<form class="edit-form" data-columnname='highest_edu' data-tablename='education_ocp' id="uploadform" enctype="multipart/form-data" method="post">
							
							<input type="file" class="form-control profile-pic"  id="file" name="profile" onchange="return GetFileSize();" accept="image/png, image/jpeg" title="Select profile image">
							<span id="fileerror"></span>
								<button class="btn btn-primary save-change" type="button" id="btn-profile">Save Changes</button>
								<button class="cancel btn btn-secondary	">Cancel</button>
							</form>
							<span class="edit float-right"><i class="fas fa-edit"></i><span class="d-md"> Edit</span></span>
					    </div>
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
			$( document ).ready(function() {
				statushere();
				$(".input-phone").CcPicker();
				$(".input-phone").CcPicker("setCountryByCode","<?php echo $row['country_flag'];?>");
				
				$(".cc-picker").removeClass('col-md-2');
				//$(".input-phone").CcPicker({"countryCode":"in"});
				// $(".input-phone").CcPicker();
				// $(".input-phone").on("countrySelect", function(e, i){
				// 										alert(i.countryName + " " + i.phoneCode +" "+i.code);
				// 									});
			});
function statushere(){
var statuss=$("#marital_status_name"). val();
var genderr=$("#gender_name"). val();
var husbandname=$("#husbandname"). val();

if((statuss=='married')&& (genderr=='F') ){
$('.gethusbanddiv').show();
$('#husband_wife_form').show();
//$('.husband_val').text('');
$('.hus_wife').html("Husband's Name <strong>:</strong>");
$("#husbandname").attr("placeholder", "Enter husband's name");
}
else if((statuss=='married')&& (genderr=='M') ){
$('.gethusbanddiv').show();

$('.hus_wife').html("Wife's Name <strong>:</strong>");
$("#husbandname").attr("placeholder", "Enter wife's name");
}
else if((statuss=='single')){
$('.gethusbanddiv').hide();
$("#husbandname").val(" ");

}
else{
$('.gethusbanddiv').hide();
}
}

getincome();
function getincome(){
var occupation=$('#occupation').val();
if((occupation==3) || (occupation==4) || (occupation==5) ){
$('#income-div').hide();
$('#occdetails').hide();
}else{
$('#income-div').show();
$('#occdetails').show();
}
}
$(document).ready(function(){
$('select[name=blood_group_name]').on('change', function() {
if($(this).val()==9){
$('#otherblooddiv').show();	
}else{
$('#otherblooddiv').hide(); 
$('#otherbloodgroup').val(''); 

}
});
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
	 $(this).siblings('.feet, .inch, .male, .female, .ft1, .in2').hide();	
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
	 $('.top-mobile-class').hide();
	 
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
				$(".po_name").text(inputValue);
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
				$(".gender_cl").text(inputValue);
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
			var husband_wife_name=$('#husbandname').val(); 
            var marital_status_name=$('#marital_status_name').val();
			if (!$("#marital_status_frm").valid()) { // Not Valid
				return false;
			}

			else if ((marital_status_name=='married')&&(husband_wife_name=='')) { // Not Valid
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
			var otherbloodgroup = $("#otherbloodgroup").val();
			$.post(home_path+"en/PJS-demo/view_and_update_profile1.php",
			{
				tablename:tablename,
				columnname:columnname,
				inputValue: inputValue,
				husband_wife_name:husband_wife_name
			},
			function(data,status){
				var status1=status;
				if (status1=='success') {
				//location.reload(true);
				current_users.parent(".edit-form").hide();
				$(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
					current_users.parent(".edit-form").siblings(".dropdwn-txt").show().text(inputValue);
					$(".mari_sta").text(inputValue);
					$(".husband_val").text(husband_wife_name);
					
				}
				else{
				alert("Data: not updated");
				}
			});

   }
  });

	$("#husband_wife_button").on("click", function(){ 	
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
				$(".husband_val").text(inputValue);

				
				}
				else{
				alert("Data: not updated");
				}
			});
  });

	// $("#husband_wife_button").on("click", function(){ 	
	// 		event.preventDefault(); 
	// 		var husband_wife_name=$('#husbandname').val(); 
 //            var marital_status_name=$('#marital_status_name').val();
	// 	if ((marital_status_name=='married')&&(husband_wife_name=='')) { // Not Valid
	// 			return false;
	// 		} 
	//    else{   
	// 	var inputValue = $('#husbandname').val();   
	//    // $(this).siblings(".edit-form").hide();
	//    var parent = $(this).parent(".edit-form");
	// 		var parent = $(this).parent(".edit-form");
	// 		var current_users="<?php echo $_SESSION['user_mid']; ?>";
	// 		var columnname = $(this).parent(".edit-form").data('columnname');
	// 		var tablename = $(this).parent(".edit-form").data('tablename');
	// 		var home_path = $("#home_path").val();
	// 		var otherbloodgroup = $("#otherbloodgroup").val();
	// 		alert(parent);
	// 		$.post(home_path+"en/PJS-demo/view_and_update_profile1.php",
	// 		{
	// 			tablename:tablename,
	// 			columnname:columnname,
	// 			inputValue: inputValue
	// 		},
	// 		function(data,status){
	// 			var status1=status;

	// 			if (status1=='success') {
	// 			//location.reload(true);
	// 			$('#husband_wife_form').hide();
	// 			$(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
	// 				current_users.parent(".edit-form").siblings(".dropdwn-txt").show().text(inputValue);
	// 				$(".husband_val").html(inputValue);
	// 			}
	// 			else{
	// 			alert("Data: not updated");
	// 			}
	// 		});

 //   }
 //  });

		$("#blood_group_frm").validate({
			rules: {
					blood_group_name: "required"

			},
			messages: {
					blood_group_name: "please select blood group"
			}
				
	})

	$("#blood_group_btn").on("click", function(){ 	
			event.preventDefault();  
			if (!$("#blood_group_frm").valid()) { // Not Valid
				return false;
			} 
	   else{   
	   	var inputValue = $(this).siblings( ".select-text" ).children("option:selected").val(); 
	   	var inputValue1 = "other"; 
	   	if (inputValue==9) {
			var inputValue = $("#otherbloodgroup:visible").val(); 
			if(inputValue==''){
              $('#otherbloodgroup').focus();
              $('.errorblood').html('please enter blood group');
return false;
			}


			
	   	}
	   	else{
	   		var inputValue = $(this).siblings( ".select-text" ).children("option:selected").val(); 
	   	}
		  
	   // $(this).siblings(".edit-form").hide();
	   var parent = $(this).parent(".edit-form");
			var parent = $(this).parent(".edit-form");
			$(this).siblings(".edit-form").hide();
			var parent = $(this).parent(".edit-form");
			var current_users=$(this);
			var columnname = $(this).parent(".edit-form").data('columnname');
			var tablename = $(this).parent(".edit-form").data('tablename');
			var home_path = $("#home_path").val();
			var otherbloodgroup = $("#otherbloodgroup").val();

			
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
					 if(inputValue=='A+'){
					 	inputValue='A+';
					 } 
					 else if(inputValue=='B+'){
					 	inputValue='B+';
					}
					else if(inputValue=='AB+'){
						inputValue='AB+';
					}else if(inputValue=='O+'){
						inputValue= 'O+';
					}
					else if(inputValue=='A-'){
						inputValue='A-';
					}else if(inputValue=='B-'){
						inputValue= 'B-';
					} else if(inputValue=='AB-'){
						inputValue='AB-';
					}
					else if(inputValue=='O-'){
						inputValue='O-';
					} else if(inputValue1=='other'){
						inputValue=inputValue;
					}  else{
						inputValue='NA';
					}
				current_users.parent(".edit-form").hide();
				$(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
					current_users.parent(".edit-form").siblings(".dropdwn-txt").show().text(inputValue);
					$(".bld_grp").text(inputValue);
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
					selText="Public"
				}
				else{
					selText="Private"
				}
				current_users.parent(".edit-form").hide();
				$(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
					current_users.parent(".edit-form").siblings(".privacy").show().text(selText);
					current_users.parent(".edit-form").siblings(".ft1").show().text("ft.");
					current_users.parent(".edit-form").siblings(".in2").show().text(" in");
					current_users.parent(".edit-form").siblings(".feet").show().text(inputValueFeet);
					current_users.parent(".edit-form").siblings(".inch").show().text(inputValueInch);

					$(".feet_text").text(inputValueFeet);
					$(".inch_text").text(inputValueInch);
				}
				else{
				alert("Data: not updated");
				}
			});
}
  });
	// date of birth

		//
	$("#date_of_birth_btn").on("click", function(){ 	
		event.preventDefault();  
			//var inputValue = $(this).siblings( ".select-text" ).children("option:selected").val();   
			// $(this).siblings(".edit-form").hide();
			// var inputValue = $(this).siblings("input").val();
			var selText = $(this).siblings(".privacy-setting").children("option:selected").val();  
		 	//var inputValue = $(this).siblings("input").val();
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
				privacy_setting:selText
			},
			function(data,status){
				var status1=status;

				if (status1=='success') {
				//location.reload(true); 
				if (selText=='Y') {
					selText="Public"
				}
				else{
					selText="Private"
				}
				current_users.parent(".edit-form").hide();
				$(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
				current_users.parent(".edit-form").siblings(".privacy").show().text(selText);
				current_users.parent(".edit-form").siblings(".data").show().text(inputValue);
				//$(".dob_ov").text(inputValue);
				}
				else{
				alert("Data: not updated");
				}
			});
  });

$("#blood_donate_btn").on("click", function(){ 	
//			event.preventDefault(); 
var blod_donate=$('input[name=donate]:checked').val();
var seesionid="<?php echo $_SESSION['user_mid']; ?>";
if((blod_donate)==''){
$('#blod_donate').html('select blood donate');	
}else{

$.ajax({
method:'post',
url:'<?php echo RE_EN_PATH;?>PJS-demo/update_blood_donate.php',
data:{'blod_donate':blod_donate,'seesionid':seesionid},
success:function(blooddonate){

	if(blooddonate='success'){
$('.blood_donate_text_here').html(blod_donate);
$('.blood_donate_text_here').show();
$('#blood_donate').hide();
}
}
})

}


});
		$("#time_of_birth_btn").on("click", function(){ 	
			event.preventDefault();   
			//var inputValue = $(this).siblings( ".select-text" ).children("option:selected").val();   
			// $(this).siblings(".edit-form").hide();
			// var inputValue = $(this).siblings("input").val();
			var selText = $(this).siblings(".privacy-setting").children("option:selected").val();  
		 	var inputValue = $(this).siblings("input").val();
			var parent = $(this).parent(".edit-form");
			var parent = $(this).parent(".edit-form");
			$(this).siblings(".edit-form").hide();
			var parent = $(this).parent(".edit-form");
			current_users=$(this);
			var columnname = $(this).parent(".edit-form").data('columnname');
			var tablename = $(this).parent(".edit-form").data('tablename');
			var home_path = $("#home_path").val();
			$.post(home_path+"en/PJS-demo/view_and_update_profile1.php",
			{
				tablename:tablename,
				columnname:columnname,
				inputValue: inputValue,
				privacy_setting:selText
			},
			function(data,status){
				var status1=status;

				if (status1=='success') {
				//location.reload(true); 
				if (selText=='Y') {
					selText="Public"
				}
				else{
					selText="Private"
				}
				current_users.parent(".edit-form").hide();
				$(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
				current_users.parent(".edit-form").siblings(".privacy").show().text(selText);
				current_users.parent(".edit-form").siblings(".data").show().text(inputValue);
				$(".time_ov").text(inputValue);						
				}
				else{
				alert("Data: not updated");
				}
			});
  });
//birth place 
		$("#place_of_birth_btn").on("click", function(){ 	
			event.preventDefault();   
			//var inputValue = $(this).siblings( ".select-text" ).children("option:selected").val();   
			// $(this).siblings(".edit-form").hide();
			// var inputValue = $(this).siblings("input").val();
			var selText = $(this).siblings(".privacy-setting").children("option:selected").val();  
		 	var inputValue = $(this).siblings("input").val();
			var parent = $(this).parent(".edit-form");
			var parent = $(this).parent(".edit-form");
			$(this).siblings(".edit-form").hide();
			var parent = $(this).parent(".edit-form");
			current_users=$(this);
			var columnname = $(this).parent(".edit-form").data('columnname');
			var tablename = $(this).parent(".edit-form").data('tablename');
			var home_path = $("#home_path").val();
			$.post(home_path+"en/PJS-demo/view_and_update_profile1.php",
			{
				tablename:tablename,
				columnname:columnname,
				inputValue: inputValue,
				privacy_setting:selText
			},
			function(data,status){
				var status1=status;

				if (status1=='success') {
				//location.reload(true); 
				if (selText=='Y') {
					selText="Public"
				}
				else{
					selText="Private"
				}
				current_users.parent(".edit-form").hide();
				$(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
				current_users.parent(".edit-form").siblings(".privacy").show().text(selText);
				current_users.parent(".edit-form").siblings(".data").show().text(inputValue);
				$(".plof_ov").text(inputValue);
				}
				else{
				alert("Data: not updated");
				}
			});
  		});

  		// mobile number
		$("#mobile_frm").validate({
			rules: {
				mobile_name: "required"
		},
			messages: {
				mobile_name: "mobile is required field"
			}
		})
		$("#mobile_btn").on("click", function(){ 
		   	
			event.preventDefault();   
			if (!$("#mobile_frm").valid()) { // Not Valid
				return false;
			}		 
			else{
			//var inputValue = $(this).siblings( ".select-text" ).children("option:selected").val();   
			// $(this).siblings(".edit-form").hide();
			// var inputValue = $(this).siblings("input").val();
			   var countryflag=$('#flagname').val();
			   var countrycode=$('#countrycode').val();

				var selText = $(this).siblings(".privacy-setting").children("option:selected").val();  
			 	var inputValue = $(this).siblings("input").val();
				var parent = $(this).parent(".edit-form");
				var parent = $(this).parent(".edit-form");
				$(this).siblings(".edit-form").hide();
				var parent = $(this).parent(".edit-form");
				current_users=$(this);
				var columnname = $(this).parent(".edit-form").data('columnname');
				var tablename = $(this).parent(".edit-form").data('tablename');
				var home_path = $("#home_path").val();

				$.post(home_path+"en/PJS-demo/view_and_update_profile1.php",
				{
					tablename:tablename,
					columnname:columnname,
					inputValue: inputValue,
					privacy_setting:selText,
					countryflag:countryflag,
					countrycode:countrycode

				},
				function(data,status){
					var status1=status;
					if (status1=='success') {
					//location.reload(true); 
					if (selText=='Y') {
						selText="Public"
					}
					else{
						selText="Private"
					}
					current_users.parent(".edit-form").hide();
					$(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
					current_users.parent(".edit-form").siblings(".privacy").show().text(selText);
					current_users.parent(".edit-form").siblings(".top-mobile-class").show().children(".data").text(inputValue);
					current_users.parent(".edit-form").siblings(".cc-picker").children(".cc-picker-code").show().text(countrycode);
					current_users.parent(".edit-form").siblings(".cc-picker").children(".cc-picker-flag").addClass(countryflag);
					//alert(inputValue); 
					$(".mob_ov").text(inputValue);
                    $('.getcountryflag').addClass(countryflag);
                    $('.getcountryflag').removeClass('<?php echo $row['country_flag'];?>');
                    $('.getcountrycode').text(countrycode);
                    
					}
					else{
					alert("Data: not updated");
					}
				});
			}
  		});		
  		$("#fathers_frm").validate({
			rules: {
				fathers_name: "required"
		},
			messages: {
				fathers_name: "father name is required field"
			}
		})
		$("#fathers_name_btn").on("click", function(){ 	
			event.preventDefault();   
			if (!$("#fathers_frm").valid()) { // Not Valid
				return false;
			}		 
			else{
			//var inputValue = $(this).siblings( ".select-text" ).children("option:selected").val();   
			// $(this).siblings(".edit-form").hide();
			// var inputValue = $(this).siblings("input").val();
				//var selText = $(this).siblings(".privacy-setting").children("option:selected").val();  
			 	var inputValue = $(this).siblings("input").val();
				var parent = $(this).parent(".edit-form");
				var parent = $(this).parent(".edit-form");
				$(this).siblings(".edit-form").hide();
				var parent = $(this).parent(".edit-form");
				current_users=$(this);
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
					//current_users.parent(".edit-form").siblings(".privacy").show().text(selText);
					current_users.parent(".edit-form").siblings(".data").show().text(inputValue);
					$(".fa_name").text(inputValue);
					}
					else{
					alert("Data: not updated");
					}
				});
			}
  		});

		$("#email_frm").validate({
			rules: {
				email_name: "required"
		},
			messages: {
				email_name: "email is required field"
			}
		})
		$("#email_btn").on("click", function(){ 	
			event.preventDefault();   
			if (!$("#email_frm").valid()) { // Not Valid
				return false;
			}		 
			else{
			//var inputValue = $(this).siblings( ".select-text" ).children("option:selected").val();   
			// $(this).siblings(".edit-form").hide();
			// var inputValue = $(this).siblings("input").val();
				var selText = $(this).siblings(".privacy-setting").children("option:selected").val();  
			 	var inputValue = $(this).siblings("input").val();
				var parent = $(this).parent(".edit-form");
				var parent = $(this).parent(".edit-form");
				$(this).siblings(".edit-form").hide();
				var parent = $(this).parent(".edit-form");
				current_users=$(this);
				var columnname = $(this).parent(".edit-form").data('columnname');
				var tablename = $(this).parent(".edit-form").data('tablename');
				var home_path = $("#home_path").val();
				$.post(home_path+"en/PJS-demo/view_and_update_profile1.php",
				{
					tablename:tablename,
					columnname:columnname,
					inputValue: inputValue,
					privacy_setting:selText
				},
				function(data,status){
					var status1=status;

					if (status1=='success') {
					//location.reload(true); 
					if (selText=='Y') {
						selText="Public"
					}
					else{
						selText="Private"
					}
					current_users.parent(".edit-form").hide();
					$(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
					current_users.parent(".edit-form").siblings(".privacy").show().text(selText);
					current_users.parent(".edit-form").siblings(".data").show().text(inputValue);
					$(".email_ov").text(inputValue);
					}
					else{
					alert("Data: not updated");
					}
				});
			}
  		});

		$("#highest_edu_frm").validate({
		rules: {
			highest_edu_name: "required"
		},
		messages: {
			highest_edu_name: "education is required field"
		}
		})
		$("#highest_edu_btn").on("click", function(){ 	
			event.preventDefault();   
			if (!$("#highest_edu_frm").valid()) { // Not Valid
				return false;
			}		 
			else{
			//var inputValue = $(this).siblings( ".select-text" ).children("option:selected").val();   
			// $(this).siblings(".edit-form").hide();
			// var inputValue = $(this).siblings("input").val();
				var selText = $(this).siblings(".privacy-setting").children("option:selected").val();  
			 	var inputValue = $(this).siblings("input").val();
				var parent = $(this).parent(".edit-form");
				var parent = $(this).parent(".edit-form");
				$(this).siblings(".edit-form").hide();
				var parent = $(this).parent(".edit-form");
				current_users=$(this);
				var columnname = $(this).parent(".edit-form").data('columnname');
				var tablename = $(this).parent(".edit-form").data('tablename');
				var home_path = $("#home_path").val();
				$.post(home_path+"en/PJS-demo/view_and_update_profile1.php",
				{
					tablename:tablename,
					columnname:columnname,
					inputValue: inputValue,
					privacy_setting:selText
				},
				function(data,status){
					var status1=status;

					if (status1=='success') {
					//location.reload(true); 
					if (selText=='Y') {
						selText="Public"
					}
					else{
						selText="Private"
					}
					current_users.parent(".edit-form").hide();
					$(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
					current_users.parent(".edit-form").siblings(".privacy").show().text(selText);
					current_users.parent(".edit-form").siblings(".data").show().text(inputValue);
					$(".highest_edu_ov").text(inputValue);
					}
					else{
					alert("Data: not updated");
					}
				});
			}
  		});

		$("#Add_frm").validate({
		rules: {
			country: "required",
			state: "required",
			city: "required",
			pincode: "required",
			area: "required",
			address: "required"
		},
		messages: {
			country: "please select country",
			state: "please select state",
			city: "please select city",
			pincode: "please select pincode",
			area: "please select area",
			address: "please select address"
		}
		})
		$("#save_address_btn").on("click", function(){ 	
			event.preventDefault();   
			if (!$("#Add_frm").valid()) { // Not Valid
				return false;
			}		 
			else{
			//var inputValue = $(this).siblings( ".select-text" ).children("option:selected").val();   
			// $(this).siblings(".edit-form").hide();
			// var inputValue = $(this).siblings("input").val();
				var country = $("#country option:selected").val();  
				var state = $("#state option:selected").val();  
				var city = $("#city option:selected").val();  
				var pincode = $("#pincodes option:selected").val();  
				var area = $("#area option:selected").val();  
				var address = $("#address").val();  
				var home_path = $("#home_path").val();
				$.post(home_path+"en/PJS-demo/view_and_update_profile_address.php",
				{
					country:country,
					state:state,
					city: city,
					pincode:pincode,
					area:area,
					address:address
				},
				function(data,status){
					var status1=status;

					if (status1=='success') {
					location.reload(true); 
					}
					else{
					alert("Data: not updated");
					}
				});
			}
  		});

		$("#income_frm").validate({
		rules: {
			income: "required",
			details: "required",
			occupation: "required",
		},
		messages: {
			income: "please select income",
			details: "please select details",
			occupation: "please select occupation"
		}
		})
		$("#income_btn").on("click", function(){ 	
			event.preventDefault();   
			if (!$("#income_frm").valid()) { // Not Valid
				return false;
			}		 
			else{
			//var inputValue = $(this).siblings( ".select-text" ).children("option:selected").val();   
			// $(this).siblings(".edit-form").hide();
			// var inputValue = $(this).siblings("input").val();
				var occupation = $("#occupation:visible  option:selected").val();  
				var details = $("#details:visible").val();  
				var income = $("#income:visible option:selected").val();  
				//console.log(occupation+" details:- "+details+" income:-"+income);return;
				current_users=$(this);
				var parent = $(this).parent(".edit-form");
				var home_path = $("#home_path").val();
				$.post(home_path+"en/PJS-demo/view_and_update_profile_occupation.php",
				{
					occupation:occupation,
					details:details,
					income: income
				},
				function(data,status){
					var status1=status;
					var data12=$("#occupation:visible  option:selected").val(); 
					if (status1=='success') {
					//location.reload(true); 
					var occupation1='';
					if(data12==1){
						occupation1= "Job";
					} 
					if(data12==2) {
						occupation1= "Bussiness";
					}
					if(data12==3) { 
						occupation1= "Housewife";
					} 
					if(data12==4) {
						occupation1="Student";
					}
					
					var income1='';
					if(income=='1'){ income="Less than 1 lakh";}
					else if(income=='2'){ income1="1 lakh to 2 lakh";}
					else if(income=='3'){ income1= "2 lakh to 3 lakh";}
					else if(income=='4'){ income1= "3 lakh to 4 lakh";}
					else if(income=='5'){ income1="more than 4 lakh";}
					else{ income1= "NA";}
					current_users.parent(".edit-form").hide();
					$(parent).parent('.col-md-9').css({"background-color": "", "padding": ""});
					current_users.parent(".edit-form").siblings(".dropdwn-txt").show().text(occupation1);		
					$(".occupation_ov").text(occupation1);
					$(".income_ov").text(income1);				
					$("#income-drp").text(income1);
					if((data12==3) || (data12==4)){
							 $("#details").val('');
							 $("#income").val('');
					}				
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
	   $(this).parent(".edit-form").siblings(".dropdwn-txt, .feet, .inch").show();
  });






$(document).ready(function(){

$("#btn-profile").click(function(){
	var fd = new FormData();
	var files = $('#file')[0].files;
	
	
	// Check file selected or not
	if(files.length > 0 ){
	   fd.append('file',files[0]);
	   $.ajax({
		url: "<?php echo RE_EN_PATH;?>PJS-demo/view_and_update_profilepic.php",
		  type: 'post',
		  data: fd,
		  contentType: false,
		  processData: false,
		  success: function(response){
			$('#imageimage').attr('src',response); 
			$('#profilepics').attr('src',response); 
			
			$( 'a[ href="#profilepic" ]' ).addClass("active");
			$('#filename').val(response); 
			$('#uploadform').hide();
			$('#uploadform')[0].reset();
            $('.data').show();
			$('#fileerror').html('');
			return false;
		  },
	   });
	}else{
$('#file').val('');
$('#fileerror').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Please select image size of maximum 1mb in size.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}
});
});



$('.nav-tabs' ).on("click", function() {
	event.preventDefault();
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
	
	else if ($(this).hasClass("edit-profile-pic")) {
    	$( 'a[ href="#profilepic" ]' ).addClass("active");
    	$( "div#profilepic" ).show();
    	$( "div#basic-info" ).hide();
    	$("div#contact").hide();
    	$("div#education").hide();
    }

});
  
});

function GetFileSize() {
var fi = document.getElementById('file'); // GET THE FILE INPUT.

// VALIDATE OR CHECK IF ANY FILE IS SELECTED.
if (fi.files.length > 0) {
// RUN A LOOP TO CHECK EACH SELECTED FILE.
for (var i = 0; i <= fi.files.length - 1; i++) {

var fsize = fi.files.item(i).size; 
// THE SIZE OF THE FILE.
// document.getElementById('fp').innerHTML =
//     document.getElementById('fp').innerHTML + '<br /> ' +
//         '<b>' + Math.round((fsize / 1024)) + '</b> KB';
var sizemain=Math.round((fsize / 1024)) ;
if(sizemain>1024){
$('#file').val('');
$('#fileerror').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Please select image size of maximum 1mb in size.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
$('#blah').attr('src', '<?php echo RE_HOME_PATH ;?>uploads/dummy.png');
}else{
$('#fileerror').html('');
}
}
}
}
function countryies(){
var countries=$('#country').val();
if(countries=='Outside India'){
$('#state').val('');
veiw_update_get_city();

getCity();
}else{
$('#state').val('');
veiw_update_get_city();
getCity();
}

}
</script>

</html>
<style type="text/css">
	label.error{
		display: block;
	}
</style>
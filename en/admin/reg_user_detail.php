<?php  include "../../config/config.php" ;
$getid=base64_decode($_REQUEST['id']);

$getdate=mysqli_fetch_array(mysqli_query($con,'select * from staging_approval where request_id="'.$getid.'" '));

$insert

?>
<!DOCTYPE>
<html>
<head>
	<head>
	<?php  include "../../styles.php" ?>
</head>
</head>
<body>
	<div class="container-fluid">
	<?php  include "../header.php" ?>
		
		
		</div>
		<div class="container mb-4 px-0 shadow">
			<h2 class="header">User Details</h2>
			<div class="row user-profile">
                <div class="col-md-12">
<?php
				
				

				?>
                    <h3>Personal Info</h3>
                    <hr>
                    <div class="row info mb-4">
                        <div class="col-md-3">First Name <strong>:</strong></div>
                        <div class="col-md-9"><?php echo $getdate['first_name']; ?></div>

                        <div class="col-md-3">Middle Name<strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['middle_name']!='') {echo $getdate['middle_name'];}else{ echo 'NA';} ?></div>

                        <div class="col-md-3">Last Name <strong>:</strong></div>
                        <div class="col-md-9"><?php echo $getdate['last_name']; ?></div>

                        <div class="col-md-3">Popular Name <strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['popular_name']!='') {echo $getdate['popular_name'];}else{ echo 'NA';} ?></div>

                        <div class="col-md-3">Gender<strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['gender']==1)  { echo 'MALE';} else{ echo "FEMALE";} ?></div>

                        <div class="col-md-3">Status <strong>:</strong></div>
                        <div class="col-md-9"><?php echo $getdate['martial_status'] ;?></div>

                        <div class="col-md-3">Blood Group<strong>:</strong></div>
                        <div class="col-md-9"> 
                        <?php if($getdate['blood_group']==1){echo 'A+';} else if($getdate['blood_group']==2){echo 'B+';}
                        else if($getdate['blood_group']==3){echo 'AB+';}else if($getdate['blood_group']==4){echo 'O+';}else if($getdate['blood_group']==5){echo 'A+';}else if($getdate['blood_group']==6){echo 'B-';} else if($getdate['blood_group']==7){echo 'AB-';}else if($getdate['blood_group']==8){echo 'O-';} else {echo 'NA';}  ; ?></div>

                        <div class="col-md-3">Height <strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['height']!=''){echo $getdate['height'];}else{echo "NA";} ; ?></div>

                        <div class="col-md-3">Date of Birth <strong>:</strong></div>
                        <div class="col-md-9"><?php echo date('d/m/Y',strtotime($getdate['date_of_birth'] )); ?></div>

                        <div class="col-md-3">Birth Time<strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['time_of_birth']!='') {echo date('H:i',strtotime($getdate['time_of_birth'])); } else{ echo "NA";} ?></div>

                        <div class="col-md-3">Birth Place <strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['place_of_birth']!=''){echo $getdate['place_of_birth'];}else{echo "NA";} ?></div>
                    </div>
                    <h3>Contact Info</h3>
                    <hr>
                    <div class="row info mb-4">
                        <div class="col-md-3">Mobile No. <strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['mobile']!=''){echo $getdate['mobile'];}else{echo "NA";} ; ?></div>

                        <div class="col-md-3">Email Id<strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['email']!=''){echo $getdate['email'];}else{echo "NA";} ; ?></div>
                    </div>
                    <h3>Address Info</h3>
                    <hr>
                    <div class="row info mb-4">
                        <div class="col-md-3">Address  <strong>:</strong></div>
                        <div class="col-md-9 address"><?php if($getdate['full_address']!=''){echo $getdate['full_address'];}else{echo "NA";} ; ?></div>

                        <div class="col-md-3">Name of city/town/village <strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['city']!=''){echo $getdate['city'];}else{echo "NA";} ; ?></div>

                        <div class="col-md-3">Area (Pin Code)  <strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['pincode']!=''){echo $getdate['pincode'];}else{echo "NA";} ; ?></div>

                        <div class="col-md-3">State <strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['state']!=''){echo $getdate['state'];}else{echo "NA";} ; ?></div>

                        <div class="col-md-3">Country <strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['country']!=''){echo $getdate['country'];}else{echo "NA";} ; ?></div>
                    </div>
                    <h3>Education</h3>
                    <hr>
            		<div class="row info mb-4">
            			<div class="col-md-3">Education <strong>:</strong></div>
            			<div class="col-md-9"><?php if($getdate['highest_edu']!=''){echo $getdate['highest_edu'];}else{echo "NA";} ; ?></div>
            		</div>
            		<h3>Work</h3>
                    <hr>
            		<div class="row info mb-4">
            			<div class="col-md-3">Occupation <strong>:</strong></div>
            			<div class="col-md-9"><?php if($getdate['occupation']==1){ echo "Job";} else if($getdate['occupation']==2){ echo "Bussiness";} else if($getdate['occupation']==3){ echo "Housewife";} else if($getdate['occupation']==4){ echo "Student";} else if($getdate['occupation']==5){ echo "Nothing";} else{ echo "NA"; }  ?></div>

            			<div class="col-md-3">Income<strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['income']==1){ echo "Less than 1 lakh";}
                        else if($getdate['income']==2){ echo "1 lakh to 2 lakh";}
                        else if($getdate['income']==3){ echo "2 lakh to 3 lakh";}
                        else if($getdate['income']==4){ echo "3 lakh to 4 lakh";}
                        else if($getdate['income']==5){ echo "more than 4 lakh";}
                        else{ echo "NA";}



                        ?>
										  </div>
            		</div>
                </div>
            </div>
            <form method="post">
            <div class="admin-check-wrapper">
            	<div class="row">
            	<div class="col-md-6 text-center">
            		<label class="form-check-label admin-check">
		                <input type="radio" class="form-check-input" name="status" value="1" checked>Approve
		            </label>
		            <label class="form-check-label admin-check">
		                <input type="radio" class="form-check-input" name="status" value="2">Reject
		            </label>
            	</div>
            	<div class="col-md-6 text-center">
                    <div class="sm-mt10">
                		<button class="btn btn-success">Submit</button>
                		<button class="btn btn-warning">Pending</button>
                		<button class="btn btn-danger">Back</button>
                    </div>
            	</div>
            </div>
     </form>

            </div>
            
		</div>
	</div>

</body>
<?php include "../../script.php" ?>
</html>

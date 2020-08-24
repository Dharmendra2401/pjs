<?php  include "../../config/config.php" ;
$getid=base64_decode($_REQUEST['id']);

$getdate=mysqli_fetch_array(mysqli_query($con,'select * from staging where REQUEST_ID="'.$getid.'" '));


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
                        <div class="col-md-9"><?php echo $getdate['FIRST_NAME']; ?></div>

                        <div class="col-md-3">Middle Name<strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['MIDDLE_NAME']!='') {echo $getdate['MIDDLE_NAME'];}else{ echo 'NA';} ?></div>

                        <div class="col-md-3">Last Name <strong>:</strong></div>
                        <div class="col-md-9"><?php echo $getdate['LAST_NAME']; ?></div>

                        <div class="col-md-3">Popular Name <strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['POPULAR_NAME']!='') {echo $getdate['POPULAR_NAME'];}else{ echo 'NA';} ?></div>

                        <div class="col-md-3">Gender<strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['GENDER']==1)  { echo 'MALE';} else{ echo "FEMALE";} ?></div>

                        <div class="col-md-3">Status <strong>:</strong></div>
                        <div class="col-md-9"><?php echo $getdate['MARITAL_STATUS'] ;?></div>

                        <div class="col-md-3">Blood Group<strong>:</strong></div>
                        <div class="col-md-9"> 
                        <?php if($getdate['BLOOD_GROUP']==1){echo 'A+';} else if($getdate['BLOOD_GROUP']==2){echo 'B+';}
                        else if($getdate['BLOOD_GROUP']==4){echo 'O+';}else if($getdate['BLOOD_GROUP']==5){echo 'A+';}
                        else if($getdate['BLOOD_GROUP']==6){echo 'B-';} else if($getdate['BLOOD_GROUP']==7){echo 'AB-';}else if($getdate['BLOOD_GROUP']==8){echo 'O-';} else {echo 'NA';}  ; ?></div>

                        <div class="col-md-3">Height <strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['HEIGHT']!=''){echo $getdate['HEIGHT'];}else{echo "NA";} ; ?></div>

                        <div class="col-md-3">Date of Birth <strong>:</strong></div>
                        <div class="col-md-9"><?php echo date('d/m/Y',strtotime($getdate['DATE_OF_BIRTH'] )); ?></div>

                        <div class="col-md-3">Birth Time<strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['TIME_OF_BIRTH']!='') {echo date('H:i',strtotime($getdate['TIME_OF_BIRTH'])); } else{ echo "NA";} ?></div>

                        <div class="col-md-3">Birth Place <strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['PLACE_OF_BIRTH']!=''){echo $getdate['PLACE_OF_BIRTH'];}else{echo "NA";} ?></div>
                    </div>
                    <h3>Contact Info</h3>
                    <hr>
                    <div class="row info mb-4">
                        <div class="col-md-3">Mobile No. <strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['MOBILE']!=''){echo $getdate['MOBILE'];}else{echo "NA";} ; ?></div>

                        <div class="col-md-3">Email Id<strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['EMAIL']!=''){echo $getdate['EMAIL'];}else{echo "NA";} ; ?></div>
                    </div>
                    <h3>Address Info</h3>
                    <hr>
                    <div class="row info mb-4">
                        <div class="col-md-3">Address  <strong>:</strong></div>
                        <div class="col-md-9 address"><?php if($getdate['Full_Address']!=''){echo $getdate['Full_Address'];}else{echo "NA";} ; ?></div>

                        <div class="col-md-3">Name of city/town/village <strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['City']!=''){echo $getdate['City'];}else{echo "NA";} ; ?></div>

                        <div class="col-md-3">Area (Pin Code)  <strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['PINCODE']!=''){echo $getdate['PINCODE'];}else{echo "NA";} ; ?></div>

                        <div class="col-md-3">State <strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['State']!=''){echo $getdate['State'];}else{echo "NA";} ; ?></div>

                        <div class="col-md-3">Country <strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['Country']!=''){echo $getdate['Country'];}else{echo "NA";} ; ?></div>
                    </div>
                    <h3>Education</h3>
                    <hr>
            		<div class="row info mb-4">
            			<div class="col-md-3">Education <strong>:</strong></div>
            			<div class="col-md-9"><?php if($getdate['HIGHEST_EDU']!=''){echo $getdate['HIGHEST_EDU'];}else{echo "NA";} ; ?></div>
            		</div>
            		<h3>Work</h3>
                    <hr>
            		<div class="row info mb-4">
            			<div class="col-md-3">Occupation <strong>:</strong></div>
            			<div class="col-md-9"><?php if($getdate['OCCUPATION']==1){ echo "Job";} else if($getdate['OCCUPATION']==2){ echo "Bussiness";} else if($getdate['OCCUPATION']==3){ echo "Housewife";} else if($getdate['OCCUPATION']==4){ echo "Student";} else if($getdate['OCCUPATION']==5){ echo "Nothing";} else{ echo "NA"; }  ?></div>

            			<div class="col-md-3">Income<strong>:</strong></div>
                        <div class="col-md-9"><?php if($getdate['OCCUPATION']==1){ echo "Less than 1 lakh";}
                        else if($getdate['OCCUPATION']==2){ echo "1 lakh to 2 lakh";}
                        else if($getdate['OCCUPATION']==3){ echo "2 lakh to 3 lakh";}
                        else if($getdate['OCCUPATION']==4){ echo "3 lakh to 4 lakh";}
                        else if($getdate['OCCUPATION']==5){ echo "more than 4 lakh";}
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
            		<button class="btn btn-success">Submit</button>
            		<button class="btn btn-warning">Pending</button>
            		<button class="btn btn-danger">Back</button>
            	</div>
            </div>
     </form>

            </div>
            
		</div>
	</div>

</body>
<?php include "../../script.php" ?>
</html>
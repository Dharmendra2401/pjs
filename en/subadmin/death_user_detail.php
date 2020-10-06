<?php  
include "../../config/config.php" ;
include "../mail/index.php" ;
sub_admin_session_check();

$getid=base64_decode($_REQUEST['id']);


mysqli_query($con,$getid);

$row="SELECT if(sp.member_Id='' AND sp.reference_member_Id='' ,'saved','notsaved') as sp_status,mem.feet,mem.inches,mem.member_id,mem.middle_name,mem.first_name,mem.last_name,addrss.full_address,addrss.city,comm.email,mem.fathers_name,mem.gender,mem.age,mem.date_of_birth,mem.place_of_birth,mem.time_of_birth,mem.marital_status,mem.blood_group,mem.popular_name,mem.marital_status,addrss.member_id,addrss.full_address,addrss.city,addrss.state,addrss.country,addrss.pincode,comm.member_id,comm.mobile,comm.email,edu.member_id,edu.highest_edu,edu.occupation,edu.ocp_details,edu.income,keyy.id,keyy.display_pic from member as mem INNER JOIN address as addrss on mem.member_id=addrss.member_id INNER JOIN communication as comm on mem.member_id=comm.member_id INNER JOIN education_ocp as edu on mem.member_id=edu.member_id INNER JOIN key_member_id as keyy on mem.member_id=keyy.id LEFT join saved_profile as sp on mem.member_id=sp.reference_member_Id  where mem.member_id= '$getid'";

$row1=mysqli_query($con,$row);
$getdate = mysqli_fetch_array($row1);
?>
<!DOCTYPE>
<html>
<head>
<?php  include "../../styles.php" ?>
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



<div class="col-md-3">Last Name <strong>:</strong></div>
<div class="col-md-9"><?php echo $getdate['last_name']; ?></div>

<div class="col-md-3">Popular Name <strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['popular_name']!='') {echo $getdate['popular_name'];}else{ echo 'NA';} ?></div>

<div class="col-md-3">Gender<strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['gender']=='M')  { echo 'MALE';} else{ echo "FEMALE";} ?></div>

<div class="col-md-3">Status <strong>:</strong></div>
<div class="col-md-9"><?php echo $getdate['marital_status'] ;?></div>


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
<div class="col-md-3">Country <strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['country']!=''){echo $getdate['country'];}else{echo "NA";} ; ?></div>

<div class="col-md-3">State <strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['state']!=''){echo $getdate['state'];}else{echo "NA";} ; ?></div>



<div class="col-md-3">Name of city/town/village <strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['city']!=''){echo $getdate['city'];}else{echo "NA";} ; ?></div>

<div class="col-md-3">Pin Code <strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['pincode']!=''){echo $getdate['pincode'];}else{echo "NA";} ; ?></div>

<div class="col-md-3">Area <strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['area']!=''){echo $getdate['area'];}else{echo "NA";} ; ?></div>

<div class="col-md-3">Address  <strong>:</strong></div>
<div class="col-md-9 address"><?php if($getdate['full_address']!=''){echo $getdate['full_address'];}else{echo "NA";} ; ?></div>

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
<div class="col-md-9"><?php if($getdate['occupation']==1){ echo "Job";} else if($getdate['occupation']==2){ echo "Business";} else if($getdate['occupation']==3){ echo "Housewife";} else if($getdate['occupation']==4){ echo "Student";} else if($getdate['occupation']==5){ echo "Nothing";} else{ echo "NA"; }  ?></div>

<?php  if(($getdate['occupation']!=3) && ($getdate['occupation']!=4) && ($getdate['occupation']!=5)){ ?>
<div class="col-md-3">Income<strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['income']==1){ echo "Less than 1 lakh";}
else if($getdate['income']==2){ echo "1 lakh to 2 lakh";}
else if($getdate['income']==3){ echo "2 lakh to 3 lakh";}
else if($getdate['income']==4){ echo "3 lakh to 4 lakh";}
else if($getdate['income']==5){ echo "more than 4 lakh";}
else{ echo "NA";}
?></div>
<?php } ?>

</div>
</div>
</div>
<!-- <form method="post">
<div class="admin-check-wrapper">
<div class="row">
<div class="col-md-6 text-center">

<?php if($getdate['active_status']!="N"){  ?>
<label class="form-check-label admin-check">
<input type="radio" id="approve" class="form-check-input" name="status" value="1" checked onclick="selectReason();">Approve
</label>
<label class="form-check-label admin-check">
<input type="radio" id="selectRadio" class="form-check-input" name="status" value="2" onclick="selectReason();">Reject
</label>
<?php } ?>

</div>
<div class="col-md-6 text-center">
<?php if($getdate['active_status']!="N"){  ?>
<button class="btn btn-success" name="submit">Submit</button>
<?php } ?>
 <button class="btn btn-warning">Pending</button> -->
<!-- <a href="<?php echo RE_HOME_ADMIN;?>reg_request.php" class="btn btn-danger">Back</a>
</div>
<div id="select-block"  class="col-md-12">
<label>Select reason for rejection</label>
<div class="row">
<div class="col-md-2">
<input type="checkbox" name="reason[]" value="Name" checked>
<label>Name</label>
</div>
<div class="col-md-2">
<input type="checkbox" name="reason[]" value="Date Of Birth">
<label>DOB</label>
</div>
<div class="col-md-2">
<input type="checkbox" name="reason[]" value="Address">
<label>Address</label>
</div>
<div class="col-md-2">
<input type="checkbox" name="reason[]" value="State">
<label>State</label>
</div>
<div class="col-md-4 mr-5">
<input type="checkbox" id="other" name="reason[]" value="Other" onclick="selectOther();">
<label>Other</label>
<textarea id="reasonTxt"  name="reason[]" class="form-control inputtexttwo" maxlength="50" rows="3" placeholder="Describe yourself here..." name="reasontext"></textarea>
</div>
</div>
</div>
</div> 
</form> -->

</div>

</div>
</div>

<script>
function selectReason() {
var radio = document.getElementById("selectRadio");
var radioApprove = document.getElementById("approve");
var block = document.getElementById("select-block");
if (radio.checked == true){
block.style.display = "block";
}

else if (radioApprove.checked == true){
block.style.display = "none";
}

}

function selectOther() {
var checkOther = document.getElementById("other");
var text = document.getElementById("reasonTxt");
if (checkOther.checked == true){
text.style.display = "block";
} else {
text.style.display = "none";
}
}
</script>
</body>
<?php include "../../script.php" ?>
</html>

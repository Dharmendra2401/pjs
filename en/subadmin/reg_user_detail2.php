<?php  include "../../config/config.php" ;
sub_admin_session_check();
$getid=base64_decode($_REQUEST['id']);
$row=mysqli_fetch_array(mysqli_query($con,"SELECT mem.area,mem.member_id,mem.middle_name,mem.first_name,mem.last_name,addrss.full_address,addrss.city,comm.email,mem.fathers_name,mem.gender,mem.age,mem.date_of_birth,mem.place_of_birth,mem.time_of_birth,mem.marital_status,mem.blood_group,mem.popular_name,mem.height,mem.marital_status,addrss.member_id,addrss.full_address,addrss.city,addrss.state,addrss.country,addrss.pincode,comm.member_id,comm.mobile,comm.email,edu.member_id,edu.highest_edu,edu.occupation,edu.ocp_details,edu.income,keyy.id,keyy.display_pic from member as mem INNER JOIN address as addrss on mem.member_id=addrss.member_id INNER JOIN communication as comm on mem.member_id=comm.member_id INNER JOIN education_ocp as edu on mem.member_id=edu.member_id INNER JOIN key_member_id as keyy on mem.member_id=keyy.id where mem.member_id='".$getid."' "));


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
<div class="col-md-9"><?php echo $row['first_name']; ?></div>

<div class="col-md-3">Middle Name<strong>:</strong></div>
<div class="col-md-9"><?php if($row['middle_name']!='') {echo $row['middle_name'];}else{ echo 'NA';} ?></div>

<div class="col-md-3">Last Name <strong>:</strong></div>
<div class="col-md-9"><?php echo $row['last_name']; ?></div>

<div class="col-md-3">Popular Name <strong>:</strong></div>
<div class="col-md-9"><?php if($row['popular_name']!='') {echo $row['popular_name'];}else{ echo 'NA';} ?></div>

<div class="col-md-3">Gender<strong>:</strong></div>
<div class="col-md-9"><?php if($row['gender']==1)  { echo 'MALE';} else{ echo "FEMALE";} ?></div>

<div class="col-md-3">Status <strong>:</strong></div>
<div class="col-md-9"><?php echo $row['marital_status'] ;?></div>

<div class="col-md-3">Blood Group<strong>:</strong></div>
<div class="col-md-9"> 
<?php if($getdate['blood_group']==1){echo 'A+';} else if($getdate['blood_group']==2){echo 'B+';}
else if($getdate['blood_group']==3){echo 'AB+';}else if($getdate['blood_group']==4){echo 'O+';}else if($getdate['blood_group']==5){echo 'A+';}else if($getdate['blood_group']==6){echo 'B-';} else if($getdate['blood_group']==7){echo 'AB-';}else if($getdate['blood_group']==8){echo 'O-';} else {echo $getdate['blood_group'];}  ; ?></div>

<div class="col-md-3">Are you willing to donate?
 <strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['blood_donate']!='') {echo $getdate['blood_donate'] ;}else{echo "NA";}?></div>

<div class="col-md-3">Height <strong>:</strong></div>
<div class="col-md-9"><?php if($row['height']!=''){echo $row['height'];}else{echo "NA";} ; ?></div>

<div class="col-md-3">Date of Birth <strong>:</strong></div>
<div class="col-md-9"><?php echo date('d/m/Y',strtotime($row['date_of_birth'] )); ?></div>

<div class="col-md-3">Birth Time<strong>:</strong></div>
<div class="col-md-9"><?php if($row['time_of_birth']!='00:00:00') {echo date('H:i',strtotime($row['time_of_birth'])); } else{ echo "NA";} ?></div>

<div class="col-md-3">Birth Place <strong>:</strong></div>
<div class="col-md-9"><?php if($row['place_of_birth']!=''){echo $row['place_of_birth'];}else{echo "NA";} ?></div>
</div>
<h3>Contact Info</h3>
<hr>
<div class="row info mb-4">
<div class="col-md-3">Mobile No. <strong>:</strong></div>
<div class="col-md-9"><?php if($row['mobile']!=''){echo $row['mobile'];}else{echo "NA";} ; ?></div>

<div class="col-md-3">Email Id<strong>:</strong></div>
<div class="col-md-9"><?php if($row['email']!=''){echo $row['email'];}else{echo "NA";} ; ?></div>
</div>
<h3>Address Info</h3>
<hr>
<div class="row info mb-4">
<div class="col-md-3">Country <strong>:</strong></div>
<div class="col-md-9"><?php if($row['country']!=''){echo $row['country'];}else{echo "NA";} ; ?></div>

<div class="col-md-3">State <strong>:</strong></div>
<div class="col-md-9"><?php if($row['state']!=''){echo $row['state'];}else{echo "NA";} ; ?></div>



<div class="col-md-3">Name of city/town/village <strong>:</strong></div>
<div class="col-md-9"><?php if($row['city']!=''){echo $row['city'];}else{echo "NA";} ; ?></div>

<div class="col-md-3">Pin Code <strong>:</strong></div>
<div class="col-md-9"><?php if($row['pincode']!=''){echo $row['pincode'];}else{echo "NA";} ; ?></div>

<div class="col-md-3">Area <strong>:</strong></div>
<div class="col-md-9"><?php if($row['area']!=''){echo $row['area'];}else{echo "NA";} ; ?></div>

<div class="col-md-3">Address  <strong>:</strong></div>
<div class="col-md-9 address"><?php if($row['full_address']!=''){echo $row['full_address'];}else{echo "NA";} ; ?></div>

</div>
<h3>Education</h3>
<hr>
<div class="row info mb-4">
<div class="col-md-3">Education <strong>:</strong></div>
<div class="col-md-9"><?php if($row['highest_edu']!=''){echo $row['highest_edu'];}else{echo "NA";} ; ?></div>
</div>
<h3>Work</h3>
<hr>
<div class="row info mb-4">
<div class="col-md-3">Occupation <strong>:</strong></div>
<div class="col-md-9"><?php if($row['occupation']==1){ echo "Job";} else if($row['occupation']==2){ echo "Bussiness";} else if($row['occupation']==3){ echo "Housewife";} else if($row['occupation']==4){ echo "Student";} else if($row['occupation']==5){ echo "Nothing";} else{ echo "NA"; }  ?></div>

<div class="col-md-3">Income<strong>:</strong></div>
<div class="col-md-9"><?php if($row['income']==1){ echo "Less than 1 lakh";}
else if($row['income']==2){ echo "1 lakh to 2 lakh";}
else if($row['income']==3){ echo "2 lakh to 3 lakh";}
else if($row['income']==4){ echo "3 lakh to 4 lakh";}
else if($row['income']==5){ echo "more than 4 lakh";}
else{ echo "NA";}



?>
</div>
</div>
</div>
</div>

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
<?php include "../../footer.php" ?>
</body>
<?php include "../../script.php" ?>
</html>

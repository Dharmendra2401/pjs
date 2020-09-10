<?php  include "../../config/config.php" ;
admin_session_check();
$getid=base64_decode($_REQUEST['id']);
$getdate=mysqli_fetch_array(mysqli_query($con,'select * from staging_approval where request_id="'.$getid.'" '));
if(isset($_REQUEST['submit'])){
$submitdate=date('Y-m-d H:i:s');
$status=mysqli_real_escape_string($con,trim($_REQUEST['status']));

if($status==1){
$sorcevalue=strtoupper(substr($getdate['first_name'],0,3)).'_'.strtoupper(substr($getdate['last_name'],0,3)).'_'.strtoupper(substr($getdate['fathers_name'],0,3)).'_'.date('dmY',strtotime($getdate['date_of_birth'] ));
$insertkey_member_table=mysqli_query($con,"insert into key_member_id(source_value,type,display_pic,upd_user,record_inserted_dttm)values('".$sorcevalue."','MEMBER_ID','".$getdate['display_pic']."','".$_SESSION['admin_id']."','".$submitdate."')");
$member_id = mysqli_insert_id($con);



$insertmember_table=mysqli_query($con,"INSERT into member (member_id,first_name,last_name,fathers_name,gender,date_of_birth,time_of_birth,place_of_birth,marital_status,blood_group,popular_name,height,upd_user,record_inserted_dttm,age,middle_name) values ('".$member_id."','".$getdate['first_name']."','".$getdate['last_name']."', '".$getdate['fathers_name']."','".$getdate['gender']."','".$getdate['date_of_birth']."','".$getdate['time_of_birth']."','".$getdate['place_of_birth']."','".$getdate['martial_status']."','".$getdate['blood_group']."','".$getdate['popular_name']."','".$getdate['height']."','".$_SESSION['admin_id']."','".$submitdate."','".$getdate['age']."','".$getdate['middle_name']."'  ) ");

$insertaddress_table=mysqli_query($con,"INSERT into address (member_id,full_address,city,state,country,pincode,upd_user,record_inserted_dttm)  values('".$member_id."','".$getdate['full_address']."','".$getdate['city']."','".$getdate['state']."','".$getdate['country']."','".$getdate['pincode']."','".$_SESSION['admin_id']."','".$submitdate."' )");


$insertcommunication=mysqli_query($con,"INSERT into communication (member_id,mobile,email,upd_user,record_inserted_dttm)values('".$member_id."','".$getdate['mobile']."' ,'".$getdate['email']."','".$_SESSION['admin_id']."', '".$submitdate."') ");
$inserteducation_occp=mysqli_query($con,"insert into education_ocp(member_id,highest_edu,occupation,ocp_details,income,upd_user,record_inserted_dttm) values('".$member_id."','".$getdate['highest_edu']."','".$getdate['occupation']."','".$getdate['ocp_details']."','".$getdate['income']."','".$_SESSION['admin_id']."','".$submitdate."')");


$update=mysqli_query($con,"update staging_approval set active_status='N' where request_id='".$getid."' ");
$insert="INSERT INTO staging (request_id,first_name, last_name, date_of_birth, gender, marital_status, blood_group, popular_name,height,time_of_birth,place_of_birth,date_of_death,full_address,city,state,country,pincode,mobile,email,highest_edu,occupation,ocp_details,income,display_pic,middle_name,age,area)
SELECT request_id,first_name, last_name, date_of_birth, gender, martial_status, blood_group, popular_name,height,time_of_birth,place_of_birth,date_of_death,full_address,city,state,country,pincode,mobile,email,highest_edu,occupation,ocp_details,income,display_pic,middle_name,age,area from staging_approval where request_id='".$getid."' ";
mysqli_query($con,$insert);

$subject="User Successfully Approved From '".WEBSITE_NAME."' ";
$mes='';
$mes.=" Dear ".$firstname." ".$middlename." ".$lastname.", you are succesfully approved by the admin and your login MEMBER ID (MID) is <strong>".$member_id."</strong> ,if any query email us <a href='mailto:admin@gmail.com'>admin@gmail.com</a>";
$message=$mes;
$to=$getdate['email'];
sendemail($to,$form,$subject,$message);

redirect(RE_HOME_ADMIN."reg_request.php","User successfully approved~@~".MSG_SUCCESS);

}
else if($status==2){

$reason=$_REQUEST['reason'];
//$reasontext=mysqli_real_escape_string($con,trim($_REQUEST['reasontext']));
$getreason=Implode(',',$reason);
$trimreason=rtrim($getreason,',');
$update=mysqli_query($con,"update staging_approval set reason_of_rejection='".$trimreason."' where request_id='".$getid."' ");
$subject="User Approval Rejected From '".WEBSITE_NAME."' ";
$mes='';
$mes.=" Dear ".$firstname." ".$middlename." ".$lastname.", your user application is rejected by the admin and reason for the rejection is :<strong>".$trimreason."</strong> ,if any query email us <a href='mailto:admin@gmail.com'>admin@gmail.com</a>";
$message=$mes;
$to=$getdate['email'];
sendemail($to,$form,$subject,$message);
redirect(RE_HOME_ADMIN."reg_request.php","User successfully rejected~@~".MSG_SUCCESS);

}
else{
redirect(RE_HOME_ADMIN."reg_request.php","Error! Please try again~@~".MSG_ERROR);

}



}


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
<!-- <button class="btn btn-warning">Pending</button> -->
<a href="<?php echo RE_HOME_ADMIN;?>reg_request.php" class="btn btn-danger">Back</a>
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
<textarea id="reasonTxt"  name="reason[]" class="form-control" rows="3" placeholder="Describe yourself here..." name="reasontext"></textarea>
</div>
</div>
</div>
</div>
</form>

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

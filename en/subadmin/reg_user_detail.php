<?php  include "../../config/config.php" ;
include "../mail/index.php" ;
sub_admin_session_check();

$getid=base64_decode($_REQUEST['id']);
$trimreason=$_REQUEST['reason'];
$getdate=mysqli_fetch_array(mysqli_query($con,'select * from staging_approval where request_id="'.$getid.'" '));
if(isset($_REQUEST['submit'])){
$submitdate=date('Y-m-d H:i:s');
$status=mysqli_real_escape_string($con,trim($_REQUEST['status']));

$getvalid=mysqli_query($con,"select request_id from staging where request_id='".$getdate['request_id']."'");
$getcount=mysqli_num_rows($getvalid);
if($getcount>0){
mysqli_query($con,"UPDATE staging_approval set active_status='N' where request_id='".$getid."'")or die(mysqli_error($con));
redirect(RE_HOME_ADMIN."reg_request.php","Error! You have already approved this user~@~".MSG_ERROR);
  }
else if($status==1){
$member_id = uniquemid($con);
$password=base64_encode(generatepassword($pass));
$sorcevalue=strtoupper(substr($getdate['first_name'],0,3)).'_'.strtoupper(substr($getdate['last_name'],0,3)).'_'.strtoupper(substr($getdate['fathers_name'],0,3)).'_'.date('dmY',strtotime($getdate['date_of_birth'] ));
$countkeymemberid=mysqli_query($con,'select id from key_member_id where id="'.$member_id.'"');
$keymemberidcount=mysqli_num_rows($countkeymemberid);
if($keymemberidcount==0){
$insertall="INSERT into member (member_id,first_name,last_name,fathers_name,gender,date_of_birth,time_of_birth,place_of_birth,marital_status,blood_group,popular_name,upd_user,record_inserted_dttm,age,husband_wife_name,area,feet,inches,life_status,blood_donate) values ('".$member_id."','".$getdate['first_name']."','".$getdate['last_name']."', '".$getdate['fathers_name']."','".$getdate['gender']."','".$getdate['date_of_birth']."','".$getdate['time_of_birth']."','".$getdate['place_of_birth']."','".$getdate['martial_status']."','".$getdate['blood_group']."','".$getdate['popular_name']."','".$_SESSION['sub_admin_id']."','".$submitdate."','".$getdate['age']."','".$getdate['husband_wife_name']."','".$getdate['area']."','".$getdate['feet']."','".$getdate['inches']."','L','".$getdate['blood_donate']."');INSERT into key_member_id(source_value,type,display_pic,upd_user,record_inserted_dttm,id,password)values('".$sorcevalue."','MEMBER_ID','".$getdate['display_pic']."','".$_SESSION['sub_admin_id']."','".$submitdate."','".$member_id."','".$password."');INSERT into address (member_id,full_address,city,state,country,pincode,upd_user,record_inserted_dttm)  values('".$member_id."','".$getdate['full_address']."','".$getdate['city']."','".$getdate['state']."','".$getdate['country']."','".$getdate['pincode']."','".$_SESSION['sub_admin_id']."','".$submitdate."' );INSERT into member_privacy (member_id,Popular_Name,Date_Of_Birth,Time_Of_Birth,Place_Of_Birth,Mobile,Blood_Group,Height,Income)values('".$member_id."','Y','Y','Y','Y','Y','Y','Y','Y');INSERT into communication (member_id,mobile,email,upd_user,record_inserted_dttm,country_flag,country_code)values('".$member_id."','".$getdate['mobile']."' ,'".$getdate['email']."','".$_SESSION['sub_admin_id']."', '".$submitdate."','".$getdate['country_flag']."','".$getdate['country_code']."');Insert into education_ocp(member_id,highest_edu,occupation,ocp_details,income,upd_user,record_inserted_dttm) values('".$member_id."','".$getdate['highest_edu']."','".$getdate['occupation']."','".$getdate['ocp_details']."','".$getdate['income']."','".$_SESSION['sub_admin_id']."','".$submitdate."');INSERT INTO staging (request_id,first_name, last_name, date_of_birth, gender, marital_status, blood_group, popular_name,time_of_birth,place_of_birth,date_of_death,full_address,city,state,country,pincode,mobile,email,highest_edu,occupation,ocp_details,income,display_pic,husband_wife_name,age,area,feet,inches,blood_donate,fathers_name)SELECT request_id,first_name, last_name, date_of_birth, gender, martial_status, blood_group, popular_name,time_of_birth,place_of_birth,date_of_death,full_address,city,state,country,pincode,mobile,email,highest_edu,occupation,ocp_details,income,display_pic,husband_wife_name,age,area,feet,inches,blood_donate,fathers_name from staging_approval where request_id='".$getid."' ;UPDATE staging_approval set active_status='N' where request_id='".$getid."' ";
mysqli_multi_query($con,$insertall) or die(mysqli_error($con));

$subject="Approval of your application on  ".WEBSITE_NAME." website ";
$mes='';
$mes.="<p> Dear ".$getdate['first_name']." ".$getdate['last_name'].",you are successfully approved by the admin and your login details are : <br>  MEMBER ID (MID) : <strong>".$member_id."</strong> <br> Password : <strong>".base64_decode($password)."</strong></p><p> If you face any problem in using the website ,email us <a href='mailto:".FROM_EMAIL."'>".FROM_EMAIL."</a></p>";
$message=$mes;
$to=$getdate['email'];
sendmails($to,$message,$subject);

redirect(RE_HOME_ADMIN."reg_request.php","User successfully approved~@~".MSG_SUCCESS);
}else{
redirect(RE_HOME_ADMIN."reg_request.php","Error! please try again~@~".MSG_ERROR);	
}

}
else if(($status==2)&&($trimreason!='')){
mysqli_query($con,"update staging_approval set active_status='R' where request_id='".$getid."' ");
//$reasontext=mysqli_real_escape_string($con,trim($_REQUEST['reasontext']));
//$getreason=Implode(',',$reason);
//$trimreason=rtrim($getreason,',');
$update=mysqli_query($con,"update staging_approval set reason_of_rejection='".$trimreason."' where request_id='".$getid."' ");
$subject="PJS Application is rejected by ".WEBSITE_NAME." ";
$mes='';
$mes.="<p> Dear ".$getdate['first_name']."  ".$getdate['last_name'].", your application is rejected by the admin and the reason for the rejection is : <strong>".$trimreason."</strong></p> <p> Please update your profile by clicking <a href='".RE_EN_PATH."userupdate/update.php?token=".base64_encode($getid)."'>here</a> </p> <p>if any query email us <a href='mailto:".FROM_EMAIL."'>".FROM_EMAIL."</a></p>";
$message=$mes;
$to=$getdate['email'];
sendmails($to,$message,$subject);
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



<div class="col-md-3">Last Name <strong>:</strong></div>
<div class="col-md-9"><?php echo $getdate['last_name']; ?></div>

<div class="col-md-3">Popular Name <strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['popular_name']!='') {echo $getdate['popular_name'];}else{ echo 'NA';} ?></div>

<div class="col-md-3">Gender<strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['gender']=='M')  { echo 'MALE';} else{ echo "FEMALE";} ?></div>

<div class="col-md-3">Status <strong>:</strong></div>
<div class="col-md-9"><?php echo $getdate['martial_status'] ;?></div>


<div class="col-md-3">Blood Group<strong>:</strong></div>
<div class="col-md-9"> 
<?php if($getdate['blood_group']==1){echo 'A+';} else if($getdate['blood_group']==2){echo 'B+';}
else if($getdate['blood_group']==3){echo 'AB+';}else if($getdate['blood_group']==4){echo 'O+';}else if($getdate['blood_group']==5){echo 'A+';}else if($getdate['blood_group']==6){echo 'B-';} else if($getdate['blood_group']==7){echo 'AB-';}else if($getdate['blood_group']==8){echo 'O-';} else {echo $getdate['blood_group'];}  ; ?></div>

<div class="col-md-3">Are you willing to donate?
 <strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['blood_donate']!='') {echo $getdate['blood_donate'] ;}else{echo "NA";}?></div>

<?php if(($getdate['martial_status']=='married')&&($getdate['gender']=='F') ){?>
<div class="col-md-3">Husband's Name <strong>:</strong></div>
<div class="col-md-9"><?php echo $getdate['husband_wife_name'] ; ?></div>
<?php } ?>

<?php if(($getdate['martial_status']=='married')&&($getdate['gender']=='M') ){?>
<div class="col-md-3">Wife's Name <strong>:</strong></div>
<div class="col-md-9"><?php echo $getdate['husband_wife_name'] ; ?></div>
<?php } ?>

<div class="col-md-3">Height <strong>:</strong></div>
<div class="col-md-9"> Feet :<?php
if($row['feet']!=''){ echo $row['feet'];}else{echo "NA";}  ?> Inches : <?php  if($row['inches']!=''){ echo $row['inches'];}else{echo "NA";} ?></div>

<div class="col-md-3">Date of Birth <strong>:</strong></div>
<div class="col-md-9"><?php echo date('d/m/Y',strtotime($getdate['date_of_birth'] )); ?></div>

<div class="col-md-3">Birth Time<strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['time_of_birth']!='00:00:00') {echo date('H:i',strtotime($getdate['time_of_birth'])); } else{ echo "NA";} ?></div>

<div class="col-md-3">Birth Place <strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['place_of_birth']!=''){echo $getdate['place_of_birth'];}else{echo "NA";} ?></div>
</div>
<h3>Contact Info</h3>
<hr>
<div class="row info mb-4">
<div class="col-md-3">Mobile No. <strong>:</strong></div>
<div class="col-md-9"> <div class="cc-picker form-control" style="width: 70px;padding: 6px 5px 6px;" readonly><div class="cc-picker-flag <?php echo $getdate['country_flag']; ?>"></div><span class="cc-picker-code"><?php echo $getdate['country_code']; ?></span> </div> <?php if($getdate['mobile']!=''){echo $getdate['mobile'];}else{echo "NA";} ; ?></div>

<div class="col-md-3">Email Id<strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['email']!=''){echo $getdate['email'];}else{echo "NA";} ; ?></div>
</div>
<h3>Address Info</h3>
<hr>
<div class="row info mb-4">
<div class="col-md-3">Country <strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['country']!=''){echo $getdate['country'];}else{echo "NA";} ; ?></div>

<?php if($getdate['country']!='Outside India'){?>
<div class="col-md-3">State <strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['state']!=''){echo $getdate['state'];}else{echo "NA";} ; ?></div>



<div class="col-md-3">Name of city/town/village <strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['city']!=''){echo $getdate['city'];}else{echo "NA";} ; ?></div>

<div class="col-md-3">Pin Code <strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['pincode']!='0'){echo $getdate['pincode'];}else{echo "NA";} ; ?></div>

<div class="col-md-3">Area <strong>:</strong></div>
<div class="col-md-9"><?php if($getdate['area']!=''){echo $getdate['area'];}else{echo "NA";} ; ?></div>
<?php } ?>
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
<div class="col-md-3"> Annual Income<strong>:</strong></div>
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
<form method="post">
<div class="admin-check-wrapper">
<div class="row">
<div class="col-md-6 text-center">

<?php if(($getdate['active_status']=="Y")|| ($getdate['active_status']=="U") ){  ?>
<label class="form-check-label admin-check">
<input type="radio" id="approve" class="form-check-input" name="status" value="1" checked onclick="selectReason();">Approve
</label>
<label class="form-check-label admin-check">
<input type="radio" id="selectRadio" class="form-check-input" name="status" value="2" onclick="selectReason();">Reject
</label>
<?php } ?>

</div>
<div class="col-md-6 text-center">
<?php if(($getdate['active_status']=="Y")|| ($getdate['active_status']=="U") ){  ?>
<button class="btn btn-success" name="submit" onclick=" return forsubmit();">Submit</button>
<?php } ?>
<!-- <button class="btn btn-warning">Pending</button> -->
<a href="<?php echo RE_HOME_ADMIN;?>reg_request.php" class="btn btn-danger">Back</a>
</div>
<div id="select-block"  class="col-md-12">


<!-- <div class="col-md-2">
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
</div> -->
<div class="col-md-4" id="reasonrjection">
<!-- <input type="checkbox" id="other" name="reason[]" value="Other" onclick="selectOther();"> -->
<textarea id="reasonTxt"  name="reason" class="form-control" maxlength="100" rows="3" placeholder="Enter reason for rejection" name="reasontext"></textarea>


</div>
</div>
</div>
<br>
</form>

</div>

</div>
</div>

<script>
function selectReason() {
var radio = document.getElementById("selectRadio");
var radioApprove = document.getElementById("approve");
var block = document.getElementById("select-block");
var textareass = document.getElementById("select-block");
if (radio.checked == true){
block.style.display = "block";
$('#reasonTxt').show();$('#reasonTxt').attr('required',true);textareass.style.display = "block";
}

else if (radioApprove.checked == true){
block.style.display = "block";

$('#reasonTxt').hide();
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

function forsubmit(){
var option=$('input[name=status]:checked').val();
var reason=$('#reasonTxt').val();
if((option==2)&&(reason.trim()=='')){
$('#reasonTxt').focus();
$("#reasonTxt").addClass("invalid");
return false;
}else{ return true;}
}

</script>
<?php include "../../footer.php" ?>
</body>
<?php include "../../script.php" ?>
</html>

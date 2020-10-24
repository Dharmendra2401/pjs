<?php 
include "../config/config.php";
include 'PJS-demo/selectfunction.php';

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


$row=mysqli_fetch_array(mysqli_query($con,"SELECT if(sp.member_Id='$login_user' AND sp.reference_member_Id='$idd' ,'saved','notsaved') as sp_status,mem.feet,mem.inches, mem.member_id,mem.middle_name,mem.first_name,mem.last_name,addrss.full_address,addrss.city,comm.country_flag,comm.country_code,comm.email,mem.fathers_name,mem.gender,mem.age,mem.date_of_birth,mem.place_of_birth,mem.time_of_birth,mem.marital_status,mem.blood_group,mem.popular_name,mem.marital_status,addrss.member_id,addrss.full_address,addrss.city,addrss.state,addrss.country,addrss.pincode,comm.member_id,comm.mobile,comm.email,edu.member_id,edu.highest_edu,edu.occupation,edu.ocp_details,edu.income,keyy.id,keyy.display_pic,mem.Life_status,mp.* from member as mem INNER JOIN address as addrss on mem.member_id=addrss.member_id INNER JOIN communication as comm on mem.member_id=comm.member_id INNER JOIN education_ocp as edu on mem.member_id=edu.member_id INNER JOIN key_member_id as keyy on mem.member_id=keyy.id LEFT join saved_profile as sp on mem.member_id=sp.reference_member_Id AND sp.member_Id='$login_user' inner join member_privacy mp on mem.member_id=mp.member_id where mem.member_id= '$idd'"));
$member_request_status=member_request_status($idd,$login_user);
$request_status_user='';
$staus_show='';
if (mysqli_num_rows($member_request_status)>0) {
$row2=mysqli_fetch_assoc($member_request_status);	
//print_r($row);
$request_status_user='from';
$staus_show=$row2['member_request_status'];
}
else{
$member_request_status2=member_request_status2($idd,$login_user);
if (mysqli_num_rows($member_request_status2)>0) {
$row2=mysqli_fetch_assoc($member_request_status2);	
$request_status_user='to';
$staus_show=$row2['member_request_status'];
}
else{
$request_status_user='AddFriend';
$staus_show='no status';
}
}


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
<input type="hidden" id="current-users" value="<?php $current_user=$_SESSION['user_mid'];echo $current_user;?>">
<input type="hidden" name="" id="home_path" value="<?php echo RE_HOME_PATH;?>">
<div class="user-container" id="example">
<div class="container">
<div class="row">
<div class="col-md-2 text-right user-detail-container">
<a data-lightbox="example-1" href="<?php echo RE_HOME_PATH.''.$row['display_pic'] ;?>">	<img class="user-img img-fluid" src="<?php echo RE_HOME_PATH.$row['display_pic'] ;?>"></a>
</div>
<div class="col-md-4 pl-0 align-self-end sm-tr user-detail-info">
<h2 class="text-white mb-1"><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name']; ?></h2>
<h5 class="text-white"><?php echo $row['member_id'] ;?></h5>
</div>
<div class="col-md-6 align-self-end text-right sm-mt10 sm-tl">
<?php if (isset($_SESSION['user_mid'])) { if ( $row['sp_status']=='saved') {?>
<a type="button" class="btn btn-info mr-3 login-signup" style="background-color:#72bf55">Saved</a>
<?php } else {?>
<a type="button" class="btn btn-info mr-3 login-signup save_user_profile" id="<?php echo $row['member_id'] ;?>" data-current="<?php echo $_SESSION['user_mid'];?>">Save Profile  </a>
<?php }?>


<?php   } else { ?> 
<a type="button" class="btn btn-info mr-3 login-signup" data-toggle="modal" data-target="#modal21">Save Profile</a>
<?php } if(isset($_SESSION['user_mid'])){ 
if ($request_status_user=='from' AND $staus_show=='N') {?>
<a type="button" class="btn btn-warning add-relation">Request Sent</a>
<?php } elseif($request_status_user=='to' AND $staus_show=='N') { ?>
<a type="button" class="btn btn-warning approve" id="<?php echo $row['member_id'];?>">Accept</a>
<?php } elseif ($request_status_user=='to' AND $staus_show=='Y') {?>
<a type="button" class="btn btn-warning add-relation" data-toggle="modal" data-target="#modal21">Member</a>
<?php }
elseif ($request_status_user=='from' AND $staus_show=='Y') {?>
<a type="button" class="btn btn-warning add-relation" data-toggle="modal" data-target="#modal21">Member</a>
<?php }
else{ ?>
	 <?php if ($row['Life_status']=='D') { ?>
	 	<a type="button" class="btn btn-warning death-add" style="pointer-events: none;">Add Member</a>
	 <?php } else {?>
<a type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $row['member_id']; ?>" data-gender="<?php echo $row['gender'];?>" data-name="<?php echo $fullname=$row['first_name'].' '. $row['middle_name'].' '.$row['last_name'];?>">Add Member</a>
<?php } }
}  else {?>
<a type="button" class="btn btn-warning add-relation" data-toggle="modal" data-target="#modal21">Add Member</a>
<?php }?>
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
<!--  <a href="whatsapp://send?https://www.xspdf.com/resolution/50085649.html" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp">share</a> -->
</li>
</ul>
</div>
<div class="col-md-6 align-self-center text-right">
<div class="icon-mobile">
<!-- <i type="button" class="fas fa-phone-alt mx-2" data-toggle="modal" data-target="#contactoption"></i> -->
<?php if (isset($_SESSION['user_mid'])) { ?>
<!-- <i type="button" class="fas fa-download mx-2 login-signup user_profile_download" data-userid="<?php echo $row['member_id'];?>"></i> -->
<a href="<?php echo RE_EN_PATH; ?>user_detail_pdf.php?id=<?php echo base64_encode($row['member_id']);?>"
	target="blank"><i type="button" class="fas fa-download mx-2 login-signup"></i></a>
									 <?php  
									if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
										$url = "https://";   
									else  
										$url = "http://";   
									// Append the host(domain name, ip) to the URL.   
										$url.= $_SERVER['HTTP_HOST'];   
									// Append the requested resource location to the URL   
										$url.= $_SERVER['REQUEST_URI'];      
									?>  
									<a href="whatsapp://send?text=<?php echo $url;?>" class="mob_app"><i type="button" class="fas fa-share mx-2 "></i></a>
								<a href="https://web.whatsapp.com/send?text=<?php echo $url;?>" class="web_app"><i type="button" class="fas fa-share mx-2 "></i></a>
<?php }
else{?>
<i type="button" class="fas fa-download mx-2 login-signup" data-toggle="modal" data-target="#modal21"></i>
<i type="button" class="fas fa-share mx-2 login-signup" data-toggle="modal" data-target="#modal21"></i>
<?php } ?>


</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 tab-content px-sm-0">
<div id="about" class="tab-pane active"><br>
<div class="container user-details">
<h3>Personal Details <?php if ($row['Life_status']=='D') {?>
<span style="float: right;font-size: 20px;"><small><i class="fas fa-flag text-danger" style="margin-right: 4px;"></i><strong>: स्वर्गीय </strong></small></span>
<?php } ?></h3>
<div class="row">
<div class="col-md-3 col-5">
<h5>Full Name <strong>:</strong></h5>
</div>
<div class="col-md-9 col-7">
<p><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'] ; ?></p>
</div>

<div class="col-md-3 col-5">
<h5>Popular Name <strong>:</strong></h5>
</div>

<div class="col-md-9 col-7">
<p><?php if(!isset($_SESSION['user_mid']) && $row['Popular_Name']=='N') echo "*******";
else echo $row['popular_name'];?></p>
</div>

<div class="col-md-3 col-5">	
<h5>Date of Birth <strong>:</strong></h5>
</div>
<div class="col-md-9 col-7">
<p><?php if(!isset($_SESSION['user_mid']) && $row['Date_Of_Birth']=='N') echo "*******";
else echo date('d/m/Y',strtotime($row['date_of_birth']));?>	</p>
</div>

<div class="col-md-3 col-5">    	  
<h5>Age <strong>:</strong></h5>
</div>
<div class="col-md-9 col-7">
<p><?php echo $row['age']; ?></p>
</div>

<div class="col-md-3 col-5">     	  
<h5>Gender <strong>:</strong></h5>
</div>

<div class="col-md-9 col-7">
<p><?php if($row['gender']=='M'){echo 'Male';}else{echo 'Female';} ?></p>
</div>

<div class="col-md-3 col-5">
<h5>Status <strong>:</strong></h5>
</div>
<div class="col-md-9 col-7">
<p><?php echo $row['marital_status']; ?></p>
</div>

<?php if(($row['marital_status']=='married')&& ($row['gender']=='F') ) {?>
<div class="col-md-3 col-5">
<h5>Husband's Name <strong>:</strong></h5>
</div>
<div class="col-md-9 col-7">
<p><?php echo $row['husband_wife_name']; ?></p>
</div>
<?php }  ?>

<?php if(($row['marital_status']=='married')&& ($row['gender']=='M') ) {?>
<div class="col-md-3 col-5">
<h5>Wife's Name <strong>:</strong></h5>
</div>
<div class="col-md-9 col-7">
<p><?php echo $row['husband_wife_name']; ?></p>
</div>
<?php }  ?>

<div class="col-md-3 col-5">	  
<h5>Mobile No. <strong>:</strong></h5>
</div>
<div class="col-md-9 col-7">	
<?php if(($_SESSION['user_mid']!='') && ($row['Mobile']=='N')) { echo "*******";}
else { ?><div class="cc-picker mobile-code" readonly><div class="cc-picker-flag <?php echo $row['country_flag']; ?>"></div><span class="cc-picker-code"><?php echo $row['country_code']; ?></span>  </div> <?php echo $row['mobile']; ?><?php } ?>

</div>

<div class="col-md-3 col-5">      
<h5>Email id <strong>:</strong></h5>
</div>
<div class="col-md-9 col-7">	
<p><?php echo $row['email']; ?></p>
</div>

<div class="col-md-3 col-5">       
<h5>Blood Group <strong>:</strong></h5>
</div>
<div class="col-md-9 col-7">	  <p>
<?php 
if(!isset($_SESSION['user_mid']) && $row['Blood_Group']=='N'){
echo "*******";
}
else {
if($row['blood_group']==1){
echo 'A+';
} else if($row['blood_group']==2){
echo 'B+';
}
else if($row['blood_group']==3){
echo 'AB+';
}else if($row['blood_group']==4){
echo 'O+';
}else if($row['blood_group']==5){
echo 'A+';
}else if($row['blood_group']==6){
echo 'B-';
} else if($row['blood_group']==7){
echo 'AB-';
}else if($row['blood_group']==8){
echo 'O-';
} 
else {
echo 'NA';
}  
}?>

</p>
</div>

<div class="col-md-3 col-5">	  
<h5>Birth Time <strong>:</strong></h5>
</div>
<div class="col-md-9 col-7">
<p><?php if(!isset($_SESSION['user_mid']) && $row['Time_Of_Birth']=='N'){ echo "*******";}
else {if($row['time_of_birth']!='00:00:00') {echo date('H:i',strtotime($row['time_of_birth'])); } else{ echo "NA";} }?></p>

</div>

<div class="col-md-3 col-5">    	  
<h5>Birth Place <strong>:</strong></h5>
</div>
<div class="col-md-9 col-7">	  
<p><?php if(!isset($_SESSION['user_mid']) && $row['Place_Of_Birth']=='N'){ echo "*******";}
else {if($row['place_of_birth']!=''){echo $row['place_of_birth'];}else{echo "NA";} }?></p>
</div>

<div class="col-md-3 col-5">
<h5>Height <strong>:</strong></h5>
</div>
<div class="col-md-9 col-7">
<p>
<?php 
if(!isset($_SESSION['user_mid']) && $row['Height']=='N'){
echo "*******";
}
else {?>  Feet :<?php
if($row['feet']!=''){ echo $row['feet'];}else{echo "NA";}  ?> 

Inches : <?php  if($row['inches']!=''){ echo $row['inches'];}else{echo "NA";}  
}?>
</p>
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
<div class="col-md-3 col-7">
<h5>Present Address <strong>:</strong></h5>
</div>
<div class="col-md-9 col-5">
<p><?php echo $row['full_address'];  ?></p>
</div>
</div>
<h3>Education</h3>
<div class="row">
<div class="col-md-3 col-7">
<h5>Highest Education <strong>:</strong></h5>
</div>
<div class="col-md-9 col-5">
<p><?php echo $row['highest_edu'];  ?></p>
</div>
</div>
<h3>Occupation</h3>
<div class="row">
<div class="col-md-3 col-7">
<h5>Occupation <strong>:</strong></h5>
</div>
<div class="col-md-9 col-5">
<p>
<?php if($row['occupation']==1){ echo "
Job";} else if($row['occupation']==2) { echo "Bussiness";}
else if($row['occupation']==3) { echo "Housewife";} else if($row['occupation']==4) { echo "Student";}else if($row['occupation']==5) { echo "Nothing";}else{ echo 'NA';} ?>
</p>
</div>
</div>
</div>
</div>
</div>
<div id="familyTree" class="tab-pane fade"><br>
<div class="container">

<?php include_once 'PJS-demo/user_detail_tree.php'; ?>
</div>
</div>
</div>
</div>
</div>    


</div>       
<?php include "../footer.php" ?>  
</body>
<?php include "../script.php"; ?>

</html>
<script type="text/javascript">
$('.save_user_profile').on('click', function (event) {
//$_SESSION['user_mid']
var user_mid = $(this).data('current') // Extract info from data-* attributes
var reference_user_mid=$(this).attr('id');
//
var home_path=$("#home_path").val();
$.post(home_path+"en/PJS-demo/save_user_profile.php",
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
$(".user_profile_download").on("click", function (event) {
var button1=$(".user_profile_download")
var userid=button1.data('userid');
var home_path=$("#home_path").val();
$.post(home_path+"en/local-pdf/index.php",
{
userid: userid
},
function(data,status){
var status1=status;
console.log(status1);
if (status1=='success') {
//console.log(success)				
}
else{
alert("Some thing wrong please try again");
}
});
})
$('#exampleModal').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget) // Button that triggered the modal
var recipient = button.data('whatever') // Extract info from data-* attributes
var gender = button.data('gender')
var name = button.data('name')

var member_id= $("#current-users").val();
// relationship_type_user
console.log("gender");
var modal = $(this)
if (gender=='M') {
modal.find('.male').css('display','block');
modal.find('.female').css('display','none');
}
else{
modal.find('.female').css('display','block');
modal.find('.male').css('display','none');

}
//console.log(gender);
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

modal.find('.modal-title').text('Send Request To : ' + name)
modal.find('.modal-body #referenc-id').val(recipient)
modal.find('.modal-body #Member_Id').val(member_id)
})

$(".send_request").on("click", function () {
var member_id=$("#Member_Id").val()
var reference=$("#referenc-id").val()
var relationship_type1=$("#live_relation_type select:visible option:selected").val()
var home_path=$("#home_path").val();
$.post(home_path+"en/PJS-demo/send_request.php",
{
member_id: member_id,
reference_id:reference,
relationship_type:relationship_type1
},
function(data,status){
var status1=status;
console.log(status1);
if (status1=='success') {
// window.location.reload();
$('#exampleModal').modal('hide')
$('#success_tic').modal('show')

}
else{
alert("Data: not updated");
}
});

})
$(".close-icn").on("click", function () {
location.reload(true);
})
$(".approve").on("click", function () {
var to_userid=$(this).attr('id');
var home_path=$("#home_path").val();


$.post(home_path+"en/PJS-demo/approveuser.php",
{
to_userid: to_userid
},
function(data,status){
var status1=status;
console.log(status1);
if (status1=='success') {
// window.location.reload();
location.reload(true);

}
else{
alert("Data: not updated");

}
});

});


</script>
<style type="text/css">
.fa-download{
color: #2c2c2c;
}
.fa-download:hover{
color: #2c2c2c;
}
.mob_app{
	display: none;
}

@media only screen and (max-width: 600px) {
  .mob_app {
   display: block !important;
  }
  .web_app{
  	display: none !important;
  }
}
</style>



<?php include "../../config/config.php" ;
include "../mail/index.php" ;
admin_session_check();
if(isset($_REQUEST['submit'])){
$firstname=mysqli_real_escape_string($con,trim($_REQUEST['firstname']));
$lastname=mysqli_real_escape_string($con,trim($_REQUEST['lastname']));
$mobile=mysqli_real_escape_string($con,trim($_REQUEST['mobile']));
$country=mysqli_real_escape_string($con,trim($_REQUEST['country']));
$state=mysqli_real_escape_string($con,trim($_REQUEST['state']));
$city=mysqli_real_escape_string($con,trim($_REQUEST['city']));
$area=mysqli_real_escape_string($con,trim($_REQUEST['area']));
$pincode=mysqli_real_escape_string($con,trim($_REQUEST['pincode']));
$email=mysqli_real_escape_string($con,trim($_REQUEST['email']));
//$address=mysqli_real_escape_string($con,trim($_REQUEST['address']));
$password=base64_encode(generatepassword($pass));
$submitdate=date('Y-m-d H:i:s');
$request_id=uniqtskid($con);

if(($firstname!='') && ($lastname!='')  && ($mobile!='') && ($country!='')  && ($state!='') && ($city!='')  && ($pincode!='') ){

mysqli_query($con,'insert into sub_admin_login (request_id,first_name,last_name,mobile,email,password,record_inserted_dttm,city,state,pincode,active_status,country,area) values("'.$request_id.'","'.$firstname.'","'.$lastname.'","'.$mobile.'","'.$email.'","'.$password.'","'.$submitdate.'","'.$city.'","'.$state.'","'.$pincode.'","N","'.$country.'","'.$area.'")');
$subject="Registered As Sub Admin ".WEBSITE_NAME." ";
$mes='';
$mes.=" Dear ".$firstname." ".$lastname.", you are successfully registered as SUB ADMIN and your refrence id is :<strong>".$request_id."</strong> wait till the admin approval mail, if any query email us <a href='".FROM_EMAIL."'>".FROM_EMAIL."</a>";
$message=$mes;
$to=$email;
sendmails($to,$message,$subject);
redirect(RE_HOME_SUPERADMIN."sub_admin.php","Record successfully created~@~".MSG_SUCCESS);
}
redirect(RE_HOME_SUPERADMIN."sub_admin.php","Error!Please try again~@~".MSG_ERROR);

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
<div class="container shadow">

<h3 class="ticket-header">Events List </h3>
<div class="row"> 
<div class="col-md-4 form-group"><input type="search" id="stxt" onKeyUp="return BtnClickPage(1,10);" placeholder="Enter Refrence Id" class="form-control form-control-sm"> </div>

<div class="col-md-4 form-group ">
<select class="form-control form-control-sm" id="ustatus" onchange="return BtnClickPage(1,10);">
<option value="">Select All Status</option><option value="N">Deactive</option> <option value="Y">Active</option> </select>
</div>

<div class="col-md-4 form-group">
<button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#add"><i class="fa fa-user-plus"></i> Add Sub Admin</button>
</div>
</div>

<?php echo show_message();?>

<div id="gridviewdata">
<?php include 'load_events.php'; ?>
</div>
<div class="modal fade" id="add" >
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header border-bottom-0">
<h5 class="modal-title" id="exampleModalLabel">Add Event</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post">
<div class="modal-body">
<div class="row">
<div class="form-group col-md-6">
<label>Title <span class="text-danger">*</span></label>
<input type="text" class="form-control inputtexttwo" name="title" placeholder="Enter your title" maxlength='50' required>
</div>

<div class="form-group col-md-6">
<label>Image <span class="text-danger">*</span></label>
<input type="file" class="form-control inputtexttwo" name="image"  required>
</div>

</div>
<div class="form-group">
<label>Content <span class="text-danger">*</span></label>
<input type="tel" class="form-control" name="content" placeholder="Enter your content" required>
</div>



<div class="row">

<div class="form-group col-md-6">
<label>Country <span class="text-danger">*</span></label>
<select class="custom-select" id="country" name="country" required>
<option value="" selected>Select Country</option>
<option value="India">India</option>
</select>
</div>
<div class="form-group col-md-6">
<label>State <span class="text-danger">*</span></label>
<select class="custom-select" id="state" onchange="return getCity();" name="state">
<option value="" selected>Select State</option>
<?php
$state=mysqli_query($con,'select DISTINCT(state) from states_city_country where state!="CHANDIGARG" and state!=""');
while($show=mysqli_fetch_array($state)){ 

?>
<option value="<?php echo $show['state'];  ?>"><?php echo $show['state'];  ?></option>
<?php 
} 
?>
</select>
</div>


<div class="form-group col-md-6">
<label>Name of city/town/village <span class="text-danger">*</span></label>
<span id="getcity"></span>
</div>

<div class="form-group col-md-6">
<label>Pin Code <span class="text-danger">*</span></label>
<span id="getpincode"></span>
</div>
</div>
<div class="form-group">
<label>Area <span class="text-danger">*</span></label>
<span id="getarea"></span>
</div>


</div>

<div class="modal-footer border-top-0">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" name="submit" class="btn btn-success">Submit</button>
</div>
</form>
</div>
</div>
</div>



<div class="modal fade" id="update" >
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header border-bottom-0">
<h5 class="modal-title" id="exampleModalLabel">View Details</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post">
<div class="modal-body">
<div class="row">
<div class="form-group col-md-6">
<label>First Name <span class="text-danger">*</span></label>
<input type="text" class="form-control"  id="ufirstname" placeholder="Enter your first name" disabled>
</div>

<div class="form-group col-md-6">
<label>Last Name <span class="text-danger">*</span></label>
<input type="text" class="form-control"  id="ulastname" placeholder="Enter your last name" disabled>
</div>

</div>
<div class="form-group">
<label>Mobile no <span class="text-danger">*</span></label>
<input type="tel" class="form-control" maxlength="15"  id="umobile" placeholder="Enter your mobile no" onKeyPress="return isNumeric(event)" disabled>
</div>

<div class="form-group">
<label>Email <span class="text-danger">*</span></label>
<input type="email" class="form-control" name="uemail" id="uemail" onchange="return checkEmail();" placeholder="Enter your email" disabled>
<span id="emailerror"></span>
</div>

<div class="row">

<div class="form-group col-md-6">
<label>Country <span class="text-danger">*</span></label>
<select class="custom-select" id="ucountry" disabled>
<option value="" selected>Select Country</option>
<option value="India">India</option>
</select>
</div>
<div class="form-group col-md-6">
<label>State <span class="text-danger">*</span></label>
<select class="custom-select" id="ustate" onchange="return getCity();"  disabled>
<option value="" selected>Select State</option>
<?php
$state=mysqli_query($con,'select DISTINCT(state) from states_city_country where state!="CHANDIGARG" and state!=""');
while($show=mysqli_fetch_array($state)){ 

?>
<option value="<?php echo $show['state'];  ?>"><?php echo $show['state'];  ?></option>
<?php 
} 
?>
</select>
</div>


<div class="form-group col-md-6">
<label>Name of city/town/village <span class="text-danger">*</span></label>
<select class="custom-select ucity" id="ucitytwo" disabled>
<option value="" selected>Select City</option>

<?php  



$selectcity=mysqli_query($con,"select city from states_city_country GROUP BY city ");

while($showcity=mysqli_fetch_array($selectcity)){
?>
<option value="<?php echo $showcity['city']; ?>"><?php echo $showcity['city']; ?> </option>
<?php } ?>
</select>
</div>

<div class="form-group col-md-6">
<label>Pin Code <span class="text-danger">*</span></label>

<select class="custom-select" id="upincode"  disabled>
<option value="" selected>Select pincode</option>

<?php  

$selectcity=mysqli_query($con,"select DISTINCT(pincode) city,postoffice,pincode from states_city_country GROUP BY pincode order by pincode asc");
while($showcity=mysqli_fetch_array($selectcity)){
?>
<option value="<?php echo $showcity['pincode']; ?>"><?php echo $showcity['pincode'];?> </option>
<?php } ?>
</select>
</div>
</div>
<div class="form-group">
<label>Area <span class="text-danger">*</span></label>
<select class="custom-select" id="uarea" disabled>
<option value="" selected>Select Area</option>

<?php  
$selectarea=mysqli_query($con,"select postoffice from states_city_country GROUP BY postoffice" );
while($showareas=mysqli_fetch_array($selectarea)){
?>
<option value="<?php echo $showareas['postoffice']; ?>"><?php echo $showareas['postoffice']; ?> </option>
<?php } ?>
</select>
</div>


</div>

<div class="modal-footer border-top-0">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

</div>
</form>
</div>
</div>
</div>

</body>
<?php include "../../script.php" ?>

<script>
function BtnClickPage(x,y)
{
var searchtxt=$("#stxt").val();	
var ustatus=$("#ustatus").val();
var page=$("#page").val();	
y=10;
$.ajax({
type: 'POST',
url: "load_sub_admin.php",
data: {"page":x,"pagesize":y,"searchtxt":searchtxt,"ustatus":ustatus},
success: function(data12){
$("#gridviewdata").html(data12);			
} 
});	
}

function update(getid,firstname,lastname,city,state,pincode,country,email,mobile,uarea){
$('#getid').val(getid);
$('#ufirstname').val(firstname);
$('#ulastname').val(lastname);
$('#ucitytwo').val(city);
$('#ustate').val(state);
$('#upincode').val(pincode);
$('#ucountry').val(country);
$('#uemail').val(email);
$('#umobile').val(mobile);
$('#uarea').val(uarea);
}

function checkEmail(){
var email=$('#email').val();
$.ajax({
method:'post',
url:'checkmail.php',
data:{'email':email},
success:function(data1){
if(data1=='false'){
$('#email').val('');
$('#emailerror').html('<div class="text-danger">Email! Already Exists </div>');

}
if(data1=='true'){
$('#emailerror').html('');
}
}


})

}


function btnclickdelete(id,table,page)
{
bootbox.confirm("Are you sure you want to delete this user", function(result) {
if(result){ 
$('#loadergif').fadeIn();
$.ajax({
type: 'POST',
url: "delete.php",
data: {"id":id,"table":table},
success: function(data1234){
if(data1234=='ok')	
{	
BtnClickPage(page,10);
$('#loadergif').fadeOut();
}
if(data1234=='false')	
{	
BtnClickPage(page,10);
$('#loadergif').fadeOut();
}
} 
});	
}	
});
}

function varify(x,y,z,page){
bootbox.confirm("Are you sure you want to make this user active?", function(result) {
if(result) {
$('#loadergif').fadeIn();
$.ajax({
type: 'POST',
url: "update.php",
data: {"id":x,"status":y,"table":z},
success: function(data112){  
BtnClickPage(page,10);
$('#loadergif').fadeOut();
}
});
}
});	
}	

function unvarify(x,y,z,page){
bootbox.confirm("Are you sure you want to make this user inactive?", function(result) {
if(result)
{  
$('#loadergif').fadeIn();
$.ajax({
type: 'POST',
url: "update.php",
data: {"id":x,"status":y,"table":z},
success: function(data13){ 
BtnClickPage(page,10);
$('#loadergif').fadeOut();
}
});
}
});
}


</script>

</html>
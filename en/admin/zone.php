<?php include "../../config/config.php" ;
require_once("../../library/upload.php");
include "../mail/index.php" ;
admin_session_check();
if(isset($_REQUEST['submit'])){
$fullname=mysqli_real_escape_string($con,trim($_REQUEST['fullname']));
$mobile=mysqli_real_escape_string($con,trim($_REQUEST['mobile']));
$email=mysqli_real_escape_string($con,trim($_REQUEST['email']));
$address=mysqli_real_escape_string($con,trim($_REQUEST['address']));
$submitdate=date('Y-m-d H:i:s');

if(($fullname!='') && ($mobile!='') && ($email!='')  && ($address!='')   ){

if($_FILES["image"]["name"]!=''){
$sizex=255;
$sizey=197;
$ext=explode(".",$_FILES["image"]["name"]);
$url="../../uploads/zones/". str_replace(" ","",sha1($_FILES["image"]["name"].time()).".".$ext[sizeof($ext)-1]);
$url12="uploads/zones/". str_replace(" ","",sha1($_FILES["image"]["name"].time()).".".$ext[sizeof($ext)-1]);
move_uploaded_file($_FILES["image"]["tmp_name"],$url);
$x=$sizex;
$y=$sizey;
$image=imagename($url12,$x,$y);
imagemulitple($url,$x,$y);
//unlink($url);
//unlink('../../uploads/events/'.$getaboutus['image']);			
}

mysqli_query($con,'insert into zones (fullname,short_image,long_image,record_inserted_dttm,status,mobileno,email,address) values("'.$fullname.'","'.$image.'","'.$url12.'","'.$submitdate.'","Y","'.$mobile.'","'.$email.'","'.$address.'")');

redirect(RE_HOME_SUPERADMIN."zone.php","Record successfully created~@~".MSG_SUCCESS);
}
redirect(RE_HOME_SUPERADMIN."zone.php","Error! Please fill out the fields and try again~@~".MSG_ERROR);

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

<h3 class="ticket-header">Zone List </h3>
<div class="row"> 
<div class="col-md-4 form-group"><input type="search" id="stxt" onKeyUp="return BtnClickPage(1,10);" placeholder="Enter Full Name or Email" class="form-control form-control-sm"> </div>

<div class="col-md-4 form-group ">
<select class="form-control form-control-sm" id="ustatus" onchange="return BtnClickPage(1,10);">
<option value="">Select All Status</option><option value="N">Deactive</option> <option value="Y">Active</option> </select>
</div>

<div class="col-md-4 form-group">
<button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#add"><i class="fa fa-user-plus"></i> Add Zone</button>
</div>
</div>

<?php echo show_message();?>

<div id="gridviewdata">
<?php include 'load_zones.php'; ?>
</div>
<div class="modal fade" id="add" >
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header border-bottom-0">
<h5 class="modal-title" id="exampleModalLabel">Add Zone</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post"  enctype="multipart/form-data">
<div class="modal-body">
<div class="row">
<div class="form-group col-md-12">
<label>Full name <span class="text-danger">*</span></label>
<input type="text" class="form-control inputtexttwo" name="fullname" id="fullname" placeholder="Enter your full name" maxlength='50' >
</div>


<div class="form-group col-md-12">
<label>Mobile no<span class="text-danger">*</span></label>
<input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Enter your mobile no" maxlength='15'  onKeyPress="return isNumeric(event)">
</div>

<div class="form-group col-md-12">
<label>Email <span class="text-danger">*</span></label>
<input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" maxlength='100' >
</div>

<div class="form-group col-md-12">
<label>Address <span class="text-danger">*</span></label>
<textarea type="text" class="form-control" name="address" id="address" placeholder="Enter your address" maxlength='100' ></textarea>
</div>

<div class="form-group  col-md-12">
<label>Image <span class="text-danger">*</span></label><br>
<input type="file" class="" name="image" id="file" ><br>
<small>Please select the size of image <i>1000*400</i></small>
</div>

</div>

<div class="modal-footer border-top-0">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" name="submit" class="btn btn-success" onclick="return addevent()">Submit</button>
</div></div>
</form>
</div>
</div>
</div>



<div class="modal fade" id="view" >
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header border-bottom-0">
<h5 class="modal-title" id="exampleModalLabel">View Details</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post"  enctype="multipart/form-data">
<div class="modal-body">
<div class="row">
<div class="form-group col-md-12">
<label>Full name <span class="text-danger">*</span></label>
<input type="text" class="form-control inputtexttwo" name="ufullname" id="ufullname" placeholder="Enter your full name" maxlength='50' disabled>
</div>


<div class="form-group col-md-12">
<label>Mobile no<span class="text-danger">*</span></label>
<input type="tel" class="form-control" name="umobile" id="umobile" placeholder="Enter your mobile no" maxlength='15'  onKeyPress="return isNumeric(event)" disabled>
</div>

<div class="form-group col-md-12">
<label>Email <span class="text-danger">*</span></label>
<input type="email" class="form-control" name="uemail" id="uemail" placeholder="Enter your email" maxlength='100' disabled>
</div>

<div class="form-group col-md-12">
<label>Address <span class="text-danger">*</span></label>
<textarea type="text" class="form-control inputtexttwo" name="uaddress" id="uaddress" placeholder="Enter your address" maxlength='100' disabled></textarea>
</div>

</div>

<div class="modal-footer border-top-0">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

</div></div>
</form>
</div>
</div>
</div>





<?php include "../../footer.php" ?>
</body>
<?php include "../../script.php" ?>

<script>

function addevent(){
var fullname=$('#fullname').val();
var mobile=$('#mobile').val();
var mobile=$('#mobile').val();
var email=$('#email').val();
var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
var address=$('#address').val();

var file=$('#file').val();

if(fullname.trim()==''){
$('#fullname').focus();
$("#fullname").addClass("invalid");
return false;
}
else if(mobile.trim()==''){
$('#mobile').focus();
$("#mobile").addClass("invalid");
return false;
}
else if(mobile<=99999999){
$('#mobile').focus();
$("#mobile").addClass("invalid");
return false;
}

else if(email.trim()==''){
$('#email').focus();
$("#email").addClass("invalid");
return false;
}
else if (!testEmail.test(email))
{   
$('#email').focus();
//$('#emailerror').html("<span class='text-danger'>Please enter valid email<span>");
$("#email").addClass("invalid");
return false;
}
else if(address.trim()==''){
$('#address').focus();
$("#address").addClass("invalid");
return false;
}
else if(file.trim()==''){
$('#file').focus();
$("#file").addClass("invalid");
return false;   
}

else{

return true;

}

}


function BtnClickPage(x,y)
{
var searchtxt=$("#stxt").val();	
var ustatus=$("#ustatus").val();
var page=$("#page").val();	
y=10;
$.ajax({
type: 'POST',
url: "load_zones.php",
data: {"page":x,"pagesize":y,"searchtxt":searchtxt,"ustatus":ustatus},
success: function(data12){
$("#gridviewdata").html(data12);			
} 
});	
}

function update(ufullname,umobile,uemail,uaddress){
$('#ufullname').val(ufullname); 
$('#umobile').val(umobile);
$('#uemail').val(uemail);
$('#uaddress').val(atob(uaddress));
}



function btnclickdelete(id,table,page)
{
bootbox.confirm("Are you sure you want to delete this zone", function(result) {
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
bootbox.confirm("Are you sure you want to make this zone active?", function(result) {
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
bootbox.confirm("Are you sure you want to make this zone inactive?", function(result) {
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
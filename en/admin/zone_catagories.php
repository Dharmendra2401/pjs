<?php include "../../config/config.php" ;
require_once("../../library/upload.php");
include "../mail/index.php" ;
admin_session_check();
if(isset($_REQUEST['submit'])){
$title=mysqli_real_escape_string($con,trim($_REQUEST['title']));
$submitdate=date('Y-m-d H:i:s');

if(($title!='')){
mysqli_set_charset('utf8');
mysqli_query($con,'insert into zone_categories (categories,record_inserted_dttm,status) values("'.$title.'","'.$submitdate.'","Y")')or die(mysqli_error($con));
redirect(RE_HOME_SUPERADMIN."zone_catagories.php","Record successfully created~@~".MSG_SUCCESS);
}
redirect(RE_HOME_SUPERADMIN."zone_catagories.php","Error! Please fill out the fields and try again~@~".MSG_ERROR);

}


if(isset($_REQUEST['update'])){

    $oldtitle=mysqli_real_escape_string($con,trim($_REQUEST['oldtitle']));
    $oldid=mysqli_real_escape_string($con,trim($_REQUEST['oldid']));
    $submitdate=date('Y-m-d H:i:s');
    
    if(($oldtitle!='')){
    mysqli_query($con,'update  zone_categories set categories="'.$oldtitle.'" where id="'.$oldid.'"')or die(mysqli_error($con));
    redirect(RE_HOME_SUPERADMIN."zone_catagories.php","Record successfully updated~@~".MSG_SUCCESS);
    }
    redirect(RE_HOME_SUPERADMIN."zone_catagories.php","Error! Please fill out the fields and try again~@~".MSG_ERROR);
    
    }


?>

<!DOCTYPE>
<html>
<head>
<?php  include "../../styles.php" ?>


<body>
<div class="container-fluid">
<?php  include "../header.php" ?>
</div>
<div class="container shadow">

<h3 class="ticket-header">Zone Categories List </h3>
<div class="row"> 
<div class="col-md-4 form-group"><input type="search" id="stxt" onKeyUp="return BtnClickPage(1,10);" placeholder="Enter Title" class="form-control form-control-sm"> </div>

<div class="col-md-4 form-group ">
<select class="form-control form-control-sm" id="ustatus" onchange="return BtnClickPage(1,10);">
<option value="">Select All Status</option><option value="N">Deactive</option> <option value="Y">Active</option> </select>
</div>

<div class="col-md-4 form-group">
<button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#add"><i class="fa fa-user-plus"></i> Add Zone Category</button>
</div>
</div>

<?php echo show_message();?>

<div id="gridviewdata">
<?php include 'load_zones_catagories.php'; ?>
</div>
<div class="modal fade" id="add" >
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header border-bottom-0">
<h5 class="modal-title" id="exampleModalLabel">Add Zone Category</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post"  enctype="multipart/form-data">
<div class="modal-body">
<div class="row">
<div class="form-group col-md-12">
<label>Category <span class="text-danger">*</span></label>
<input type="text" class="form-control " name="title" id="title" placeholder="Enter your category" maxlength='50' >
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


<div class="modal fade" id="edit" method="post">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header border-bottom-0">
<h5 class="modal-title" id="exampleModalLabel">Edit Zone Category</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post"  enctype="multipart/form-data">
<div class="modal-body">
<div class="row">
<div class="form-group col-md-12">
<label>Category <span class="text-danger">*</span></label>
<input type="text" class="form-control " name="oldtitle" id="oldtitle" placeholder="Enter your category" maxlength='50' >
</div>
<input type="hidden" id="oldid" name="oldid">
</div>

<div class="modal-footer border-top-0">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" name="update" class="btn btn-success" onclick="return editevent()">Update</button>
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
var fullname=$('#title').val();

if(fullname.trim()==''){
$('#title').focus();
$("#title").addClass("invalid");
return false;
}
else{
return true;
}

}

function editevent(){
var fullname=$('#oldtitle').val();

if(fullname.trim()==''){
$('#title').focus();
$("#title").addClass("invalid");
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
url: "load_zones_catagories.php",
data: {"page":x,"pagesize":y,"searchtxt":searchtxt,"ustatus":ustatus},
success: function(data12){
$("#gridviewdata").html(data12);			
} 
});	
}

function update(oldid,oldtitle){
$('#oldid').val(oldid);
$('#oldtitle').val(oldtitle);
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
if(data1234.trim()=='ok')	
{	
BtnClickPage(page,10);
$('#loadergif').fadeOut();
}
if(data1234.trim()=='false')	
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
bootbox.confirm("Are you sure you want to make this zone category active?", function(result) {
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
bootbox.confirm("Are you sure you want to make this zone category inactive?", function(result) {
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
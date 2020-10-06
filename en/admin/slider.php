<?php include "../../config/config.php" ;
require_once("../../library/upload.php");
include "../mail/index.php" ;
admin_session_check();
if(isset($_REQUEST['submit'])){
 $title=mysqli_real_escape_string($con,trim($_REQUEST['title']));
 //$content=mysqli_real_escape_string($con,trim($_REQUEST['content']));
 $submitdate=date('Y-m-d H:i:s');

if(($title!='') && ($_FILES["image"]["name"]!='')  ){

if($_FILES["image"]["name"]!=''){
$sizex=1349;
$sizey=500;
$ext=explode(".",$_FILES["image"]["name"]);
$url="../../uploads/slider/". str_replace(" ","",sha1($_FILES["image"]["name"].time()).".".$ext[sizeof($ext)-1]);
$url12="uploads/slider/". str_replace(" ","",sha1($_FILES["image"]["name"].time()).".".$ext[sizeof($ext)-1]);
move_uploaded_file($_FILES["image"]["tmp_name"],$url);
$x=$sizex;
$y=$sizey;
echo $image=imagename($url12,$x,$y);
imagemulitple($url,$x,$y);
unlink($url);
//unlink('../../uploads/events/'.$getaboutus['image']);			
}
mysqli_query($con,'insert into slider (title,image,record_inserted_dttm,status) values("'.$title.'","'.$image.'","'.$submitdate.'","Y")');

redirect(RE_HOME_SUPERADMIN."slider.php","Record successfully created~@~".MSG_SUCCESS);
}
redirect(RE_HOME_SUPERADMIN."slider.php","Error!Please try again~@~".MSG_ERROR);

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

<h3 class="ticket-header">Slider List </h3>
<div class="row"> 
<div class="col-md-4 form-group"><input type="search" id="stxt" onKeyUp="return BtnClickPage(1,10);" placeholder="Enter Title" class="form-control form-control-sm"> </div>

<div class="col-md-4 form-group ">
<select class="form-control form-control-sm" id="ustatus" onchange="return BtnClickPage(1,10);">
<option value="">Select All Status</option><option value="N">Deactive</option> <option value="Y">Active</option> </select>
</div>

<div class="col-md-4 form-group">
<button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#add"><i class="fa fa-user-plus"></i> Add Slider</button>
</div>
</div>

<?php echo show_message();?>

<div id="gridviewdata">
<?php include 'load_slider.php'; ?>
</div>
<div class="modal fade" id="add" >
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header border-bottom-0">
<h5 class="modal-title" id="exampleModalLabel">Add Slider</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post"  enctype="multipart/form-data">
<div class="modal-body">
<div class="row">
<div class="form-group col-md-12">
<label>Title <span class="text-danger">*</span></label>
<input type="text" class="form-control inputtexttwo" name="title" id="title" placeholder="Enter your title" maxlength='50' >
</div>

<div class="form-group  col-md-12">
<label>Image <span class="text-danger">*</span></label><br>
<input type="file" class="" name="image" id="file" ><br>
<small>Please select the size of image <i>1349*500</i></small>
</div>


<div class="modal-footer border-top-0">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" name="submit" class="btn btn-success" onclick="return addgallery()">Submit</button>
</div></div>
</form>
</div>
</div>
</div>



<div class="modal fade" id="view" >
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header border-bottom-0">
<h5 class="modal-title" id="exampleModalLabel">Add Event</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post"  enctype="multipart/form-data">
<div class="modal-body">
<span id="desc"></span>
</div>
</form>
</div>
</div>
</div>

<?php include "../../footer.php" ?>
</body>
<?php include "../../script.php" ?>

<script>

function addgallery(){
var title=$('#title').val();
var file=$('#file').val();
var content=$('#editor').val();
if(title.trim()==''){
$('#title').focus();
$("#title").addClass("invalid");
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
url: "load_slider.php",
data: {"page":x,"pagesize":y,"searchtxt":searchtxt,"ustatus":ustatus},
success: function(data12){
$("#gridviewdata").html(data12);			
} 
});	
}


function btnclickdelete(id,table,page)
{
bootbox.confirm("Are you sure you want to delete this slider ?", function(result) {
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
bootbox.confirm("Are you sure you want to make this slider active?", function(result) {
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
bootbox.confirm("Are you sure you want to make this slider inactive?", function(result) {
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
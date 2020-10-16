<?php include "../../config/config.php" ;
include "../mail/index.php" ;
admin_session_check();
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

<h3 class="ticket-header">FeedBack List </h3>
<div class="row"> 
<div class="col-md-4 form-group"><input type="search" id="stxt" onKeyUp="return BtnClickPage(1,10);" placeholder="Enter Refrence Id" class="form-control form-control-sm"> </div>

<!-- <div class="col-md-4 form-group ">
<select class="form-control form-control-sm" id="ustatus" onchange="return BtnClickPage(1,10);">
<option value="">Select All Status</option><option value="N">Deactive</option> <option value="Y">Active</option> </select>
</div> -->

<!-- <div class="col-md-4 form-group">
<button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#add"><i class="fa fa-user-plus"></i> Add Sub Admin</button>
</div> -->
</div>

<?php echo show_message();?>

<div id="gridviewdata">
<?php include 'load_userfeedback.php'; ?>
</div>


<?php include "../../footer.php" ?>
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










</script>

</html>
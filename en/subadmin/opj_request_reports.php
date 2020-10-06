<?php
include "../../config/config.php" ;   
sub_admin_session_check();
?>

<!DOCTYPE>
<html>
<head>
<?php include "../../styles.php";  ?>

</head>
</head>
<body>
<div class="container-fluid">
<?php include "../header.php" ?>



<div class="col-md-2 px-0 bg-white shadow">
<div class="filter-header">
<span class="header-txt">Filters</span>
<i class="fas fa-plus"></i> 
<button class="btn btn-default custom-btn reset-btn" onclick="return clearAll();">Clear All</button>
</div>
<form class="mb-0" id="filterForm">
<ul class="list-unstyled sidebar">


<li class="collapse-wrapper">
<a class="btn btn-default w-100" data-toggle="collapse" href="#state" role="button" aria-expanded="false" aria-controls="state">
<span class="float-left">STATE</span>
</a>
<i class="fas fa-angle-down"></i>
<div class="collapse" id="state">
<select class="select form-control" id="multiselectwithsearch" multiple="multiple" onchange="return BtnClickPage(1,10);">

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
</li>


<li class="collapse-wrapper" id="cage">
<a class="btn btn-default w-100" data-toggle="collapse" href="#memberid" role="button" aria-expanded="false" aria-controls="memberid">
<span class="float-left">Member Id</span>
</a>
<i class="fas fa-angle-down"></i>
<div class="collapse" id="memberid" multiple="multiple">
<div class="card card-body">
<select class="select form-control" id="memberidone" multiple="multiple"  onchange="return BtnClickPage(1,10);">
<?php 
$memberid=mysqli_query($con,'select id from key_member_id where active_status="Y" ');
while($showmemid=mysqli_fetch_array($memberid)){
?>
<option value="<?php echo $showmemid['id']; ?>"><?php echo  $showmemid['id']; ?></option>
<?php } ?>
</select>
</div>
</div>
</li>
<li class="collapse-wrapper">
<a class="btn btn-default w-100" data-toggle="collapse" href="#blood-group" role="button" aria-expanded="false" aria-controls="blood-group">
<span class="float-left">Refrence Id</span>
</a>
<i class="fas fa-angle-down"></i>
<div class="collapse" id="blood-group">
<div class="card card-body">
<select class="select form-control" id="refrenceid" multiple="multiple" onchange="return BtnClickPage(1,10);">
<?php 
$refrenceid=mysqli_query($con,'select request_id from non_member_request');
while($getrefrenceid=mysqli_fetch_array($refrenceid)){
?>
<option value="<?php echo $getrefrenceid['request_id'];?>"><?php echo $getrefrenceid['request_id'];?></option>
<?php } ?>
</select>
</div>
</div>
</li>

<li class="collapse-wrapper text-right">

<button type="button" class="btn btn-success" onclick="return clearAll();">CLEAR ALL</button>

</li>
</ul>
</form>
</div>
<div class="col-md-10 bg-white shadow">
<h3 class="text-center pt-3">OPJ Request Users</h3>
<div class="text-right">
<button type="button" onclick="return userExport()" class="btn btn-outline-primary my-4">Export</button>
</div>

<div id="gridviewone">
<?php include 'load_opj_request_reports.php'; ?>
</div>
</div>
</div>
</div>	
</div>
<?php  include '../../script.php'; ?>
<script>
$( document ).ready(function() {
   $('#ageone').val('');
});

function BtnClickPage(x,y)
{	
var state=$("#multiselectwithsearch").val();
var refrenceid=$("#refrenceid").val();
var memberid=$("#memberidone").val();
y=10;
$('#loadergif').fadeIn();
$.ajax({
type: 'POST',
url: "load_opj_request_reports.php",
data: {"page":x,"pagesize":y,"state":state,"refrenceid":refrenceid,"memberid":memberid},
success: function(data12){
$('#loadergif').fadeOut();
$("#gridviewone").html(data12);

} 
});	

}

$(".select").bsMultiSelect({cssPatch : {
choices: {columnCount:'6' },
}});

function userExport(){
var state=$("#multiselectwithsearch").val();
var refrenceid=$("#refrenceid").val();
var memberid=$("#memberidone").val();
 window.location.replace("<?php echo RE_HOME_ADMIN; ?>reports/opj_excel.php/?state="+ state+"&refrenceid="+ refrenceid+"&memberid="+ memberid);
}

function clearAll(){
$('#filterForm')[0]. reset();
BtnClickPage(1,10)

}



$(document).on('input', '#rangeInput', function() {
    $('#amount').html( $(this).val() );
});

</script>
</body>
</html>
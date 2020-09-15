<?php 
include "../../config/config.php";
sub_admin_session_check();
?>
<!DOCTYPE>
<html>
<head>
<head>
<?php 
include "../../styles.php"
?>
</head>
</head>
<body>


<div class="container-fluid">
<?php include "../header.php"  ?>
</div>


<div class="container shadow">
<h3 class="ticket-header">New User Registration Request</h3>
<?php echo show_message();?>
<div class="tab-bar">
<div class="row">
<div class="col-md-6">
<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#open"><div class="triangle-down"></div>Open</a>
</li>
<!-- <li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#pending"><div class="triangle-down"></div>Pending </a>
</li> -->
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#closed"><div class="triangle-down"></div>Closed </a>
</li>
</ul>
</div>
<div class="col-md-6 align-self-center text-right">

</div>
</div>
</div>
<div class="row">
<div class="col-md-12 tab-content">
<div id="open" class="tab-pane active pb-3"><br>
<br>
<div class="row">
<div class="col-md-2">
<input type="text" class="form-control" placeholder="Enter Refrence id" id="refrenceidone">
</div>

<div class="col-md-3">
<select class="custom-select form-control" id="state" onchange="return getCity();" name="state">
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

<div class="col-md-2">
<span id="getcity"></span>
</div>

<div class="col-md-3">
<input type="date" class="form-control" placeholder="Select requested date" id="submitdate">
</div>

<div class="col-md-2">
<button class="btn btn-primary" onclick="return BtnClickPage(1,10)">Search</button>

<button class="btn btn-warning" onclick="return emtyId();">View all</button>
</div>

</div>
<br>	

<div id="gridviewone">
<?php  include 'load_open.php'; ?>

</div>
<!-- <div id="pending" class="tab-pane table-responsive fade"><br>
<table id="pendingEntries" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
<th>S.no.</th>
<th>Requested User Name</th>
<th>City/Town/Village</th>
<th>Requested Date</th>
<th>View Details</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Lavish</td>
<td>indore</td>
<td>21/02/20</td>
<td><a href="reg_user_detail.php">Show Details</a></td>
</tr>
<tr>
<td>2</td>
<td>Munish</td>
<td>San Francisco</td>
<td>21/02/20</td>
<td><a href="#">Show Details</a></td>
</tr>
<tr>
<td>3</td>
<td>Sidhu</td>
<td>bangalore</td>
<td>21/02/20</td>
<td><a href="#">Show Details</a></td>
</tr>
<tr>
<td>4</td>
<td>jain</td>
<td>delhi</td>
<td>21/02/20</td>
<td><a href="#">Show Details</a></td>
</tr>
<tr>
<td>5</td>
<td>Customer Support</td>
<td>chennai</td>
<td>21/02/20</td>
<td><a href="#">Show Details</a></td>
</tr>
</tbody>
</table>
</div> -->
<div id="closed" class="tab-pane table-responsive fade"><br>
<br>
<div class="row">
<div class="col-md-2">
<input type="text" class="form-control" placeholder="Enter Refrence id" id="refrenceidtwo">
</div>
<div class="col-md-3"> <select class="custom-select form-control" id="statetwo" onchange="return getCitytwo();" name="state">
<option value="" selected>Select State</option>
<?php
$state=mysqli_query($con,'select DISTINCT(state) from states_city_country where state!="CHANDIGARG" and state!=""');
while($show=mysqli_fetch_array($state)){ 

?>
<option value="<?php echo $show['state'];  ?>"><?php echo $show['state'];  ?></option>
<?php 
} 
?>
</select></div>

<div class="col-md-2">

<span id="getcitytwo"></span>
</div>

<div class="col-md-3">
<input type="date" class="form-control" placeholder="Select requested date" id="submitdatetwo">
</div>

<div class="col-md-2">
<button class="btn btn-primary" onclick="return BtnClickPagetwo(1,10)">Search</button>

<button class="btn btn-warning" onclick="return emtyId();">View all</button>
</div>

</div>
<br>	
<div id="gridviewtwo">
<?php  include 'load_close.php'; ?>
</div>
</div>
</div>
</div>
</div> 	
</div>



<div class="modal fade" id="viewreason" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Reasons For Rejection</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post">
      <div id="reason" class="rpadding"></div>
      <div class="modal-footer border-top-0">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
      </form>
    </div>
  </div>
</div>

<?php  include "../../script.php" ?>
<script type="text/javascript">

function viewreason(reas){
$('#reason').html(reas)
}

$(function(){
$(".short1").addSortWidget();
});
$(function(){
$(".short2").addSortWidget();
});

function BtnClickPage(x,y)
{
var state=$("#state").val();	
var city=$("#city").val();
var refrenceidone=$("#refrenceidone").val();

var submitdate=$("#submitdate").val();
y=10;
$('#loadergif').fadeIn();
$.ajax({
type: 'POST',
url: "load_open.php",
data: {"page":x,"pagesize":y,"state":state,"city":city,"submitdate":submitdate,"refrenceidone":refrenceidone},
success: function(data12){
$('#loadergif').fadeOut();
$("#gridviewone").html(data12);			    } 
});	
}

function BtnClickPagetwo(x,y)
{
var statetwo=$("#statetwo").val();	
var citytwo=$("#citytwo").val();
var submitdatetwo=$("#submitdatetwo").val();
var refrenceidtwo=$("#refrenceidtwo").val();

y=10;
$('#loadergif').fadeIn();
$.ajax({
type: 'POST',
url: "load_close.php",
data: {"page":x,"pagesize":y,"statetwo":statetwo,"citytwo":citytwo,"submitdatetwo":submitdatetwo,"refrenceidtwo":refrenceidtwo},
success: function(data122){
$('#loadergif').fadeOut();
$("#gridviewtwo").html(data122);			    } 
});	
}

function emtyId(){
$("#state").val('');
$("#city").val('');
$("#submitdate").val('');
$("#statetwo").val('');
$("#citytwo").val('');
$("#submitdatetwo").val('');
$("#refrenceidtwo").val('');
$("#refrenceidone").val('');
BtnClickPage(1,10);
BtnClickPagetwo(1,10);
}


</script>

</body>
</html>

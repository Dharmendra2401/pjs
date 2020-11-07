<?php 
include "../../config/config.php";
sub_admin_session_check();
?> 
<!DOCTYPE>
<html>
<head>
<?php 
include "../../styles.php"
?>
</head>
<body>  
<div class="container-fluid">
	<?php include "../header.php"  ?>
</div>
 		
		<div class="container shadow">
			<h3 class="ticket-header">Death/Duplicate Requests</h3>
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
				<div class="col-md-12 tab-content" style="margin-bottom: 42px;">
				    <div id="open" class="tab-pane table-responsive active pb-3"><br>
				    	<div id="gridviewtwo">
						<?php  include 'open_death_request.php'; ?>
						</div>
				    </div>
				    <div id="closed" class="tab-pane table-responsive fade"><br>
				    	<div id="gridviewone">
				    		<?php  include 'load_close_death_request.php'; ?>
				    	</div>
				    </div>
				</div>
		    </div>
		</div> 	
    </div> 
    <?php include "../../footer.php" ?>
    <script data-require="popper.js@*" data-semver="1.12.9" src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
    	
    	$(document).ready(function() {
		   // $('#openEntries, #pendingEntries, #closedEntries').DataTable();
		} );
    </script></body>
</html>
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
var status=$("#status").val();

y=10;
$('#loadergif').fadeIn();
$.ajax({
type: 'POST',
url: "load_close_death_request.php",
data: {"page":x,"pagesize":y,"state":state,"city":city,"submitdate":submitdate,"refrenceidone":refrenceidone,"status":status},
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
url: "open_death_request.php",
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

<!------------------- Login Modal ----------------------------->
<div class="modal fade loginPopup" id="loginPopup">
			    <div class="modal-dialog modal-dialog-centered login-container">
			        	<!-- loads from modal.html -->
			    </div>
			  </div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RE_HOME_PATH ; ?>js/jquery.steps.min.js"></script>
<script data-require="popper.js@*" data-semver="1.12.9" src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="<?php echo RE_HOME_PATH ; ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo RE_HOME_PATH ; ?>js/main.js"></script>
<script src="<?php echo RE_HOME_PATH; ?>js/sweetalert.min.js"></script>
<script>
$(document).ready(function(){
			$("#getcity").load("<?php echo RE_EN_PATH; ?>getcity.php");
			$("#getpincode").load("<?php echo RE_EN_PATH; ?>getpincode.php");
	
});


function isNumeric (evt) {
   var theEvent = evt || window.event;
   var key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode (key);
   var regex = /[0-9]|\./;
   if ( !regex.test(key) ) {
   theEvent.returnValue = false;
   if(theEvent.preventDefault) theEvent.preventDefault();
   }
   }


function getCity(){
var state= $('#state').val();
$('#loadergif').fadeIn();
$.ajax({
type:"POST",
url:"<?php echo RE_EN_PATH; ?>getcity.php",
data:{"state":state},
success:function(data12){
$("#getpincode").load("getpincode.php");
$('#getcity').html(data12);
$('#loadergif').fadeOut();
}
});
}
function getpincodes(){
var city= $('#city').val();
$('#loadergif').fadeIn();
$.ajax({
type:"POST",
url:"<?php echo RE_EN_PATH; ?>getpincode.php",
data:{"city":city},
success:function(data122){
$('#getpincode').html(data122);
$('#loadergif').fadeOut();
}
});
}
</script>

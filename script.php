<?php  include "modal.php"; ?>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RE_HOME_PATH ; ?>js/jquery.steps.min.js"></script>
<script data-require="popper.js@*" data-semver="1.12.9" src="https://unpkg.com/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script type="text/javascript" src="<?php echo RE_HOME_PATH ; ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo RE_HOME_PATH ; ?>js/main.js"></script>
<script type="text/javascript" src="<?php echo RE_HOME_PATH; ?>js/sweetalert.min.js"></script>
<script  type="text/javascript" src="<?php echo RE_HOME_PATH; ?>js/sorttable.js"></script>
<script  type="text/javascript" src="<?php echo RE_HOME_PATH; ?>js/lightbox.js"></script>

<script>

function checkMid(){
var mid=$('#mid').val();
$.ajax({
type:'POST',
url:'<?php echo RE_HOME_USER ;?>checkmid.php',
data:{'mid':mid},
success:function(midsuccess){
if(midsuccess=='false'){
$('#miderror').html('<div class="text-danger">Invalid MID you entered</div> ');
//$('#mid').val('');
$('#getotp').hide();
return false;
}else{
$('#miderror').html(''); 
$('#getotp').show();

return false;
}
}
});
}

function getOtp(){
var mid=$('#mid').val();
$('#loadergif').fadeIn();
$.ajax({
type:'POST',
url:'<?php echo RE_HOME_USER ;?>otprequest.php',
data:{'mid':mid},
success:function(otpnumber){
if(otpnumber!=' '){
timer(120);
$('#mobilenumber').html(otpnumber);
$('#logincontents').show();
$('#getotp').hide();
$('#loginbtn').show();
$('#resend').show();
$('#mid'). attr('disabled','disabled');
$('#loadergif').fadeOut();
return false; 
}
}
}
)
}


function Userlogin(){
 
var mid=$('#mid').val(); 
var otp=$('#otp').val();
if(mid==''){
  swal({
  title: "Error",
  text: "Please fill the MID",
  icon: "error",
});
return false;
}
else if(otp==''){
  swal({
  title: "Error",
  text: "Please fill the OTP",
  icon: "error",
});

}else{
$.ajax({
method:'POST',
url:'<?php echo RE_HOME_USER ;?>loginuser.php',
data:{'mid':mid,'otp':otp},
success:function(userlog){
alert(userlog);
if(userlog=='false'){
  swal({
  title: "Error",
  text: "Error! Please enter the valid otp! ",
  icon: "error",
});
}
if(userlog=='true'){
  window.location.replace("<?php echo RE_EN_PATH; ?>");
}
}


})

}

}


let timerOn = true;

function timer(remaining) {
  var m = Math.floor(remaining / 60);
  var s = remaining % 60;
  
  m = m < 10 ? '0' + m : m;
  s = s < 10 ? '0' + s : s;
  document.getElementById('timer').innerHTML = m + ':' + s;
  remaining -= 1;
  if(remaining >= 0 && timerOn) {
    setTimeout(function() {
        timer(remaining);
    }, 1000);
    return;
  }

  if(!timerOn) {
    // Do validate stuff here
    return;
  }
  
  // Do timeout stuff here
  $('#timer').html('');
  $('#getotp').show();
  
  $('#resend').hide();
}



  $(function(){
	$(".shortable").addSortWidget();
});
$(document).ready(function(){
			$("#getcity").load("<?php echo RE_EN_PATH; ?>getcity.php");
         $("#getcitytwo").load("<?php echo RE_EN_PATH; ?>getcity.php");
      $("#getpincode").load("<?php echo RE_EN_PATH; ?>getpincode.php");
      $("#getarea").load("<?php echo RE_EN_PATH; ?>area.php");
	
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
$("#getarea").load("area.php");
$("#getpincode").load("getpincode.php");
$('#getcity').html(data12);
$('#loadergif').fadeOut();
}
});
}

function getCitytwo(){
var state= $('#statetwo').val();
$('#loadergif').fadeIn();
$.ajax({
type:"POST",
url:"<?php echo RE_EN_PATH; ?>getcitytwo.php",
data:{"state":state},
success:function(data12){
$("#getarea").load("area.php");
$('#getcitytwo').html(data12);
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
$("#getarea").load("area.php");
$('#getpincode').html(data122);
$('#loadergif').fadeOut();
}
});
}

function getArea(){
var states= $('#state').val();
var pincode= $('#pincodes').val();
$('#loadergif').fadeIn();
$.ajax({
type:"POST",
url:"<?php echo RE_EN_PATH; ?>area.php",
data:{"pincode":pincode},
success:function(data1224){
$('#getarea').html(data1224);
$('#loadergif').fadeOut();
}
});

}


function searchBar(x,y)
{
  	
  var search=$("#search").val();
 if(search!=''){
  y=10;
  //$('#loadergif').fadeIn();
  $.ajax({
  type: 'POST',
  url: "<?php echo RE_EN_PATH; ?>load_search.php",
  data: {"page":x,"pagesize":y,"search":search},
  success: function(search){
   $('.searchdata').show();
	//$('#loadergif').fadeOut();
  $("#searchdata").html(search);			    } 
});

 }
 else{
   $('.searchdata').hide();

 }

}

function searchpage() {
   var search=$("#search").val();
   if(search!=''){
        window.location.replace("<?php echo RE_EN_PATH; ?>load_search2.php?search="+search);
   }
    } 

</script>

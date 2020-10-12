<?php  require_once("../config/config.php");
?>
<!DOCTYPE>
<html>

<head>
<?php  include "../styles.php" ?>
</head>

<body>
<div class="container-fluid">
<?php  include "header.php" ?>
<div class=" searhing-top" id="gridviewdata">
<?php include 'load_search21.php'; ?>
</div>
</div>
<div>


<?php include "../footer.php" ?>
</body>
<?php include "../script.php" ?>
<script>
function BtnClickPage(x,y)
{
var searchtxt=$("#stxt").val();	
var ustatus=$("#ustatus").val();
var page=$("#page").val();	
y=10;
$('#loadergif').fadeIn();
$.ajax({
type: 'POST',
url: "load_search21.php",
data: {"page":x,"pagesize":y,"searchtxt":searchtxt,"ustatus":ustatus},
success: function(data12){
$("#gridviewdata").html(data12);
$('#loadergif').fadeOut();			
} 
});	
}
</script>
</html>


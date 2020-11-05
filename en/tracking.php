
<?php  
include "../config/config.php";

?>
<!DOCTYPE html>
<html>
<?php include "../styles.php";  ?>
<body>
<div class="container-fluid">

<?php include "header.php";  ?>
</div>
<style>.icon-tracking i{    font-size: 40px;
} .form-tracker{margin-top:50px; margin-bottom:50px;} .tracking-border{position: absolute;
/* left: 151px; */
width: 92px;
right: -42px;
top: 24px;}


@media screen and (max-width: 998px) {
.tracking-border {
    position: absolute;
    /* left: 151px; */
    width: 67px;
    right: -32px;
    top: 20px;
}
}

@media screen and (max-width: 768px) {
.icon-tracking i {
    font-size: 28px;
    transform: rotate(88deg);
}
.margin-manage{margin-bottom: -7px;
    margin-top: -1px;}
.tracking-border {
    /* position: absolute; */
    /* left: 151px; */
    width: 0px;
    height: 50px;
    right: -32px;
    top: 20px;
    display: inline-block;
    position: initial;

}
}
</style>
<div class="shadow">
<div class="row">
<form class="form-inline col-md-6 offset-4 form-tracker">
<div class="form-group mx-sm-3 mb-2">
<input type="text" class="form-control text-uppercase" id="status" placeholder="Enter refrence id">
</div>
<button type="button" onclick="return getStatus();" class="btn btn-primary mb-2">Track Status</button>
</form>
</div>
<span id="trackstatus"></span>
<?php include "../footer.php" ?>
</body>

<?php include "../script.php" ?>

<script>
function getStatus(){
var status=$('#status').val();
if(status.trim()==''){
$('#trackstatus').html('<div class="col-md-3 offset-md-4 alert alert-danger alert-dismissible fade show" role="alert">Please enter refrence id <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><br>');
}else{
$('#loadergif').fadeIn();
$.ajax({
method:'POST',
url:'<?php echo RE_EN_PATH; ?>load_tracking.php',
data:{'status':status},
success:function(gettracking){
$('#trackstatus').html(gettracking);
$('#loadergif').fadeOut();

}
})
}
}
</script>
</html>

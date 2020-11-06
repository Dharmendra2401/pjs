<?php
include "../config/config.php";
$state=$_POST['state'];
if ($_SESSION['user_mid']) {
	$userid=$_SESSION['user_mid'];
	$getcity=mysqli_query($con,"SELECT state,city,pincode FROM `address` WHERE `member_id`='$userid'");
	$show_user_city=mysqli_fetch_array($getcity);

?>
<select class="custom-select ucity" id="city" onchange="return getpincodes();" name="city">
<option value="<?php echo $show_user_city['city'];?>" selected><?php echo $show_user_city['city'];?></option>
<?php }
else{
?>
<select class="custom-select ucity" id="city" onchange="return getpincodes();" name="city">
<option value="" selected>Select</option>
<?php 
}
?>


<?php  


if($state!=''){

$selectcity=mysqli_query($con,"select state,city,pincode from states_city_country where state='".$state."' GROUP BY city ");

while($showcity=mysqli_fetch_array($selectcity)){
?>
<option value="<?php echo $showcity['city']; ?>"><?php echo $showcity['city']; ?> </option>
<?php } } ?>
</select>
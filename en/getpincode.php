<?php
include "../config/config.php";
$city=$_POST['city'];
if ($_SESSION['user_mid']) {
	$userid=$_SESSION['user_mid'];
	$getcity=mysqli_query($con,"SELECT state,city,pincode FROM `address` WHERE `member_id`='$userid'");
	$show_user_city=mysqli_fetch_array($getcity);
?>
<select class="custom-select upincode" id="pincodes" name="pincode" onchange="return getArea();" >
<option value="<?php echo $show_user_city['pincode'];?>" selected><?php echo $show_user_city['pincode'];?></option>
<?php }
else{
?>
<select class="custom-select upincode" id="pincodes" name="pincode" onchange="return getArea();" >
<option value="" selected>Select</option>
<?php 
}
?>
<?php  
if($city!=''){
$selectcity=mysqli_query($con,"select city,postoffice,pincode from states_city_country where city='".$city."' GROUP BY pincode order by pincode asc");
while($showcity=mysqli_fetch_array($selectcity)){
?>
<option value="<?php echo $showcity['pincode']; ?>"><?php echo $showcity['pincode'];?> </option>
<?php } } ?>
</select>


<?php
include "../config/config.php";
$pincode=$_POST['pincode'];
if ($_SESSION['user_mid']) {
	$userid=$_SESSION['user_mid'];
	$getcity=mysqli_query($con,"SELECT state,city,pincode FROM `address` WHERE `member_id`='$userid'");
	$show_user_city=mysqli_fetch_array($getcity);
	$pincode12=$show_user_city['pincode'];
	$selectarea12=mysqli_query($con,"select postoffice from states_city_country where pincode='".$pincode12."'" );
$show_user_city_selectarea12=mysqli_fetch_array($selectarea12);
?>
<select class="custom-select" id="area" name="area">
<option value="<?php echo $show_user_city_selectarea12['postoffice'];?>" selected><?php echo  $show_user_city_selectarea12['postoffice'];
?></option>
<?php }
else{
?>
<select class="custom-select" id="area" name="area">
<option value="" selected>Select Area</option>
<?php 
}

if($pincode!=''){
$selectarea=mysqli_query($con,"select state,city,pincode,postoffice from states_city_country where pincode='".$pincode."' GROUP BY postoffice" );
while($showareas=mysqli_fetch_array($selectarea)){
?>
<option value="<?php echo $showareas['postoffice']; ?>"><?php echo $showareas['postoffice']; ?> </option>
<?php } } ?>
</select>
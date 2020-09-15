<?php
include "../config/config.php";
$state=$_POST['state'];
?>
<select class="custom-select ucity" id="city" onchange="return getpincodes();" name="city">
<option value="" selected>Select City</option>

<?php  


if($state!=''){

$selectcity=mysqli_query($con,"select state,city,pincode from states_city_country where state='".$state."' GROUP BY city ");

while($showcity=mysqli_fetch_array($selectcity)){
?>
<option value="<?php echo $showcity['city']; ?>"><?php echo $showcity['city']; ?> </option>
<?php } } ?>
</select>
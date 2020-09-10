<?php
include "../config/config.php";
$city=$_POST['city'];

?>
<select class="custom-select" id="pincodes" name="pincode" onchange="return getArea();" >
<option value="" selected>Select pincode</option>

<?php  
if($city!=''){
$selectcity=mysqli_query($con,"select city,postoffice,pincode from states_city_country where city='".$city."' GROUP BY pincode order by pincode asc");
while($showcity=mysqli_fetch_array($selectcity)){
?>
<option value="<?php echo $showcity['pincode']; ?>"><?php echo $showcity['pincode'];?> </option>
<?php } } ?>
</select>


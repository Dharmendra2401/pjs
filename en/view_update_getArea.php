<?php
include "../config/config.php";
$pincode=$_POST['pincode'];
?>
<select class="custom-select" id="area" name="area">
<option value="" selected>Select Area</option>

<?php  


if($pincode!=''){
$selectarea=mysqli_query($con,"select state,city,pincode,postoffice from states_city_country where pincode='".$pincode."' GROUP BY postoffice" );
while($showareas=mysqli_fetch_array($selectarea)){
?>
<option value="<?php echo $showareas['postoffice']; ?>"><?php echo $showareas['postoffice']; ?> </option>
<?php } } ?>
</select>
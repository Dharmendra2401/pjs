<?php
include "../config/config.php";
$city=$_POST['city'];

?>
 <select class="custom-select" id="pincode" name="pincode" >
								          <option value="" selected>Select area (pincode)</option>
                                         
                                          <?php  

                                         
                                          if($city!=''){
                                              
                                              $selectcity=mysqli_query($con,"select city,postoffice,pincode from states_city_country where city='".$city."' GROUP BY postoffice ");
                                              while($showcity=mysqli_fetch_array($selectcity)){
                                          ?>
                                          <option value="<?php echo $showcity['postoffice'].' ('.$showcity['pincode']; ?>)"><?php echo $showcity['postoffice']; ?> (<?php echo $showcity['pincode']; ?>) </option>
                                          <?php } } ?>
								         </select>


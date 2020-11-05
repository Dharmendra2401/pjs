<?php
include "../config/config.php";
echo $state=$_POST['state'];
?>
 <select class="custom-select ustate" id="citytwo" >
								          <option value="" selected>Select</option>
                                         
                                          <?php  

                                         
                                          if($state!=''){
                                             
                                              $selectcity=mysqli_query($con,"select state,city,pincode from states_city_country where state='".$state."' GROUP BY city ");
                                             
                                              while($showcity=mysqli_fetch_array($selectcity)){
                                          ?>
                                          <option value="<?php echo $showcity['city']; ?>"><?php echo $showcity['city']; ?> </option>
                                          <?php } } ?>
								         </select>


								<?php  require_once("../config/config.php"); ?>
									<div class="row tree-srch-list">
                                <style type="text/css">a.card_a,a.card_a:hover{
                                	color: #2c2c2c;
                                }</style>
								<?php
							 $current_user=$_SESSION['user_mid'];
							 $search_value=$_REQUEST['search'];
										if ($search_value=='') {
											?>
									<div class="text-center"><td valign="top" colspan="12" class="dataTables_empty" align="center">No records found</td></div>
											<?php 
										}
										else{
								//  include_once 'family_search_member.php';  
									//
										
									$query ="SELECT * FROM `member` WHERE (`first_name` LIKE '%$search_value%' or `member_id` LIKE '%$search_value%') AND member_id NOT IN (SELECT MEM.member_id FROM `relationship` RS INNER JOIN `member` MEM ON RS.reference_member_Id = MEM.member_id WHERE RS.member_id = '$current_user' UNION
SELECT MEM.MEMBER_ID FROM `relationship` RS INNER JOIN `member` MEM ON RS.member_id = MEM.member_id WHERE RS.reference_member_Id = '$current_user') AND member_id !='$current_user'  ORDER BY member_id"; 

									//if($page==1){ $count=1;}else{$count=$page*10-10+1;}
									//$rest = mysqli_query($con,"SELECT * FROM ".$stat);
									

									$rs = mysqli_query($con,$query) or die(mysqli_error($con));
									$row_count=mysqli_num_rows($rs);

									if($row_count>0){
									while($row=mysqli_fetch_assoc($rs)){      
									?>
										<div class="col-md-12">
											<a href="<?php echo RE_EN_PATH; ?>user_detail.php?token=<?php echo base64_encode($row['member_id']);?>" class="card_a">
												<ul class="list-unstyled list-inline list-card">
													<li class="list-inline-item">
														<?php 

														 $getimg=mysqli_fetch_array(mysqli_query($con,"select display_pic,id from key_member_id where id='".$row['member_id']."'"));
														
														?>
														<img class="tree-user-img" src="<?php echo RE_HOME_PATH.$getimg['display_pic'] ?>">
													</li>
													<li class="list-inline-item searchoption">
														<p><?php echo $row['first_name'].' '. $row['middle_name'].' '.$row['last_name']; ?></p>
														<p><?php echo $row['member_id']; ?></p>
													</li>

												</ul> 
											</a>
											<ul <?php if($row['Life_status']=='D'){ ?> style="position: absolute;top:50%;right: 8%;" <?php } else{ ?>style="position: relative;top:50%;right: 2px;"<?php } ?>>
										<li class="float-right" style="list-style: none;">
														<?php if($row['Life_status']=='D'){?>
														<span style='font-size:10px;'>
				 		<i class='fas fa-flag text-danger'></i>
				 		<strong>: स्वर्गीय </strong>
				 	</span>
													<?php } else {?>
														<i class="fas fa-user-plus add-member-icon" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $row['member_id']; ?>" data-gender="<?php echo $row['gender'];?>" data-name="<?php echo $fullname=$row['first_name'].' '. $row['middle_name'].' '.$row['last_name'];?>"></i>
														<input type="hidden" referenc-id="<?php echo $row['member_id'];?>" gender="<?php echo $row['gender'];?>">
													<?php  } ?>
													</li>
											</ul>
										</div>

									<?php	 }

								}
									else{ 
									?>

									<div class="text-center"><td valign="top" colspan="12" class="dataTables_empty" align="center">No records found</td></div>

									<?php }
											}					 
									
								?>
				        </div>

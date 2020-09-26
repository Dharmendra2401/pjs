<?php
include 'tree_structure.php';
?>
<?php


 $current_user_data=current_user_data();
$current_user=mysqli_fetch_assoc($current_user_data);


$result=friend_request_status12();

	if(mysqli_num_rows($result)>0) {
		while( $row1 = mysqli_fetch_assoc($result)){
 ?>

			<div class="card mb-2">
				<div class="card-body">
					<div class="row">
							<div class="col-md-2">
								<?php //echo $row1['dead_p_pic'];?>
									<img width="50" src="<?php 
									 if($row1['display_pic'])
									{
										echo $row1['display_pic'];
									}
										elseif($row1['dead_p_pic']){
											echo $row1['dead_p_pic'];
										} else 
										{
											echo 'http//';
											} ?>">
							</div>
							<div class="col-md-10">
									 <span>Name: </span>
										<span><?php if(isset($row1['name'])){echo $row1['name']; } else{echo $row1['dp_name']; }?></span><br>
										<span><?php 
												if ($row1['relation_type']=='Father') {
													if ($row1['request_side_user']=='from-current-user') {
														echo $row1['relation_type'];
													}
													else{
														if ($current_user['gender']=='M' && $row1['gender']=='M') {
														 echo "SON";
														}
														else{
														echo "Daughter";
													}
													}
												}      
												if ($row1['relation_type']=='Mother') {
													if ($row1['request_side_user']=='from-current-user') {
														echo $row1['relation_type'];
													}
													else{
														if ($current_user['gender']=='F' && $row1['gender']=='M') {
														 echo "Son";
														}
														else{
														echo "Daughter";
													}
													}
												}
												if ($row1['relation_type']=='Son') {
													if ($row1['request_side_user']=='from-current-user') {
														echo $row1['relation_type'];
													}
													else{
														if ($current_user['gender']=='M' && $row1['gender']=='M') {
														 echo "Father";
														}
														else{
														echo "Mother";
													}
													}
												}
												if ($row1['relation_type']=='Daughter') {
													if ($row1['request_side_user']=='from-current-user') {
														echo $row1['relation_type'];
													}
													else{
														if ($current_user['gender']=='F' && $row1['gender']=='M') {
														 echo "Father";
														}
														else{
														echo "Mother";
													}
													}
												}
												if ($row1['relation_type']=='Husband') {
													if ($row1['request_side_user']=='from-current-user') {
														echo $row1['relation_type'];
													}
													else{
														if ($current_user['gender']=='F' && $row1['gender']=='M') {
														 echo "Husband";
														}
														else{
														echo "Wife";
													}
													}
												}
												if ($row1['relation_type']=='Wife') {
													if ($row1['request_side_user']=='from-current-user') {
														echo $row1['relation_type'];
													}
													else{
														if ($current_user['gender']=='F' && $row1['gender']=='M') {
														 echo "Husband";
														}
														else{
														echo "Wife";
													}
													}
												}
												if ($row1['relation_type']=='Brother') {
													if ($row1['request_side_user']=='from-current-user') {
														echo $row1['relation_type'];
													}
													else{
														if ($current_user['gender']=='M' && $row1['gender']=='M') {
														 echo "Brother";
														}
														else{
														echo "Sister";
													}
													}
												}
												if ($row1['relation_type']=='Sister') {
													if ($row1['request_side_user']=='from-current-user') {
														echo $row1['relation_type'];
													}
													else{
														if ($current_user['gender']=='F' && $row1['gender']=='F') {
														 echo "Sister";
														}
														else{
														echo "Brother";
													}
													}
												}         
												if ($row1['relation_type']=='Grandfather') {
													if ($row1['request_side_user']=='from-current-user') {
														echo $row1['relation_type'];
													}
													else{
														if ($current_user['gender']=='M' && $row1['gender']=='M') {
														 echo "GrandSon";
														}
														else{
														echo "GrandDaughter";
													}
													}
												}
												if ($row1['relation_type']=='Grandmother') {
													if ($row1['request_side_user']=='from-current-user') {
														echo $row1['relation_type'];
													}
													else{
														if ($current_user['gender']=='F' && $row1['gender']=='F') {
														 echo "GrandDaughter";
														}
														else{
														echo "GrandSon";
													}
													}
												}
										//echo $row1['Relation_Type'];?></span>
										<!-- <span class="badge badge-primary float-right"><?php// echo $row1['ACTIVE_STATUS'];?></span> -->
									 <?php 
											if ($row1['request_side_user']=='from-current-user' && $row1['member_request_status']=='N') {
											 ?>
												<span class="badge badge-primary float-right">Request Sent</span>
												<?php
											}
											elseif ($row1['request_side_user']=='to-user' && $row1['member_request_status']=='N') {
											 ?>
												<span class="badge badge-primary float-right approve" id="<?php echo $row1['reference_member_Id'];?>">Accept It</span>
											 <?php
											}
											else{
												?>
													<span class="badge badge-primary float-right">member</span>
												<?php
											}
											if(isset($row1['Life_status'])){?>
											 <?php  if($row1['Life_status']=='L'){
												echo "<br><span class='badge badge-primary float-right ml-1'>Alive</span>";
											}
												else{
													echo "<br><span class='badge badge-danger float-right ml-1'>Dead</span>";
												} ?>
											<?php }
											else{ ?><br>
											 <span class="badge badge-danger float-right"><?php echo "Dead";
												?></span>
											<?php 
											echo "<br><span class='badge badge-danger float-right ml-1'>".$row1['d_dod']."</span>";
										}
										 ?> 
							</div>
					</div>
				</div> 

			</div>

<?php }
} ?>
<script type="text/javascript">




</script>


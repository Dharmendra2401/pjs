<?php
include 'tree_structure.php';
?>
<?php

$current_user_data=user_detail_data($idd);
$current_user=mysqli_fetch_assoc($current_user_data);


$result=user_detail_friend_request($idd);

	if(mysqli_num_rows($result)>0) {
		while( $row1 = mysqli_fetch_assoc($result)){
 ?>

			<div class="card mb-2 tree-card">
				<div class="card-body">
					<div class="row">
							<div class="col-md-10">
								<?php //echo $row1['dead_p_pic'];?>
									<img class="d-block" width="50" src="<?php 
									 if($row1['display_pic'])
									{
										echo RE_HOME_PATH.$row1['display_pic'];
									}
										elseif($row1['dead_p_pic']){
											echo RE_HOME_PATH.$row1['dead_p_pic'];
										} else 
										{
											echo 'http//';
											} ?>">

							   <strong>Name: </strong>
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
							</div>
							<div class="col-md-2">
																	<?php	if(isset($row1['Life_status'])){
											   if($row1['Life_status']=='L'){
												echo "<br><span class='badge badge-primary float-right ml-1'></span>";
											}
												else{
													echo "<br>
													<span class='death-flag'><i class='fas fa-flag' style='margin-right: 4px;'></i><strong style='color: #2c2c2c;'>: स्वर्गीय </strong></span>";
												} 
											 }
											else{ ?><br>
											 
											 	<span class='death-flag'><i class='fas fa-flag' style='margin-right: 4px;'></i><strong style='color: #2c2c2c;'>: स्वर्गीय </strong></span>
												
											<?php 
											echo "<br><span class='badge badge-danger float-right ml-1'>".$row1['d_dod']."</span>";
										}
										 ?> 
<!-- 									 <?php 
											if ($row1['request_side_user']=='from-current-user' && $row1['member_request_status']=='N') {
											 ?>
												<span class="badge badge-primary float-right p-1">Request Sent</span>
												<?php
											}
											elseif ($row1['request_side_user']=='to-user' && $row1['member_request_status']=='N') {
											 ?>
												<span class="badge badge-primary float-right approve p-1" id="<?php echo $row1['reference_member_Id'];?>">Accept It</span>
											 <?php
											}
											else{
												?>
													<span class="badge badge-primary float-right p-1">member</span>
												<?php
											}?> -->
	
							</div>
					</div>
				</div> 

			</div>

<?php }
} ?>
<script type="text/javascript">

</script>

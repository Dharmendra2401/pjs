<?php
include 'tree_structure.php';
?>
<?php

 
 $current_user_data=current_user_data();
$current_user=mysqli_fetch_assoc($current_user_data);


$result=friend_request_status12();

	if(mysqli_num_rows($result)>0) {
		$counter=0;
		while( $row1 = mysqli_fetch_assoc($result)){
 ?>

			<div class="card mb-2 tree-card" data-count="<?php echo $counter;?>">
				<div class="card-body">
					
					<div class="row">
						<a href="<?php echo RE_EN_PATH; ?>user_detail.php?token=<?php echo base64_encode($row1['reference_member_Id']);?>" style="width: 82%;float: left;color: #2c2c2c;">
							<div class="col-md-10">
								<?php //echo $row1['dead_p_pic'];?>
									<img class="family-profile-img" src="<?php 
									 if($row1['display_pic'])
									{
										echo RE_HOME_PATH.$row1['display_pic'];
									}
										elseif($row1['dead_p_pic']){
											if(isset($row1['dead_p_pic'])){
												echo RE_HOME_PATH.$row1['dead_p_pic'];
											}
											else{
													echo RE_HOME_PATH.'/images/default_user/dummy.png';
											}
										} else 
										{
											echo RE_HOME_PATH.'/images/default_user/dummy.png';
											} ?>">

							            <ul class="list-unstyled family-info">
										<li ><?php if(isset($row1['name'])){echo $row1['name']." ".$row1['last_name']; } else{echo $row1['dp_name']; }?></li>
										<li><?php 
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

										//echo $row1['Relation_Type'];?></li>
											<li><?php echo $row1['reference_member_Id'];?></li>
									            </ul>
										<!-- <span class="badge badge-primary float-right"><?php// echo $row1['ACTIVE_STATUS'];?></span> -->				
							</div>
							</a>
							<div class="col-md-2">
																	<?php	if(isset($row1['Life_status'])){
											   if($row1['Life_status']=='L'){
												echo "<span class='badge badge-primary float-right ml-1'></span>";
											}
												else{
													echo "
													<span style='font-size:10px;'>
				 		<i class='fas fa-flag text-danger'></i>
				 		<strong>: ???????????????????????? </strong>
				 	</span>";
												} 
											 }
											else{ ?><br>
											 
											 	<span style="font-size: 10px;">
				 		<i class='fas fa-flag text-danger'></i>
				 		<strong>: ???????????????????????? </strong>
				 	</span>
												
											<?php 
											echo "<span class='badge badge-danger float-right ml-1 mb-1'>".$row1['d_dod']."</span>";
										}
										 ?> 
									 <?php 
											if ($row1['request_side_user']=='from-current-user' && $row1['member_request_status']=='N') {
											 ?>
												<span class="badge badge-primary float-right p-1">Request Sent</span>
												<?php
											}
											elseif ($row1['request_side_user']=='to-user' && $row1['member_request_status']=='N') {
											 ?>
												<span class="badge badge-primary float-right approve p-1" id="<?php echo $row1['reference_member_Id'];?>">Accept</span>
											 <?php
											}
											else{
												?>
													<!-- <span class="badge badge-primary float-right p-1">member</span> -->
												<?php
											}?>
								
												<i class="far fa-trash-alt btnrequest_relation_delete mt-2" id="<?php echo $current_user['member_id']; ?>" data-referenceid="<?php echo $row1['reference_member_Id'];?>"  <?php if (!isset($row1['reference_member_Id'])) {
												 ?>data-relationshiptype="<?php echo $row1['relation_type']; ?>" <?php } ?> style="cursor:pointer;"></i>
											
							</div>
						
					</div>
				</div> 

			</div>
 
<?php $counter++; }
} ?>
<script type="text/javascript">

</script>
<style type="text/css">
	.tree-card .card-body .row a:hover,a.card_a:hover{
		text-decoration: none;
	}
</style>

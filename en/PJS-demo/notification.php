<?php
//fetch.php;
include '../../config/config.php';
if(isset($_POST["view"])){
	//login user notification
	if(isset($_SESSION['user_mid'])){
		$current_user_id=$_SESSION['user_mid'];
		if($_POST["view"] != ''){
			$update_query = "UPDATE general_notification SET seen_or_unseen_status=1 WHERE seen_or_unseen_status=0  AND member_id='$current_user_id'";
			mysqli_query($con, $update_query);
		}

		// $query = "SELECT * FROM general_notification where member_id='MID0001'  and seen_or_unseen_status=0 ORDER BY id DESC LIMIT 5";

		$query = "SELECT gn.notification_type,mem.first_name,mem.last_name,km.display_pic,gn.reference_member_id  FROM general_notification gn INNER JOIN member mem ON gn.reference_member_id=mem.member_id INNER JOIN key_member_id km ON gn.reference_member_id=km.id where gn.member_id='$current_user_id' ORDER BY gn.id DESC";

		$result = mysqli_query($con, $query);
		$output = '';

		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
				if ($row['notification_type']=='request_sent') {
					$text=" sent you member request";
				}
				if ($row['notification_type']=='accept_request') {
					$text=" Accept your member request";
				}
				if ($row['notification_type']=='profile_viewed') {
					$text=" viewd your profile";
				}

				$output .='<ul class="list-unstyled list-inline list-card w-100 pt-0 pb-0" style="width:100%;box-shadow: none !important;">
					<li class="list-inline-item w-25"  style="width:25%;">
						<a href="'.RE_EN_PATH.'user_detail.php?token='.base64_encode($row['reference_member_id']).'"><img class="tree-user-img" src="'.RE_HOME_PATH.$row['display_pic'].'" style="border-radius:50%;"></a>
					</li>
					<li class="list-inline-item searchoption w-69"  style="width:69%;">
						<a href="'.RE_EN_PATH.'user_detail.php?token='.base64_encode($row['reference_member_id']).'"><p><strong>'.$row['first_name']." ".$row['last_name'].'</strong></a>'.$text.'</p>
					</li>
					 <li class="divider"></li>
					 <hr>
				</ul> ';

			}
		}
		else{
			$output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
		}

		$query_1 = "SELECT * FROM general_notification WHERE member_id='$current_user_id'  and seen_or_unseen_status=0";
		$result_1 = mysqli_query($con, $query_1);
		$count = mysqli_num_rows($result_1);
		$data = array(
		'notification'   => $output,
		'unseen_notification' => $count
		);
		echo json_encode($data);
	}


//end user motification
//admin
	if(isset($_SESSION['admin_id'])){
		$admin_id=$_SESSION['admin_id'];
		if($_POST["view"] != ''){
			$update_query = "UPDATE general_notification SET seen_or_unseen_status=1 WHERE seen_or_unseen_status=0  AND member_type='admin'";
			mysqli_query($con, $update_query);
		}

		// $query = "SELECT * FROM general_notification where member_id='MID0001'  and seen_or_unseen_status=0 ORDER BY id DESC LIMIT 5";

		$query = "SELECT gn.notification_type,mem.first_name,mem.last_name,km.display_pic FROM general_notification gn INNER JOIN member mem ON gn.reference_member_id=mem.member_id INNER JOIN key_member_id km ON gn.reference_member_id=km.id where gn.member_type='admin' ORDER BY gn.id DESC";

		$result = mysqli_query($con, $query);
		$output = '';

		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
				if ($row['notification_type']=='feedback') {
				 $text=" sent you feedback";
				}
				// if ($row['notification_type']=='accept_request') {
				//  $text=" Accept your member request";
				// }
				// if ($row['notification_type']=='profile_viewed') {
				//  $text=" viewd your profile";
				// }

			$output .='<ul class="list-unstyled list-inline list-card w-100 pt-0 pb-0" style="width:100%;box-shadow: none !important;display: flex;">
				<li class="list-inline-item w-25"  style="width:25%;">
					<a href="'.RE_HOME_SUPERADMIN.'feedback.php"><img class="tree-user-img" src="'.RE_HOME_PATH.$row['display_pic'].'" style="border-radius:50%;"></a>
				</li>
				<li class="list-inline-item searchoption w-69"  style="width:69%;">
					<a href="'.RE_HOME_SUPERADMIN.'feedback.php"><p><strong>'.$row['first_name']." ".$row['last_name'].'</strong></a>'.$text.'</p>
				</li>
				 <li class="divider"></li>
				 <hr>
			</ul> ';
			}
		}
		else{
			$output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
		}

		$query_1 = "SELECT * FROM general_notification WHERE member_type='admin'  and seen_or_unseen_status=0";
		$result_1 = mysqli_query($con, $query_1);
		$count = mysqli_num_rows($result_1);
		$data = array(
		'notification'   => $output,
		'unseen_notification' => $count
		);
		echo json_encode($data);
	}



}
?>
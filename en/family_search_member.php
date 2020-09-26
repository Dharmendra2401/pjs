<?php  

//require_once("../config/config.php"); 
echo $_POST['search_value'];exit();
$statu='';
$search_value=$_REQUEST['search_value'];


//$startpoint = ($page * $limit) - $limit;
$query = "SELECT * FROM `user` WHERE (`first_name` LIKE '%$search_value%' or `MEMBER_ID` LIKE '%$search_value%') AND MEMBER_ID NOT IN (SELECT MEM.MEMBER_ID FROM `dwr_vts_t.dbo.relationship` RS INNER JOIN `user` MEM ON RS.Reference_Member_Id = MEM.MEMBER_ID WHERE RS.Member_Id = '1001' UNION
SELECT MEM.MEMBER_ID FROM `dwr_vts_t.dbo.relationship` RS INNER JOIN `user` MEM ON RS.Member_Id = MEM.MEMBER_ID WHERE RS.Reference_Member_Id = '1001') AND MEMBER_ID !='1001' AND Life_status ='L' ORDER BY MEMBER_ID"; 

echo $query;exit;
//if($page==1){ $count=1;}else{$count=$page*10-10+1;}
$rest = mysqli_query($con,"SELECT * FROM ".$stat);
$row_count=mysqli_num_rows($rest);

$rs = mysqli_query($con,$query);
$count=1;
while($row=mysqli_fetch_assoc($rs)){			
?>
<div class="row mt-3">
	<div class="col-12">
		<ul class="list-unstyled list-inline">
			<li class="list-inline-item">
		        <?php 
		        
		        $getimg=mysqli_fetch_array(mysqli_query($con,"select display_pic,id from key_member_id where id='".$row['MEMBER_ID']."'"))
		        ?>
				<img class="user-list-img" src="<?php echo RE_HOME_PATH.''. $getimg['display_pic']; ?>">
			</li>
			<li class="list-inline-item searchoption">
				<p><?php echo $row['first_name'].' '. $row['middle_name'].' '.$row['last_name']; ?></p>
		        <p><?php echo $row['MEMBER_ID']; ?></p>
			</li>
			<li class="list-inline-item float-right">
				<i class="fas fa-user-plus add-member-icon" data-toggle="modal" data-target="#add-relation"></i>
			</li>
		</ul>	
	</div>
</div>

<?php $count++; }

if ($row_count>3){

?>
<a href="<?php   ?>">see more result</a>

<?php

}

if($row_count<=0){
?>

<div class="text-center"><td valign="top" colspan="12" class="dataTables_empty" align="center">No records found</td></div>

<?php }?>




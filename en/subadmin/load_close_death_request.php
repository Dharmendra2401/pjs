<?php  require_once("../../config/config.php"); ?>
<table id="closedEntries" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>S.no.</th>
			<th>Member Name</th>
			<th>MID</th>
			<th>Request Type</th>
			<th>View Details</th>
		</tr>
	</thead>
	<tbody>

	<?php
	$stat='';
	$statu='';

	if($_REQUEST['statetwo']!='')
	{$statu.= 'and state LIKE "'.$_REQUEST['statetwo'].'"';}

	if($_REQUEST['citytwo']!='')
	{$statu.= 'and city LIKE "'.$_REQUEST['citytwo'].'"';}

	if($_REQUEST['submitdatetwo']!='')
	{$statu.= 'and record_inserted_dttm LIKE "%'.date('Y-m-d',strtotime($_REQUEST['submitdatetwo'])).'%"';}

	if($_REQUEST['refrenceidtwo']!='')
	{$statu.= 'and request_id LIKE "%'.trim($_REQUEST['refrenceidtwo']).'%"';}



	if(isset($_REQUEST['ustatus']))
	{$statu.= 'and status LIKE "'.$_REQUEST['ustatus'].'%" ';}
	$stat="member_request where 1=1 and status_of_request ='N' or status_of_request ='R' and type_of_request='death' $statu order by member_id desc";
	$page = (int) (!isset($_REQUEST["page"]) ? 1 : $_REQUEST["page"]);
	$limit = (int) (!isset($_REQUEST["pagesize"]) ? 10 : $_REQUEST["pagesize"]);
	$startpoint = ($page * $limit) - $limit;
	$query = "SELECT * FROM ".$stat." LIMIT ".$startpoint." , ".$limit; 
	if($page==1){ $count=1;}else{$count=$page*10-10+1;}
	$rest = mysqli_query($con,"SELECT * FROM ".$stat);
	$row_count=mysqli_num_rows($rest);
	$rs = mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($rs)){
	$currentdate=$row['record_inserted_dttm'];
	$member_id1=$row['member_id'];
	$query12="SELECT * FROM `member` WHERE `member_id`='$member_id1' ";
	$fire=mysqli_query($con,$query12);
	$row1=mysqli_fetch_assoc($fire);


	?>
		<tr>
			<td><?php echo $count;  ?></td>
			<td><?php echo $row['member_id'] ; ?></td>
			<td><?php echo $row1['first_name'].' '.$row1['last_name'] ?></td>
			<td><?php  echo $row['type_of_request'] ;	?></td>
			<td><a class="btn btn-success btn-sm" href="<?php echo RE_HOME_ADMIN;?>death_user_detail.php?id=<?php echo base64_encode($row['member_id']);?>">Show Details</a></td>
		</tr>
		<?php $count++; }
		if($row_count<=0){
		?>

		<tr class="odd"><td valign="top" colspan="12" class="dataTables_empty" align="center">No records found</td></tr>

		<?php }?>
	</tbody>
</table>
<?php

$txtpage= paginationjquery($con,$stat,$limit,$page,"?","");					   

echo "<table width='100%'><tr><td  style='padding:3px;'><div class='dataTables_paginate paging_bootstrap'>".$txtpage."</div></td></tr></table>";

?>
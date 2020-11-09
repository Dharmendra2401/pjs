<?php  require_once("../../config/config.php"); ?>
<table id="openEntries" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<th>S.no.</th>
			<th>Member Name</th>
			<th>MID</th>
			<th>Request Type</th>
			<th>View Details</th>
		</tr>
	</thead>

<?php
$stat='';
$statu='';
if($_REQUEST['submitdate']!='')
{$statu.= 'and record_inserted_dttm LIKE "%'.date('Y-m-d',strtotime($_REQUEST['submitdate'])).'%"';}

if($_REQUEST['refrenceidone']!='')
{$statu.= 'and new_request LIKE "'.trim($_REQUEST['refrenceidone']).'"';}

if(isset($_REQUEST['ustatus']))
{$statu.= 'and status LIKE "'.$_REQUEST['ustatus'].'%" ';}
$stat="member_request where 1=1 and (status_of_request='Y') and type_of_request='death' $statu ";
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

?>
	<tbody>
		<tr>
			<td><?php echo $count;  ?></td>
			<td><?php $getname=mysqli_fetch_array(mysqli_query($con,'select first_name,middle_name,last_name from member where member_id ="'.$row['member_id'].'"  ')); echo $getname['first_name'].' '.$getname['last_name'] ; ?></td> 
			<td><?php echo $row['member_id'] ; ?></td>
			<td><?php echo $row['type_of_request'] ; ?></td>
			<td><a class="btn btn-success btn-sm" href="<?php echo RE_HOME_ADMIN;?>update_death_request.php?id=<?php echo base64_encode($row['id']);?>">Show Details</a> <?php if($row['status_of_request']=='R'){ ?><a href="#"data-toggle="modal" data-target="#viewreason" onclick="return viewreason('<?php echo $row['reason_of_rejection'];  ?>')" class="btn btn-primary btn-sm" alt="View the reason" title="View the reason"><i class="fa fa-eye"></i></a> <?php } ?></td>
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
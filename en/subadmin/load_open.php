<?php  require_once("../../config/config.php"); ?>

<div class="table-responsive">
<table id="dynamic-table" class="table table-striped table-bordered short2" style="width:100%" >
<thead>
<tr class="table-headings">
<!--<th width="2%">S.No</th>-->
<th>S.no.</th>
<th>Refrence Id</th>
<th>Requested User Name</th>
<th>City/Town/Village</th>
<th>Requested Date</th>
<th>Status</th>
<th>View Details</th>
</tr>
</thead>

<tbody>


<?php
$stat='';
$statu='';

if($_REQUEST['state']!='')
{$statu.= 'and state LIKE "'.$_REQUEST['state'].'"';}

if($_REQUEST['city']!='')
{$statu.= 'and City LIKE "'.$_REQUEST['city'].'"';}

if($_REQUEST['submitdate']!='')
{$statu.= 'and record_inserted_dttm LIKE "%'.date('Y-m-d',strtotime($_REQUEST['submitdate'])).'%"';}

if($_REQUEST['refrenceidone']!='')
{$statu.= 'and request_id LIKE "%'.trim($_REQUEST['refrenceidone']).'%"';}


if($_REQUEST['status']!='')
{$statu.= 'and active_status LIKE "'.$_REQUEST['status'].'%" ';}
$stat="staging_approval where 1=1 and (active_status='Y' or active_status='R' or active_status='U') $statu order by request_id desc";
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

<tr>
<td><?php echo $count;  ?></td>
<td><?php echo $row['request_id'] ; ?></td>
<td><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'] ?></td>
<td><?php  if ($row['city']!=''){echo $row['city'];}else{echo "NA";} ?></td>
<td><?php if($currentdate!=''){ echo date("d/m/Y" ,strtotime($currentdate )); } else{ '';}?></td>
<td><?php if($row['active_status']=='Y'){echo "<label class='bg-success text-white btn-sm'>New</label>";} if($row['active_status']=='R'){echo "<label class='bg-warning text-white btn-sm'>Rejected</label>";} if($row['active_status']=='U'){echo "<label class='bg-info text-white btn-sm'>Updated</label>";} ?></td>
<td>   <!-- <a class="btn btn-success btn-sm" href="<?php echo RE_EN_PATH;?>userupdate/update.php?token=<?php echo base64_encode($row['request_id']);?>">Update User</a> -->   <a class="btn btn-success btn-sm" href="<?php echo RE_HOME_ADMIN;?>reg_user_detail.php?id=<?php echo base64_encode($row['request_id']);?>">Show Details</a> <?php if($row['active_status']=='R'){ ?><a href="#"data-toggle="modal" data-target="#viewreason" onclick="return viewreason('<?php echo $row['reason_of_rejection'];  ?>')" class="btn btn-primary btn-sm" alt="View the reason" title="View the reason"><i class="fa fa-eye"></i></a> <?php } ?></td> 
</tr>
<?php $count++; }
if($row_count<=0){
?>

<tr class="odd"><td valign="top" colspan="12" class="dataTables_empty" align="center">No records found</td></tr>

<?php }?>

</tbody>

</table>
</div>
<div>

<?php

$txtpage= paginationjquery($con,$stat,$limit,$page,"?","");					   

echo "<table width='100%'><tr><td  style='padding:3px;'><div class='dataTables_paginate paging_bootstrap'>".$txtpage."</div></td></tr></table>";

?>
</div>
</div>  

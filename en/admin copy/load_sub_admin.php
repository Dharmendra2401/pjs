<?php  require_once("../../config/config.php"); ?>

<div class="table-responsive">
<input type="hidden" id="page" value="<?php echo $_REQUEST["page"]; ?>" name="page">
<table id="dynamic-table" class="table table-striped table-bordered shortable" >
<thead>
<tr class="table-headings">
<!--<th width="2%">S.No</th>-->
<th>Refrence Id</th>
<th>Requested User Name</th>
<th>City/Town/Village</th>
<th>Submitted Date</th>
<th>Active Status</th>
<th>Action</th>
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

if($_REQUEST['searchtxt']!='')
{$statu.= 'and request_id LIKE "%'.trim($_REQUEST['searchtxt']).'%"';}
if($_REQUEST['ustatus']!='')
{$statu.= 'and active_status LIKE "%'.trim($_REQUEST['ustatus']).'%"';}

$stat="sub_admin_login where 1=1 $statu order by request_id desc";
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
<td><?php echo $row['request_id'] ;  ?></td>

<td><?php echo $row['first_name'].' '.$row['last_name'] ?></td>
<td><?php echo $row['city']; ?></td>
<td><?php if($currentdate!=''){ echo date("d/m/Y" ,strtotime($currentdate )); } else{ '';}?></td>
<td class="text-center"><?php if($row['active_status']=='N') {?><a class="btn btn-danger btn-sm rounded-circle" style="cursor:pointer;" onClick="return varify('<?php echo $row['request_id'];?>','Y','sub_admin_login');" title='Active'  alt="Active"><i class="fas fa-times"></i></a> <br>Deactive <?php } else {?>  <a class="btn btn-success btn-sm rounded-circle " style="cursor:pointer;" onClick="return unvarify('<?php echo $row['request_id'];?>','N','sub_admin_login');" title='Active'  alt="Active"> <i class="fas fa-check"></i></a><br>Active <?php } ?></td>
<td>
<a class="btn btn-success btn-sm rounded-circle" style="cursor:pointer;"title='View'  alt="View" data-toggle="modal" data-target="#update" onclick="return update('<?php echo $row['request_id']; ?>','<?php echo $row['first_name']; ?>','<?php echo $row['last_name']; ?>','<?php echo $row['city']; ?>','<?php echo $row['state']; ?>','<?php echo $row['pincode']; ?>','<?php echo $row['country']; ?>','<?php echo $row['email']; ?>','<?php echo $row['mobile'];?>','<?php echo $row['area'];?>')"><i class="fas fa-eye"></i></a>
<a class="btn btn-danger btn-sm rounded-circle" style="cursor:pointer;"title='Delete'  alt="Delete" onClick="return btnclickdelete('<?php echo $row['request_id'];?>','sub_admin_login');"><i class="fas fa-trash"></i></a>

</td>
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

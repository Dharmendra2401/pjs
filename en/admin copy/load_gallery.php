<?php  require_once("../../config/config.php"); ?>

<div class="table-responsive">
<input type="hidden" id="page" value="<?php echo $_REQUEST["page"]; ?>" name="page">
<table id="dynamic-table" class="table table-striped table-bordered shortable" >
<thead>
<tr class="table-headings">
<!--<th width="2%">S.No</th>-->
<th>S.No</th>
<th>Title</th>
<th>Image</th>
<th>Submited Date</th>
<th>Active Status</th>
<th>Action</th>
</tr>
</thead>

<tbody>


<?php
$stat='';
$statu='';


if($_REQUEST['title']!='')
{$statu.= 'and title LIKE "'.$_REQUEST['title'].'"';}

if($_REQUEST['submitdatetwo']!='')
{$statu.= 'and record_inserted_dttm LIKE "%'.date('Y-m-d',strtotime($_REQUEST['submitdatetwo'])).'%"';}

if($_REQUEST['searchtxt']!='')
{$statu.= 'and title LIKE "%'.trim($_REQUEST['searchtxt']).'%"';}
if($_REQUEST['ustatus']!='')
{$statu.= 'and status LIKE "%'.trim($_REQUEST['ustatus']).'%"';}

$stat="gallery where 1=1 $statu order by id desc";
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
<td><?php echo $count ;  ?></td>

<td><?php echo $row['title']; ?></td>
<td><img src="<?php echo RE_HOME_PATH.'/'.$row['short_image']; ?>" width="100px"> </td>
<td><?php if($currentdate!=''){ echo date("d/m/Y" ,strtotime($currentdate )); } else{ '';}?></td>
<td class="text-center"><?php if($row['status']=='N') {?><a class="btn btn-danger btn-sm rounded-circle" style="cursor:pointer;" onClick="return varify('<?php echo $row['id'];?>','Y','events');" title='Active'  alt="Active"><i class="fas fa-times"></i></a> <br>Deactive <?php } else {?>  <a class="btn btn-success btn-sm rounded-circle " style="cursor:pointer;" onClick="return unvarify('<?php echo $row['id'];?>','N','events');" title='Active'  alt="Active"> <i class="fas fa-check"></i></a><br>Active <?php } ?></td>
<td>
<a class="btn btn-success btn-sm rounded-circle" style="cursor:pointer;"title='View'  alt="View" data-toggle="modal" title='View content' data-target="#view" onclick="return update('<?php echo base64_encode($row['content']); ?>')"><i class="fas fa-eye"></i></a>
<a class="btn btn-danger btn-sm rounded-circle" style="cursor:pointer;"title='Delete'  alt="Delete" onClick="return btnclickdelete('<?php echo $row['id'];?>','events');"><i class="fas fa-trash"></i></a>

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

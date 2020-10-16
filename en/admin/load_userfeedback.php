<?php  require_once("../../config/config.php"); ?>

<div class="table-responsive">
<input type="hidden" id="page" value="<?php echo $_REQUEST["page"]; ?>" name="page">
<table id="dynamic-table" class="table table-striped table-bordered shortable" >
<thead>
<tr class="table-headings">
<!--<th width="2%">S.No</th>-->
<th>Refrence Id</th>
<th>Submitted By Member Id</th>
<th>Feedback Type</th>
<th>Submitted Date</th>
<th>Action</th>
</tr>
</thead>

<tbody>


<?php
$stat='';
$statu='';


$stat="feedbcak where 1=1 order by id desc";
$page = (int) (!isset($_REQUEST["page"]) ? 1 : $_REQUEST["page"]);
$limit = (int) (!isset($_REQUEST["pagesize"]) ? 10 : $_REQUEST["pagesize"]);
$startpoint = ($page * $limit) - $limit;
$query = "SELECT * FROM ".$stat." LIMIT ".$startpoint." , ".$limit; 
if($page==1){ $count=1;}else{$count=$page*10-10+1;}
$rest = mysqli_query($con,"SELECT * FROM ".$stat);
$row_count=mysqli_num_rows($rest);
$rs = mysqli_query($con,$query);
$counter=1;
while($row=mysqli_fetch_assoc($rs)){
$currentdate=$row['record_inserted_dttm'];

?>

<tr>
<td><?php echo $counter;  ?></td>

<td><?php echo $row['member_id'];?></td>
<td><?php echo $row['feedback_type']; ?></td>
<td><?php if($currentdate!=''){ echo date("d/m/Y" ,strtotime($currentdate )); } else{ '';}?></td>

<td><a class="btn btn-success btn-sm" href="<?php echo RE_HOME_SUPERADMIN;?>feedback_detail.php?id=<?php echo base64_encode($row['member_id']);?>">Show Details</a> 
</td>
</tr>
<?php $count++;$counter++; }
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

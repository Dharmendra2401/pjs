<?php  require_once("../../config/config.php"); ?>

<div class="table-responsive">
<table id="dynamic-table" class="table table-striped table-bordered" style="width:100%" >
<thead>
<tr class="table-headings">
<!--<th width="2%">S.No</th>-->
<th>S.no.</th>
					                <th>Requested User Name</th>
					                <th>City/Town/Village</th>
					                <th>Requested Date</th>
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
{$statu.= 'and SUBMIT_DATE = "'.date('Y-m-d',strtotime($_REQUEST['submitdate'])).'"';}

if(isset($_REQUEST['ustatus']))
{$statu.= 'and status LIKE "'.$_REQUEST['ustatus'].'%" ';}
$stat="staging where 1=1 $statu order by REQUEST_ID desc";

$page = (int) (!isset($_REQUEST["page"]) ? 1 : $_REQUEST["page"]);
$limit = (int) (!isset($_REQUEST["pagesize"]) ? 10 : $_REQUEST["pagesize"]);
$startpoint = ($page * $limit) - $limit;
$query = "SELECT * FROM ".$stat." LIMIT ".$startpoint." , ".$limit; 
if($page==1){ $count=1;}else{$count=$page*10-10+1;}
$rest = mysqli_query($con,"SELECT * FROM ".$stat);
$row_count=mysqli_num_rows($rest);
$rs = mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($rs)){
    $currentdate=$row['SUBMIT_DATE'];
			
?>

<tr>
					                <td><?php echo $count;  ?></td>
					                <td><?php echo $row['FIRST_NAME'].' '.$row['MIDDLE_NAME'].' '.$row['LAST_NAME'] ?></td>
					                <td><?php echo $row['City']; ?></td>
					                <td><?php if($currentdate!=''){ echo date("d/m/Y" ,strtotime($currentdate )); } else{ '';}?></td>
					                <td><a href="<?php echo RE_HOME_ADMIN;?>reg_user_detail.php?id=<?php echo base64_encode($row['REQUEST_ID']);?>">Show Details</a></td>
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

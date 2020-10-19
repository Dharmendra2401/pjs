<?php  require_once("../../config/config.php"); ?>
<div class="table-responsive">
<table id="dynamic-table" class="table table-striped table-bordered shortable" style="width:100%" >
<thead>
<tr class="table-headings">
<!--<th width="2%">S.No</th>-->

<th>Refrence Id</th>
<th>Name</th>
<th>Mobile No</th>
<th>Email</th>
<th>Address</th>

<th>Requested For</th>
<th>Response</th>
<th>Reason</th>
</tr>
</thead>

<tbody>


<?php
$stat='';
$statu='';

if($_REQUEST['state']!='')
{
$state=Implode('","',$_REQUEST['state']);    
$statu.= 'and address in ("'.$state.'")';}

if($_REQUEST['refrenceid']!='')
{
$refrenceid=Implode('","',$_REQUEST['refrenceid']); 
$statu.= 'and request_id in ("'.trim($refrenceid).'")';}



if($_REQUEST['memberid']!='')
{
$getocc=Implode('","',$_REQUEST['memberid']);
$showocc = trim($getocc,","); 
$statu.= 'and user_id in ("'.trim($showocc ).'") ';
}

if(isset($_REQUEST['ustatus']))
{$statu.= 'and status LIKE "'.$_REQUEST['ustatus'].'%" ';}
$stat="non_member_request where 1=1  $statu order by request_id desc";
$page = (int) (!isset($_REQUEST["page"]) ? 1 : $_REQUEST["page"]);
$limit = (int) (!isset($_REQUEST["pagesize"]) ? 10 : $_REQUEST["pagesize"]);
$startpoint = ($page * $limit) - $limit;
$query = "SELECT * FROM ".$stat." LIMIT ".$startpoint." , ".$limit; 
if($page==1){ $count=1;}else{$count=$page*10-10+1;}
$rest = mysqli_query($con,"SELECT * FROM ".$stat);
$row_count=mysqli_num_rows($rest);
$rs = mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($rs)){
$currentdate=$row['request_date'];

?>

<tr>

<td><?php echo $row['request_id'] ; ?></td>
<td><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'] ?></td>
<td><?php echo $row['mobile'] ; ?></td>
<td><?php echo $row['email'] ; ?></td>
<td><?php echo $row['address'] ; ?></td>
<td><?php $getname=mysqli_fetch_array(mysqli_query($con,'select member_id,first_name,last_name from member where member_id="'.$row['user_id'].'"')); echo $getname['first_name'].' '.$getname['last_name'].' ('.$row['user_id'].')'  ; ?></td>
<td><?php if($row['request_status']=='Y'){echo "<label class='bg-success text-white btn-sm'>New</label>";} else if($row['request_status']=='R'){echo "<label class='bg-warning text-white btn-sm'>Rejected</label>";} else{ echo "<label class='bg-success text-white btn-sm'>Closed</label>"; }?></td>

<td><?php  if($row['request_status']=='R'){echo $row['reason_of_rejection'];}else{echo "NA";}  ?></td>
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

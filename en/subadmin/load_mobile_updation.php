<?php  require_once("../../config/config.php"); ?>
<div class="table-responsive">
<table id="dynamic-table" class="table table-striped table-bordered shortable" style="width:100%" >
<thead>
<tr class="table-headings">
<!--<th width="2%">S.No</th>-->

<th >Requester Name/Id </th>
<th>Mobile No</th>
<th>Email</th>
<th>Address</th>
<th>Status</th>
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
    $statu.='and comm.email="'.$_REQUEST['refrenceid'].'" ';
}



if($_REQUEST['memberid']!='')
{
$getocc=Implode('","',$_REQUEST['memberid']);
$showocc = trim($getocc,","); 
$statu.= 'and death.member_id in ("'.trim($showocc ).'") ';
}

$joins='mem.member_id,mem.middle_name,mem.first_name,mem.last_name,addrss.full_address,addrss.city,comm.email,mem.fathers_name,mem.gender,mem.age,mem.date_of_birth,mem.place_of_birth,mem.time_of_birth,mem.marital_status,mem.blood_group,mem.popular_name,mem.feet,mem.inches,mem.marital_status,addrss.member_id,addrss.full_address,addrss.city,addrss.state,addrss.country,addrss.pincode,comm.member_id,comm.mobile,comm.email,edu.member_id,edu.highest_edu,edu.occupation,edu.ocp_details,edu.income,keyy.id,keyy.display_pic,death.member_id,death.new_request,death.type_of_request,death.reason_of_rejection,death.reference_member_Id,death.status_of_request ';



if(isset($_REQUEST['ustatus']))
{$statu.= 'and status LIKE "'.$_REQUEST['ustatus'].'%" ';}
$stat="member as mem INNER JOIN address as addrss on mem.member_id=addrss.member_id INNER JOIN communication as comm on mem.member_id=comm.member_id INNER JOIN education_ocp as edu on mem.member_id=edu.member_id INNER JOIN key_member_id as keyy on mem.member_id=keyy.id INNER JOIN member_request as death on mem.member_id=death.member_id where 1=1 and death.type_of_request='MOBILE'  $statu order by keyy.id desc ";
$page = (int) (!isset($_REQUEST["page"]) ? 1 : $_REQUEST["page"]);
$limit = (int) (!isset($_REQUEST["pagesize"]) ? 10 : $_REQUEST["pagesize"]);
$startpoint = ($page * $limit) - $limit;
$query = "SELECT ".$joins." FROM ".$stat." LIMIT ".$startpoint." , ".$limit; 
if($page==1){ $count=1;}else{$count=$page*10-10+1;}
$rest = mysqli_query($con,"SELECT * FROM ".$stat);
$row_count=mysqli_num_rows($rest);
$rs = mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($rs)){
$currentdate=$row['request_date'];

?>

<tr>

<td><?php echo $row['first_name'].' '.$row['last_name']. ' (' .$row['member_id'].')'; ?></td>
<td><?php echo $row['mobile'] ; ?></td>
<td><?php echo $row['email'] ; ?></td>
<td><?php echo $row['full_address'] ; ?></td>

<td><?php if($row['status_of_request']=='Y'){echo "<label class='btn btn-success btn-sm'>New</label>";} else if($row['status_of_request']=='R'){echo "<label class='btn btn-warning btn-sm'>Rejected</label>";} else{ echo "<label class='btn btn-success btn-sm'>Closed</label>"; }?></td>

<td><?php  if($row['status_of_request']=='R'){echo $row['reason_of_rejection'];}else{echo "NA";}  ?></td>
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

<?php  require_once("../config/config.php"); ?>

<div class="col-md-6 offset-md-3 table-responsive">
<table id="dynamic-table" class="table table-striped table-bordered short1" >
<thead>
<tr class="table-headings">
<!--<th width="2%">S.No</th>-->
<th>S.no.</th>
<th>Name</th>
<th>Mobile No</th>
</tr>
</thead>

<tbody>


<?php
$stat='';
$statu='';

if($_REQUEST['statetwo']!='')
{$statu.= 'and addrss.state LIKE "'.$_REQUEST['statetwo'].'"';}

if($_REQUEST['citytwo']!='')
{$statu.= 'and addrss.city LIKE "'.$_REQUEST['citytwo'].'"';}

if($_REQUEST['bloodgroup']!='')
{$statu.= 'and mem.blood_group LIKE "'.$_REQUEST['bloodgroup'].'"';}

if($_REQUEST['country']!='')
{$statu.= 'and addrss.country LIKE "'.$_REQUEST['country'].'"';}

if($_REQUEST['pincodes']!='')
{$statu.= 'and addrss.pincode LIKE "'.$_REQUEST['pincodes'].'"';}




$joins="mem.member_id,mem.middle_name,mem.first_name,mem.last_name,addrss.full_address,addrss.city,comm.email,mem.fathers_name,mem.gender,mem.age,mem.date_of_birth,mem.place_of_birth,mem.time_of_birth,mem.marital_status,mem.blood_group,mem.popular_name,mem.feet,mem.inches,mem.marital_status,addrss.member_id,addrss.full_address,addrss.city,addrss.state,addrss.country,addrss.pincode,comm.member_id,comm.mobile,comm.country_code,comm.email,edu.member_id,edu.highest_edu,edu.occupation,edu.ocp_details,edu.income,keyy.id,keyy.display_pic ";



if($statu!=''){$stat="member as mem INNER JOIN address as addrss on mem.member_id=addrss.member_id INNER JOIN communication as comm on mem.member_id=comm.member_id INNER JOIN education_ocp as edu on mem.member_id=edu.member_id INNER JOIN key_member_id as keyy on mem.member_id=keyy.id where 1=1  $statu and mem.Life_status='L' and blood_donate='Yes' order by keyy.id  desc ";}


$page = (int) (!isset($_REQUEST["page"]) ? 1 : $_REQUEST["page"]);
$limit = (int) (!isset($_REQUEST["pagesize"]) ? 10 : $_REQUEST["pagesize"]);
$startpoint = ($page * $limit) - $limit;
 //$query = "SELECT ".$stat." LIMIT ".$startpoint." , ".$limit; 
$query = "SELECT ".$joins." FROM ".$stat." LIMIT ".$startpoint." , ".$limit; 
if($page==1){ $count=1;}else{$count=$page*10-10+1;}
$rest = mysqli_query($con,"SELECT * FROM ".$stat);
$row_count=mysqli_num_rows($rest);
$rs = mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($rs)){
$currentdate=$row['record_inserted_dttm'];

?>

<tr>
<td><?php echo $count;  ?></td>
<td><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'] ?></td>
<td><div class="d-flex
"><?php echo $row['country_code'].''.$row['mobile']; ?> <a title="Call now" href="tel:<?php echo $row['country_code'].''.$row['mobile']; ?>"><i class="fa fa-phone-volume call-icon"></i></a></div></td>
</tr>
<?php $count++; }
if($row_count<=0){
?>

<tr class="odd"><td valign="top" colspan="12" class="dataTables_empty" align="center">No records found</td></tr>

<?php }?>

</tbody>

</table><div>

<?php

$txtpage= paginationjquerytwo($con,$stat,$limit,$page,"?","");					   

echo "<table width='100%'><tr><td  style='padding:3px;'><div class='dataTables_paginate paging_bootstrap'>".$txtpage."</div></td></tr></table>";

?>
</div>
</div>

</div>
</div>  

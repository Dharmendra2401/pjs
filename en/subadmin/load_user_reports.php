<?php  require_once("../../config/config.php"); ?>
<div class="table-responsive">
<table id="dynamic-table" class="table table-striped table-bordered shortable" style="width:100%" >
<thead>
<tr class="table-headings">
<!--<th width="2%">S.No</th>-->
<th>S.no.</th>
<th>User Name</th>
<th>MID</th>
<th>Mobile no</th>
<th>C/T/V</th>
<th>Gender</th>
<th>Status</th>
<th>Age</th>
<th>Blood</th>
<th>Occupation</th>
<th>Annual Income</th>
</tr>
</thead>

<tbody>


<?php
$stat='';
$statu='';


if($_REQUEST['submitdate']!='')
{$statu.= 'and record_inserted_dttm LIKE "%'.date('Y-m-d',strtotime($_REQUEST['submitdate'])).'%"';}

if($_REQUEST['refrenceidone']!='')
{$statu.= 'and new_request LIKE "'.trim($_REQUEST['refrenceidone']).'"';}

// "mini":mini,"max":max,"state":state,"age":age,"bloodgroupone":bloodgroupone,"occupationone":occupationone,"incomeone":incomeone

if((($_REQUEST['mini']!='') && ($_REQUEST['mini']!=0)) && (($_REQUEST['max']!='')&& ($_REQUEST['max']!=0)))
{$statu.= 'and mem.age between "'.$_REQUEST['mini'].'" and "'.$_REQUEST['max'].'" '  ;}

if($_REQUEST['state']!='')
{
$getstate=Implode(',',$_REQUEST['state']);
$string = trim($getstate,","); 
$statu.= 'and addrss.state in ("'.trim($string ).'") ';
}
if($_REQUEST['occupation']!='')
{
$getocc=Implode(',',$_REQUEST['occupation']);
$showocc = trim($getocc,","); 
$statu.= 'and addrss.state in ("'.trim($showocc ).'") ';
}

if(($_REQUEST['gender']!='')&& ($_REQUEST['gender']!='undefined'))
{$statu.= 'and mem.gender = "'.$_REQUEST['gender'].'"';}

if(($_REQUEST['status']!='')&& ($_REQUEST['status']!='undefined'))
{$statu.= 'and mem.marital_status = "'.$_REQUEST['status'].'" ';}

if($_REQUEST['ustatus']!='')
{$statu.= 'and status LIKE "'.$_REQUEST['ustatus'].'" ';}

if($_REQUEST['age']!='')
{
$getage=Implode(',',$_REQUEST['age']);
$showage = trim($getage,","); 
$statu.= 'and mem.age in ('.trim($showage ).') ';
}

if($_REQUEST['bloodgroupone']!='')
{
$getblood=Implode(',',$_REQUEST['bloodgroupone']);
$showblood = trim($getblood,","); 
$statu.= 'and mem.blood_group in ('.trim($showblood ).') ';
}

if($_REQUEST['occupationone']!='')
{
$occupationone=Implode(',',$_REQUEST['occupationone']);
$getocc = trim($occupationone,","); 
$statu.= 'and edu.occupation in ('.trim($getocc ).') ';
}

if($_REQUEST['incomeone']!='')
{$statu.= 'and edu.income = "'.$_REQUEST['incomeone'].'" ';}



$joins="mem.member_id,mem.middle_name,mem.first_name,mem.last_name,addrss.full_address,addrss.city,comm.email,mem.fathers_name,mem.gender,mem.age,mem.date_of_birth,mem.place_of_birth,mem.time_of_birth,mem.marital_status,mem.blood_group,mem.popular_name,mem.feet,mem.inches,mem.marital_status,addrss.member_id,addrss.full_address,addrss.city,addrss.state,addrss.country,addrss.pincode,comm.member_id,comm.mobile,comm.email,edu.member_id,edu.highest_edu,edu.occupation,edu.ocp_details,edu.income,keyy.id,keyy.display_pic ";



$stat="member as mem INNER JOIN address as addrss on mem.member_id=addrss.member_id INNER JOIN communication as comm on mem.member_id=comm.member_id INNER JOIN education_ocp as edu on mem.member_id=edu.member_id INNER JOIN key_member_id as keyy on mem.member_id=keyy.id where 1=1  $statu order by keyy.id desc ";
$page = (int) (!isset($_REQUEST["page"]) ? 1 : $_REQUEST["page"]);
$limit = (int) (!isset($_REQUEST["pagesize"]) ? 10 : $_REQUEST["pagesize"]);
$startpoint = ($page * $limit) - $limit;
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
<td><?php echo $row['first_name'].' '.$row['last_name'];;  ?></td>
<td><?php echo $row['member_id'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['city'];?></td>
<td><?php if($row['gender']=='M'){echo 'Male';}else{ echo "Female"; }?></td>
<td><?php echo $row['marital_status']; ?></td>
<td><?php echo $row['age'] ;?></td>
<td>
<?php
if($row['blood_group']==1){echo 'A+';}
else if($row['blood_group']==2){echo 'B+';}
else if($row['blood_group']==3){echo 'AB+';}
else if($row['blood_group']==4){echo 'O+';}
else if($row['blood_group']==5){echo 'A-';}
else if($row['blood_group']==6){echo 'B-';} 
else if($row['blood_group']==7){echo 'AB-';}
else if($row['blood_group']==8){echo 'O-';} 
else if($row['blood_group']==9){echo 'Other';} 
else {echo 'NA';}  ; ?>
</td>
<td><?php if($row['occupation']==1){ echo 'Job';} else if($row['occupation']==2){ echo "Business";}  else if($row['occupation']==3){ echo "Housewife";}  else if($row['occupation']==4){ echo "Student";} else{echo "NA";} ; 

?></td>
<td>  <?php if($row['income']==1){ echo 'Less than 1 lakh';} else if($row['income']==2){ echo "1 lakh to 2 lakh";}  else if($row['income']==3){ echo "2 lakh to 3 lakh";}  else if($row['income']==4){ echo "3 lakh to 4 lakh";}
else if($row['income']==5){ echo "More than 4 lakh";} else{echo "NA";} ?>

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

<?php  
include "../../../config/config.php";  
$stat='';
$statu='';


if($_REQUEST['submitdate']!='')
{$statu.= 'and record_inserted_dttm LIKE "%'.date('Y-m-d',strtotime($_REQUEST['submitdate'])).'%"';}

if($_REQUEST['refrenceidone']!='')
{$statu.= 'and new_request LIKE "'.trim($_REQUEST['refrenceidone']).'"';}

// "mini":mini,"max":max,"state":state,"age":age,"bloodgroupone":bloodgroupone,"occupationone":occupationone,"incomeone":incomeone

if(($_REQUEST['mini']!='') && ($_REQUEST['max']!=''))
{$statu.= 'and mem.age between "'.$_REQUEST['mini'].'" and "'.$_REQUEST['max'].'" '  ;}

if($_REQUEST['state']!='')
{
$getstate=Implode(',',$_REQUEST['state']);
$string = trim($getstate,","); 
$statu.= 'and addrss.state in ("'.trim($string ).'") ';
}
if($_REQUEST['occupation']!='')
{
// $getocc=Implode(',',$_REQUEST['occupation']);
// $showocc = trim($getocc,","); 
$statu.= 'and addrss.state in ("'.$_REQUEST['occupation'].'") ';
}

if(($_REQUEST['gender']!='')&& ($_REQUEST['gender']!='undefined'))
{$statu.= 'and mem.gender = "'.$_REQUEST['gender'].'"';}

if(($_REQUEST['status']!='')&& ($_REQUEST['status']!='undefined'))
{$statu.= 'and mem.marital_status = "'.$_REQUEST['status'].'" ';}

if($_REQUEST['ustatus']!='')
{$statu.= 'and status LIKE "'.$_REQUEST['ustatus'].'" ';}

if($_REQUEST['age']!='')
{
// echo $getage=Implode(',',$_REQUEST['age']);
// echo $showage = trim($getage,","); 
$statu.= 'and mem.age in ('.$_REQUEST['age'].') ';
}

if($_REQUEST['bloodgroupone']!='')
{
//$getblood=Implode(',',$_REQUEST['bloodgroupone']);
//$showblood = trim($getblood,","); 
$statu.= 'and mem.blood_group in ('.$_REQUEST['bloodgroupone'].') ';
}

if($_REQUEST['occupationone']!='')
{
// $occupationone=Implode(',',$_REQUEST['occupationone']);
// $getocc = trim($occupationone,","); 
$statu.= 'and edu.occupation in ('.$_REQUEST['occupationone'].') ';
}

if($_REQUEST['incomeone']!='')
{$statu.= 'and edu.income = "'.$_REQUEST['incomeone'].'" ';}

$joins="mem.member_id,mem.middle_name,mem.first_name,mem.last_name,addrss.full_address,addrss.city,comm.email,mem.fathers_name,mem.gender,mem.age,mem.date_of_birth,mem.place_of_birth,mem.time_of_birth,mem.marital_status,mem.blood_group,mem.popular_name,mem.feet,mem.inches,mem.marital_status,addrss.member_id,addrss.full_address,addrss.city,addrss.state,addrss.country,addrss.pincode,comm.member_id,comm.mobile,comm.email,edu.member_id,edu.highest_edu,edu.occupation,edu.ocp_details,edu.income,keyy.id,keyy.display_pic ";



$stat="member as mem INNER JOIN address as addrss on mem.member_id=addrss.member_id INNER JOIN communication as comm on mem.member_id=comm.member_id INNER JOIN education_ocp as edu on mem.member_id=edu.member_id INNER JOIN key_member_id as keyy on mem.member_id=keyy.id where 1=1  $statu order by keyy.id desc ";
$sql = "SELECT ".$joins." FROM ".$stat." "; 


$setRec = mysqli_query($con, $sql);  
$count=mysqli_num_rows($setRec);
if(mysqli_num_rows($setRec) > 0)
 {
 
  $output .= '
   <table class="table" style="border:1px solid #969696;">  
                    <tr style="border:1px solid #969696;">  
                         <th style="width:150px;">S.no</th>  
                         <th style="width:150px;">User Name</th>  
                         <th style="width:150px;">MID (Member Id)</th>
                         <th style="width:150px;">Mobile No</th> 
                         <th style="width:150px;">City/Town/Village</th> 
                         <th style="width:150px;">Gender</th> 
                         <th style="width:150px;">Status</th>  
                         <th style="width:150px;">Age</th>
                         <th style="width:150px;">Blood Group</th>
                         <th style="width:150px;">Occupation</th>
                         <th style="width:150px;">Annual Income</th> 
                    </tr>
  ';$i=1;
 
  while($row = mysqli_fetch_array($setRec))
  {
    if($row['gender']=='M'){$gender= 'Male';}else{  $gender="Female"; }
    if($row['blood_group']==1){$blood= 'A+';}
                         else if($row['blood_group']==2){$blood=  'B+';}
                         else if($row['blood_group']==3){$blood=  'AB+';}
                         else if($row['blood_group']==4){$blood=  'O+';}
                         else if($row['blood_group']==5){$blood=  'A-';}
                         else if($row['blood_group']==6){$blood=  'B-';} 
                         else if($row['blood_group']==7){$blood=  'AB-';}
                         else if($row['blood_group']==8){$blood=  'O-';} 
                         else if($row['blood_group']==9){$blood=  'Other';} 
                         else {$blood=  'NA';}
                         if($row['occupation']==1){ $occ= 'Job';} else if($row['occupation']==2){ $occ= "Business";}  else if($row['occupation']==3){ $occ= "Housewife";}  else if($row['occupation']==4){ $occ= "Student";} else{$occ= "NA";} ; 
                         if($row['income']==1){ $income= 'Less than 1 lakh';} else if($row['income']==2){ $income= "1 lakh to 2 lakh";}  else if($row['income']==3){ $income= "2 lakh to 3 lakh";}  else if($row['income']==4){ $income= "3 lakh to 4 lakh";}
                         else if($row['income']==5){ $income= "More than 4 lakh";} else{$income= "NA";} 
                         
   $output .= '
    <tr  style="border:1px solid #969696;text-align:center;">  
                         <td>'.$i.'</td>  
                         <td>'.$row["first_name"].' '.$row["last_name"].'</td>  
                         <td>'.$row["member_id"].'</td>
                         <td>'.$row["mobile"].'</td> 
                         <td>'.$row["city"].'</td>
                         <td>' .$gender.'</td>
                         <td>'.$row['marital_status'].'</td>
                         <td>'.$row['age'].'</td> 
                         <td>'.$blood.'</td> 
                         <td>'.$occ.'</td>
                         <td>'.$income.'</td>
       
                    </tr>
   ';$i++;
  }

  
 }
 if($count==0){

    $output.=' <table class="table" style="border:1px solid #969696;"> <tr style="text-align:center;wdth:100%">No Records Found  </tr>';
}$output .= '</table>';
header('Content-Type: application/xls');
header('Content-Disposition: attachment; filename=Registered-users.xls');
header("Pragma: no-cache"); 
header("Expires: 0");
echo $output;
 ?> 
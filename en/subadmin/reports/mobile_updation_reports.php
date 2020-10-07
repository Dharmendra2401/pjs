<?php  
include "../../../config/config.php";  
$stat='';
$statu='';


if($_REQUEST['refrenceid']!='')
{
$reff=explode(',',$_REQUEST['refrenceid']);
$refrenceid=Implode('","',$reff); 
$statu.= 'and death.reference_member_Id in ("'.trim($refrenceid).'")';}



if($_REQUEST['memberid']!='')
{
$getocc=explode(',',$_REQUEST['memberid']);
$getmid=Implode('","',$getocc);
//echo $showocc = trim($getocc,","); 
$statu.= 'and death.member_id in ("'.trim($getmid).'") ';
}

$joins='mem.member_id,mem.middle_name,mem.first_name,mem.last_name,addrss.full_address,addrss.city,comm.email,mem.fathers_name,mem.gender,mem.age,mem.date_of_birth,mem.place_of_birth,mem.time_of_birth,mem.marital_status,mem.blood_group,mem.popular_name,mem.feet,mem.inches,mem.marital_status,addrss.member_id,addrss.full_address,addrss.city,addrss.state,addrss.country,addrss.pincode,comm.member_id,comm.mobile,comm.email,edu.member_id,edu.highest_edu,edu.occupation,edu.ocp_details,edu.income,keyy.id,keyy.display_pic,death.member_id,death.new_request,death.type_of_request,death.reason_of_rejection,death.reference_member_Id,death.status_of_request ';

$stat="member as mem INNER JOIN address as addrss on mem.member_id=addrss.member_id INNER JOIN communication as comm on mem.member_id=comm.member_id INNER JOIN education_ocp as edu on mem.member_id=edu.member_id INNER JOIN key_member_id as keyy on mem.member_id=keyy.id INNER JOIN member_request as death on mem.member_id=death.member_id where 1=1 and death.type_of_request='Mobile'  $statu order by keyy.id desc ";
$sql = "SELECT * FROM ".$stat." "; 

$setRec = mysqli_query($con, $sql);  
$count=mysqli_num_rows($setRec);
if(mysqli_num_rows($setRec) > 0)
 {
 

  $output .= '
   <table class="table" style="border:1px solid #969696;">  
                    <tr style="border:1px solid #969696;"> 
                    <th style="width:150px">S.No </th>
<th style="width:150px">Requester Name </th>
<th style="width:150px">Mobile No</th>
<th style="width:150px">Email</th>
<th style="width:150px">Address</th>
<th style="width:150px">Status</th>
<th style="width:150px">Reason</th>
                    </tr>
  ';$i=1;
 
  while($row = mysqli_fetch_array($setRec))
  {
   $getname=mysqli_fetch_array(mysqli_query($con,'select member_id,first_name,last_name from member where member_id="'.$row['reference_member_Id'].'"')); $getfullname= $getname['first_name'].' '.$getname['last_name'].' ('.$row['reference_member_Id'].')'  ;
   if($row['status_of_request']=='Y'){$status= "New";} else if($row['status_of_request']=='R'){$status= "Rejected";} else{ $status= "Closed"; }
   if($row['status_of_request']=='R'){$reason=$row['reason_of_rejection'];}else{$reason= "NA";}            
   $output .= '
    <tr  style="border:1px solid #969696;text-align:center;">  
                         <td>'.$i.'</td>  
                         <td>'.$row['first_name'].' '.$row['last_name'].'</td>  
                         <td>'.$row["mobile"].'</td> 
                         <td>'.$row['email'].'</td>
                         <td>'.$row['full_address'].'</td>
                         <td>'.$status.'</td> 
                         <td>'.$reason.'</td> 
                         
       
                    </tr>
   ';$i++;
  }

  
 }
 if($count==0){

    $output.=' <table class="table" style="border:1px solid #969696;"> <tr style="text-align:center;wdth:100%">No Records Found  </tr>';
}$output .= '</table>';
header('Content-Type: application/xls');
header('Content-Disposition: attachment; filename=mobile-updation-reports.xls');
header("Pragma: no-cache"); 
header("Expires: 0");
echo $output;
 ?> 
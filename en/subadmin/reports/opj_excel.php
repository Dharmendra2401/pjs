<?php  
include "../../../config/config.php";  
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
$getocc=explode(',',$_REQUEST['memberid']);
$getmid=Implode('","',$getocc);
//echo $showocc = trim($getocc,","); 
$statu.= 'and user_id in ("'.trim($getmid).'") ';
}


$stat="non_member_request where 1=1  $statu order by request_id desc";
$sql = "SELECT * FROM ".$stat." "; 

$setRec = mysqli_query($con, $sql);  
$count=mysqli_num_rows($setRec);
if(mysqli_num_rows($setRec) > 0)
 {
 

  $output .= '
   <table class="table" style="border:1px solid #969696;">  
                    <tr style="border:1px solid #969696;"> 
                    <th style="width:150px;">S.NO</th> 
                    <th style="width:150px;">Refrence Id</th>
                    <th style="width:150px;">Requested User Name</th>
                    <th style="width:150px;">Mobile No</th>
                    <th style="width:150px;">Email</th>
                    <th style="width:150px;">Address</th>
                    
                    <th style="width:150px;">Requested For</th>
                    <th style="width:150px;">Response</th>
                    <th style="width:150px;">Reason</th>
                    </tr>
  ';$i=1;
 
  while($row = mysqli_fetch_array($setRec))
  {
     $getname=mysqli_fetch_array(mysqli_query($con,'select member_id,first_name,last_name from member where member_id="'.$row['user_id'].'"'));
     if($row['request_status']=='Y'){$status= "<label class='btn btn-success btn-sm'>New</label>";} else if($row['request_status']=='R'){$status="<label class='btn btn-warning btn-sm'>Rejected</label>";} else{$status=  "<label class='btn btn-success btn-sm'>Closed</label>"; }  
     if($row['request_status']=='R'){$request= $row['reason_of_rejection'];}else{$request= "NA";}            
   $output .= '
    <tr  style="border:1px solid #969696;text-align:center;">  

                         <td>'.$i.'</td>  
                         <td>'.$row["request_id"].'</td>  
                         <td>'.$row['first_name'].' '.$row['middle_name'].' '.$row['last_name'].'</td>
                         <td>'.$row["mobile"].'</td> 
                         <td>'.$row['email'].'</td>
                         <td>'.$row['address'].'</td>
                         <td>'.$getname['first_name'].' '.$getname['last_name'].' ('.$row['user_id'].')' .'</td>
                         <td>'.$status.'</td> 
                         <td>'.$request.'</td> 
                         
       
                    </tr>
   ';$i++;
  }

  
 }
 if($count==0){

    $output.=' <table class="table" style="border:1px solid #969696;"> <tr style="text-align:center;wdth:100%">No Records Found  </tr>';
}$output .= '</table>';
header('Content-Type: application/xls');
header('Content-Disposition: attachment; filename=opj-users.xls');
header("Pragma: no-cache"); 
header("Expires: 0");
echo $output;
 ?> 
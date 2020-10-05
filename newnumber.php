<?php  
include 'config/config.php';
include "en/mail/index.php" ;
$newnumber=mysqli_real_escape_string($con,trim($_REQUEST['newnumber']));
$oldnumber=mysqli_real_escape_string($con,trim($_REQUEST['oldnumber']));
$memberid=mysqli_real_escape_string($con,trim(strtoupper($_REQUEST['memberid'])));
$description=mysqli_real_escape_string($con,trim($_REQUEST['description']));
$submitdate=date('Y-m-d H:i:s');
$getmemberid=mysqli_query($con,'select email,member_id,mobile from communication where member_id="'.$memberid.'" and  mobile="'.$oldnumber.'" ');
$emailidget=mysqli_fetch_array($getmemberid);
if(($newnumber=='') && ($oldnumber=='') && ($memberid=='') && ($description=='')){
echo "Error";
}
else if(mysqli_num_rows($getmemberid)>0){
mysqli_query($con,'insert into member_request (member_id,new_request,status_of_request,record_inserted_dttm,type_of_request)values("'.$memberid.'","'.$newnumber.'","Y","'.$submitdate.'","Mobile")');
$subject="Successfull Submited For Updating Mobile No From ".WEBSITE_NAME." ";
$mes='';
$mes.=" Dear User, you are successfully submited form for new mobile no updation  with ".WEBSITE_NAME." and wait till the approval mail of admin .if any query email us <a href='mailto:".FROM_EMAIL."'>".FROM_EMAIL."</a>";
$message=$mes;
$to=$emailidget['email'];
sendmails($to,$message,$subject);
echo "true";
}else{
echo "false";
}


?>
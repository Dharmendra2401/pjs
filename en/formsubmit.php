<?php 
include "../config/config.php";
require_once("../library/upload.php");

$firstname=mysqli_real_escape_string($con,trim( $_REQUEST['firstname']));
$middlename=mysqli_real_escape_string($con,trim( $_REQUEST['middlename']));
$lastname=mysqli_real_escape_string($con,trim( $_REQUEST['lastname']));
$popularname=mysqli_real_escape_string($con,trim( $_REQUEST['popularnamess']));
$dob=mysqli_real_escape_string($con,trim( $_REQUEST['dob']));
$birthtime=mysqli_real_escape_string($con,trim($_REQUEST['birthtime']));
$birthplace=mysqli_real_escape_string($con,trim( $_REQUEST['birthplace']));
$gender=mysqli_real_escape_string($con,trim( $_REQUEST['gender']));
$mobileno=mysqli_real_escape_string($con,trim( $_REQUEST['mobileno']));
$status=mysqli_real_escape_string($con,trim( $_REQUEST['status']));
$email=mysqli_real_escape_string($con,trim( $_REQUEST['email']));
$bloodgroup=mysqli_real_escape_string($con,trim( $_REQUEST['bloodgroup']));
$height=mysqli_real_escape_string($con,trim( $_REQUEST['height']));
$country=mysqli_real_escape_string($con,trim( $_REQUEST['country']));
$state=mysqli_real_escape_string($con,trim( $_REQUEST['state']));
$city=mysqli_real_escape_string($con,trim( $_REQUEST['city']));
$address=mysqli_real_escape_string($con,trim( $_REQUEST['address']));
$pincode=mysqli_real_escape_string($con,trim( $_REQUEST['pincode']));
//$bloodgroup=$_REQUEST['bloodgroup'];
$highest=mysqli_real_escape_string($con,trim( $_REQUEST['highest']));
$occupation=mysqli_real_escape_string($con,trim( $_REQUEST['occupation']));
$details=mysqli_real_escape_string($con,trim( $_REQUEST['details']));
$income=mysqli_real_escape_string($con,trim( $_REQUEST['income']));
$submitdate=date('Y-m-d H:i:s');

$file='';
$file_namees=$_FILES["profile"]["name"]; 
 $file_tmpps=$_FILES["profile"]["tmp_name"];


 if($file_namees!=''){
    $ext=explode(".",$file_namees);
    // $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    $without_extension = substr($file_namees, 0, strrpos($file_namees, "."));
     $url345="../upload/ ". str_replace(" ","",sha1($_FILES["profile"]["name"].time()).".".$ext[sizeof($ext)-1]);
     $url12="upload/". str_replace(" ","",sha1($_FILES["profile"]["name"].time()).".".$ext[sizeof($ext)-1]);
    move_uploaded_file($file_tmpps,$url345);

    
    }
    

if(($firstname!='')&& ($lastname!='') && ($dob!='') && ($gender!='')&& ($mobileno!='')&& ($status!='')&& ($email!='')&& ($bloodgroup!='')&& ($country!='')&& ($state!='')&& ($city!='')&& ($address!='')&& ($pincode!='')&& ($highest!='')&& ($occupation!='')&& ($income!='')){

 $insert=mysqli_query($con,"insert into staging_approval (first_name,last_name,date_of_birth,gender,martial_status,blood_group,popular_name,height,country,state,city,pincode,full_address,highest_edu,occupation,ocp_details,income,display_pic,place_of_birth,mobile,email,time_of_birth,middle_name,record_inserted_dttm)values('".$firstname."','".$lastname."','".date($dob,strtotime('Y-m-d'))."','".$gender."','".$status."','".$bloodgroup."','".$popularname."','".$height."','".$country."','".$state."','".$city."','".$pincode."','".$address."','".$highest."','".$occupation."','".$details."','".$income."','".$url12."','".$birthplace."','".$mobileno."','".$email."','".$birthtime."','".$middlename."','".$submitdate."')");

redirect(RE_EN_PATH."signup.php","Successfully registered with us~@~".MSG_SUCCESS);
}else{
    redirect(RE_EN_PATH."signup.php","Error! Please try again~@~".MSG_ERROR);


}





?>
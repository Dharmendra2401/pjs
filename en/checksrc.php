<?php 
include "../config/config.php";
$firstname=mysqli_real_escape_string($con,trim($_REQUEST['firstname']));
$lastname=mysqli_real_escape_string($con,trim($_REQUEST['lastname']));
$fathername=mysqli_real_escape_string($con,trim($_REQUEST['fathername']));
$dob=mysqli_real_escape_string($con,trim($_REQUEST['dob']));
//$sorcevalue=strtoupper(substr($firstname,0,3)).'_'.strtoupper(substr($lastname,0,3)).'_'.strtoupper(substr($fathername,0,3)).'_'.date('dmY',strtotime($dob));

$key=mysqli_query($con,"select first_name,last_name,fathers_name,date_of_birth from staging_approval where first_name= '".$firstname."' and last_name='".$lastname."' and fathers_name='".$fathername."' and date_of_birth='".$dob."' ");
$countkey=mysqli_num_rows($key);
echo $countkey;

?>
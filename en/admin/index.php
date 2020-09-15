
<?php  
include "../../config/config.php" ;

if($_SESSION['admin_email']!=''){
  redirect(RE_EN_PATH."index.php");
}

if(isset($_REQUEST['login'])){
$email=mysqli_real_escape_string($con,trim($_REQUEST['email']));
$password=mysqli_real_escape_string($con,trim($_REQUEST['password']));
if(($email!='')&&($password!=''))
$login=mysqli_query($con,"select first_name,last_name,id,email,password from admin_login where email='".$email."' and password='".$password."' ");
$cont=mysqli_num_rows($login);
if($cont>0){
$fetch=mysqli_fetch_array($login);
$_SESSION['admin_email']=$fetch['email'];
$_SESSION['admin_fullname']=$fetch['first_name'].' '.$fetch['last_name'];
$_SESSION['admin_id']=$fetch['id'];
redirect(RE_HOME_SUPERADMIN."index.php");
}else{
  redirect(RE_HOME_SUPERADMIN."index.php","Invalid email and password.~@~".MSG_ERROR);
}


}


if(isset($_POST['forgotpass'])){
  
$emails=mysqli_real_escape_string($con,trim($_REQUEST['getemail']));
$getemail=mysqli_query($con,'select email from admin_login where email="'.$emails.'" ');
$contt=mysqli_num_rows($getemail);

if($contt>0){
  $getpass=mysqli_fetch_array($getemail);
  $subject="Request For Admin Password '".WEBSITE_NAME."' ";
  $mes='';
  $mes.=" Dear Admin, your login password is :<strong>".$getpass['password']."</strong> ,if any query email us <a href='mailto:admin@gmail.com'>admin@gmail.com</a>";
  $message=$mes;
  $to=$getdate['email'];
  sendemail($to,$form,$subject,$message);
  redirect(RE_HOME_SUPERADMIN."index.php","Email successfully send~@~".MSG_SUCCESS);

}else{
  redirect(RE_HOME_SUPERADMIN."index.php","Error! Please enter valid email!~@~".MSG_ERROR);
}



}


?>
<!DOCTYPE html>
<html>
<head>
	<?php include "../../styles.php"  ?>
</head>
<body class="login-body">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Admin Login</h5>
            <?php echo show_message();?>
            <form class="form-signin" method="post">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              
              <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit" name="login">Login</button>
              <button type="button" class="btn btn-lg btn-primary btn-block text-uppercase" data-toggle="modal" data-target="#forgotpass">Forgot Password</button>
             
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="forgotpass" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post">
      <div class="modal-body">
        <label>Email <span class="text-danger">*</span></label>
        <input type="email" class="form-control" name="getemail" placeholder="Enter your email" required>
      </div>
      <div class="modal-footer border-top-0">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="forgotpass" class="btn btn-primary">Send</button>
      </div>
      </form>
    </div>
  </div>
</div>
  
</body>
<?php 
include "../../script.php"
?>
</html>
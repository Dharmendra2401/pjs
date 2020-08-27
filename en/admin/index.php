
<?php  
include "../../config/config.php" ;

if($_SESSION['admin_email']!=''){
  redirect(RE_EN_PATH."homepage.php");
}

if(isset($_REQUEST['login'])){
$email=mysqli_real_escape_string($con,trim($_REQUEST['email']));
$password=mysqli_real_escape_string($con,trim($_REQUEST['password']));
if(($email!='')&&($password!=''))
$login=mysqli_query($con,"select id,email,password from admin_login where email='".$email."' and password='".$password."' ");
$cont=mysqli_num_rows($login);
if($cont>0){
$fetch=mysqli_fetch_array($login);
$_SESSION['admin_email']=$fetch['email'];
$_SESSION['fullname']=$fetch['first_name'].' '.$fetch['last_name'];
$_SESSION['admin_id']=$fetch['id'];
redirect(RE_EN_PATH."index.php");
}else{
  redirect(RE_HOME_ADMIN."index.php","Invalid email and password.~@~".MSG_ERROR);
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
            <h5 class="card-title text-center">Login</h5>
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
             
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<?php 
include "../../script.php"
?>
</html>
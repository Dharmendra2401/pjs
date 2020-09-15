
<div id="loadergif" style="display:none;">
<img src="<?php echo RE_HOME_PATH; ?>images/ajaxloader.gif" width="100%">
</div>
<div class="row bg-white">

<div class="col-md-3 sm-image-wrapper">
<i class="fas fa-bars mobile-menu-icon"></i>
<a href="<?php echo  RE_EN_PATH;  ?>"><img class="sm-image" width="110" src="<?php echo  RE_HOME_PATH;  ?>images/logo1.png" style="padding: 10px;"></a>
</div>
<div class="col-md-6 d-flex justify-content-center">


<div class="input-group my-auto">
<!-- <input type="text" class="form-control" placeholder="Search" aria-label="Username"> -->
<input type="text" class="form-control" onkeyup="return searchBar();" placeholder="Search" id="search" size="30" autocomplete="off" >


<div class="input-group-append">
<button onclick="return searchpage();" type="submit"> <span class="input-group-text"><i class="fa fa-search"></i></span></button>
</div>

<div id="searchdata" class="searchdata"></div>
</div>
</div>
<div class="col-md-3 align-self-center text-right">
<i class="fas fa-language sm-icon-language"></i>
<i class="far fa-bell sm-icon-alert"></i>


<?php 

if ($_SESSION['sub_admin_email']!=''){

?>
<div class="dropdown loggedin">
<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
<?php echo $_SESSION['sub_admin_fullname']; ?>
</button>
<div class="dropdown-menu custom-dropdwn mt-2">
<a class="dropdown-item" href="<?php echo  RE_HOME_ADMIN; ?>password_change.php">Change password</a>
<!--  <a class="dropdown-item" href="saved_profile.php">Saved profiles</a>
<a class="dropdown-item openBtn-feed" type="button" data-toggle="modal" data-target="#feed">Feedback</a> -->
<a class="dropdown-item" href="<?php echo  RE_HOME_ADMIN; ?>logout_admin.php">Logout</a>
</div>
</div>


<?php

}else if ($_SESSION['user_mid']!=''){

?>
<div class="dropdown loggedin">
<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
<?php echo $_SESSION['ufullname']; ?>
</button>
<div class="dropdown-menu custom-dropdwn mt-2">
<a class="dropdown-item" href="#">View & Update Profile</a>
<a class="dropdown-item" href="#">Saved Profile</a>
<a class="dropdown-item" href="#">Feedback</a>
<!--  <a class="dropdown-item" href="saved_profile.php">Saved profiles</a>
<a class="dropdown-item openBtn-feed" type="button" data-toggle="modal" data-target="#feed">Feedback</a> -->
<a class="dropdown-item" href="<?php echo  RE_HOME_USER;?>logout_user.php">Logout</a>

</div>
</div>


<?php

}else if ($_SESSION['admin_id']!=''){

    ?>
    <div class="dropdown loggedin">
    <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
    <?php echo $_SESSION['admin_fullname']; ?>
    </button>
    <div class="dropdown-menu custom-dropdwn mt-2">
    <a class="dropdown-item" href="<?php echo RE_HOME_SUPERADMIN;?>password_change.php">Password Change</a>
    <!--  <a class="dropdown-item" href="saved_profile.php">Saved profiles</a>
    <a class="dropdown-item openBtn-feed" type="button" data-toggle="modal" data-target="#feed">Feedback</a> -->
    <a class="dropdown-item" href="<?php echo RE_HOME_SUPERADMIN;?>logout_admin.php">Logout</a>
    
    </div>
    </div>
    
    
    <?php
    
    }else{



?>

<button type="button" class="btn btn-primary open-login" data-toggle="modal" data-target="#loginPopup">
LOGIN/SIGUP
</button>

<?php } ?>

</div>

<div class="col-md-12 navbar-menu">
<span class="close-icon">&times;</span>
<nav class="navbar navbar-expand-sm">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="#">About Us</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Events</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Gallery</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Schemes</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Zones</a>
</li>
<?php if($_SESSION['user_mid']!=''){ ?>
<li class="nav-item">
<a class="nav-link" href="#">My Family</a>
</li>
<?php 
}
if ($_SESSION['sub_admin_email']!=''){

?>

<li class="nav-item">
<a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown">Reports</a>
<div class="dropdown-menu custom-dropdwn">	
<a class="dropdown-item" href="reg_request.php">Registered Users Count</a>
<a class="dropdown-item" href="contact_request">Death Count</a>
<a class="dropdown-item" href="#">OPJ Requests Report</a>
<a class="dropdown-item" href="#">Update Request Count</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown" href="#">Tickets</a>
<div class="dropdown-menu custom-dropdwn">	
<a class="dropdown-item" href="<?php echo RE_HOME_ADMIN;?>reg_request.php">New User Registration Requests</a>
<a class="dropdown-item" href="#">OPJ Contact Requests</a>
</div>
</li>
<?php } ?>
<?php 
if ($_SESSION['user_email']!=''){

?>

<li class="nav-item">
<a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown">Reports</a>
<div class="dropdown-menu custom-dropdwn">	
<a class="dropdown-item" href="reg_request.php">Registered Users Count</a>
<a class="dropdowncls-item" href="contact_request">Death Count</a>
<a class="dropdown-item" href="#">OPJ Requests Report</a>
<a class="dropdown-item" href="#">Update Request Count</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown" href="#">Tickets</a>
<div class="dropdown-menu custom-dropdwn">	
<a class="dropdown-item" href="<?php echo RE_HOME_ADMIN; ?>reg_request.php">New User Registration Requests</a>
<a class="dropdown-item" href="#">OPJ Contact Requests</a>
</div>
</li>
<?php } 

if ($_SESSION['admin_email']!=''){

?>

<li class="nav-item">
<a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown">Masters</a>
<div class="dropdown-menu custom-dropdwn">	
<a class="dropdown-item" href="#">About Us</a>
<a class="dropdown-item" href="#">Events</a>
<a class="dropdown-item" href="#">Gallery</a>
<a class="dropdown-item" href="#">Schemes</a>
<a class="dropdown-item" href="#">Zone</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo RE_HOME_SUPERADMIN;?>sub_admin.php">Sub Admins</a>
</li>
<?php } ?>



</ul>
</nav>


</div>


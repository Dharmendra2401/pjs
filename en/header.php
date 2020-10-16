<div id="loadergif" style="display:none;">
<img src="<?php echo RE_HOME_PATH; ?>images/ajaxloader.gif" width="100%">
</div>
<div class="row bg-color">

<div class="col-md-3 sm-image-wrapper text-center">
<i class="fas fa-bars mobile-menu-icon"></i>
<a class="logo-link" href="<?php echo  RE_EN_PATH;  ?>"><img class="sm-image" width="110" src="<?php echo  RE_HOME_PATH;  ?>images/logo1.png"></a>
</div>
<div class="col-md-6 d-flex justify-content-center sm-pb10">
<div class="input-group my-auto">
<!-- <input type="text" class="form-control" placeholder="Search" aria-label="Username"> -->
<input type="text" class="form-control" onkeyup="return searchBar();" placeholder="Search" id="search" size="30" autocomplete="off" ><button class="cancel-btn searchbtn" onclick="return searchbarclick();"><i class="fa fa-times"></i></button>





<div class="input-group-append d-none d-md-block">
<button onclick="return searchpage();" type="submit" class="srch-btn"> <span class="input-group-text"><i class="fa fa-search"></i></span></button>
</div>

<div id="searchdata" class="searchdata"></div>
</div>
</div>
<div class="col-md-3 align-self-center text-right">
<!-- <i class="fas fa-language sm-icon-language"></i> -->
<?php 

if ($_SESSION['sub_admin_email']!='' || $_SESSION['user_mid']!='' || $_SESSION['admin_id']!=''){

?>
<i class="far fa-bell sm-icon-alert"></i>


<?php 
}
if ($_SESSION['sub_admin_email']!=''){

?>
<div class="dropdown loggedin">
<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
<span class="d-sm"><i class="fas fa-user-check"></i></span>
<span class="d-md"><?php echo $_SESSION['sub_admin_fullname']; ?></span>
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
    <span class="d-sm"><i class="fas fa-user-check"></i></span>
    <span class="d-md"><?php echo $_SESSION['ufullname']; ?></span>
</button>
<div class="dropdown-menu custom-dropdwn mt-2">
<a class="dropdown-item" href="<?php echo  RE_HOME_PATH;?>en/view_and_update_profile.php">View & Update Profile</a>
<a class="dropdown-item" href="saved_profile.php">Saved Profile</a>
<a class="dropdown-item feed_btn" data-toggle="modal" data-target="#modal45">Feedback</a>
<a class="dropdown-item" href="<?php echo  RE_HOME_USER;?>password_change.php">Password Change</a>
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
        <span class="d-sm"><i class="fas fa-user-check"></i></span>
        <span class="d-md"><?php echo $_SESSION['admin_fullname']; ?></span>
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

<button type="button" class="btn btn-primary login-btn" data-toggle="modal" data-target="#login">
LOGIN/SIGUP
</button>
<i class="fas fa-user login-icon" data-toggle="modal" data-target="#login"></i>
<?php } ?>

</div>

<div class="col-md-12 navbar-menu">
<nav class="navbar navbar-expand-sm">
<ul class="navbar-nav">

<li class="nav-item">
<a class="nav-link" href="<?php echo RE_EN_PATH; ?>about_us.php">About Us</a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo RE_EN_PATH; ?>events.php">Events</a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo RE_EN_PATH; ?>gallery.php">Gallery</a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo RE_EN_PATH; ?>schemes.php">Schemes</a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo RE_EN_PATH; ?>zones.php">Zones</a>
</li>
<?php if($_SESSION['user_mid']!=''){ ?>
<li class="nav-item">
<!-- <a class="nav-link" href="#">My Family</a> -->
    <a type="button" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
      My Family
    </a>
    <div class="dropdown-menu custom-dropdwn">
      <a class="dropdown-item" href="tree.php">Family Tree</a>
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#death_update">Death Update</a>
    </div>
  
</li>
<?php
}
if ($_SESSION['sub_admin_email']!=''){

?>

<li class="nav-item">
<a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown">Reports</a>
<div class="dropdown-menu custom-dropdwn">	
<a class="dropdown-item" href="<?php echo RE_HOME_ADMIN;?>reg_users.php">Registered Requests Reports</a>
<a class="dropdown-item" href="<?php echo RE_HOME_ADMIN;?>death_request_reports.php">Death Requests Reports</a>
<a class="dropdown-item" href="<?php echo RE_HOME_ADMIN;?>opj_request_reports.php">OPJ Requests Report</a>
<!-- <a class="dropdown-item" href="<?php echo RE_HOME_ADMIN;?>mobile_update_reports.php">Mobile Number Requests Reports</a> -->
</div>
</li>
<li class="nav-item">
<a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown" href="#">Tickets</a>
<div class="dropdown-menu custom-dropdwn">	
<a class="dropdown-item" href="<?php echo RE_HOME_ADMIN;?>reg_request.php">New User Registration Requests</a>
<a class="dropdown-item" href="<?php echo RE_HOME_ADMIN;?>opj_request.php">OPJ Contact Requests</a>
<!-- <a class="dropdown-item" href="<?php echo RE_HOME_ADMIN;?>user_updation_request.php">Mobile Number Requests</a> -->
<a class="dropdown-item" href="<?php echo RE_HOME_ADMIN;?>death_request.php">Death Requests</a>
</div>
</li>
<?php } ?>
<?php 
if ($_SESSION['user_email']!=''){
?>
<li class="nav-item">
<a class="nav-link dropdown-toggle" type="button" data-toggle="dropdown">Reports</a>
<div class="dropdown-menu custom-dropdwn">	
<a class="dropdown-item" href="<?php echo RE_HOME_ADMIN;?>reg_request.php">Registered Users Count</a>
<a class="dropdowncls-item" href="<?php echo RE_HOME_ADMIN;?>contact_request">Death Count</a>
<a class="dropdown-item" href="">OPJ Requests Report</a>
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
<a class="dropdown-item" href="<?php echo RE_HOME_SUPERADMIN; ?>slider.php">Slider</a>
<a class="dropdown-item" href="<?php echo RE_HOME_SUPERADMIN; ?>about_us.php">About Us</a>
<a class="dropdown-item" href="<?php echo RE_HOME_SUPERADMIN; ?>events.php">Events</a>
<a class="dropdown-item" href="<?php echo RE_HOME_SUPERADMIN; ?>gallery.php">Gallery</a>
<a class="dropdown-item" href="<?php echo RE_HOME_SUPERADMIN; ?>schemes.php">Schemes</a>
<a class="dropdown-item" href="<?php echo RE_HOME_SUPERADMIN; ?>zone.php">Zone</a>
<!-- <a class="dropdown-item" href="<?php echo RE_HOME_SUPERADMIN; ?>addcity.php">Add City</a> -->
</div>
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo RE_HOME_SUPERADMIN;?>sub_admin.php">Sub Admins</a>
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo RE_HOME_SUPERADMIN;?>feedback.php">FeedBack</a>
</li>
<?php } ?>


<input type="hidden" name="" class="curr_mid" value="<?php echo $_SESSION['user_mid'];?>">


</ul>
</nav>

</div>

<style type="text/css">
    .feed_btn{
        cursor: pointer;
    }
</style>
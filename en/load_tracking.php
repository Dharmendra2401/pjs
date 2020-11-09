<?php
include "../config/config.php";
$getrequest=$_REQUEST['status'];
$query=mysqli_query($con,'select request_id,active_status,record_inserted_dttm,record_updated_dttm from staging_approval where request_id="'.$getrequest.'" ');
$countt=mysqli_num_rows($query);
if($countt>0){
$row=mysqli_fetch_array($query);
?>

<div class="row top-tracker-icon">
<div class="col-md-2 text-center"></div>
<div class="col-md-2 text-center margin-manage"><div class="icon-tracking text-success"><i class="fas fa-arrow-circle-right"></i><h6>Submitted</h6> <small class="px-md-2 alert-secondary alert-sm"><?php echo date('d/m/Y',strtotime($row['record_inserted_dttm'])); ?> </small>  </div><h6 class="border tracking-border"></h6></div>
<div class="col-md-2 text-center margin-manage">

<?php if($row['active_status']=='Y') {?>

<div class="icon-tracking text-secondary">
<i class="fas fa-arrow-circle-right"></i><h6>Wating for Approval</h6></div>

<?php }  else if($row['active_status']=='U') {?> 
<div class="icon-tracking text-warning"> 
<i class="fas fa-pause-circle"></i> 
<h6>Updated</h6> <small class="px-md-2 alert-secondary alert-sm"><?php echo date('d/m/Y',strtotime($row['record_updated_dttm'])); ?> </small> </div>


 <?php } else if($row['active_status']=='R') {?>  
<div class="icon-tracking text-danger"> 
<i class="fas fa-times-circle"></i> 
<h6>Rejected</h6> <small class="px-md-2 alert-secondary alert-sm"><a href="<?php echo RE_EN_PATH;?>userupdate/update.php?token=<?php echo base64_encode($row['request_id']);?>" style="text-decoration: underline;">Click here </a> to upate your form</a> </small></div>
<?php } else { ?>
 
<div class="icon-tracking text-success"> 
<i class="fas fa-arrow-circle-right"></i> 
<h6>Approved</h6></div>

<?php } ?>
<h6 class="border tracking-border"></h6>  
</div>


<div class="col-md-2 text-center margin-manage">
<?php if($row['active_status']=='N') {?>
<div class="icon-tracking text-success"><i class="fas fa-arrow-circle-right"></i><h6>Member Id Assigned</h6></div>
<?php } else{?>
<div class="icon-tracking text-secondary"><i class="fas fa-arrow-circle-right"></i><h6>Member Id Not Assigned</h6></div>
<?php } ?>
<h6 class="border tracking-border"></h6></div>



<div class="col-md-2 text-center margin-manage">
<?php if($row['active_status']=='N') {?>
<div class="icon-tracking text-success"><i class="fas fa-check-circle"style="transform: initial;"></i><h6>Process Completed</h6></div>
<div class="col-md-2 text-center"></div>
<?php }else {?>
<div class="icon-tracking text-secondary"><i class="fas fa-times-circle" ></i><h6>Process Incomplete</h6></div>
<div class="col-md-2 text-center"></div>
<?php } ?>

</div>     
</div><br>
</div>
<?php }else {?>
<div class="text-center"><span class="alert-danger" style="padding: 5px;border-radius: 5px;">Sorry!No Records Found</span></div><br>
<?php } ?>
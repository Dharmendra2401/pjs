<?php 
include "../config/config.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "../styles.php";  ?>
<body>
	<div class="container-fluid mb-5">
		<?php include "header.php";  ?>
          
    <?php  
    $zonecat=mysqli_query($con,'select * from zone_categories where status="Y" order by id desc');
    $countzonecat=mysqli_num_rows($zonecat);
    while($zoneid=mysqli_fetch_array($zonecat)){
    ?>
          <div class="col-12 text-center my-4">
             <h3><span><?php echo $zoneid['categories'];?></span></h3><hr>
          </div>
          <?php 
            $zone=mysqli_query($con,'select * from zones where status="Y" and zone_cat="'.$zoneid['id'].'" order by id desc'); 
            $count=mysqli_num_rows($zone);
            while($getzones=mysqli_fetch_array($zone)){
            ?>
            <div class="col-md-2 col-6 text-center">
                <img class="img-fluid" src="<?php echo RE_HOME_PATH.'/'.$getzones['short_image'] ?>" alt="Event" >
                <p class="mb-0 text-center"><?php echo $getzones['fullname'] ;?></p>
                <p class="text-center"><?php echo $getzones['mobileno'] ; ?></p>
            </div>
            <?php  } if($count==0){ ?>
              <div class="col-md-12"><div class="alert alert-danger text-center">No Records Found</div></div>
         

            <?php  } } if($countzonecat==0){ ?>
            <div class="col-md-12">
<div class="alert alert-danger text-center">No Records Found</div>
</div>
            <?php } ?>
          
	</div>
  <?php include "../footer.php" ?>
</body>
<?php include "../script.php" ?>
</html>
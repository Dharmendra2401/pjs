<?php 
include "../config/config.php";
?>
<!DOCTYPE html>
<html>
<?php include "../styles.php";  ?>
<body>
	<div class="container-fluid mb-5">
		<?php include "header.php";  ?>
          
    
          <div class="col-12 text-center my-4">
             <h3><span>परामर्शदाता</span></h3><hr>
          </div>
          <?php 
            $zone=mysqli_query($con,'select * from zones where status="Y" order by id desc'); 
            $count=mysqli_num_rows($zone);
            while($getzones=mysqli_fetch_array($zone)){
            ?>
            <div class="col-md-3 col-6">
                <img class="img-fluid" src="<?php echo RE_HOME_PATH.'/'.$getzones['short_image'] ?>" alt="Event">
                <p class="mb-0"><strong><?php echo $getzones['fullname'] ;?></strong></p>
                <p><strong><?php echo $getzones['mobileno'] ; ?></strong></p>
            </div>
            <?php  } ?>


            <div class="col-12 text-center my-4">
             <h3><span>मुख्य कार्यकारिणी</span></h3><hr>
            </div>
          <?php 
            $zone=mysqli_query($con,'select * from zones where status="Y" order by id desc'); 
            $count=mysqli_num_rows($zone);
            while($getzones=mysqli_fetch_array($zone)){
            ?>
            <div class="col-md-3 col-6">
                <img class="img-fluid" src="<?php echo RE_HOME_PATH.'/'.$getzones['short_image'] ?>" alt="Event">
                <p class="mb-0"><strong><?php echo $getzones['fullname'] ;?></strong></p>
                <p><strong><?php echo $getzones['mobileno'] ; ?></strong></p>
            </div>
            <?php  } ?>


            <div class="col-12 text-center my-4">
             <h3><span>झोन कार्यकारिणी</span></h3><hr>
            </div>
          <?php 
            $zone=mysqli_query($con,'select * from zones where status="Y" order by id desc'); 
            $count=mysqli_num_rows($zone);
            while($getzones=mysqli_fetch_array($zone)){
            ?>
            <div class="col-md-3 col-6">
                <img class="img-fluid" src="<?php echo RE_HOME_PATH.'/'.$getzones['short_image'] ?>" alt="Event">
                <p class="mb-0"><strong><?php echo $getzones['fullname'] ;?></strong></p>
                <p><strong><?php echo $getzones['mobileno'] ; ?></strong></p>
            </div>
            <?php  } ?>
        

      <!-- <div class="col-md-10 offset-md-1 content-container">
            <?php 
            $zone=mysqli_query($con,'select * from zones where status="Y" order by id desc'); 
            $count=mysqli_num_rows($zone);
            while($getzones=mysqli_fetch_array($zone)){
            ?>
            <div class="row my-4 zone">
              <div class="col-md-3 px-4 zone-img-container">
                <img width="100%" class="img-fluid" src="<?php echo RE_HOME_PATH.'/'.$getzones['short_image'] ?>" alt="Event">
              </div>
              <div class="col-md-9">
                  <div class="row zone-info">
                      <div class="col-md-3 col-5 font-weight-bold">
                          <p>Name :</p>
                          <p>Address :</p>
                          <p>Phone Number :</p>
                          <p>Email :</p>
                      </div>
                      <div class="col-md-9 col-7">
                          <p><?php echo $getzones['fullname'] ;?></p>
                          <p><?php echo $getzones['address'] ; ?></p>
                          <p><?php echo $getzones['mobileno'] ; ?></p>
                          <p><?php echo $getzones['email'] ; ?></p>
                      </div>
                  </div>
              </div>
            </div>
            <hr>
         
            <?php  } ?>
            </div> -->
          
	</div>
  <?php include "../footer.php" ?>
</body>
<?php include "../script.php" ?>
</html>
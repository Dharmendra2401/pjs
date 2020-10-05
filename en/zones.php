<?php 
include "../config/config.php";
?>
<!DOCTYPE html>
<html>
<?php include "../styles.php";  ?>
<body>
	<div class="container-fluid">
		<?php include "header.php";  ?>
		

      <!-- <div class="col-md-10 offset-md-1 py-5 zones-bg">
        <div class="row">
            <div class="col-md-2">
                <div class="card custom-card">
                  <img  class="card-img-top profile-img" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="image">
                  <div class="card-body">
                      <h4 class="card-title">John Doe</h4>
                      <p class="card-text">architect and engineer</p>
                  </div>
                </div>
            </div>
             <div class="col-md-2">
                <div class="card custom-card">
                  <img  class="card-img-top profile-img" src="../uploads/dummy.png" alt="image">
                  <div class="card-body">
                      <h4 class="card-title">John Doe</h4>
                      <p class="card-text">architect and engineer</p>
                  </div>
                </div>
            </div>
             <div class="col-md-2">
                <div class="card custom-card">
                  <img  class="card-img-top profile-img" src="../uploads/dummy.png" alt="image">
                  <div class="card-body">
                      <h4 class="card-title">John Doe</h4>
                      <p class="card-text">architect and engineer</p>
                  </div>
                </div>
            </div>
        </div>
  			
      </div> -->

      <div class="col-md-10 offset-md-1 content-container">
            <div class="col-12 my-4">
                <div class="col-12">
                 <p>
                   इस सेक्शन में पोरवाड़ सामाजिक मंच के कितने ज़ोन्स है और हर ज़ोन के अध्यक्ष या वालंटियर के निम्नलिखित जानकारी दे
                 </p>
                 <ul>
                   <li>फोटो</li>
                   <li>नाम</li>
                   <li>पता</li>
                   <li>फ़ोन नंबर</li>
                   <li>ईमेल</li>
                 </ul>
              </div>
            </div>

            <?php 
            $zone=mysqli_query($con,'select * from zones where status="Y" order by id desc'); 
            $count=mysqli_num_rows($zone);
            while($getzones=mysqli_fetch_array($zone)){
            ?>
            <div class="row my-4">
              <div class="col-md-3 px-4">
                <img width="100%" class="img-fluid" src="<?php echo RE_HOME_PATH.'/'.$getzones['short_image'] ?>" alt="Event">
              </div>
              <div class="col-md-9">
                  <div class="row">
                      <div class="col-md-3 font-weight-bold">
                          <p>Name :</p>
                          <p>Address :</p>
                          <p>Phone Number :</p>
                          <p>Email :</p>
                      </div>
                      <div class="col-md-9">
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
            </div>
	</div>
</body>
<?php include "../script.php" ?>
</html>
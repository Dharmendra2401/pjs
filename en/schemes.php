<?php
include "../config/config.php";
?>
<!DOCTYPE html>
<html>
<?php include "../styles.php";  ?>
<body>
  <div class="container-fluid">
    <?php include "header.php";  ?>
         
          <div class="col-md-10 offset-md-1 content-container accordion" id="accordionExample">
            <!-- <h4 class="my-5">इस सेक्शन में पोरवाड़ सामाजिक मंच किस तरह की और क्या स्कीम्स लेन वाला है इस बारे में बताये संक्षिप्त में </h4> -->
            <div class="row my-4 schemes">

<?php $schemes=mysqli_query($con,'select * from  schemes where status="Y" order by id desc ') ; $count=mysqli_num_rows($schemes);
$countt=0;
while($getschemes=mysqli_fetch_array($schemes)){

?>

              <div class="col-md-3 px-4 schemes-img-container">
                <img width="100%" class="img-fluid" src="<?php echo RE_HOME_PATH.'/'.$getschemes['short_image'];  ?>" alt="Event">
              </div>
              <div class="col-md-9 schemes-info">
                  <h3><?php echo $getschemes['title'];  ?></h3>
                  <?php echo substr($getschemes['content'],0,700) ; if(substr($getschemes['content'],700)!=''){?>
                  <p id="collapse<?php echo $countt; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">.
                  </p>
                  <span class="more" data-toggle="collapse" data-target="#collapse<?php echo $countt; ?>">Show More</span>
                  <?php } ?>
              </div>
            
           <div class="col-md-12"> <hr></div>
          
           
         
<?php $countt ++;} ?>
  </div>
  </div>
  <?php include "../footer.php" ?>
</body>
<?php include "../script.php" ?>
</html>






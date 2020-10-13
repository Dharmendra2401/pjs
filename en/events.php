<?php
include "../config/config.php";
?>
<!DOCTYPE html>
<html>
<?php include "../styles.php";  ?>
<body>
	<div class="container-fluid">
		<?php include "header.php";  ?>
			<div class="col-md-10 offset-md-1 accordion content-container" id="accordionExample">
				<h4 class="my-5">
				  इस सेक्शन में पोरवाड़ सामाजिक मंच के इवेंट्स (पुराने और आने वाले) के बारे में बताए
				</h4>
				<?php
				$getevent=mysqli_query($con,'select * from events where status="Y" order by id desc');
				$countevent=mysqli_num_rows($getevent);$count=0;
				while($showevent=mysqli_fetch_array($getevent)){
				
				?>
				<div class="row my-4">
					<div class="col-md-3">
						<div class="position-relative">
							<img width="100%" class="img-fluid" src="<?php echo RE_HOME_PATH.'/'.$showevent['short_image']; ?>" alt="<?php  echo  $showevent['title']; ?>" title="<?php  echo  $showevent['title']; ?>">
						    <div class="event-name"><?php  echo  $showevent['title']; ?></div>
						</div>
					</div>
					<div class="col-md-9 content-limit">
						<?php
						     if (strlen($showevent['content']) < 1100) {
							  echo '<span class="content-view">'.substr($showevent['content'],0,1100).'</span>';
							}

							else{
						echo '<span class="content-view">'.substr($showevent['content'],0,1100).'<span id=dots-'.$count.'>.......</span>';
						if (substr($showevent['content'],1100)!=''){ echo '<div id="demo'.$count.'" class="collapse">
						'.substr(trim($showevent['content']),1100).'
						</div><a id= btn-'.$count.' data-toggle="collapse" href="#" data-target="#demo'.$count.'">Show More</a>';}
						       }

							 ?>
						<!-- <span id="dots">...</span> -->
					</div>
					</div>
				<?php $count++;} if($countevent==0){
					echo "<div class='col-md-12 text-center'>No Records Found</div><br>";
				} ?>
				</div>
				
			</div>
				
	</div>
	<?php include "../footer.php" ?>
</body>
<?php include "../script.php" ?>
<script type="text/javascript">
var anchor = document.querySelectorAll('a');
for (var i = 0; i < anchor.length; i++) {
	
    anchor[i].addEventListener("click", function() {
           // alert(this.id);
           var btnId = $(this).attr('id');
           var dots = $(this).siblings("p").children('span').attr('id');
           // alert($(this).siblings("p").children('span').attr('id'));
           if ($('#'+dots).css('display') === 'none') {
               $('#'+dots).css("display", "inline");
               $('#'+btnId).text("Show More");
  }
		  else {
		    $('#'+dots).css("display", "none");
		    $('#'+btnId).text("Show Less");
		  }
    });
}
</script>
</html>
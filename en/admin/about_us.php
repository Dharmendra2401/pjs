<?php include "../../config/config.php" ;
include "../mail/index.php" ;
require_once("../../library/upload.php");
admin_session_check();
$getaboutus=mysqli_fetch_array(mysqli_query($con,'select * from about_us where id=1'));
if(isset($_REQUEST['submit'])){

$content=mysqli_real_escape_string($con,trim($_REQUEST['content']));
if($content!=''){
if($_FILES["image"]["name"]!=''){
$sizex=1350;
$sizey=400;
$ext=explode(".",$_FILES["image"]["name"]);
$url="../../uploads/aboutus/". str_replace(" ","",sha1($_FILES["image"]["name"].time()).".".$ext[sizeof($ext)-1]);
$url12="uploads/aboutus/". str_replace(" ","",sha1($_FILES["image"]["name"].time()).".".$ext[sizeof($ext)-1]);
move_uploaded_file($_FILES["image"]["tmp_name"],$url);
$x=$sizex;
$y=$sizey;
$image=imagename($url,$x,$y);
imagemulitple($url,$x,$y);
unlink($url);
unlink('../../uploads/aboutus/'.$getaboutus['image']);			
}else{
    $image=$getaboutus['image'];
}
$update=mysqli_query($con,'update about_us set image="'.$image.'", content="'.$content.'"  where id=1');
redirect(RE_HOME_SUPERADMIN."about_us.php","Record updated successfully~@~".MSG_SUCCESS);

}
redirect(RE_HOME_SUPERADMIN."about_us.php","Error! Please fill out the fields and try again~@~".MSG_ERROR);

}

?>

<!DOCTYPE>
<html>
<head>
<?php  include "../../styles.php" ?>
</head>

<body>
<div class="container-fluid">
<?php  include "../header.php" ?>
</div>
<div class="container shadow">
<h3 class="ticket-header">About Us</h3>
<br>
<form method="post"  enctype="multipart/form-data">
<?php echo show_message();?>
<!-- <div class="form-group row">
<label class="col-md-2 col-form-label"><span class="text-danger">*</span> Image </label>	
<div class="col-md-3">
<input type="file"  name="image"  accept="image/png, image/jpeg"    >
</div> 
<div class="col-md-5">
<img src="<?php echo RE_HOME_PATH; ?>uploads/aboutus/<?php echo $getaboutus['image'] ;?>" title="About us image" width="200px">
</div>
</div>-->

<div class="form-group row">
<label class="col-md-2 col-form-label"><span class="text-danger">*</span> Content</label>	
<div class="col-md-8">
<textarea type="text" class="form-control" name="content"  placeholder="Enter content" id="editor" required><?php echo $getaboutus['content'] ;?></textarea>
</div>
</div>

<div class="form-group row">
<div class="col-md-12 text-center">
<input type="submit" class="btn btn-success"  name="submit" value="Submit" required>

</div><br><br>


</form>
<?php include "../../footer.php" ?>
</body>
<?php include "../../script.php" ?>
</html>
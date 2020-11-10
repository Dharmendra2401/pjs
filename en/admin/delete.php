<?php 

require_once("../../config/config.php");
admin_session_check();
$get=is_not_empty($_REQUEST,"id");

if(is_not_empty($_REQUEST,"id~@~table"))
{
$id=$_REQUEST["id"];
$table=$_REQUEST["table"];


if($table=='sub_admin_login'){	   
mysqli_query($con,"DELETE FROM ".$table." WHERE request_id='".$id."'");
}

if($table=='events'){	
$getimage=mysqli_fetch_array(mysqli_query($con,'select short_image,long_image from events where id="'.$id.'"')); 
unlink('../../'.$getimage['short_image']);
unlink('../../'.$getimage['long_image']);

mysqli_query($con,"DELETE FROM ".$table." WHERE request_id='".$id."'");
}

if($table=='zone_catagories'){	
   $query=mysqli_query($con,'select short_image,long_image from zones where zone_cat="'.$id.'"'); 
    while($getimage=mysqli_fetch_array($query)){
    unlink('../../'.$getimage['short_image']);
    unlink('../../'.$getimage['long_image']);
    mysqli_query($con,"DELETE FROM zones WHERE zone_cat='".$id."'");
    }
mysqli_query($con,"DELETE FROM `zone_categories` WHERE id='".$id."'");
}


if($table=='schemes'){	
$getimage=mysqli_fetch_array(mysqli_query($con,'select short_image,long_image from schemes where id="'.$id.'"')); 
unlink('../../'.$getimage['short_image']);
unlink('../../'.$getimage['long_image']);

mysqli_query($con,"DELETE FROM ".$table." WHERE request_id='".$id."'");
}

if($table=='zone'){	
$getimage=mysqli_fetch_array(mysqli_query($con,'select short_image,long_image from zones where id="'.$id.'"')); 
unlink('../../'.$getimage['short_image']);
unlink('../../'.$getimage['long_image']);

mysqli_query($con,"DELETE FROM ".$table." WHERE id='".$id."'");
}


if($table=='slider'){	
$getimage=mysqli_fetch_array(mysqli_query($con,'select image,mobile_image from slider where id="'.$id.'"')); 
unlink('../../'.$getimage['image']);
unlink('../../'.$getimage['mobile_image']);
mysqli_query($con,"DELETE FROM ".$table." WHERE id='".$id."'");
}

if($table=='gallery'){	
$getimage=mysqli_fetch_array(mysqli_query($con,'select short_image,long_image from gallery where id="'.$id.'"')); 
unlink('../../'.$getimage['short_image']);
unlink('../../'.$getimage['long_image']);
mysqli_query($con,"DELETE FROM ".$table." WHERE request_id='".$id."'");
}



mysqli_query($con,"DELETE FROM ".$table." WHERE id='".$id."'");
echo 'ok';
exit();
}
echo 'false';
exit();
?>
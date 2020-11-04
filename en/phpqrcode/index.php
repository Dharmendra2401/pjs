<?php    
/*
 * PHP QR Code encoder
 *
 * Exemplatory usage
 *
 * PHP QR Code is distributed under LGPL 3
 * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */
	include "../../config/config.php" ; 
	$current_user_id=$_SESSION['user_mid'];
	$fire=mysqli_query($con,"SELECT mem.feet,mem.inches, mem.member_id,mem.middle_name,mem.first_name,mem.last_name,addrss.full_address,addrss.city,comm.email,mem.fathers_name,mem.gender,mem.age,mem.date_of_birth,mem.place_of_birth,mem.time_of_birth,mem.marital_status,mem.blood_group,mem.popular_name,mem.marital_status,addrss.member_id,addrss.full_address,addrss.city,addrss.state,addrss.country,addrss.pincode,comm.member_id,comm.mobile,comm.email,edu.member_id,edu.highest_edu,edu.occupation,edu.ocp_details,edu.income,keyy.id,keyy.display_pic,addrss.city,addrss.state,addrss.pincode,addrss.country,mp.* from member as mem INNER JOIN address as addrss on mem.member_id=addrss.member_id INNER JOIN communication as comm on mem.member_id=comm.member_id INNER JOIN education_ocp as edu on mem.member_id=edu.member_id INNER JOIN key_member_id as keyy on mem.member_id=keyy.id INNER JOIN member_privacy mp on mem.member_id=mp.member_id where mem.member_id= '$current_user_id'")or die(mysqli_error($con));
	$row=mysqli_fetch_array($fire); 
	//echo "<h1>PHP QR Code</h1><hr/>";
	
	//set it to writable location, a place for temp generated PNG files
	$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
	
	//html PNG location prefix
	$PNG_WEB_DIR = 'temp/';

	include "qrlib.php";    
	
	//ofcourse we need rights to create temp dir
	if (!file_exists($PNG_TEMP_DIR))
		mkdir($PNG_TEMP_DIR);
	
	
	$filename = $PNG_TEMP_DIR.'test.png';
	
	//processing form input
	//remember to sanitize user input in real-life solution !!!
	$errorCorrectionLevel = 'L';
	if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
		$errorCorrectionLevel = $_REQUEST['level'];    

	$matrixPointSize = 4;
	if (isset($_REQUEST['size']))
		$matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);


	if (isset($_REQUEST['data'])) { 
	$data12=RE_EN_PATH."user_detail.php?token=".base64_encode($current_user_id);
		//it's very important!
		if (trim($_REQUEST['data']) == '')
			die('data cannot be empty! <a href="?">back</a>');
			
		// user data
		$filename = $PNG_TEMP_DIR.'test'.md5($data12.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
		QRcode::png($data12, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
		
	} else {    
	
		//default data
		//echo 'You can provide data in GET parameter: <a href="?data=like_that">like that</a><hr/>';    
		QRcode::png(RE_EN_PATH."user_detail.php?token=".base64_encode($current_user_id), $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
		
	}    
		
	//display generated file
	//echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>';  
	
	//config form
	// echo '<form action="index.php" method="post">
	// 	Data:&nbsp;<input name="data" value="'.(isset($_REQUEST['data'])?htmlspecialchars($_REQUEST['data']):'PHP QR Code :)').'" />&nbsp;
	// 	ECC:&nbsp;<select name="level">
	// 		<option value="L"'.(($errorCorrectionLevel=='L')?' selected':'').'>L - smallest</option>
	// 		<option value="M"'.(($errorCorrectionLevel=='M')?' selected':'').'>M</option>
	// 		<option value="Q"'.(($errorCorrectionLevel=='Q')?' selected':'').'>Q</option>
	// 		<option value="H"'.(($errorCorrectionLevel=='H')?' selected':'').'>H - best</option>
	// 	</select>&nbsp;
	// 	Size:&nbsp;<select name="size">';
		
	// for($i=1;$i<=10;$i++)
	// 	echo '<option value="'.$i.'"'.(($matrixPointSize==$i)?' selected':'').'>'.$i.'</option>';
		
	// echo '</select>&nbsp;
	// 	<input type="submit" value="GENERATE"></form><hr/>';
		
	// benchmark
	//QRtools::timeBenchmark();    

	?>
	<!DOCTYPE html> 
<html>
<head>
<?php include "../../styles.php";  ?>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>

</head>
<body>
	<div class="container-fluid">
	<?php include "../header.php"  ?>
</div>
	   <!--  <img style="width:70px;" src="http://www.splio4.com/barcode/qrcode.pl?data=http%3A%2F%2Fmywebsite.com%2F$favorite_brand$">
 -->
<div class="row1"  id="html-content-holder" style="width: 70%;float: left;margin-bottom: 3em;min-width: 1300px;text-shadow: 0px 1px 1px rgba(0,0,0,1);margin-top: 2em;">
	<div style="width: 500px;background-color: #446eb6;
background-image: linear-gradient(#446eb6, #3eb8e9);border-left: solid 3px #00f;
margin-left: 1em;float: left;" class="main-div">
		<div class="row" style="background-color: #fe0000;margin-left: 0px;margin-right: 0px;box-shadow: 1px 1px 0px #fe0000, 2px 2px 0px #fe0000, 3px 3px 0px #fe0000, 4px 4px 0px #fe0000, 5px 5px 0px #fe0000, 6px 6px 0px #fe0000;">
			<div class="col-2" style="padding-top: 15px;padding-left:20px;">
				<div class="logo" style="background-image: url(<?php echo RE_HOME_PATH; ?>images/logo1.png); height:70px;width: 70px;background-repeat: no-repeat;background-size: contain;"></div>
			</div>
			<div class="col-10 align-self-end sm-tr user-detail-info">
				<div class="row">
				<div class="col-2"></div>
				<div class="col-6">
					<h5 class="text-white mb-0">P J C</h5>
					<p class="text-white mb-0" style="padding-bottom: 0.5em;"> Porwad Jain Card</p>
				</div>
				<div class="col-3"></div>
				</div>
			</div>
		</div>
		<div class="row pt-1" style="width: 100%"> 
			<div class="col-12 align-self-end sm-tr user-detail-info">
				<div class="row">
					<div class="col-4"></div>
					<div class="col-4" style="padding-top:10px;font-size: 1.2em;">
						<p class="text-white text-center"><?php echo $current_user_id;?></p>
					</div>
					<div class="col-4"></div>
				</div>
			</div>      
			<div class="col-12 align-self-end sm-tr user-detail-info">
				<div class="col-12 align-self-end sm-tr user-detail-info">
					<div class="row">
						<div class="col-3"></div>
							<div class="col-6">
								<p class="text-white mb-0">Name&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['first_name'].' '.$row['last_name']; ?></p>
							</div>
						<div class="col-3"></div>
					</div>
					<div class="row">
						<div class="col-3"></div>
						<div class="col-6">
							<p class="text-white mb-0">DOB&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo date('d/m/Y',strtotime($row['date_of_birth'])); ?></p>
						</div>
						<div class="col-3"></div>
					</div>
					<div class="row">
						<div class="col-3"></div>
							<div class="col-6">
								<p class="text-white mb-0">BG&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp <?php if($row['blood_group']==1){echo 'A+';} else if($row['blood_group']==2){echo 'B+';}
                        else if($row['blood_group']==3){echo 'AB+';}else if($row['blood_group']==4){echo 'O+';}else if($row['blood_group']==5){echo 'A+';}else if($row['blood_group']==6){echo 'B-';} else if($row['blood_group']==7){echo 'AB-';}else if($row['blood_group']==8){echo 'O-';} else {echo 'NA';}  ; ?></p>
							</div>
						<div class="col-3"></div>
					</div>
					<div class="row">
						<div class="col-3"></div>
						<div class="col-6">
<!-- 							<div class="row">
								<div class="col-6">City</div>
								<div class="col-6"><?php echo $row['city'];?>,<?php echo $row['state'];?>,<?php echo $row['country'];?></</div>
							</div>
 -->							<div class="row text-white">
                            	<div class="col-4 pr-0">
                            		City<span style="padding-left: 32px;">:</span>
                            	</div>
                            	<div class="col-8">
                            		<span > <?php echo $row['city'];?>,<?php echo $row['state'];?>,<?php echo $row['country'];?></span>
                            	</div>
                            </div>
						</div>
						<div class="col-3" style="padding-left: 0px;padding-right: 0px;text-align: center;">
							<p class="text-white" style="text-align: right;margin-left: 69px;">sign&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp<div style="background-image: url(signature.png);height: 102px;background-repeat: no-repeat;background-size: cover;width: 257px;margin-left: -129px;position: absolute;top: -67px;"></div>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div  style="width: 500px;background-color: #446eb6;
	background-image: linear-gradient(#446eb6, #3eb8e9);border-left: solid 3px #00f;
	margin-left: 1em;float: left;min-height: 263px;text-shadow: 0px 1px 1px rgba(0,0,0,1);
	" class="main-div">
		<div class="col-12 align-self-end sm-tr user-detail-info">
			<div class="row">

				<div class="col-12" style="padding-top:10px;min-height: 80px;background: #fe0000;box-shadow: 1px 1px 0px #fe0000, 2px 2px 0px #fe0000, 3px 3px 0px #fe0000, 4px 4px 0px #fe0000, 5px 5px 0px #fe0000, 6px 6px 0px #fe0000;">
					<p class="text-white text-left" style="font-size: 11px;">Disclaimer : This card is for identification purpose only. PSM will not responsible for any declaration by registered member</p>
				</div>
				<div class="col-12 pt-1 pb-2" style="padding-top: 2em !important;">
				<div style="float: right;width:100px;height:100px; background-repeat: no-repeat;background-size: contain;background-image: url('<?php echo $PNG_WEB_DIR.basename($filename);?>');"></div>
				</div>
			</div>
		</div> 
	</div>
</div>
<div class="row mt-1 mb-2 mob_btn_view" style="margin-top: 2em !important;">
	<input id="btn-Preview-Image" type="button" value="Preview"/>
	<a id="btn-Convert-Html2Image" href="#" style="display: none;">Download</a>
</div>
	<br/>
	<h3>Preview :</h3>
	<div id="previewImage" style="margin-bottom: 5em;">
	</div>

<script>
$(document).ready(function(){

	
var element = $("#html-content-holder"); // global variable
var getCanvas; // global variable
	$("#btn-Preview-Image").on('click', function () {
		 html2canvas(element, {
		 onrendered: function (canvas) {
				$("#previewImage").append(canvas);
				getCanvas = canvas;
			 }
		 });
		$("#btn-Convert-Html2Image").css("display","block");
        $(this).css("display","none"); 
	});

	$("#btn-Convert-Html2Image").on('click', function () {
	var imgageData = getCanvas.toDataURL("image/png");
	// Now browser starts downloading it instead of just showing it
	var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
	$("#btn-Convert-Html2Image").attr("download", "your_pic_name.png").attr("href", newData);
	});

});

</script>
 <?php include "../../footer.php" ?>
<?php include "../../phpqrcode/script.php" ?>
</body>
</html>
<style type="text/css">
	/*.main-div:before{
  background: none;
  border: 4px solid #fff;
  content: "";
  display: block;
  position: absolute;
  top: 4px;
  left: 4px;
  right: 4px;
  bottom: 4px;
  pointer-events: none;
	}
*/
@media only screen and (max-width: 900px) {
	.mob_btn_view{
		clear: both;
		margin-left: 15px;
	}
}
</style>
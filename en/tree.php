<?php 
include "../config/config.php";

?>

<!DOCTYPE html>
<html>
<head>
 <?php include "../styles.php" ?>
</head>

<body class="bg-white">
	 <div class="container-fluid">
				<?php include "header.php";  ?>
				<input type="hidden" id="current-users" value="<?php $current_user=$_SESSION['user_mid'];echo $current_user;?>">
				</div>
		 <div class="row mt-3">
				 <div class="col-md-4">
				 	<div class="card mb-2">
						<div class="card-body pb-2 death-update">
							<h5 class="card-title"><i class="fas fa-flag text-danger"></i>
								Click here to Update Dead Person
								<i class="fas fa-plus float-right"></i>
							</h5>
							<form action="" class="d-none-form" enctype="multipart/form-data" id="dead_person_form">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control form-control-sm" placeholder="Enter name" id="d_name" name="d_name">
								</div>
								<div class="form-group">
									<label>Popular Name</label>
									<input type="text" class="form-control form-control-sm" placeholder="Enter name" id="d_popname" name="d_popname">
								</div>
								<div class="form-group">
										<label>relation type</label>
									<select class="form-control form-control-sm" id="relationship_type" name="relationship_type">
										<option value="Grandfather">Grandfather</option>              
										<option value="Father">Father</option>
										<option value="Husband">Husband</option>
										<option value="Brother">Brother</option>
										<option value="Son">Son</option>
										<option value="Grandmother">Grandmother</option>
										<option value="Mother">Mother</option>
										<option value="Wife">Wife</option>                
										<option value="Daughter">Daughter</option>                
										<option value="Sister">Sister</option>
									</select>
								</div>
								<div class="form-group">
									<label>Date of Death</label>
									<input type="text" onfocus="(this.type='date')" class="form-control form-control-sm dod" placeholder="Enter Date" id="dod">
								</div>
								<div class="form-group">
									<label>Upload Image</label>

								 <input type="file" class="form-control form-control-sm" id="file" name="file">
								</div>
								<button type="button" class="btn btn-primary btn-sm mb-2 float-right dead_person">Submit</button>
							</form>
						</div>	
					</div>
				 	<form method="post" action="">
						<div class="input-group my-auto">
							<input type="text" class="form-control  mb-3" placeholder="Search" id="search" size="30" autocomplete="off" name="search_value" >
							<div class="input-group-append">
							<input class="btn btn-primary mb-3" type="submit" name="submit1" value="submit">
							</div>
						</div>
					</form>
					
					
					<div id="searchdata" class="searchdata d-none"></div>
								<!-- <button class="btn btn-primary float-right my-3 save">Save</button> -->
									<div class="row tree-srch-list">
                                
								<?php  if(isset($_POST['submit1'])){
							 $current_user=$_SESSION['user_mid'];
							 $search_value=$_REQUEST['search_value'];
										if ($search_value=='') {
											?>
									<div class="text-center"><td valign="top" colspan="12" class="dataTables_empty" align="center">No records found</td></div>
											<?php 
										}
										else{
								//  include_once 'family_search_member.php';  
									//
										
									$query ="SELECT * FROM `member` WHERE (`first_name` LIKE '%$search_value%' or `member_id` LIKE '%$search_value%') AND member_id NOT IN (SELECT MEM.member_id FROM `relationship` RS INNER JOIN `member` MEM ON RS.reference_member_Id = MEM.member_id WHERE RS.member_id = '$current_user' UNION
SELECT MEM.MEMBER_ID FROM `relationship` RS INNER JOIN `member` MEM ON RS.member_id = MEM.member_id WHERE RS.reference_member_Id = '$current_user') AND member_id !='$current_user'  ORDER BY member_id"; 

									//if($page==1){ $count=1;}else{$count=$page*10-10+1;}
									//$rest = mysqli_query($con,"SELECT * FROM ".$stat);
									

									$rs = mysqli_query($con,$query) or die(mysqli_error($con));
									$row_count=mysqli_num_rows($rs);

									if($row_count>0){
									while($row=mysqli_fetch_assoc($rs)){      
									?>
										<div class="col-md-12">
												<ul class="list-unstyled list-inline list-card">
													<li class="list-inline-item">
														<?php 

														 $getimg=mysqli_fetch_array(mysqli_query($con,"select display_pic,id from key_member_id where id='".$row['member_id']."'"));
														
														?>
														<img class="tree-user-img" src="<?php echo RE_HOME_PATH.$getimg['display_pic'] ?>">
													</li>
													<li class="list-inline-item searchoption">
														<p><?php echo $row['first_name'].' '. $row['middle_name'].' '.$row['last_name']; ?></p>
														<p><?php echo $row['member_id']; ?></p>
													</li>
													<li class="list-inline-item float-right">
														<?php if($row['Life_status']=='D'){?>
														<i class="fas fa-flag text-danger"></i>
													<?php } else {?>
														<i class="fas fa-user-plus add-member-icon" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $row['member_id']; ?>" data-gender="<?php echo $row['gender'];?>" data-name="<?php echo $fullname=$row['first_name'].' '. $row['middle_name'].' '.$row['last_name'];?>"></i>
														<input type="hidden" referenc-id="<?php echo $row['member_id'];?>" gender="<?php echo $row['gender'];?>">
													<?php  } ?>
													</li>
												</ul> 
										</div>

									<?php	 }

								}
									else{ 
									?>

									<div class="text-center"><td valign="top" colspan="12" class="dataTables_empty" align="center">No records found</td></div>

									<?php }
											}					 
									}
								?>
				        </div>

				 </div>
				 <div id="add" class="col-md-4 list-height">
						 <?php  include_once './PJS-demo/tree.php';?>
				 </div>
				 <div class="col-md-4 text-right">
				 	<span>
				 		<i class="fas fa-flag text-danger"></i>
				 		<strong>: Indicates Dead person</strong>
				 	</span>
				 	   
				 </div>
		 </div>

	 </div> 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Send Request To</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<input type="hidden" class="form-control" id="referenc-id">
						<input type="hidden" class="form-control" id="Member_Id">
					</div>
					 <div class="form-group" id="live_relation_type">
							<select class="form-control female" style="display: none">
								<option value="Grandmother">Grandmother</option>
								<option value="Mother">Mother</option>   
								<option value="Wife">Wife</option>             
								<option value="Daughter">Daughter</option>                
								<option value="Sister">Sister</option>
							</select>
							<select class="form-control male" style="display: none;">
								<option value="Grandfather">Grandfather</option>              
								<option value="Father">Father</option>
								<option value="Husband">Husband</option>
								<option value="Brother">Brother</option>
								<option value="Son">Son</option>
							</select>

						</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary send_request">Save</button>
			</div>
		</div>
	</div>
</div>
<!---->

 
<!-- Modal -->

<div id="success_tic" class="modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered">

	<!-- Modal content-->
		<div class="modal-content">
			<a class="close close-icn" href="#" data-dismiss="modal">&times;</a>
			<div class="page-body">
				<div class="head">  
					<h3 style="margin-top:5px;">Request Sent Successfully</h3>
				</div>

				<h1 style="text-align:center;">
					<div class="checkmark-circle">
						<div class="background"></div>
						<div class="checkmark draw"></div>
					</div>
				<h1>
			</div>
		</div>
	</div>

</div>
<input type="hidden" name="" id="home_path" value="<?php echo RE_HOME_PATH;?>">
<!---->
<?php include "../footer.php" ?>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php include "../script.php"; ?>
 <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

</html>
<script type="text/javascript">
	// $("#dead_person_form").hide();
	$(".death-update h5 i").on("click", function(){	
		// $("#dead_person_form").toggle();
		$(".d-none-form, .d-form").toggleClass("d-none-form d-form");
		$(".fa-plus, .fa-minus").toggleClass("fa-plus fa-minus");
	});
</script>

<script type="text/javascript">
	$('#exampleModal').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	var recipient = button.data('whatever') // Extract info from data-* attributes
	 var gender = button.data('gender')
	 var name = button.data('name')
	 
	 var member_id= $("#current-users").val();
	// relationship_type_user
	console.log("gender");
	 var modal = $(this)
	 if (gender=='M') {
		modal.find('.male').css('display','block');
		modal.find('.female').css('display','none');
	 }
	 else{
		modal.find('.female').css('display','block');
		modal.find('.male').css('display','none');

	 }
	 //console.log(gender);
	// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	
	modal.find('.modal-title').text('Send Request To : ' + name)
	modal.find('.modal-body #referenc-id').val(recipient)
	modal.find('.modal-body #Member_Id').val(member_id)
})
	
	$(".send_request").on("click", function () {
		var member_id=$("#Member_Id").val()
		var reference=$("#referenc-id").val()
		var relationship_type1=$("#live_relation_type select:visible option:selected").val()
 		var home_path=$("#home_path").val();
		$.post(home_path+"en/PJS-demo/send_request.php",
			{
				member_id: member_id,
				reference_id:reference,
				relationship_type:relationship_type1
			},
		function(data,status){
			var status1=status;
			if (status1=='success') {
				// window.location.reload();
				// $('#exampleModal').modal('hide')
				// $('#success_tic').modal('show')
				location.reload(true);
			}
			else{
				alert("Data: not updated");
			}
		});

	})
	$(".close-icn").on("click", function () {
			location.reload(true);
	})

	$(document).ready(function() {
			$("#dead_person_form").validate({
					rules: {
							d_name: "required"
					},
					messages: {
							d_name: "Please specify name"
					}
			})
			$(".dead_person").on("click", function () {

			if (!$("#dead_person_form").valid()) { // Not Valid
				return false;
			} 
			else {
				var fd = new FormData();
				var files = $('#file')[0].files[0];
				var d_name=$('#d_name').val();
				var d_popname=$('#d_popname').val();
				var dod=$('#dod').val();
				var relationship_type=$("#relationship_type:visible option:selected").val();
				var member_id=$("#current-users").val();
				fd.append('file',files);
				fd.append('d_name',d_name);
				fd.append('d_popname',d_popname);
				fd.append('dod',dod); 
				fd.append('relationship_type',relationship_type); 
				fd.append('member_id',member_id);
 				var home_path=$("#home_path").val();
				$.ajax({
					url: home_path+'en/PJS-demo/dead_persion_send_request.php',
					type: 'post',
					data: fd,
					contentType: false, 
					processData: false,
					success: function(response){
						console.log(response); 
						if(response == 'success'){
							location.reload(true);
						}else{
							alert('some thing is not good please try again after some time');
						}
					},
				});
			}
				
		})

});
	$(".approve").on("click", function () {
  var to_userid=$(this).attr('id');
  var home_path=$("#home_path").val();
  var current_varr=$(this);

 $.post(home_path+"en/PJS-demo/approveuser.php",
    {
      to_userid: to_userid
        },
    function(data,status){
      var status1=status;
      console.log(status1);
      if (status1=='success') {
     // window.location.reload();
    current_varr.removeClass("approve");
    current_varr.text("member");
  }
  else{
       alert("Data: not updated");

  }
    });

});
</script>


<style type="text/css">
	#dead_person_form .error{
		color: red;
	}
	.approve{
		cursor: pointer;
	}
</style>
<?php 
include "../config/config.php";
user_session_check();
?>

<!DOCTYPE html>
<html>
<head>
 <?php include "../styles.php" ?>
 <style type="text/css">
.death-update .file-input{
    position: relative;
    display: block;
    width: 100%;
    height: calc(1em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    margin-bottom: 15px;
}

.file-type{
    opacity: 0;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
}

.browse-txt{
    position: absolute;
    right: 0;
    top: 0px;
    font-size: 14px;
    background-color: #eeeeee;
    height: calc(1em + .75rem + 2px);
    padding: 4px 20px 0 20px;
    z-index: 1;
}
 </style>
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
							<h5 class="card-title">
								<i class="fas fa-flag text-danger pr-2"></i>
								<span class="hindi-text">अपंजीकृत स्वर्गीय / पूर्वज ऐड करें। </span>
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
								<div class="row">
									<div class="form-group col-md-6">
										<label>Relation type</label>
										<select class="form-control form-control-sm" id="relationship_type" name="relationship_type">
											<option value="">please Select relationship</option> 
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

									<div class="form-group col-md-6">
										<label>Date of Death</label>
										<input type="text" onfocus="(this.type='date')" class="form-control form-control-sm dod" placeholder="Enter Date" id="dod">
									</div>
								</div>
								
								
								
									<!-- <label>Upload Image</label> -->
								 <div class="file-input">
								 	<input type="file" class="file-type" placeholder="Choose File" id="file" name="file">
								 	<span class="browse-txt">Browse</span>
								 </div>
								
								<button type="button" class="btn btn-primary btn-sm mb-2 float-right dead_person">Submit</button>
							</form>
						</div>	
					</div>
					<div class="card mb-2">
						<div class="card-body pb-2 new-update">
							<h5 class="card-title">
								<span class="hindi-text">जीवित पंजीकृत मेंबर्स को यहाँ सर्च करे।</span>
								<i class="fas fa-plus float-right"></i>
							</h5>
<!-- 							<form class="d-none-new-form" method="post" action="">
								<div class="input-group my-auto">
									<input type="text" class="form-control  mb-3" placeholder="Search" id="search" size="30" autocomplete="off" name="search_value" >
									<div class="input-group-append">
									<input class="btn btn-primary mb-3" type="submit" name="submit1" value="submit">
									</div>
								</div>
							</form> -->
							<form class="d-none-new-form">
							<div class="input-group my-auto">
							<input type="text" class="form-control" onkeyup="return searchBar1();" placeholder="Search" id="search1" size="30" autocomplete="off" ><button class="cancel-btn1 searchbtn1" onclick="return searchbarclick1();" style="display: none;"><i class="fa fa-times"></i></button>
							</div>

							<div id="searchdata1" class="searchdata1" style="display: none;"></div>
							</form>
						</div>	
					</div>
<!-- 				 	<form method="post" action="">
						<div class="input-group my-auto">
							<input type="text" class="form-control  mb-3" placeholder="Search" id="search" size="30" autocomplete="off" name="search_value" >
							<div class="input-group-append">
							<input class="btn btn-primary mb-3" type="submit" name="submit1" value="submit">
							</div>
						</div>

					</form> -->
					
					
					
								<!-- <button class="btn btn-primary float-right my-3 save">Save</button> -->


<!-- 							for search 		<div class="row tree-srch-list">
                                
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
				        </div> -->

				 </div>
				 <div id="add" class="col-md-4 list-height">
						 <?php  include_once './PJS-demo/tree.php';?>
				 </div>
				 <div class="col-md-4 text-right">
				 	<span>
				 		<i class="fas fa-flag text-danger"></i>
				 		<strong>: स्वर्गीय </strong>
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
				<form id="send_request_form">
					<div class="form-group">
						<input type="hidden" class="form-control" id="referenc-id">
						<input type="hidden" class="form-control" id="Member_Id">
					</div>
					<p class="err msg" style="background: red;color:#fff;font-weight:400;"></p>
					 <div class="form-group" id="live_relation_type">
							<select class="form-control female" style="display: none" name="relationship_type_select" id="relationship_type_ids">
								<option value="">Select</option>
								<option value="Grandmother">Grandmother</option>
								<option value="Mother">Mother</option>  
								<?php if($_SESSION['curr_gender']=='M'){ ?> 
								<option value="Wife">Wife</option>    
								<?php } ?>         
								<option value="Daughter">Daughter</option>                
								<option value="Sister">Sister</option>
							</select>
							<select class="form-control male" style="display: none;" name="relationship_type_select" id="relationship_type_ids">
								<option value="">Select</option>
								<option value="Grandfather">Grandfather</option>              
								<option value="Father">Father</option>
								<?php if($_SESSION['curr_gender']=='F'){ ?>
								<option value="Husband">Husband</option>
							<?php } ?>
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
	$(".death-update h5 i").on("click", function(){	
		$(this).parent(".card-title").siblings("form").toggleClass("d-none-form");
		$(this).toggleClass("fa-plus fa-minus");
	});

	$(".new-update h5 i").on("click", function(){	
		$(this).parent(".card-title").siblings("form").toggleClass("d-none-new-form");
		$(this).toggleClass("fa-plus fa-minus");
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
	$("#send_request_form").validate({
					rules: {
							relationship_type_select: "required"
					},
					messages: {
							relationship_type_select: "Please Select relationship type"
					}
			})
	$(".send_request").on("click", function () {
		if (!$("#send_request_form").valid()) { // Not Valid
			return false;
		} 
		else{
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
				var da=$.trim(data);
				// console.log(da);
				// return;
				if (da=='data insert success') {
					// window.location.reload();
					// $('#exampleModal').modal('hide')
					// $('#success_tic').modal('show')
					location.reload(true);
				}
				else{
					$('.err.msg').show();
					$('.err.msg').text(da);
					$('.err.msg').css("padding","10px");
				}
			});
		}

	})
	$('#exampleModal').on('hide.bs.modal', function (e) {
		$('.err').hide();
		$('label.error').hide();
		
	})
//  
	$(".btnrequest_relation_delete").on("click", function (e) {
		var member_id=$(this).attr('id');
		var reference_member_id=$(this).data('referenceid');
		var relationshiptype=$(this).data('relationshiptype');
		var curr=$(this);
	bootbox.confirm("Are you sure you want to remove this user", function(result) {
	if(result){ 
		$('#loadergif').fadeIn();
		$.ajax({
		type: 'POST',
		url: "<?php echo RE_HOME_PATH?>en/PJS-demo/request_relation_delete.php",
		data: {"member_id":member_id,"reference_member_id":reference_member_id,"relationshiptype":relationshiptype},
		success: function(data1234){
			var da=$.trim(data1234);
			if(da=='success')	
			{	
				//BtnClickPage(page,10);
				$('#loadergif').fadeOut();
				$(parent).remove();
				curr.parents(".col-md-2").parents(".row").parents(".card-body").parents(".tree-card").remove();
			}
			if(da=='false')	
			{	
			//	BtnClickPage(page,10);
				$('#loadergif').fadeOut();
			}
		} 
		});	
	}	

})
	});




	$(".close-icn").on("click", function () {
			location.reload(true);
	})

	$(document).ready(function() {
			$("#dead_person_form").validate({
					rules: {
							d_name: "required",
							relationship_type:"required"
					},
					messages: {
							d_name: "Please specify name",
							relationship_type:"Please select relationship type"
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
		
	}
	.approve{
		cursor: pointer;
	}
	#dead_person_form .error
</style>

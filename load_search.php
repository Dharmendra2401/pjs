<?php  require_once("config/config.php"); 

$stat='';
$statu='';

if($_REQUEST['search']!='')
{$statu.= 'and (member_id LIKE "%'.$_REQUEST['search'].'%" or first_name LIKE "%'.$_REQUEST['search'].'%") ';}


if(isset($_REQUEST['ustatus']))
{$statu.= 'and status LIKE "'.$_REQUEST['ustatus'].'%" ';}
$stat="member where 1=1  $statu order by member_id desc";

//$startpoint = ($page * $limit) - $limit;
echo $query = "SELECT * FROM ".$stat." LIMIT 0 , 3"; 
//if($page==1){ $count=1;}else{$count=$page*10-10+1;}
$rest = mysqli_query($con,"SELECT * FROM ".$stat);
$row_count=mysqli_num_rows($rest);

$rs = mysqli_query($con,$query);
$count=1;
while($row=mysqli_fetch_assoc($rs)){			
?>
<div class="row">
			<div class="col-12">
				
						<a href="<?php echo RE_EN_PATH; ?>user_detail.php?token=<?php echo base64_encode($row['member_id']);?>">
							<ul class="list-unstyled list-inline">
								<li class="list-inline-item">
                                    <?php 
                                    
                                    $getimg=mysqli_fetch_array(mysqli_query($con,"select display_pic,id from key_member_id where id='".$row['member_id']."'"))
                                    ?>
									<img class="user-list-img" src="<?php echo RE_HOME_PATH.''. $getimg['display_pic']; ?>">
								</li>
								<li class="list-inline-item searchoption">
									<p><?php echo $row['first_name'].' '. $row['middle_name'].' '.$row['last_name']; ?></p>
							        <p><?php echo $row['member_id']; ?></p>
								</li>
						    </ul>
					    </a>
					
			</div>
		</div>

<?php $count++; }

if ($row_count>3){

?>
<a href="<?php   ?>">see more result</a>

<?php

}

if($row_count<=0){
?>

<div class="text-center"><td valign="top" colspan="12" class="dataTables_empty" align="center">No records found</div></tr>

<?php }?>


</div>
<div>

<?php

//$txtpage= paginationjquery($con,$stat,$limit,$page,"?","");					   

//echo "<table width='100%'><tr><td  style='padding:3px;'><div class='dataTables_paginate paging_bootstrap'>".$txtpage."</div></td></tr></table>";

?>
</div>
</div>  

<?php
require_once("../config/config.php");
$stat='';
$statu='';

if($_REQUEST['search']!='')
{$statu.= 'and (member_id LIKE "%'.trim($_REQUEST['search']).'%" or first_name LIKE "%'.trim($_REQUEST['search']).'%") ';}
if($_SESSION['user_mid']!='')
{$statu.= 'and member_id!= "'.$_SESSION['user_mid'].'" ';}

$stat="member where 1=1  $statu order by member_id desc";
$page = (int) (!isset($_REQUEST["page"]) ? 1 : $_REQUEST["page"]);
$limit = (int) (!isset($_REQUEST["pagesize"]) ? 10 : $_REQUEST["pagesize"]);
$startpoint = ($page * $limit) - $limit;
$query = "SELECT * FROM ".$stat." LIMIT ".$startpoint." , ".$limit; 
if($page==1){ $count=1;}else{$count=$page*10-10+1;}
$rest = mysqli_query($con,"SELECT * FROM ".$stat);
$row_count=mysqli_num_rows($rest);
$rs = mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($rs)){		
?>

<div class="col-md-12">
    <a class="search-output"
        href="<?php echo RE_EN_PATH; ?>user_detail.php?token=<?php echo base64_encode($row['member_id']);?>">
        <ul class="list-unstyled list-inline search srch-card">
            <li class="list-inline-item">
                <?php 

$getimg=mysqli_fetch_array(mysqli_query($con,"select display_pic,id from key_member_id where id='".$row['member_id']."'"));
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
<?php $count++; }
if($row_count<=0){
?>

<div class="col-md-12 text-center">No records found

    <?php }?>
    <?php

$txtpage= paginationjquery($con,$stat,$limit,$page,"?","");					   

echo "<table width='100%'><tr><td  style='padding:3px;'><div class='dataTables_paginate paging_bootstrap'>".$txtpage."</div></td></tr></table>";

?>
</div>
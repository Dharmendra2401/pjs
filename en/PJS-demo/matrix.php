<?php 
include 'tree_structure.php';
global $conn;
$id=1001;
//$link = mysqli_connect("server", "user", "password", "database");

$query = "SELECT IF((RS.Member_Id = '$id')>0,'from-current-user','to-user') as request_side_user ,RS.Reference_Member_Id,MEM.first_name as name,MEM.gender,RS.Relation_Type,RS.ACTIVE_STATUS,MEM.display_pic FROM `dwr_vts_t.dbo.relationship` RS LEFT JOIN `user` MEM ON RS.Reference_Member_Id = MEM.MEMBER_ID WHERE RS.Member_Id = '$id' UNION
SELECT IF((RS.Reference_Member_Id = '$id')>0,'to-user','from-current-user') as request_side_user,RS.Member_Id,MEM.first_name as name,MEM.gender,RS.Relation_Type,RS.ACTIVE_STATUS, MEM.display_pic FROM `dwr_vts_t.dbo.relationship` RS LEFT JOIN `user` MEM ON RS.Member_Id = MEM.MEMBER_ID WHERE RS.Reference_Member_Id = '$id';"; /*  first query : Notice the 2 semicolons at the end ! */
$query .= "SELECT * From dead_person WHERE Reference_Member_Id=1001;"; /* Notice the dot before = and the 2 semicolons at the end ! */

/* Execute queries */
$result1=mysqli_multi_query($conn, $query);
$data1=mysqli_store_result($result1);
$row = mysqli_fetch_array($data1);
echo "<pre>";
print_r($row);
exit;
if (mysqli_multi_query($conn, $query)) {
do {
    /* store first result set */
    if ($result = mysqli_store_result($conn)) {
        while ($row = mysqli_fetch_array($result)) 

/* print your results */    
{
	echo "<pre>";
print_r($row);
}
mysqli_free_result($result);
}   
} while (mysqli_next_result($conn));

}


?> 

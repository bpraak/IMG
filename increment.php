<?php 
include './include/db.php';

$downloads=mysqli_real_escape_string($conn,$_POST['downloads']);
$id=mysqli_real_escape_string($conn,$_POST['id']);

$query="UPDATE post SET downloads='$downloads' WHERE post_id='$id'";
$retrieve=mysqli_query($conn,$query);

?>

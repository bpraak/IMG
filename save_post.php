<?php
include './include/db.php';
$post_title=mysqli_real_escape_string($conn,$_POST['post_title']);
$post_des=mysqli_real_escape_string($conn,$_POST['post_des']);
$subject_id=mysqli_real_escape_string($conn,$_POST['subject_id']);
$branch_id=mysqli_real_escape_string($conn,$_POST['branch_id']);
$type_id=mysqli_real_escape_string($conn,$_POST['type_id']);
$content=mysqli_real_escape_string($conn,$_POST['content']);
$id=$_SESSION['user_id'];
$thumbnail_img = $_FILES['content']['name'];
$thumbnail_img_temp = $_FILES['content']['tmp_name'];
move_uploaded_file($thumbnail_img_temp, "./media/");

$sql = "INSERT INTO `post`(`post_title`, `post_des`, `content`, `created`, `status`, `downloads`, `user_id`, `branch_id`, `type_id`, `subject_id`) VALUES ('$post_title','$post_des','$thumbnail_img',now(),'1','0','$id','$branch_id','$type_id','$subject_id')";
if (mysqli_query($conn, $sql)) {
    echo 1;
} 
else {
    echo 0;
}

?>

<?php
include './include/db.php';
//$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'media/'; // upload directory
//if(!empty($_POST['name']) || !empty($_POST['email']) || $_FILES['image'])
//{
$img = $_FILES['content']['name'];
$tmp = $_FILES['content']['tmp_name'];
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
// check's valid format

$path = $path.strtolower($final_image); 
if(move_uploaded_file($tmp,$path)) 
{
//echo "<img src='$path' />";
$post_title=mysqli_real_escape_string($conn,$_POST['post_title']);
$post_des=mysqli_real_escape_string($conn,$_POST['post_des']);
$subject_id=mysqli_real_escape_string($conn,$_POST['subject_id']);
$branch_id=mysqli_real_escape_string($conn,$_POST['branch_id']);
$type_id=mysqli_real_escape_string($conn,$_POST['type_id']);
//$content=mysqli_real_escape_string($conn,$_POST['content']);
//include database configuration file
$id=$_SESSION['user_id'];
//insert form data in the database
//$insert = $db->query("INSERT uploading (name,email,file_name) VALUES ('".$name."','".$email."','".$path."')");
$query="INSERT INTO `post`(`post_title`, `post_des`, `content`, `created`, `status`, `downloads`, `user_id`, `branch_id`, `type_id`, `subject_id`) VALUES ('$post_title','$post_des','".$path."',now(),'1','0','$id','$branch_id','$type_id','$subject_id')";
mysqli_query($conn,$query);
//echo $insert?'ok':'err';
}
 
else 
{
echo 'invalid';
}
//}
?>

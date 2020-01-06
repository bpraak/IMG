<?php
	include './include/db.php';
	$enrol=mysqli_real_escape_string($conn,$_POST['enrol']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$branch_id=mysqli_real_escape_string($conn,$_POST['branch_id']);

	$sql = "INSERT INTO `user`(`user_enrol`, `password`, `user_name`, `branch_id`, `created`, `status`, `posts`) VALUES ('$enrol','$password','$name','$branch_id',now(),'1','0')";
	if (mysqli_query($conn, $sql)) {
        echo 1;
    } 
	else {
		echo 0;
	}
	
?>
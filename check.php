<?php
include "./include/db.php";

$enrol = mysqli_real_escape_string($conn,$_POST['enrol']);
$password = mysqli_real_escape_string($conn,$_POST['password']);


if ($enrol != "" && $password != ""){

    $sql_query = "SELECT count(*) as cntUser,user.* FROM user WHERE user_enrol='".$enrol."' and password='".$password."'";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);
    $id=$row['user_id'];
    $user_name=$row['user_name'];
    $count = $row['cntUser'];
    
    if($count > 0){
        $_SESSION['enrol'] = $enrol;
        $_SESSION['user_id'] = $id;
        $_SESSION['user_name']=$user_name;
        
        echo 1;
    }else{
        echo 0;
    }

}
?>
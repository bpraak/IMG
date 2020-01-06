<?php
include './include/db.php';
?>
<!DOCTYPE HTML>
<html>

<head>
    <?php include './include/head.php';
        if(isset($_POST['submit']))
        {
            if($_POST['post_title']!="" && $_POST['branch_id']!="" && $_POST['subject_id']!="" && $_POST['post_des']!="" && $_POST['type_id']!="" && $_FILES['content']!="")
            {

                $id=$_SESSION['user_id'];  
                $post_title=$_POST['post_title'];
                $branch_id= $_POST['branch_id'];
                $subject_id=$_POST['subject_id'];
                $post_des= $_POST['post_des'];
                $type_id=$_POST['type_id'];
                $content = $_FILES['content']['name'];
                $content_temp = $_FILES['content']['tmp_name'];
                move_uploaded_file($content_temp, "./media/$content");
 
                $query="INSERT INTO `post`(`post_title`, `post_des`, `content`, `created`, `status`, `downloads`, `user_id`, `branch_id`, `type_id`, `subject_id`) VALUES ('$post_title','$post_des','$content',now(),'1','0','$id','$branch_id','$type_id','$subject_id')";
                        $retrieve=mysqli_query($conn, $query); 
                        if (!$retrieve){
                            die('QUERY FAILED'.mysqli_error($conn));
                        }
                          
//                    $last_id=mysqli_insert_id($conn);
//                         header("location:single.php?id=".$last_id);
            }
            
            else
            {
                echo "<script>alert('Incomplete Form');</script>";
            }
        }
        ?>
    <script>
        function getSubject(val) {
            $.ajax({
                type: "POST",
                url: "getSub.php",
                data: 'branch_id=' + val,
                success: function(data) {
                    $("#subject_id").html(data);
                }
            });
        }

    </script>
    
    <style>
        #header{
            padding:150px 0px 0px 0px;
        }
    @media (max-width:767px) {
            #header {
                padding: 150px 0px 0px 0px;
            }

        }

        @media (max-width:550px) {
            #header {
                padding: 190px 0px 0px 0px;
            }

        }

        @media (max-width:485px) {
            #header {
                padding: 190px 0px 0px 0px;
            }
        }

        @media (max-width:480px) {
            #header {
                padding: 140px 0px 0px 0px;
            }
        }

        @media (max-width:329px) {
            #header {
                padding: 250px 0px 0px 0px;
            }
        }

        @media (max-width:260px) {
            #header {
                padding: 230px 0px 0px 0px;
            }
        }
    </style>


</head>

<body class="cbp-spmenu-push">
    <div class="main-content">
        <!--left-fixed -navigation-->
        <?php include './include/left.php';?>
        <!--left-fixed -navigation-->

        <!-- header-starts -->
        <?php include './include/header.php';?>
        <!-- //header-ends -->
        <!-- main content start-->
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-3">
                    <center>
                        <h3 class="title1" id="header">Add Gem</h3>
                    </center>
                    <div class="form-three widget-shadow">
                        <div>
                            <form id="form" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="focusedinput">Post Title : </label>
                                    <input type="text" class="form-control" id="post_title" name="post_title" placeholder="Input Title">
                                </div>
                                <div class="form-group">
                                    <label for="selector1">Branch : </label>
                                    <!--									<div class="col-sm-8">-->
                                    <select name="branch_id" id="branch_id" class="form-control" onChange="getSubject(this.value);">
                                        <option value disabled selected>--Select Branch--</option>
                                        <?php
                                            $query="SELECT * FROM `branch` WHERE status='1'";
                                            $data=mysqli_query($conn,$query);
                                            while($row=mysqli_fetch_array($data))
                                            {
                                            ?>
                                        <option value="<?php echo $row['branch_id'];?>"><?php echo $row['branch_name'];?></option>
                                        <?php }?>
                                    </select>
                                    <!--                                </div>-->
                                </div>
                                <div class="form-group">
                                    <label for="selector1">Subject : </label>
                                    <!--									<div class="col-sm-8">-->
                                    <select name="subject_id" id="subject_id" class="form-control">

                                    </select>
                                    <!--                                    </div>-->
                                </div>

                                <div class="form-group">
                                    <label for="txtarea1">Post Description : </label>
                                    <!--									<div class="col-sm-8">-->
                                    <textarea name="post_des" cols="50" rows="4" class="form-control" id="editor"></textarea>
                                    <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
                                    <script src="ckeditor/sample.js" type="text/javascript"></script>
                                    <script>
                                        initSample();

                                    </script>
                                    <!--                                </div>-->
                                </div>
                                <div class="form-group">
                                    <label for="selector1">File Type : </label>
                                    <!--									<div class="col-sm-8">-->
                                    <select name="type_id" id="type_id" name="type_id" class="form-control">
                                        <option value disabled selected>--Select Type--</option>
                                        <?php
                                            $query="SELECT * FROM `type` WHERE status='1'";
                                            $data=mysqli_query($conn,$query);
                                            while($row=mysqli_fetch_array($data))
                                            {
                                            ?>
                                        <option value="<?php echo $row['type_id'];?>"><?php echo $row['type_name'];?></option>
                                        <?php }?>
                                    </select>
                                    <!--                                </div>-->
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input : </label>
                                    <input type="file" id="content" name="content" class="form-control">
                                </div>
                                <div class="form-group">
                                    
                                    <center><button type="submit" id="submit" name="submit" class="btn btn-default">Submit</button></center>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        <?php include './include/footer.php';?>
        <!--//footer-->
    </div>



    <!-- Classie -->
    <!-- for toggle left push menu script -->
    <script src="js/classie.js"></script>
    <script>
        var menuLeft = document.getElementById('cbp-spmenu-s1'),
            showLeftPush = document.getElementById('showLeftPush'),
            body = document.body;

        showLeftPush.onclick = function() {
            classie.toggle(this, 'active');
            classie.toggle(body, 'cbp-spmenu-push-toright');
            classie.toggle(menuLeft, 'cbp-spmenu-open');
            disableOther('showLeftPush');
        };

        function disableOther(button) {
            if (button !== 'showLeftPush') {
                classie.toggle(showLeftPush, 'disabled');
            }
        }

    </script>
    <!-- //Classie -->
    <!-- //for toggle left push menu script -->

   

    <!-- side nav js -->
    <script src='js/SidebarNav.min.js' type='text/javascript'></script>
    <script>
        $('.sidebar-menu').SidebarNav()

    </script>
    <!-- //side nav js -->



    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"> </script>
    <!-- //Bootstrap Core JavaScript -->

</body>

</html>

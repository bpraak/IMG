<?php
include './include/db.php';
if($_SESSION['enrol'] != '' &&  $_SESSION['user_id'] != '' && $_SESSION['user_name'] != '')
{
    
}
 else {
    echo "<script>window.location.href='leaf.php';</script>";
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <?php include './include/head.php';?>
    <style>
        * {
            box-sizing: border-box
        }

        /* Style the tab */
        .tab {
            padding-top: 90px;
            float: right;
            border: 0px solid #ccc;
            background-color: ;
            width: 100%;
            height: 93vh;
            font-family: Mukta;
            font-weight: 100;
        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 0px;
            width: 100%;
            border: none;
            outline: none;
            text-align: center;
            cursor: pointer;
            transition: 0.3s;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            font-weight: 800;
            /*            background-color: #ddd;*/
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            font-weight: 800;
            color: #f95700ff;
            /*            background-color: #ccc;*/
        }

        /* Style the tab content */
        .tabcontent {
            float: right;
            padding-top: 2vh;
            width: 94%;
            height: 85vh;
        }

        .noscroll {
            overflow: hidden;
        }



        /*        Welcome*/
        #select {
            padding: 4vh 0px 0px 19%;
            font-size: 30px;
            color: #F2B33F
                /*            font-family: StarJedi;*/
        }

        #welcome {
            padding: 35vh 0px 0px 19%;
            font-size: 80px;
            color: #f85700;
            /*            font-family: StarJedi;*/
        }

        @media (max-width:767px) {
            #welcome {
                padding: 35vh 0px 0px 0px;
                font-size: 50px
            }

            #select {
                padding: 4vh 0px 0px 0px;
                font-size: 18px;
            }
        }

        @media (max-width:326px) {
            #welcome {
                padding: 40vh 0px 0px 0px;
            }
        }



        #header {
            padding: 100px 0px 0px 25%;
            color: #f2b33e;
        }

        #show {
            padding: 0px 5% 0px 5%;
        }

        #single {
            border-radius: 13px;
            margin: 100px 6.5% 5px 25%;
            padding: 40px 0% 50px 0%;
            background-color: #fff;
            color: #123;
            font-family: Poppins-ExtraLight;
            box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.2);
        }

        @media (max-width:767px) {
            #header {
                padding: 150px 0px 0px 0px;
            }

            #show {
                padding: 0px 0% 0px 0%;
            }
            #single {
                margin: 150px 0% 0px 0%;
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




        .padded {
            padding: 0px 5% 0px 10%
        }

        .title {
            font-family: Poppins-Bold;
            color: #fa4251;
        }

        .data {
            color: #006884;
            font-family: Poppins-regular;
        }

    </style>


</head>


<body class="cbp-spmenu-push">
    <div class="noscroll">
        <div class="main-content">
            <!-- header-starts -->
            <?php include './include/header.php';?>
            <!-- //header-ends -->


            <!--left-fixed -navigation-->
            <?php include './include/left.php';?>
            <!--left-fixed -navigation-->

            <!-- main content start-->
            <div id="none">
                <?php
            if (isset($_GET['pid']))
            {
                $pid=$_GET['pid'];
                $query="Select post.*,type.type_name,subject.*,branch.branch_name,user.user_name FROM post JOIN type ON post.type_id=type.type_id JOIN subject ON post.subject_id=subject.subject_id JOIN branch ON post.branch_id=branch.branch_id JOIN user ON post.user_id=user.user_id WHERE post_id='$pid'";
                $select_data=mysqli_query($conn,$query);
                $row=mysqli_fetch_array($select_data);
                ?>
                <div class="row">
                    <div class="container-fluid" id="single">
                        <!--                        <div class="single">-->
                        <center>
                            <iframe src="./media/<?php echo $row['content'];?>" width="80%" height="300px" style="border-radius:0px;"></iframe>
                        </center><br><br>
                        <div class="padded">
                            <div class="row">
                                <!--                                <div class="container-fluid">-->
                                <div class="col-sm-4">
                                    <div class="title">Post Title : </div><br>
                                    <div class="data"><?php echo $row['post_title'];?></div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="title">Date Uploaded : </div><br>
                                    <div class="data"><?php echo $row['created'];?></div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="title">Downloads :</div> <br>
                                    <div class="data" id="<?php echo "d".$row['post_id'];?>"><?php echo $row['downloads'];?></div>
                                </div>

                                <!--                                </div>-->
                            </div>
                            <br>

                            <div class="title">Post Description :</div> <br>
                            <div class="data"><?php echo $row['post_des'];?></div>
                            <br>
                            <div class="row">
                                <!--                                <div class="container-fluid">-->
                                <div class="col-sm-4">
                                    <div class="title">Branch : </div><br>
                                    <div class="data"><?php echo $row['branch_name'];?></div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="title">Subject : </div><br>
                                    <div class="data"><?php echo $row['subject_code']." - ".$row['subject_name'];?></div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="title">Uploaded by :</div><br>
                                    <div class="data"> <?php echo $row['user_name'];?></div>
                                </div>
                                <!--                                </div>-->
                            </div>
                        </div>
                        <br><br>
                        <div id="<?php echo "p".$row['post_id'];?>" style="display:none;"><?php echo $row['post_id'];?></div>
                        <center>
                            <a href="./media/<?php echo $row['content'];?>" download>
                                "<button class="btn btn-default" style="background-color:#fa4251" id="<?php echo "b".$row['post_id'];?>">Download</button>
                            </a>
                        </center>
                        <!--download-increment-->
                        <script>
                            $(document).ready(function() {

                                $("#<?php echo "b".$row['post_id'];?>").on("click", function() {
                                    $('#<?php echo "d".$row['post_id'];?>').html(function(i, val) {
                                        return val * 1 + 1
                                    });
                                    var downloads = document.getElementById("<?php echo "d".$row['post_id'];?>").innerHTML;
                                    var id = document.getElementById("<?php echo "p".$row['post_id'];?>").innerHTML;


                                    $.ajax({
                                        type: "post",
                                        url: "increment.php",
                                        data: {
                                            downloads: downloads,
                                            id: id
                                        },
                                        success: function(data) {

                                        }
                                    });
                                });
                            });

                        </script>
                        <!--//download-increment-->
                        <!--                        </div>-->
                    </div>
                </div>
                <?php
            }
            elseif (isset($_GET['sid']))
            {
                ?>
                <div class="row">
                    <div class="col-sm-10" style="overflow-y:scroll;">

                        <?php
                        $id=$_GET['sid'];
                        $show="SELECT subject.subject_name,subject.subject_code,branch.branch_name FROM subject JOIN branch ON subject.branch_id=branch.branch_id && subject.subject_id='$id'";
                        $pass=mysqli_query($conn,$show);
                        $array=mysqli_fetch_array($pass);
                        ?>
                        <h4 id="header"><?php echo $array['branch_name']." > ".$array['subject_code']."-".$array['subject_name'];?></h4>
                        <?php
                        $q="Select * from type";
                        $d=mysqli_query($conn,$q);
                        while($r=mysqli_fetch_array($d))
                        {$type_id=$r['type_id'];

                        ?>

                        <div id="<?php echo $type_id;?>" class="tabcontent">
                            <div class="container-fluid">

                                <ul class="responsive-table">
                                    <li class="table-header">
                                        <div class="col col-1">Type</div>
                                        <div class="col col-2">Post Title</div>
                                        <div class="col col-3">Post Description</div>
                                        <div class="col col-4">Downloads</div>
                                        <div class="col col-5"></div>
                                    </li>
                                    <?php
                         $qu="SELECT * FROM `post` WHERE subject_id='$id' && type_id='$type_id'";
                         $da=mysqli_query($conn,$qu);
                         while($ro=mysqli_fetch_array($da))
                         {

                                    ?>

                                    <li class="table-row">
                                        <div id="<?php echo "p".$ro['post_id'];?>" style="display:none"><?php echo $ro['post_id']?></div>

                                        <div class="col col-1" data-label="type"><a href="index.php?pid=<?php echo $ro['post_id'];?>"><img src="./images/<?php echo $r['type_name'].'.png';?>" width="25px" height="auto"></a></div>
                                        <div class="col col-2" data-label="Post Title"><a href="index.php?pid=<?php echo $ro['post_id'];?>"><?php echo $ro['post_title'];?></a></div>
                                        <div class="col col-3" data-label="Post Description"><?php custom_echo($ro['post_des'],120);?></div>

                                        <div class="col col-4" data-label="Downloads" id="downloads">
                                            <div id="<?php echo "d".$ro['post_id'];?>"><?php echo $ro['downloads'];?></div>
                                        </div>
                                        <div class="col col-5" data-label="">
                                            <a href="./media/<?php echo $ro['content'];?>" download>
                                                <img src="./images/download.png" width="25px" height="auto" id="<?php echo "c".$ro['post_id'];?>">
                                                <!--download-increment-->
                                                <script>
                                                    $(document).ready(function() {

                                                        $("#<?php echo "c".$ro['post_id'];?>").on("click", function() {
                                                            $('#<?php echo "d".$ro['post_id'];?>').html(function(i, val) {
                                                                return val * 1 + 1
                                                            });
                                                            var downloads = document.getElementById("<?php echo "d".$ro['post_id'];?>").innerHTML;
                                                            var id = document.getElementById("<?php echo "p".$ro['post_id'];?>").innerHTML;


                                                            $.ajax({
                                                                type: "post",
                                                                url: "increment.php",
                                                                data: {
                                                                    downloads: downloads,
                                                                    id: id
                                                                },
                                                                success: function(data) {

                                                                }
                                                            });
                                                        });
                                                    });

                                                </script>
                                                <!--//download-increment-->
                                            </a>
                                        </div>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-sm-2">
                        <div class="tab">
                            <?php 
                            $query="SELECT * FROM `type` WHERE 1";
                            $data=mysqli_query($conn,$query);
                            while($row=mysqli_fetch_array($data))
                            {
                            ?>
                            <button class="tablinks" onclick="openType(event, '<?php echo $row['type_id'];?>')" id="defaultOpen"><?php echo $row['type_name'];?></button>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <?php }
            else
            {
            ?>
                <center>
                    <div id="welcome">
                        Welcome To EndGem <br>
                    </div>
                    <div id="select">
                        Select Branch and subject <br>form side navigation bar.
                    </div>
                </center>
                <?php
            }
            ?>
            </div>
            <div id="show" style="">
            </div>
        </div>
        <!--footer-->
        <!--
        
<div class="footer">
<p>&copy; All Rights Reserved | Design by <a href="" target="_blank">One and Only</a></p>
</div>
-->


        <!--//footer-->
        <!--</div>-->


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

        <!-- side nav js -->
        <script src='js/SidebarNav.min.js' type='text/javascript'></script>
        <script>
            $('.sidebar-menu').SidebarNav()

        </script>
        <!-- //side nav js -->



        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.js"> </script>
        <!-- //Bootstrap Core JavaScript -->


        <!--tabs-->
        <script>
            function openType(evt, cityName) {
                // Declare all variables
                var i, tabcontent, tablinks;

                // Get all elements with class="tabcontent" and hide them
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }

                // Get all elements with class="tablinks" and remove the class "active"
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }

                // Show the current tab, and add an "active" class to the link that opened the tab
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
            // Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();

        </script>

        <!--/tabs-->


        <!--//download-increment-->

        <!-- search-->
        <script>
            $(document).ready(function() {

                $("#input-31").keypress(function(event) {
                    var key = (event.keyCode ? event.keyCode : event.which);
                    if (key == 13) {
                        var search = $("#input-31").val().trim();
                        if (search != "") {
                            $.ajax({
                                type: "post",
                                url: "getSearch.php",
                                data: {
                                    search: search
                                },
                                success: function(data) {
                                    //                            alert(data);
                                    $("#none").css("display", "none");

                                    $("#show").html(data);
                                    $("#show").find("script").each(function(){
                                        eval($(this).text());
                                    });
                                }
                            });
                        }
                    }
                });
            });

        </script>
        <!--//search-->
</body>

</html>

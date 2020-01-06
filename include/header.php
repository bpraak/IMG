<style>
    ul {
        list-style-type: none;

        width: 100%;
    }

    ul#yo li a {
        display: block;
        overflow: hidden;
        padding: 20px;
        color: #212d32;
        text-decoration: none;
        font-weight: bold;

    }

    ul#yo li {
        float: left;

    }

    ul#yo li a:hover {
        background: #212d32;
        color: white;
    }

    .modal-body .responsive-table {
        padding: 0px 0px;
    }
    @media (max-width:902px){
        #display{
            display: none;
        }
    }

</style>
<div class="sticky-header header-section ">
    <div class="header-left">
        <div class="col-sm-offset-1">
            <!--toggle button start-->
            <button id="showLeftPush"><i class="fa fa-bars"></i></button>
            <!--toggle button end-->
            <ul id="yo">
                <li id="display">
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="add_post.php">Add Post</a>
                </li>
                <li>
                    <!-- Button to Open the Modal -->
                    <a data-toggle="modal" href="#myModal">
                        Top Gems
<!--                        <img src="./images/topgems.png" width="50px" >-->
                    </a>

                </li>
            </ul>

        </div>
    </div>
    <div class="header-right">


        <!--search-box-->
        <div class="search-box">

            <!--            <form class="input" id="form" action="">-->
            <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />

            <label class="input__label" for="input-31">
                <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                    <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                </svg>

            </label>

            <!--            </form>-->
        </div>

        <!--//end-search-box-->

        <div class="profile_details">
            <ul>
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">
                            <span class="prfil-img"><img src="images/2.jpg" alt=""> </span>
                            <div class="user-name">
                                <p><?php echo $_SESSION['user_name'];?></p>
                                <span><?php echo $_SESSION['enrol'];?></span>
                            </div>
                            <i class="fa fa-angle-down lnr"></i>
                            <i class="fa fa-angle-up lnr"></i>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <ul class="dropdown-menu drp-mnu">
                        <li> <a href="index.php?cpid=<?php echo $_SESSION['user_id'];?>"><i class="fa fa-cog"></i> Change Password</a> </li>
<!--
                        <li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li>
                        <li> <a href="#"><i class="fa fa-suitcase"></i> Profile</a> </li>
-->
                        <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="clearfix"> </div>

    </div>
    <div class="clearfix"> </div>

</div>
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable modal-lg ">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal" style="padding-bottom:10px;">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
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
                        $q="Select post.*,type.type_name FROM post JOIN type ON post.type_id=type.type_id ORDER BY downloads DESC LIMIT 10";
                        $select_data=mysqli_query($conn,$q);
                        while($ro=mysqli_fetch_array($select_data))
                        {

                        ?>
                        <li class="table-row">
                            <div id="<?php echo "po".$ro['post_id'];?>" style="display:none"><?php echo $ro['post_id']?></div>

                            <div class="col col-1" data-label="type"><a href="index.php?pid=<?php echo $ro['post_id'];?>"><img src="./images/<?php echo $ro['type_name'].'.png';?>" width="25px" height="auto"></a></div>
                            <div class="col col-2" data-label="Post Title"><a href="index.php?pid=<?php echo $ro['post_id'];?>"><?php echo $ro['post_title'];?></a></div>
                            <div class="col col-3" data-label="Post Description"><?php custom_echo($ro['post_des'],30);?></div>

                            <div class="col col-4" data-label="Downloads" id="downloads">
                                <div id="<?php echo "do".$ro['post_id'];?>"><?php echo $ro['downloads'];?></div>
                            </div>
                            <div class="col col-5" data-label="">
                                <a href="./media/<?php echo $ro['content'];?>" download>
                                    <img src="./images/download.png" width="25px" height="auto" id="<?php echo $ro['post_id'];?>">
                                    <!--download-increment-->
                                    <script>
                                        $(document).ready(function() {

                                            $("#<?php echo $ro['post_id'];?>").on("click", function() {
                                                $('#<?php echo "do".$ro['post_id'];?>').html(function(i, val) {
                                                    return val * 1 + 1
                                                });
                                                var downloads = document.getElementById("<?php echo "do".$ro['post_id'];?>").innerHTML;
                                                var id = document.getElementById("<?php echo "po".$ro['post_id'];?>").innerHTML;


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
                        <?php } ?>
                    </ul>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<style>
    #sem {
        background-color: #fefefa;
        font-family: mukta;
        text-align: center;
        padding: 5px 0px 5px 0px;
        color: #fa4251;
        box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.2);
        border-radius: 40px;
        margin: 10px;
    }

    #vertical {
        border-right: 1px solid #ccc;

    }

    #logo {
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        margin-top: -3.5vh;
    }
    @media all and (max-width:767px){
        #logo{
            margin-top: -12vh;
            
        }
        }

</style>


<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">

    <aside class="sidebar-left" id="vertical">
        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="./images/End.png" id="logo">
                </a>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>

                    <?php
                            $query="SELECT * FROM branch WHERE status='1'";
                            $data=mysqli_query($conn,$query);
                            while($row=mysqli_fetch_array($data))
                            {?>

                    <li class="treeview">
                        <a href="#">
                            <span><?php echo $row['branch_name'];?> </span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">

                            <li>
                                <h4 id="sem">Sem 1</h4>
                            </li>
                            <?php 
                                    $id=$row['branch_id'];
                                    $q="SELECT subject.subject_name,subject.subject_id FROM branch JOIN subject ON branch.branch_id=subject.branch_id WHERE subject.branch_id='$id' && subject.sem='1'";
                                    $d=mysqli_query($conn,$q);
                                    while($r=mysqli_fetch_array($d))
                                    {
                                    ?>

                            <li><a href="index.php?sid=<?php echo $r['subject_id'];?>"><i class="fa fa-angle-right"></i><?php echo $r['subject_name'];?></a></li>
                            <?php }?>
                            <li>
                                <h4 id="sem">Sem 2</h4>
                            </li>
                            <?php 
                                    $i=$row['branch_id'];
                                    $qy="SELECT subject.subject_name FROM branch JOIN subject ON branch.branch_id=subject.branch_id WHERE subject.branch_id='$i' && subject.sem='2'";
                                    $da=mysqli_query($conn,$qy);
                                    while($r=mysqli_fetch_array($da))
                                    {
                                    ?>

                            <li><a href="forms.html"><i class="fa fa-angle-right"></i><?php echo $r['subject_name'];?></a></li>
                            <?php }?>
                        </ul>
                    </li>
                    <?php }?>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </aside>
</div>

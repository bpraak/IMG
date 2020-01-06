<?php
include './include/db.php';
function custom_echo($x, $length)
{
    if(strlen($x)<=$length)
    {
        echo $x;
    }
    else
    {
        $y=substr($x,0,$length) . '...';
        echo $y;
    }
}

$search=mysqli_real_escape_string($conn,$_POST['search']);

$query="Select post.*,type.type_name FROM post JOIN type ON post.type_id=type.type_id WHERE post_title LIKE '%$search%' OR post_des LIKE '%$search%' ORDER by downloads DESC";
$data=mysqli_query($conn,$query);
$count=mysqli_num_rows($data);

?>
<div class="row">
    <div style="overflow-y:scroll;">
        <?php
        if ($count){
            ?>
        <h4 id="header">Search Result for Query "<?php echo $search; ?>"</h4>
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
                        $count=0;
                        while($ro=mysqli_fetch_array($data))
                        {$count++;

                        ?>
                <li class="table-row">
                    <div id="<?php echo "p".$ro['post_id'];?>" style="display:none"><?php echo $ro['post_id']?></div>

                    <div class="col col-1" data-label="type"><a href="index.php?pid=<?php echo $ro['post_id'];?>"><img src="./images/<?php echo $ro['type_name'].'.png';?>" width="25px" height="auto"></a></div>
                    <div class="col col-2" data-label="Post Title"><a href="index.php?pid=<?php echo $ro['post_id'];?>"><?php echo $ro['post_title'];?></a></div>
                    <div class="col col-3" data-label="Post Description"><?php custom_echo($ro['post_des'],120);?></div>

                    <div class="col col-4" data-label="Downloads" id="downloads">
                        <div id="<?php echo "d".$ro['post_id'];?>"><?php echo $ro['downloads'];?></div>
                    </div>
                    <div class="col col-5" data-label="">
                      
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
        <?php } 
        else {
            ?>
        <h4 id="header">No Result for Query "<?php echo $search; ?>"</h4>
        <?php }
        ?>
    </div>

</div>

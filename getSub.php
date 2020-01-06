<?php
include './include/db.php';

$branch_id=mysqli_real_escape_string($conn,$_POST['branch_id']);
$query="SELECT * FROM `subject` WHERE branch_id='$branch_id'";
$select_data= mysqli_query($conn, $query);

echo "<option>--Select Subject--</option>";
while ($row = mysqli_fetch_array($select_data)) {
    
    ?>
<option value="<?php echo $row["subject_id"]; ?>"><?php echo $row['subject_code']." - ".$row["subject_name"]; ?></option>
<?php
}

?>

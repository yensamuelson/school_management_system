<?php
$a=$_GET['id'];
$con=mysqli_connect('localhost','root','','school_management_db');
$q="DELETE FROM modules WHERE `modules`.`module_id` = '$a'";
$delete=mysqli_query($con,$q);
if ($delete) {
    include 'modules_list.php';
    echo "Record Removed";
} else {
    echo "Try again Later";
}
?>
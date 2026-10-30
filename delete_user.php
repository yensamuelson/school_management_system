<?php

$a=$_GET['id'];
$con=mysqli_connect('localhost','root','','school_management_db');
$q="DELETE FROM users WHERE `users`.`user_id` = '$a'";
$delete=mysqli_query($con,$q);
if ($delete) {
    include 'users_list.php';
    echo "1 row Deleted successfully";
} else {
    include 'users_list.php';
    echo "Record Isn't Deleted";
}

?>
<?php
$con=mysqli_connect('localhost','root','','school_management_db');
if (isset($_POST['save'])) {
    $a=$_POST['id'];
    $b=$_POST['names'];
    $c=$_POST['mail'];
    $d=$_POST['pass'];
    $e=$_POST['propic'];

    $q="UPDATE `users` SET `full_names` = '$b', `email` = '$c', `password` = '$d', 
    `profile_picture` = '$e' WHERE `users`.`user_id` = '$a'";
    $update=mysqli_query($con,$q);
    if ($update) {
        include 'users_list.php';
        echo "1 Row Updated";
    }
    else{
        include 'users_list.php';
        echo "Row Not Updated";
    }
}
?>
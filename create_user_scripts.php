<?php
$con=mysqli_connect('localhost','root','','school_management_db');

if (isset($_POST['create'])) {
    $a= $_POST['names'];
    $b= $_POST['mail'];
    $c= $_POST['propic'];
    $d= $_POST['pass'];

    $q= "INSERT INTO `users` (`user_id`, `full_names`, `email`, `password`, `role`, `profile_picture`)
     VALUES (NULL, '$a', '$b', '$d', '', '$c')";

     $create=mysqli_query($con,$q);

     if ($create) {
        echo "Well";
     } else{
        echo "Something went wrong";
     }
}
?>
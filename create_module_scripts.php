<?php
$con=mysqli_connect('localhost','root','','school_management_db');
if (isset($_POST['create'])) {
    $a=$_POST['mcode'];
    $b=$_POST['mname'];

    $q="INSERT INTO `modules` (`module_id`, `module_name`, `module_code`)
     VALUES (NULL, '$b', '$a')";

     $create=mysqli_query($con,$q);

     if ($create) {
       echo "Well";
     } else {
        echo "Something Went Wrong";
     }
}
?>
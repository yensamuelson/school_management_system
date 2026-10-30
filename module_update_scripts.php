<?php
$con=mysqli_connect('localhost','root','','school_management_db');
if (isset($_POST['save'])) {
    $a=$_POST['code'];
    $b=$_POST['name'];
    $c=$_POST['id'];

    $q="UPDATE `modules` SET `module_name` = '$b',
     `module_code` = '$a' WHERE `modules`.`module_id` = '$c'";
     $update=mysqli_query($con,$q);

     if ($update) {
      include 'modules_list.php';
       echo "One Record Updated Successfully";
     } else {
        echo "Something Went Wrong";
     }
}
?>
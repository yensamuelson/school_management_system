<?php

session_start();

if (isset($_POST['login'])) {
    $a=$_POST['mail'];
    $b=$_POST['pass'];

    $con=mysqli_connect('localhost','root','','school_management_db');
    $q="SELECT * FROM `users` WHERE email='$a' AND password='$b'";
    $login=mysqli_query($con,$q);
    $user=mysqli_fetch_assoc($login);
    if ($user) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['full_names'] = $user['full_names'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['profile_picture'] = $user['profile_picture'];
        $_SESSION['role'] = $user['role'];

        if ($user['role'] == 'hr') {
            header("location: hr_dashboard.php");
        } else  if ($user['role'] == 'hod') {
            header("location: hod_dashboard.php");
        }else  if ($user['role'] == 'registrar') {
            header("location: registrar_dashboard.php");
        }else  if ($user['role'] == 'student') {
            header("location: student_dashboard.php");
        }else  if ($user['role'] == 'lecturer') {
            header("location: lecturer_dashboard.php");
        }

        else {
            echo "Wrong Email or Password <a href='login_form.php'>Try Again</a>";
        }
    }
}

?>
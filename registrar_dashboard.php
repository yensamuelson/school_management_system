<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'registrar') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="#">Home</a>
    <a href="#">Students</a>
    <a href="logout.php">Logout</a>
    <img src="uploads/<?php echo $_SESSION['profile_picture']; ?>" width="50" height="50">
<?php echo $_SESSION['full_names']; ?>
    
</body>
</html>
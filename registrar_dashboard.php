<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'registrar') {
    header("Location: login_form.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color : whitesmoke;
        }
        .navigation {
            position: relative;
            background-color: #2c3e50;
            margin-left: -8px;
            margin-top: -8px;
            margin-right: -8px;
            display: flex;
            padding: 10px;
            text-decoration: none;
            font-weight: bold;
            height: 10%;
        }
        .navigation a {
                color: white;
                text-decoration: none;
                margin-right: 10px;
            }
        .user {
            display: flex;
            align-items: center;
            margin-right: auto;
            margin-top: 10px;
        }
        .user img {
            border-radius: 50%;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="navigation">
          <a href="#">Home</a>
          <a href="#">Students</a>
          <a href="logout.php">Logout</a>  
    </div>
    <div class="user">
        <img src="uploads/<?php echo $_SESSION['profile_picture']; ?>" width="50" height="50">
        <?php echo $_SESSION['full_names']; ?>
    </div>
    
    
</body>
</html>
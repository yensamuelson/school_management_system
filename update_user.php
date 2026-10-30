<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Update User Form
    <form action="update_user_scripts.php" method='POST'>
        <?php
        
        $a=$_GET['id'];
        $b=$_GET['names'];
        $c=$_GET['email'];
        $d=$_GET['propic'];
        $e=$_GET['pass'];
        
        ?>
        <input type="hidden" name="id" value="<?php echo $a; ?>">
        Names: <input type="text" name="names" value="<?php echo $b; ?>"><br><br>
        Email: <input type="email" name="mail" value="<?php echo $c; ?>"><br><br>
        Password: <input type="text" name="pass" value="<?php echo $e; ?>"><br><br>
        Profile Picture: <input type="file" name="propic" value="<?php echo $d; ?>"><br><br>
        <input type="submit" value="Save Changes" name="save">
    </form>
</body>
</html>
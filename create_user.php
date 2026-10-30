<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>User Creation Form</h2>

    <form action="create_user_scripts.php" method="POST">
        Full Names: <input type="text" name="names"><br><br>
        Email: <input type="email" name="mail"><br><br>
        Profile Picture: <input type="file" name="propic"><br><br>
        Password: <input type="password" name="pass"><br><br>
        <input type="submit" value="Create" name="create">
    </form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Module Update Form
    <form action="module_update_scripts.php" method="POST">
        <?php
        $id=$_GET['id'];
        $name=$_GET['name'];
        $code=$_GET['code'];
        ?>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="name" value=" <?php echo $name; ?> "><br><br>
        <input type="text" name="code" value=" <?php echo $code; ?> "><br><br>
        <input type="submit" name="save" value="Save Changes">
    </form>
</body>
</html>
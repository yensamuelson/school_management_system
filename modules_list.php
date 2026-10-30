<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>List Of Modules</h2>
    <?php
    $con=mysqli_connect('localhost','root','','school_management_db');
    ?>
    <table border=2>
        <tr>
            <th>Module Number</th>
            <th>Module Name</th>
            <th>Module Code</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        $q="SELECT * FROM `modules`";
        $select=mysqli_query($con,$q);

        while($row=mysqli_fetch_array($select)){
            echo "<tr>";
            echo "<td>".$row['module_id']."</td>";
            echo "<td>".$row['module_name']."</td>";
            echo "<td>".$row['module_code']."</td>";
            echo "<td> <a href='module_update.php?id=".$row['module_id']."
            &name=".$row['module_name']."&code=".$row['module_code']."'>Update</a></td>";
            echo "<td> <a href='module_delete.php?id=".$row['module_id']."'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
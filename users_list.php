<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>List of Users</h2>
    <table>
        <tr>
            <th>User Id</th>
            <th>Full Names</th>
            <th>Email</th>
            <th>Role</th>
            <th>Profile Picture</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php

        $con=mysqli_connect('localhost','root','','school_management_db');
        $q="SELECT * FROM `users`";
        $select=mysqli_query($con,$q);
        while($row=mysqli_fetch_array($select)){

        echo "<tr>";
        echo "<td>".$row['user_id']."</td>";
        echo "<td>".$row['full_names']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['role']."</td>";
        echo "<td>".$row['profile_picture']."</td>";
        echo "<td> <a href='update_user.php?id=".$row['user_id']."&names=".$row['full_names']."
              &email=".$row['email']."&pass=".$row['password']."&role=".$row['role']."
              &propic=".$row['profile_picture']."'>Update</a></td>";
        echo "<td> <a href='delete_user.php?id=".$row['user_id']."'>Delete</a></td>";
        echo "</tr>";

        }
        ?>
    </table>
</body>
</html>
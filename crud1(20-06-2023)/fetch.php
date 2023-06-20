<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Sno</th>
            <th>User Name</th>
            <th>Email Id</th>
            <th>Password</th>
            <th>Gender</th>
            <th>View Profile</th>
            <th>Update Profile</th>
            <th>Delete Profile</th>
        </tr>
        <?php
        include('db.php');
        $sql="select * from sample1";
        if($result=mysqli_query($conn,$sql)){
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$row['sno']."</td>";
                    echo "<td>".$row['uname']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['password']."</td>";
                    echo "<td>".$row['gender']."</td>";
                    echo '<td><a href="data.php?id='.$row['sno'].'">View</a></td>';
                    echo "<td></td>";
                    echo '<td><a href="delete.php?id='.$row['sno'].'">Delete</a></td>';
                    echo "</tr>";
                }
            }
        }
        ?>

    </table>
</body>
</html>
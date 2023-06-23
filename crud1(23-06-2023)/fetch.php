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
            <th>view</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once("db.php");
        $sql="select * from sample1";
        if($result=mysqli_query($conn,$sql)){
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                    echo '<tr>';
                    echo '<td>'.$row['sno'].'</td>';
                    echo '<td>'.$row['uname'].'</td>';
                    echo '<td>'.$row['email'].'</td>';
                    echo '<td>'.$row['password'].'</td>';
                    echo '<td>'.$row['gender'].'</td>';
                    echo '<td></td>';
                    echo '<td><a href="update.php?id='.$row["sno"].'">Update</a></td>';
                    echo '</tr>';
                }
                
            }
            else{
                echo "no data in table";
            }
        }
        else{
            echo "no table";
        }
        ?>
    </table>
</body>
</html>
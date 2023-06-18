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
            <th>User name</th>
            <th>Email Id</th>
            <th>Password</th>
            <th>Gender</th>
            <th>View profile</th>
        </tr>
        <?php
        include('db.php');
        $sql='select * from sample1';
        if($result=mysqli_query($conn,$sql)){
            if(mysqli_num_rows($result)>0){
                while($arr=mysqli_fetch_array($result)){
                    echo '<tr>';
                    echo '<td>'.$arr['sno'].'</td>';
                    echo '<td>'.$arr['uname'].'</td>';
                    echo '<td>'.$arr['email'].'</td>';
                    echo '<td>'.$arr['password'].'</td>';
                    echo '<td>'.$arr['gender'].'</td>';
                    echo '<td><a href="data.php?id='.$arr["sno"].'">View</a></td>';
                    echo '</tr>';
                }
            }
        }
        else{
            echo "no table";
        }
        ?>
    </table>    
</body>
</html>

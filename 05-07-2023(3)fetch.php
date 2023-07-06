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
            <th>Student Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date Created</th>
        </tr>
        <?php
            $servername="localhost:3307";
            $username="root";
            $password="root";
            $db="kumar";
            $conn=mysqli_connect($servername,$username,$password,$db);
            $sql="select * from actor";
            if($result=mysqli_query($conn,$sql)){
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_array($result)){
                        echo '<tr>';
                        echo '<td>'.$row['actor_id'].'</td>';
                        echo '<td>'.$row['first_name'].'</td>';
                        echo '<td>'.$row['last_name'].'</td>';
                        echo '<td>'.$row['last_update'].'</td>';
                        
                    }
                }
            }
?>
    </table>
</body>
</html>

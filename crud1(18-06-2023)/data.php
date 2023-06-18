<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('db.php');
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
    $sql="select * from sample1 where sno=$id";
    if($stmt=mysqli_prepare($conn,$sql)){
        if(mysqli_stmt_execute($stmt)){
            $result=mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result)==1){
                $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                $uname=$row['uname'];
                $email=$row['email'];
                $pwd=$row['password'];
                $gen=$row['gender'];
            }
        }
    }
    ?>
    <table>
        <tr>
            <td>column name</td>
            <td>details</td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?php echo $uname;?></td>
        </tr>
        <tr>
            <th>email id</th>
            <td><?php echo $email;?></td>
        </tr>
        <tr>
            <th>password</th>
            <td><?php echo $pwd;?></td>
        </tr>
        <tr>
            <th>gender</th>
            <td><?php echo $gen;?></td>
        </tr>
    </table>
</body>
</html>
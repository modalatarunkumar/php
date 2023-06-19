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
        $num=$_GET['id'];
    }
    $sql="select * from sample1 where sno=$num";
    if($stmt=mysqli_prepare($conn,$sql)){
        if(mysqli_stmt_execute($stmt)){
            $result=mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result)==1){
                $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                $nm=$row['uname'];
                $mail=$row['email'];
                $pwd=$row['password'];
                $gen=$row['gender'];
            }
        }
    }
    ?>
    <table>
        <tr>
            <th>Column name</th>
            <th>Details</th>
        </tr>
        <tr>
            <th>User name:</th>
            <td><?php echo $nm;?></td>
        </tr>
        <tr>
            <th>Email Id:</th>
            <td><?php echo $mail;?></td>
        </tr>
        <tr>
            <th>Password:</th>
            <td><?php echo $pwd;?></td>
        </tr>
        <tr>
            <th>Gender:</th>
            <td><?php echo $gen;?></td>
        </tr>
    </table>
</body>
</html>
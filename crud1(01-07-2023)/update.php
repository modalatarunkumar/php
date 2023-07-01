<?php
    include_once "db.php";
    if(isset($_POST['id'])){
        $number=$_POST['id'];
        // echo "number ".$number;
        $uname=$_POST['uname'];
        $mail=$_POST['email'];
        $pass=$_POST['pwd'];
        $gen=$_POST['gen'];
        $update="update sample1 set uname='$uname',email='$mail',password='$pass',gender='$gen' where sno=$number";
        if(mysqli_query($conn,$update)){
            header("location:fetch.php");
        }
    }
    if(isset($_GET['id'])){
        $num=$_GET['id'];
        $sql="select * from sample1 where sno=$num";
        if($stmt=mysqli_prepare($conn,$sql)){
            if(mysqli_stmt_execute($stmt)){
                $result=mysqli_stmt_get_result($stmt);
                if(mysqli_num_rows($result)==1){
                    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                    $unm=$row['uname'];
                    $eml=$row['email'];
                    $pwd=$row['password'];
                    $gend=$row['gender'];
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI']));?>" method="post">
        <table>
            <tr>
                <th><label for="uname">Username:</label></th>
                <td><input type="text" name="uname" id="uname" value="<?php echo $unm;?>"></td>
            </tr>
            <tr>
                <th><label for="email">Email Id:</label></th>
                <td><input type="email" name="email" id="email" value="<?php echo $eml;?>"></td>
            </tr>
            <tr>
                <th><label for="pwd">Password:</label></th>
                <td><input type="password" name="pwd" id="pwd" value="<?php echo $pwd;?>"></td>
            </tr>
            <tr>
                <th><label for="">Gender:</label></th>
                <td>
                    <?php if($gend=='male'){?>
                        <input type="radio" name="gen" id="male" value="male" checked><label for="male">Male</label>
                        <input type="radio" name="gen" id="female" value="female"><label for="female">Female</label>
                        <input type="radio" name="gen" id="others" value="others"><label for="others">Others</label>
                    <?php }else if($gend=='female'){?>
                        <input type="radio" name="gen" id="male" value="male"><label for="male">Male</label>
                        <input type="radio" name="gen" id="female" value="female" checked><label for="female">Female</label>
                        <input type="radio" name="gen" id="others" value="others"><label for="others">Others</label>
                    <?php }else{?>
                        <input type="radio" name="gen" id="male" value="male"><label for="male">Male</label>
                        <input type="radio" name="gen" id="female" value="female"><label for="female">Female</label>
                        <input type="radio" name="gen" id="others" value="others" checked><label for="others">Others</label>
                    <?php }?>    
                </td>
            </tr>
            <tr>
                <td><input type="reset" value="clear"></td>
                <td><input type="submit" value="Submit"></td>
                <input type="hidden" name="id" value="<?php echo $num;?>">
            </tr>
        </table>
    </form>
</body>
</html>
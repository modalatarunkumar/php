<?php
    $title="User Login";
    require_once "include/header.php";
    require_once "db/conn.php";
    // If data were submitted via a form POST request, then.. 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];
        $new_password = md5($password.$username);
        $result = $user->getUser($username,$new_password);
        if(!$result){
            echo '<script>alert("Username or password is incorrect");</script>';
        }
        else{
            $_SESSION['username']=$username;
            $_SESSION['id']=$result['sno'];
            header('location:viewrecords.php');
        }
    }
?>
<h1 style="text-align:center"><?php echo $title;?></h1>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <table>
        <tr>
            <td><label for="username">User Name: * </label></td>
            <td>
                <input type="text" name="username" id="username" value="<?php if($_SERVER['REQUEST_METHOD']=='POST') echo $_POST['username']; ?>">
                <?php if(empty($username) && $_SERVER['REQUEST_METHOD'] == 'POST') echo "<p>$username</p>"; ?>
            </td>
        </tr>
        <tr>
            <td><label for="password">Password: * </label></td>
            <td>
                <input type="password" name="password" id="password">
                <?php if(empty($password ) && $_SERVER['REQUEST_METHOD'] == 'POST') echo "<p>$password</p>"; ?>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Login"></td>
        </tr>
    </table>
</form>
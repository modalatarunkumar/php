<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <table>
    <form action="sample.php" method="post">
        <tr>
            <td><label for="uname">Enter username:</label></td>
            <td><input type="text" name="uname" id="uname"></td>            
        </tr>
        <tr>
            <td><label for="email">Enter Email:</label></td>
            <td><input type="email" name="email" id="email"></td>
        </tr>
        <tr>
            <td><label for="pass">Enter password:</label></td>
            <td><input type="password" name="pass" id="pass"></td>
        </tr>
        <tr>
            <td><label for="">Gender:</label></td>
            <td>
                <input type="radio" name="gender" id="male" value="male"><label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="female"><label for="female">Female</label>
                <input type="radio" name="gender" id="others" value="others"><label for="others">others</label>
            </td>
        </tr>
        <tr>
            <td><input type="reset" value="Clear"></td>
            <td><input type="submit" value="Register"></td>
        </tr>
    </form>
    
    </table>
    </div>
</body>
</html>
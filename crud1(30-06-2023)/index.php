<?php
    $title="Form";
    include "include/header.php";
?>
<form action="success.php" method="post" enctype="multipart/form-data">
    <h1 style="text-align:center;">Registration form</h1>
    <table>
        <tr>
            <th><label for="uname">User Name:</label></th>
            <td><input type="text" name="uname" id="uname"></td>
        </tr>
        <tr>
            <th><label for="mail">Email Id:</label></th>
            <td><input type="text" name="mail" id="mail"></td>
        </tr>
        <tr>
            <th><label for="pwd">Password:</label></th>
            <td><input type="password" name="pwd" id="pwd"></td>
        </tr>
        <tr>
            <th><label for="">Gender:</label></th>
            <td>
                <input type="radio" name="gen" value="male" id="male"><label for="male">Male</label>
                <input type="radio" name="gen" id="female" value="female"><label for="female">Female</label>
                <input type="radio" name="gen" id="others" value="others"><label for="others">Others</label>
            </td>
        </tr>
        <tr>
            <td><label for="avatar">Upload Image (Optional)</label></td>
            <td><input type="file" name="avatar" id="avatar" accept="image/*"></td>
        </tr>
        <tr>
            <td><input type="reset" value="clear"></td>
            <td><button type="submit" name="submit">CS </button></td>
        </tr>
    </table>
</form>

<?php
    include "include/footer.php";
?>
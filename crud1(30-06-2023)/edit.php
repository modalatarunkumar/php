<?php
    $title="Edit Record";
    include "include/header.php";
    include "db/conn.php";

    if(!isset($_GET['id'])){
        echo "Error";
    }
    else{
        $id=$_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);
?>
<form action="editpost.php" method="post">
    <h1 style="text-align:center">Edit record</h1>
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <table>
        <tr>
            <th><label for="uname">User Name:</label></th>
            <td><input type="text" name="uname" id="uname" value="<?php echo $attendee['uname'] ?>"></td>
        </tr>
        <tr>
            <th><label for="mail">Email Id:</label></th>
            <td><input type="text" name="mail" id="mail" value="<?php echo $attendee['email'] ?>"></td>
        </tr>
        <tr>
            <th><label for="pwd">Password:</label></th>
            <td><input type="password" name="pwd" id="pwd" value="<?php echo $attendee['password'] ?>"></td>
        </tr>
        <tr>
            <th><label for="">Gender:</label></th>
            <?php if($attendee['gender']=='male'){ ?>
                <td>
                    <input type="radio" name="gen" value="male" id="male" checked><label for="male">Male</label>
                    <input type="radio" name="gen" id="female" value="female"><label for="female">Female</label>
                    <input type="radio" name="gen" id="others" value="others"><label for="others">Others</label>
                </td>
            <?php }else if($attendee['gender']=='female'){ ?>
                <td>
                    <input type="radio" name="gen" value="male" id="male"><label for="male">Male</label>
                    <input type="radio" name="gen" id="female" value="female" checked><label for="female">Female</label>
                    <input type="radio" name="gen" id="others" value="others"><label for="others">Others</label>
                </td>
            <?php }else{ ?>
                <td>
                <input type="radio" name="gen" value="male" id="male"><label for="male">Male</label>
                <input type="radio" name="gen" id="female" value="female"><label for="female">Female</label>
                <input type="radio" name="gen" id="others" value="others" checked><label for="others">Others</label>
            </td>
            <?php } ?>
        </tr>
        <tr>
            <td><input type="reset" value="clear"></td>
            <td><button type="submit" name="submit">Update </button></td>
        </tr>
    </table>
</form>
<?php }?>
<?php
    include "include/footer.php";
?>
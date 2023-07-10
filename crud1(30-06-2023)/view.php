<?php
    $title="View Record";
    include "include/header.php";
    include "include/auth_check.php";
    include 'db/conn.php';
    // Get attendee by id
    if(!isset($_GET['id'])){
        echo "<h1>Please check details and try again";
        }
    else{
        $id=$_GET['id'];
        $result=$crud->getAttendeeDetails($id);
    
?>
<table>
    <tr>
        <th>User Name: </th>
        <td><?php echo $result['uname'] ?></td>
    </tr>
    <tr>
        <th>Email Id: </th>
        <td><?php echo $result['email'] ?></td>
    </tr>
    <tr>
        <th>Password: </th>
        <td><?php echo $result['password'] ?></td>
    </tr>
    <tr>
        <th>Gender: </th>
        <td><?php echo $result['gender'] ?></td>
    </tr>
    
</table>
<?php } ?>

<?php
    
    include "include/footer.php";
?>
<?php
    $title="View Records";
    include "include/header.php";
    include "include/auth_check.php";
    include 'db/conn.php';
    // Get all the attendees
    $result=$crud->getAttendees();
?>

<table>
    <tr>
        <th>#</th>
        <th>Username</th>
        <th>Email Id</th>
        <th>Password</th>
        <th>Gender</th>
        <th>Actions</th>
    </tr>
    <?php while($r=$result->fetch(PDO::FETCH_ASSOC)) {?>
        <tr>
            <td><?php echo $r['sno']; ?></td>
            <td><?php echo $r['uname']; ?></td>
            <td><?php echo $r['email']; ?></td>
            <td><?php echo $r['password']; ?></td>
            <td><?php echo $r['gender']; ?></td>
            <td>
                <a href="view.php?id=<?php echo $r['sno']; ?>">view</a>
                <a href="edit.php?id=<?php echo $r['sno']; ?>">Edit</a>
                <a onclick="return confirm('Are you sure you want to delete');" href="delete.php?id=<?php echo $r['sno']; ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>


<?php
    include "include/footer.php";
?>
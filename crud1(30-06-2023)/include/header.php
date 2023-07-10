<?php
// This includes the session file. This file contains code that starts/resumes a session.
// By having it in the header file. It will be included on every page, allowing session capability to be used on every page across the website
include_once 'include/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website - <?php echo $title ?></title>
</head>
<body>
    <div style="width:50%;float:left;">
        <a href="index.php">Home</a>&nbsp;&nbsp;&nbsp;
        <a href="viewrecords.php">View Attendees</a>
    </div>
    <div style="width:50%;float:left;">
    <?php if(!isset($_SESSION['id'])) { ?>
        <a href="login.php">Login</a>
    <?php } else { ?>
        <a href="#">Hello <?php echo $_SESSION['username']; ?></a>
        <a href="logout.php">Logout</a>
    <?php } ?>
    </div>

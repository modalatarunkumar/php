<?php 
$title="Success";
include "include/header.php";
include "db/conn.php";

if(isset($_POST['submit'])){
    // extract values from the $_POST array
    $name=$_POST['uname'];
    $email=$_POST['mail'];
    $pass=$_POST['pwd'];
    $gender=$_POST['gen'];

    $orig_file = $_FILES['avatar']['tmp_name'];
    $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
    $target_dir = "uploads/";
    // $destination = $target_dir . basename($_FILES['images']['name']);
    $destination = "$target_dir$name.$ext";
    move_uploaded_file($orig_file,$destination);
    // Call function to insert and track success or not
    $isSuccess=$crud->insertAttendees($name,$email,$pass,$gender,$destination);
    if($isSuccess){
        echo "<h1>You have been registered</h1>";
    }
    else{
        echo "<h1>there was an error</h1>";
    }
    
}
if($_GET){
    echo $_GET['uname'];
    echo $_GET['mail'];
    echo $_GET['pwd'];
    echo $_GET['gen'];
    
}
else if($_POST){
    echo "<h1>Username: ".$_POST['uname']."</h1>";
    echo "<h1>Email Id: ".$_POST['mail']."</h1>";
    echo "<h1>Password: ".$_POST['pwd']."</h1>";
    echo "<h1>Gender: ".$_POST['gen']."</h1>";
    echo '<img src="'.$destination.'" width="200px" height="200px">';
}

include "include/footer.php";
?>
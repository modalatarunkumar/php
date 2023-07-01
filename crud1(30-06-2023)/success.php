<?php 
$title="Success";
include "include/header.php";
if($_GET){
    echo $_GET['uname'];
    echo $_GET['mail'];
    echo $_GET['pwd'];
    echo $_GET['gen'];
    
}
else if($_POST){
    echo $_POST['uname'];
    echo $_POST['mail'];
    echo $_POST['pwd'];
    echo $_POST['gen'];
    
}

include "include/footer.php";
?>
<?php
include('db.php');
$name=$_POST['uname'];
$mail=$_POST['email'];
$pwd=$_POST['pass'];
$gen=$_POST['gender'];
$ins="insert into sample1(uname,email,password,gender) values('$name','$mail','$pwd','$gen')";
if(mysqli_query($conn,$ins)){
    echo "<br>inserted successfully";
}
else{
    echo "<br>insertion error";
}
?>
<?php
include_once('db.php');
$name=$_POST['uname'];
$mail=$_POST['email'];
$pwd=$_POST['pass'];
$sql="insert into sample(uname,email,password) values('$name','$mail','$pwd')";
if(mysqli_query($conn,$sql)){
    echo "New record inserted successfully";
}
else{
    echo "insertion not possible";
}
?>
<?php
include_once('db.php');
$user=$_POST['uname'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];
$gen=$_POST['gender'];
$sql="insert into sample1(uname,email,password,gender) values('$user','$email','$pwd','$gen')";
if(mysqli_query($conn,$sql)){
    echo "Inserted succesfully";
}
else{
    echo "Not inserted";
}

?>
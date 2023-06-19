<?php
include('db.php');
$uname=$_POST["uname"];
$mail=$_POST["email"];
$pwd=$_POST["pass"];
$gen=$_POST["gender"];

$sql="insert into sample1(uname,email,password,gender) values('$uname','$mail','$pwd','$gen')";
if(mysqli_query($conn,$sql)){
    echo "inserted succesfully";
}
else{
    echo "Error data not inserted";
}
?>
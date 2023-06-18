<?php
$servername="localhost";
$username="root";
$password="";
$db="kumar";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("not connected");
}
echo "Connected succesfully";
?>
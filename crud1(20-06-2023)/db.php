<?php
$servername="localhost";
$username="root";
$password="";
$db="kumar";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("Error database not connected");
}
// echo "connected succesfully";
?>
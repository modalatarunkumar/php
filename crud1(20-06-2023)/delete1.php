<?php
include('db.php');
if(isset($_GET['id'])){
    $num=$_GET['id'];
}
$sql="update sample1 set flag=1 where sno=$num";
if(mysqli_query($conn,$sql)){
    header("location:fetch1.php");
}
else{
    echo "deletion not possible";
}
?>
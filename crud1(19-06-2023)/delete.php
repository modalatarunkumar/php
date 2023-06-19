<?php
include('db.php');
if(isset($_GET['id'])){
    $num=$_GET['id'];
}

$sql="delete from sample1 where sno=$num";
if(mysqli_query($conn,$sql)){
    echo "data deleted successfully";
}
else{
    echo "deletion not possible";
}
?>
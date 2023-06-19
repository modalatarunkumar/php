<?php
include_once('db.php');
$user=$_POST['uname'];
$email_id=$_POST['email'];
$pwd=$_POST['pwd'];
$course=$_POST['course'];
$gen=$_POST['gender'];
$mobile_number=$_POST['mnum'];
$dob=$_POST['dob'];
$address=$_POST['add'];
$sql="insert into emp(user_name,password,dob,address,email,course,gender,mobile_num) values('$user','$pwd','$dob','$address','$email_id','$course','$gen','$mobile_number')";
if(mysqli_query($conn,$sql)){
    echo "inserted successfully";
}
else
echo "data not inserted";
?>
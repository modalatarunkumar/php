<?php
    require "db/conn.php";
    // Get values from post operation
    if(isset($_POST['submit'])){
        // extract values from the $_POST array
        $id=$_POST['id'];
        $name=$_POST['uname'];
        $email=$_POST['mail'];
        $pass=$_POST['pwd'];
        $gender=$_POST['gen'];
        // Call crud function
        $result = $crud->editAttendee($id,$name,$email,$pass,$gender);
        // editAttendee($id,$uname,$email,$password,$gender)
        // Redirect to index.php 
        if($result){
            header("location:viewrecords.php");
        }
        else{
            echo "Error";
        }
    }
    else{
        echo "Error";
    }
    
?>

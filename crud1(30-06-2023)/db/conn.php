<?php
// pdo
    $host="127.0.0.1";
    $username="root";
    $password="";
    $db="kumar";
    $charset="utf8mb4";
    $dsn="mysql:host=$host;dbname=$db;charset=$charset";
    try{
        $pdo=new PDO($dsn,$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // echo "success";
    }
    catch(PDOException $e){
        throw new PDOException($e->getMessage());

    }
    require_once 'crud.php';
    $crud = new crud($pdo);
?>
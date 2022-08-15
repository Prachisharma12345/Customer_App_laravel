<?php
$servername="localhost";
$username="root";
$password="";
try{
    $conn=new PDO("mysql:host=$servername",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="CREATE DATABASE voting";
    $conn->exec($sql);
    echo"Database created successfully <br>";
}catch(PDOException $e){
    echo $sql."<br>".$e->getmessage();
}
$conn=null;
?>
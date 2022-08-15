<?php
$servername="localhost";
$username="root";
$pwd="";
try{
    $conn=new PDO("mysql:host=$servername",$username,$pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="CREATE database employeedb1";
    $conn->exec($sql);
    echo "Database created successfully";
}catch(PDOException $e){
    echo $sql."<br>".$e->getMessage();
}
$conn=null;
?>
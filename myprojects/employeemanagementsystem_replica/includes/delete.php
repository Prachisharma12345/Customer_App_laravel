<?php
session_start();
$id=$_SESSION['id'];
$servername="localhost";
$username="root";
$pwd="";
$dbname="employeedb1";
try{
    $conn=new PDO("mysql:host=$servername;$dbname=dbname",$username,$pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="DELETE from table employee1 where id=$id";
}
?>
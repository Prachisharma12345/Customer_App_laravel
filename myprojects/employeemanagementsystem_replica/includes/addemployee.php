<?php

$name       =   $_POST["txtName"];
$eid        =   $_POST["txtEid"];
$pwd        =   $_POST["txtPass"];
$cnm        =   $_POST["txtCmpName"];

$servername="localhost";
$username="root";
$pwd="";
$dbname="employeedb1";

try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$pwd);
    $sql="INSERT INTO employee1(name,emailid,password,company_name)
    VALUES('$name','$eid','$pwd','$cnm')";
    $conn->exec($sql);
   }catch(PDOException $e){
    echo $sql."<br>".$e->getMessage();
    }
$conn=null;
?>
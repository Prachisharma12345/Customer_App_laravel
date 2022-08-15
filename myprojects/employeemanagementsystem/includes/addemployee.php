<?php
include('../config/config.php');
$name       =   $_POST["txtName"];
$eid        =   $_POST["txtEid"];
$pwd        =   $_POST["txtPassword"];
$cnm        =   $_POST["txtCmpName"];

$servername="localhost";
$username="root";
$password="";
$dbname="employeedb";
try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $sql="INSERT INTO employee(name,email,pwd,company_name)
    VALUES('$name','$eid','$pwd','$cnm')";
    $stmt=$conn->exec($sql);
   }catch(PDOException $e){
    echo $sql."<br>".$e->getMessage();
}
$conn=null;
?>
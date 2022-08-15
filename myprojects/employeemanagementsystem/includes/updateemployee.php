<?php
include_once "../config/config.php";
$id        =   $_POST["sid"];
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
    $sql="UPDATE employee SET name='$name',email='$eid',pwd='$pwd',company_name='$cnm' WHERE id='$id'";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $numrows=$stmt->rowCount();
    if($numrows){
        echo "Data is updated";
    }else{
        echo "Data not updated";
    }
   }catch(PDOException $e){
    echo $sql."<br>".$e->getMessage();
    }
$conn=null;
?>
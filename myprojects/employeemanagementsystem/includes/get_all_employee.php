<?php
include_once('../config/config.php');
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="employeedb";
try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt=$conn->prepare("SELECT * FROM employee ORDER BY id DESC");
    $stmt->execute();
    $json=array();
    $numrows=$stmt->rowCount();
    while($data=$stmt->fetch(PDO::FETCH_ASSOC)){
        $json[]=$data;            
    }
    $record["userdata"]=$json;
    echo json_encode($record);
    
}catch(PDOException $e){
    echo $stmt."<br>".$e->getMessage();
}
?>
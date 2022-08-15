<?php

 $servername="localhost";
 $username="root";
 $password="";
 $dbname="employeedb1";
try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql=$conn->prepare("SELECT * FROM employee1 ORDER BY id DESC");
    $sql->execute();
    $json=array();
    //$numrows=$sql->rowCount();
    while($data=$sql->fetch(PDO::FETCH_ASSOC)){
        $json[]=$data;            
    }
    $record["userdata"]=$json;
    echo json_encode($record);
    
}catch(PDOException $e){
    echo $stmt."<br>".$e->getMessage();
}
?>
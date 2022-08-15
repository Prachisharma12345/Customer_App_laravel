<?php
$servername="localhost";
$username="root";
$password="";
$db="insurance";

$Agent_Name = $_POST['Agent_Name'];

try{
    $conn=new PDO("mysql:host=$servername;dbname=$db",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO agent_master (Agent_Name) VALUES(
        '$Agent_Name')";
    $conn->exec($sql);
    echo "Record inserted successfully";
    echo "<pre";
    print_r($sql);
    }catch(PDOException $e){
        echo $sql."<br>".$e->getMessage();
    }
    $conn=null;
    ?>
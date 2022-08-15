<?php
$servername="localhost";
$username="root";
$password="";
$db="insurance";

$Scheme_Name=$_POST['Scheme_Name'];
$Commission=$_POST['Commission'];

try{
    $conn=new PDO("mysql:host=$servername;dbname=$db",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO scheme_master (Scheme_Name,Commission) VALUES('$Scheme_Name','$Commission')";
    $conn->exec($sql);
    echo "Record inserted successfully";
    echo "<pre";
    print_r($sql);
    }catch(PDOException $e){
        echo $sql."<br>".$e->getMessage();
    }
    $conn=null;
    ?>
?>
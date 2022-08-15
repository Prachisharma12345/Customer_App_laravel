<?php
$servername="localhost";
$dbname="employeedb";
$username="root";
$password="";

try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="CREATE TABLE employee(
        id INT(11)  PRIMARY KEY AUTO_INCREMENT,
        name varchar(50),
        email varchar(50),
        pwd varchar(50),
        company_name varchar(100)
    )";
    $conn->exec($sql);
    echo "Table employees created successfully";
}catch (PDOException $e){
    echo $sql."<br>".$e->getMessage();
}
?>
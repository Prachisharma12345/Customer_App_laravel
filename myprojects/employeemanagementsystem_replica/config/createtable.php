<?php
$servername="localhost";
$username="root";
$pwd="";
$dbname="employeedb1";
try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="CREATE table employee1(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
        name varchar(50) NOT NULL,
        emailid varchar(50) NOT NULL,
        password varchar(50) NOT NULL,
        company_name varchar(100)
    )";
    $conn->exec($sql);
    echo "Table created successfully";

}catch(PDOException $e){
    echo $sql."<br>".$e->getMessage();
}
$conn=null;
?>
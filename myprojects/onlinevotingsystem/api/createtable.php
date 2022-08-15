<?php
$servername="localhost";
$username="root";
$password="";
$dbname="voting";
try{
$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sqlquery="CREATE TABLE user (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name text(15) NOT NULL,
    mobile BIGINT(10)NOT NULL,
    passwod varchar(50),
    address varchar(100),
    image varchar(255),
    role INT(1),
    status INT(1),
    votes INT(100) 
    )";
    $conn->exec($sqlquery);
    echo "Table user created successfully";
}catch(PDOException $e){
    echo $sqlquery."<br>".$e->getmessage();
}
$conn=null;
?>

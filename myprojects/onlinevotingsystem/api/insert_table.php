<?php
$servername="localhost";
$username="root";   
$password="";
$dbname="voting";
try{
$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sqlquery="INSERT INTO user
(name,mobile,passwod,address,image,role,status,votes)
VALUES('$name','$mobile','$passwod','$address','$target_file','$role',0,0)";
$conn->exec($sqlquery);
echo "New record created successfully";
}catch(PDOException $e){
    echo $sqlquery."<br>".$e->getmessage();
    echo "<br>";
}
$conn=null;
?>
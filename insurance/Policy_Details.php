<?php

$servername="localhost";
$username="root";
$password="";
$db="insurance";


 $Policy_date=$_POST['Policy_date'];
 $CustomerName=$_POST['CustomerName'];
 $PolicyAmount=$_POST['PolicyAmount'];
 $Commission=$_POST['Commission'];

try{
$conn=new PDO("mysql:host=$servername;dbname=$db",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="INSERT INTO policy_details (Policy_date,CustomerName,PolicyAmount)
VALUES('$Policy_date','$CustomerName','$PolicyAmount')";
$conn->exec($sql);
echo "Record inserted successfully";
}catch(PDOException $e){
    echo $sql."<br>".$e->getMessage();
}
$conn=null;
?>
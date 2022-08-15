<?php
include_once "../config/config.php";
$id = $_POST["uid"];
$servername="localhost";
$username="root";
$password="";
$dbname="employeedb";
try{
    
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="DELETE FROM employee WHERE id='$id'";
    $stmt=$conn->exec($sql);
    if($stmt){
        //echo "Data Deleted Successfully";
    }
   }catch(PDOException $e){
    echo $sql."<br>".$e->getMessage();
}
$conn=null;

?>
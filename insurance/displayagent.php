<?php

$servername="localhost";
$username="root";
$password="";
$db="insurance";

try{
    $conn=new PDO("mysql:host=$servername;dbname=$db",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * from agent_master";
    $data=$conn->prepare($sql);
    $data->execute();
    $result1=$data->fetchAll(PDO::FETCH_ASSOC);

}catch(PDOException $e){
     echo $sql."<br>".$e->getMessage();
}
$conn=null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tbody>
    <tr>
        <th>Agent Code</th>
        <th>Agent Name</th>
    </tr>
    <?php foreach($result1 as $row1) {?>
    <tr>
        <td><?php echo $row1['Agent_code']; ?></td>
        <td><?php echo $row1['Agent_Name']; ?></td>
    </tr>
    <?php } ?>
    <tbody>
    </table>
</body>
</html>


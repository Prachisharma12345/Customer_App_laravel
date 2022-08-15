<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$db="insurance";

try{
$conn=new PDO("mysql:host=$servername;dbname=$db",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql="SELECT * from scheme_master";
$data=$conn->prepare($sql);
$data->execute();
$result=$data->fetchAll(PDO::FETCH_ASSOC);

}catch(PDOException $e){
    echo $sql."<br>".$e->getMessage();
}
$conn=null;

$_SESSION['result']=$result;


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
 
           
           
              <table class="table table-light ">
                <tbody>
                  <tr>
                    <th>Scheme Code:</th>
                    <th>Scheme Name:</th>
                    <th>Commission:</th>
                    <tr>
                    <?php  foreach($result as $row){ ?>
                      <tr>
                        <td><?php echo $row['Scheme_code'] ?></td>
                        <td><?php echo $row['Scheme_Name'] ?></td>
                        <td><?php echo $row['Commission'] ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              
      
        
   
 
  </body>
</html>
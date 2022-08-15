<?php
session_start();
//include '../api/connectdb.php';
$mobile=$_POST['mobile'];
$passwod= $_POST['passwod'];
$role=$_POST['role'];

$servername="localhost";
$username="root";
$password="";
$dbname="voting";
try {
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt=$conn->prepare("SELECT * from user where mobile='".$mobile."' AND passwod='".$passwod."' AND role =".$role);
    $stmt->execute();
    $numrows=$stmt->rowCount();
    $stmt2=$conn->prepare("SELECT * from user where role=2");
    $stmt2->execute();
    $numrows2=$stmt2->rowCount();           
    if($numrows > 0 && $numrows2 > 0){

        $usersdata=$stmt->fetch(PDO::FETCH_ASSOC);
        $groupsdata=$stmt2->fetchAll(PDO::FETCH_BOTH);
        if(is_array($usersdata) && count($usersdata)){
            $_SESSION['usersdata']=$usersdata; 
            //$_SESSION['usersdata']=$usersdata[1];
        } else{
            $_SESSION['usersdata']=null;
        }
        $_SESSION['groupsdata']=$groupsdata;
        
       echo '  
                <script>
                    window.location="../routes/dashboard.php";
                </script>
        ';
    }else{
            echo '  
                <script>
                    alert("Invalid Credentails!");
                    window.location="../";
                </script>
                ';
        }
    } catch (PDOException $e) {
            echo '$stmt'.$e->getmessage();
        
    }


?>
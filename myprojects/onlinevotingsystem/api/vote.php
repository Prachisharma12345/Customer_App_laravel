<?php
session_start();
$usr_array=$_SESSION['usersdata'];
var_dump($usr_array);
//include 'connectdb.php';

try {
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="voting";
    $tablename="user";
    $conn=new PDO("mysql:host=$servername;tblname=$tablename;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $votes=$_POST['gvotes'];
    $total_votes=$votes +1;
    $gid=$_POST['gid'];
    $uid=$_SESSION['usersdata']['id'];
   // print_r($gid);
    
    $sql="UPDATE user SET  votes=$total_votes where id=$gid";
    $update_votes=$conn->prepare($sql);
    $update_votes->execute();
    
    $sql2="UPDATE user SET status=1 where id=$uid";
    $update_user_status=$conn->prepare($sql2);
    $update_user_status->execute();
    //print_r($_SESSION);
    if($update_votes && $update_user_status){
        $sql3="SELECT * from user where role=2";
        $groups=$conn->prepare($sql3);
        $groups->execute();
        $groupsdata=$groups->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['groupsdata']=$groupsdata;
        $_SESSION['usersdata']['status']=1;
        
        echo'
            <script>
                alert("Voting Successful!");
                window.location = "../routes/dashboard.php";
            </script>
        ';
    }

     else {
        echo'
            <script>
                alert("Some error occurred!");
                window.location = "../routes/dashboard.php";
            </script>
        ';
    }

}catch(PDOException $e){

}
?>
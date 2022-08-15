<?php 
session_start();
if(!isset($_SESSION['usersdata'])){
    header("location:../");
}
if(!isset($_SESSION['groupsdata'])){
    header("location:../");
}
$groupsdata=$_SESSION['groupsdata'];
$usersdata=$_SESSION['usersdata'];


        

//echo '<pre>';
//print_r ($userdata);  
//exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System - Dashboard</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>
    <style>
       
       #mainpanel{
           padding: 10px;
       }
        #profile {
            background-color:white;
            width:30%;
            padding:20px;
            float:left;
        }
        #group {
            background-color:white;
            width:60%;
            padding:20px;
            float:right;
        }
        #backbtn{
            background-color: #3498db; 
            padding: 5px;
            border-radius:5px;
            color:white;
            font-size:15px;
            float: left;
            margin: 10px;

  }
        #logoutbtn{
            background-color: #3498db; 
            padding: 5px;
            border-radius:5px;
            color:white;
            font-size:15px;
            text-align: left;
            float: right;
            margin: 10px;

        }
        #votebtn{
            
            background-color: #3498db; 
            padding: 5px;
            border-radius:5px;
            color:white;
            font-size:15px;
            float: left;

         }
         #votedbtn{
              
            background-color: green; 
            padding: 5px;
            border-radius:5px;
            color:white;
            font-size:15px;
            float: left;
         }
        }
    </style>
    
    <div id="mainSection">
    <center>
        <div id="headerSection">
        <a href="../"><button id="backbtn">  Back</button></a>
        <a href="logout.php">  <button id="logoutbtn"> Logout</button></a>
            <h1>Online Voting System </h1>  
        </div>
    </center>
        <hr>
        <div id="mainpanel">
                <div id="profile">
                        
                        <?php if($usersdata){ 
                            
                            ?>
                        
                        <center><img width="100" height="100"  src="../images/<?php echo $usersdata['image'] ?>"></img></center><br><br>
                        <b>Name:</b><?php echo $usersdata['name'] ?><br><br>
                        <b>Mobile:</b><?php echo $usersdata['mobile'] ?><br><br>
                        <b>Address:</b><?php echo $usersdata['address'] ?><br><br>
                        <?php if($usersdata['status']==0){
                                $status='<b style=color:red> Not Voted</b>';
                            }else{
                                $status='<b style=color:green>  Voted</b>';
                            }?>
                        <b>Status:</b><?php 
                        echo $status;?> <br><br>
                <?php } ?>
                </div>
                <div id="group">
                    
                <?php 

                    foreach($groupsdata as $row){     ?>
                    <img  style="float:right" width="100" height="100"  src="../images/<?php echo $row['image'] ?>"></img></center><br><br>
                    <b>Name:</b><?php echo $row['name'] ?></b><br><br>
                    <b>Votes:<?php echo $row['votes']  ?></b><br><br>
                    <form method="POST" action="../api/vote.php">
                        <input type="hidden" name="gvotes" value="<?php echo $row['votes'] ?>">
                        <input type="hidden" name="gid" value="<?php echo $row['id'] ?>">
                        <?php 
                            if($usersdata['status']==0){ ?>
                                <button type="submit" id="votebtn"  >Vote</button><br><br>
                         <?php   }else { ?>
                                <button disabled type="submit" id="votedbtn" >Voted</button><br><br>
                            <?php   } ?>    
                </form>
         
                    <hr><br>
                    
                <?php  }?>
                </div>
                </div>
    </div>
  
    
</body>
</html>
<?php
include 'displayscheme.php';
include 'displayagent.php';

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
  
    <form action="Policy_Details.php" method="POST">
    <div class="container">
    <h1 class="text-center mt-5">Policy Form</h1>
        <div class="form-group">
            <label for="">Policy Date</label>
            <input type="date" name="Policy_date" id="" class="form-control border border-success" placeholder="Enter Policy Date">      
          </div>
         
          <label for="">Scheme Code</label>
          <select name="Scheme_code" class="border border-success w-100" id="">
          <?php foreach($result as $row){?>
            <option name="Scheme_code" value=" "><?php echo $row['Scheme_code']; ?></option>
            <?php }?>
          </select>
          <br>
          <label for="">Scheme Name</label>
          <select name="Scheme_Name" class="border border-success w-100" id="">
          <?php foreach($result as $row){?>
            <option name="Scheme_Name" value=" "><?php echo $row['Scheme_Name']; ?></option>
            <?php }?>
          </select>
          <br><br>
          <label for="">Agent Code</label>
          <select name="Agent_code" class="border border-success w-100" id="">
          <?php foreach($result1 as $row1){?>
            <option value="Agent_code"><?php echo $row1['Agent_code'];?></option>
            <?php }?>
          </select>
          <br><br>
          <label for="">Agent Name</label>
          <select name="Agent_Name" class="border border-success w-100" id="">
          <?php foreach($result1 as $row1){?>
            <option value="Agent_Name"><?php echo $row1['Agent_Name'];?></option>
            <?php }?>
          </select>
          <br><br>
          <label for="">Commission</label>
          <select name="Commission" class="border border-success w-100" id="">
          <?php foreach($result as $row){?>
            <option name="Commission" value=" "><?php echo $row['Commission']; ?></option>
            <?php }?>
          </select>
          <br><br>
        
    
  
          <div class="form-group">
            <label for="">Customer Name</label>
            <input type="text" name="CustomerName" id="" class="form-control border border-success" placeholder="Enter Customer Name">      
          </div>
          <div class="form-group">
            <label for="">Policy Amount</label>
            <input type="number" name="PolicyAmount" id="" class="form-control border border-success" placeholder="Enter Policy Amount">      
          </div>
        
          
          <button type="submit" name="" class=" btn-lg btn btn-success" >Save</button>
          
        
         
    
  </div>
  </form>  

  </body>
</html>
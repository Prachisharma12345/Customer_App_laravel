<!DOCTYPE html>
<html>
<head>
    <title>Calculator </title>
</head>
<body>
    <div>
        <h1>Calculator</h1>
    </div>

    <form action="#" method="get">
        <input type="text" name="v1">
        <select name="action" id="">
            <option value="plus">+</option>
            <option value="minus">-</option>
        </select>
        <input type="text" name="v2">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(isset($_GET['submit'])){
            $v1=$_GET['v1'];
            $v2=$_GET['v2'];

            if($_GET['action']=="plus"){
                $result=$v1+$v2;
                echo "$v1 +$v2";
            }else{
                $result=$v1-$v2;
                echo "$v1-$v2";
            }
            echo "=$result";
        }
    ?>
</body>
</html>
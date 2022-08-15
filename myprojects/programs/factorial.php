<?php
    $n=5;
    $fact=1;
    for($i=$n;$i>=1;$i--){
        $fact=$fact * $i;
   
    }
    echo $fact;
    echo "<br>";
    echo "next program";
    
    echo "<br>";

    
    
    function factorial($number){
        $fact=1;
        for($i=$number;$i>1;$i--){
            $fact=$fact * $i;
        }
        echo $fact;
    }
    factorial(5);
    
?>
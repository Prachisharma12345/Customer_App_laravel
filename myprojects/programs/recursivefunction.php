<?php
function naturalnumber($number){
    if($number<=10){
        echo $number;
        echo "<br>";
        naturalnumber($number+1);
        
    }
}
naturalnumber(1);



echo "next program";
echo "<br>";
echo "<br>";

function factorial($number){
    if($number==0){
        return 1;
    }else{
        return $number * factorial($number-1);
    }
}
echo factorial(5);



?>
<?php

function myfunction($v){
    if($v=="Dog"){
        return "Fido";
    }
    return $v;
}

$a=array("Horse","Dog","Cat");
print_r(array_map(myfunction(),$a));

?>
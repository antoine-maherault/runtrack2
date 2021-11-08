<!DOCTYPE html>
<html>
 <head>
 <title> Runtrack PHP - Jour 5</title>
 </head>
 <body>
<?php 

function calcule($a,$operation,$b){
    if($operation == "+"){
        return $a+$b;
    }
    if($operation == "-"){
        return $a-$b;
    }
    if($operation == "*"){
        return $a*$b;
    }
    if($operation == "/"){
        return $a/$b;
    }
    if($operation == "%"){
        return $a%$b;
    }
}

echo calcule(4,"-",2)

?>
 </body>
</html>
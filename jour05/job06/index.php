<!DOCTYPE html>
<html>
 <head>
 <title> Runtrack PHP - Jour 5</title>
 </head>
 <body>
<?php 

function leetspeak($str){
   $i = 0;  
   $count = 0;
   while(isset($str[$i])){
        if($str[$i]== "a"||$str[$i]== "A"){
            $str[$i] = "4";  
        }
        if($str[$i]== "b"||$str[$i]== "B"){
            $str[$i] = "8";  
        }
        if($str[$i]== "e"||$str[$i]== "E"){
            $str[$i] = "3";  
        }
        if($str[$i]== "g"||$str[$i]== "G"){
            $str[$i] = "6";  
        }
        if($str[$i]== "l"||$str[$i]== "L"){
            $str[$i] = "1";  
        }
        if($str[$i]== "s"||$str[$i]== "S"){
            $str[$i] = "5";  
        }
        if($str[$i]== "t"||$str[$i]== "T"){
            $str[$i] = "7";  
        }
    $i ++;
    }
    return $str;
   }

echo leetspeak("Plateforme");


?>
 </body>
</html>



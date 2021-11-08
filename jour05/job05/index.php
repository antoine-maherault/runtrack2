<!DOCTYPE html>
<html>
 <head>
 <title> Runtrack PHP - Jour 5</title>
 </head>
 <body>
<?php 

function occurences($str,$char){
   $i = 0;  
   $count = 0;
   while(isset($str[$i])){
        if($str[$i]==$char){
            $count = $count +1;  
        }
    $i ++;
    }
    return $count;
   }

echo occurences("plateforme","e")

?>
 </body>
</html>
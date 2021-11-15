<!DOCTYPE html>
<html>
 <head>
  <title>PHP jour 6</title>
 </head>
 <body>
<?php 

$animaux = ['chien', 'elephant', 'pigeon', 'albatros', 'crabe', 'tortue','zebre'];

function bubblesort($tab,$croissant){
    $i=0;
    while(isset($tab[$i])){
            $i++;
    }
    if ($croissant == true){
        while ($a < 6){
            for($u = 0; $u<$i-1;$u++){
                if($tab[$u][0]>$tab[$u+1][0]){
                    $temp1 = $tab[$u] ;
                    $temp2 = $tab[$u+1] ;
                    $tab[$u] = $temp2;
                    $tab[$u+1] = $temp1;
                }
            }
            $a++;
        }
    }
    
    if ($croissant == false){
        while ($a < 6){
            for($u = 0; $u<$i-1;$u++){
                if($tab[$u][0]<$tab[$u+1][0]){
                    $temp1 = $tab[$u] ;
                    $temp2 = $tab[$u+1] ;
                    $tab[$u] = $temp2;
                    $tab[$u+1] = $temp1;
                }
            }
            $a++;
        }
    }
    
    foreach($tab as $value){
        echo $value.", ";
    }
}

bubblesort($animaux, true);

?>

 </body>
</html>
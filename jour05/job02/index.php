<!DOCTYPE html>
<html>
 <head>
 <title> Runtrack PHP - Jour 5</title>
 </head>
 <body>
<?php 

function bonjour($jour){
    if ($jour == 1 ){
        echo "Bonjour";
    }
    if ($jour == 0 ){
        echo "Bonsoir";
    }
}

echo bonjour(true);

?>
 </body>
</html>
<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
 <?php 

$str = "Dans l'espace, personne ne vous entend crier";
$i=0;

while(isset($str[$i])){
    $i++;
}

echo $i;


?>
 </body>
</html>
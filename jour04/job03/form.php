<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
 <?php 

$count = 0;

foreach($_POST as $value){
  $count = $count + 1;
}

echo "Nombre d'arguments POST : ".$count;

?>
 </body>
</html>
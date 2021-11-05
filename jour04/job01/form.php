<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
 <?php 

$count = 0;

foreach($_GET as $value){
  $count = $count + 1;
}

echo "Nombre d'arguments GET : ".$count;

?>
 </body>
</html>
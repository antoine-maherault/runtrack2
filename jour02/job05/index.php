<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
 <?php 

$i = 0;

while($i<=1000){
for ($u=$i; $u>0; $u--){
    if ($i % $u == 0){
        $count = $count + 1;
    }
}
if ($count == 2){
    echo $i."</br>";
}
$count = 0;
$i++;
}
?>
 </body>
</html>
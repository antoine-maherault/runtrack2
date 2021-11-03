<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
 <?php 
$i = 0;
while($i<=1337){
    if ($i == 42){
     echo "<u><b>$i</b></u>"; 
    }
    else{
    echo $i;
    }
    echo "<br/>";
    $i++;
}
?>
 </body>
</html>
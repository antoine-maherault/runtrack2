<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
 <?php 
$i =0;
while($i<=100){
    if ($i<=20){
        echo "<i>$i</i>".'<br/>';
    }
    elseif ($i>=25 && $i<=50){
        if ($i == 42){
            echo "La Plateforme_".'<br/>';
        }
        else {
            echo "<u>$i</u>".'<br/>';
        }
    }
    else{
        echo $i.'<br/>';
    }
    $i++;
}
?>
 </body>
</html>
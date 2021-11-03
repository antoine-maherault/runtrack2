<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
 <?php 
$i =0;
while($i<=100){
    if (($i % 3) == 0 || ($i % 5) == 0){
        if ($i % 3 == 0 && $i % 5 == 0){
            echo "FizzBuzz".'<br/>';
        }
        elseif ($i % 3 == 0){
            echo "Fizz".'<br/>';
        } 
        elseif ($i % 5 == 0){
            echo "Buzz".'<br/>';
        } 
    }
    else {
        echo $i.'<br/>';
    }
    $i++;
}
?>
 </body>
</html>
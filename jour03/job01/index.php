<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
 <?php 

$array = [200,204,173,98,171,404,459];

$i = 0;

while(isset($array[$i])){
    if ($array[$i] % 2 ==  0){
        echo "$array[$i] est paire <br/>";
    }
    else {
        echo "$array[$i] est impaire <br/>";
    }
    $i++;
}

?>
 </body>
</html>
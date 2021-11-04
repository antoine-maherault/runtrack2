<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
 <?php 

$str = "I'm sorry Dave I'm afraid I can't do that";
$vowels = ['a','e','i','o','u','A','E','I','O','U'] ;
$i = 0;
$u = 0;

while(isset($str[$i])){ //go through $str
    while(isset($vowels[$u])){
        if($str[$i] == $vowels[$u]){
            echo $str[$i];
        }
    $u++;
    }
$i++;
$u = 0;
}

?>
 </body>
</html>


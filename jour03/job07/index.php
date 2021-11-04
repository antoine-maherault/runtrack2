<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
 <?php 

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$str2 = "Certaines choses changent, et d'autres ne changeront jamais.";

$i = 0;
$u = 0;

while(isset($str[$u])){
    $u++;
}

$u = $u-1;

while(isset($str[$i])){
    $str2[$i]= $str[$i+1];
    if($i==$u){
        $str2[$i]= $str[0];
    }
    $i++;
}

echo $str2;

?>
</body>
</html>
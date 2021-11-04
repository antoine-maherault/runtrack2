<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
 <?php 

$str = "Les choses que l'on possede finissent par nous posseder.";
$i=0;

while(isset($str[$i])){
    $i++;
}

for($u = $i; $u>=0;$u--){
    echo $str[$u];
}

?>
</body>
</html>
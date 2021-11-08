<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
<?php 

if($_POST["username"]=="John" && $_POST["password"]=="Rambo"){
    echo "C'est pas ma guerre";
}
else{
    echo "Votre pire cauchemar";
}

?>
</body>
</html>
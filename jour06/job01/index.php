<!DOCTYPE html>
<html>
 <head>
  <title>PHP jour 6</title>
  <link rel="stylesheet" href="style1.css">
  <?php

if ($_GET["style"] == "style1"){
    ?><link rel="stylesheet" href="style1.css"><?php
}

if ($_GET["style"] == "style2"){
    ?><link rel="stylesheet" href="style2.css"><?php
    }

if ($_GET["style"] == "style3"){
    ?><link rel="stylesheet" href="style3.css"><?php
    }
?>

 </head>
 <body>
<?php 

?>
 <form action="" method="get"> 
     <select name="style">
        <option value="style1">Style 1 </option>
        <option value="style2">Style 2</option>
        <option value="style3">Style 3</option>
     </select>
     <input type="submit" value="submit"></input>
</form>

 </body>
</html>
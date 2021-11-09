<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>

 <form action="" method="get">
  <label for="width">largeur</label><br>
  <input type="text" name="width" ><br>
  <label for="height">hauteur</label><br>
  <input type="text" name="height" ><br>
  <input type="submit" value="Submit">
</form> 
<?php 


// Toît 
if(($_GET["width"]%3 == 0) || ($_GET["height"]%3==0)){
    $var_center = $_GET["width"]-3; // $_GET["width"]-2
    $inc = ($_GET["width"] / $_GET["height"])*1; // ($_GET["width"] / $_GET["height"]) 
}
elseif (($_GET["width"]%2 == 1) || ($_GET["height"]%2==1)){
    $var_center = $_GET["width"]-2; // $_GET["width"]-2
    $inc = ($_GET["width"] / $_GET["height"])*1; // ($_GET["width"] / $_GET["height"])
}
else{
    $var_center = $_GET["width"]-2; // $_GET["width"]-2
    $inc = ($_GET["width"] / $_GET["height"]); // ($_GET["width"] / $_GET["height"])5
}
$length =0; // 0

    // TOP //   

for($u = 1 ; $u<$_GET["height"];$u++){   
    if (($_GET["width"]%2 == 1) || ($_GET["height"]%2 == 1) || ($_GET["width"]%3 == 1) || ($_GET["height"]%3 == 0)){
        if ($var_center == ($_GET["width"]-3) || ($var_center == ($_GET["width"]-3))){
            echo "&nbsp";
        }
    }
    
    
    // space //
        for($i = 0 ; $i<$var_center ;$i++){
            echo "&nbsp";
        }
        // length_étage //
        echo '/';
        for($a = 0; $a<$length;$a++){
            echo "_";
        }
        echo '\ <br/>';    

        // compteurs //
        $var_center = $var_center - $inc;
        // $var_length =  $var_length  + $inc;
        $length = $length + $inc;
  
    }
    //__ //    
   
  
    // BASE //   
echo '/';
for($i = 2 ; $i<$_GET["width"];$i++){
    echo "_";
}
echo '\ <br/>';
    //__ //    


// Murs 

for($i = 1 ; $i<$_GET["height"];$i++){
    echo '|';
    for($u = 2 ; $u<$_GET["width"];$u++){
        echo "&nbsp&nbsp";
    }
    echo '|<br/>';
}

// sol  

echo '|';
for($i = 2 ; $i<$_GET["width"];$i++){
    echo "_";
}
echo '|';


?>



</body>
</html>
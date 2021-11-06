<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
<?php 


// Toît 

    // TIP //  
// $tip = 2 ; // 2 FOR 10x5
// for($i = $tip ; $i<($_GET["width"]);$i++){
//     echo '&nbsp';
// }
// echo '/\ <br/>';

    //__ //  

$stabliser = $_GET["width"] / 2; // 2 FOR 10x5
$var_center = $_GET["width"]-2; // -4 FOR 10x5 -6 _ FOR 20x5 _ -8 FOR 30x5 _ -10 FOR 40x5
$var_length =  $_GET["width"] -2 ; // -5 FOR 10x5 _ -10 FOR 20*10 _-20 FOR 40$20
$inc = $_GET["width"] / $_GET["height"]; // 2 FOR 10x5 _ 6 FOR 20x5 _ 9 FOR 30x5
$length = 0;
    // TOP //   


for($u = 1 ; $u<$_GET["height"];$u++){   
    
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
        $var_length =  $var_length  + $inc;
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
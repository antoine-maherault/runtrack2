<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
<?php 


// Toît 

    // TIP //    
for($i = 1 ; $i<$_GET["width"];$i++){
    echo '&nbsp';
}
echo '/\ <br/>';
    //__ //  

$stabliser = $_GET["width"] / 2;
$var_center = $_GET["width"]*0.9;
$var_length =  $_GET["width"] / (1.1*$_GET["height"])  ;
$inc = 0.003*$_GET["height"] + (0.1*$_GET["width"]);
   
    // TOP //   


for($u = 1 ; $u<$_GET["height"];$u++){
    // space //
    if($var_length < $_GET["width"]){
        for($i = 0 ; $i<$var_center ;$i++){
            echo "&nbsp";
        }
        // length_étage //
        echo '/';
        for($a = 0; $a<$var_length;$a++){
            echo "_";
        }
        echo '\ <br/>';    

        // compteurs //
        $var_center = $var_center - $inc;
        $var_length =  $var_length  + $inc    ;
    }
    else{
        echo '/';
        for($o = 0 ; $o<$_GET["width"];$o++){
            echo "_";
        }
        echo '\ <br/>';    
    }
    }

    //__ //    
   
  
    // BASE //   
echo '/';
for($i = 0 ; $i<$_GET["width"];$i++){
    echo "_";
}
echo '\ <br/>';
    //__ //    


// Murs 

for($i = 1 ; $i<$_GET["height"];$i++){
    echo '|';
    for($u = 0 ; $u<$_GET["width"];$u++){
        echo "&nbsp&nbsp";
    }
    echo '|<br/>';
}

// sol  

echo '|';
for($i = 0 ; $i<$_GET["width"];$i++){
    echo "_";
}
echo '|';


?>




</body>
</html>
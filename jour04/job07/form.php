<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
<?php 

//html code// 

//if h = 5 alors 5 traits murs et toît// 
//if h = 10 alors 10 traits murs et toît// 

// if l = 10 alors 8 tirets bas 
// if l = 20 alors 18 tirets bas



$_GET["height"];
$_GET["width"];


// toît 

    //TIP //    
for($i = 0 ; $i<$_GET["width"];$i++){
 echo '&nbsp';
}
echo '/\ <br/>';

    //__ //  

$stabliser = $_GET["width"] / 2;
$var_center = $_GET["width"]-(1.2*$_GET["height"]);
$var_length =  $_GET["width"] / $_GET["height"]  ;
$inc = $_GET["height"] - 1;
   
    //TUILES //   


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
            echo "&nbsp";

            echo '/';
        for($a = 0; $a<$stabliser;$a++){
            echo "_";
        }
        echo '\ <br/>';    
        }
    }



  
    

    //__ //    
   
  

    //BASE //   

echo '/';
for($i = 0 ; $i<$_GET["width"];$i++){
    echo "_";
}
echo '\ <br/>';
    //__ //    


// murs 

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
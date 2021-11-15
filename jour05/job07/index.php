<!DOCTYPE html>
<html>
 <head>
 <title> Runtrack PHP - Jour 5</title>
 </head>
 <body>

 <?php 

function gras($str){
    $i = 0;  
    $caps = ['A','E','I','O','U','B','C','D','F','G','H','J','K','L', 'M', 'N', 'P', 'Q','R','S','T','V','W','X','Y','Z'];
    $space_index = array(0);
    while(isset($str[$i])){  // create space index 
      if ($str[$i]==" "){
          $space_index[] = $i;
      }
      $i++;
    }   
    $i = 0;  

    $u = 0;

    $count_space = 0;
    while(isset($space_index[$count_space])){ // get length of space index 
        $count_space++;
    }

    $count_str = 0;
    while(isset($str[$count_str])){ // get length of word index 
        $count_str++;
    }


    while(isset($space_index[$i])){  // create an index for start and end point of each word 
        if ($i == 0){
            $w_index[$i][0]= $space_index[$i];
            $w_index[$i][1]= $space_index[$i+1]-1;
        }
        elseif ($i == $count_space -1){
            $w_index[$i][0]= $space_index[$i]+1;
            $w_index[$i][1]= $count_str -1;
        }
        else {
            $w_index[$i][0]= $space_index[$i]+1;
            $w_index[$i][1]= $space_index[$i+1]-1; 
        }
        $i++;
        }
    while(isset($w_index[$u])){ // bold every word starting with caps 
        $a  = 0;

        if($a == 0){
            foreach($caps as $value){

                if ( $str[$w_index[$u][0]] == $value){
                    for($a = $w_index[$u][0];$a<=$w_index[$u][1];$a++){
                        echo "<b>" . $str[$a] . "</b>";
                    }
                    echo "&nbsp";
                    $a = 1;
                }
       
            }
        }
        else{
            for($a = $w_index[$u][0];$a<=$w_index[$u][1];$a++){
                echo $str[$a];
            }
            echo "&nbsp";
            $a=0;
        }
        if($a==0){
            for($a = $w_index[$u][0];$a<=$w_index[$u][1];$a++){
                echo $str[$a];
            }
            echo "&nbsp";
            $a=0;
        }
        $u++;
    }
}

function cesar($str,$decalage){
    $i = 0;

    $dic = [
        'min' => ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'],
        'maj' => ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'], 
    ] ;
    // $alpha = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z']

    while(isset($str[$i])){ //go through $str
        $u = 0;
        $y = 0;
        $count = 0;

        while(isset($dic[maj][$u]) && $count == 0){
            if($str[$i] == $dic[maj][$u]){
                $str[$i]= $dic[maj][$u+$decalage];
                $count = 1;
            }
            $u++;
        }

        while(isset($dic[min][$y])&& $count == 0){
            if($str[$i] == $dic[min][$y]){
                $str[$i]= $dic[min][$y+$decalage];
                $count = 1;
            }
            $y++;
        }
        $i++;
     
    }
    echo $str;

    //add correc fin de liste
     
}

function plateforme($str){
     
}





if ($_GET["fonction"] == "gras"){
    echo gras($_GET["str"]);
}
if ($_GET["fonction"] == "cesar"){
    echo cesar($_GET["str"],2);
}
if ($_GET["fonction"] == "plateforme"){
    echo plateforme($_GET["str"]);
}


?>

 <form action="" method="get"> 
     <input name= "str" type ="txt" ></input>
     <select name="fonction">
        <option value="gras">Gras</option>
        <option value="cesar">Cesar</option>
        <option value="plateforme">Plateforme</option>
     </select>
     <input type="submit" value="submit"></submit>
</form>
 </body>
</html>



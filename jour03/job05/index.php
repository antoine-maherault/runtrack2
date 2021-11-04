<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
 <?php 

$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    'consonnes' => ['b','c','d','f','g','h','j','k','l', 'm', 'n', 'p', 'q','r','s','t','v','w','x','y','z','B','C','D','F','G','H','J','K','L', 'M', 'N', 'P', 'Q','R','S','T','V','W','X','Y','Z'],
    'voyelles' => ['a','e','i','o','u','A','E','I','O','U'], 
] ;

$i = 0;
$u = 0;
$y = 0;

$vowels_count = 0 ;
$consonants_count = 0 ;

while(isset($str[$i])){ //go through $str
    while(isset($dic[voyelles][$u])){
        if($str[$i] == $dic[voyelles][$u]){
        $vowels_count = $vowels_count + 1;
        }
        $u++;
    }
    while(isset($dic[consonnes][$y])){
        if($str[$i] == $dic[consonnes][$y]){
        $consonants_count = $consonants_count + 1;
        }
        $y++;
    }
    $i++;
    $u = 0;
    $y = 0;
}

?>

<table style="text-align:center">
    <thead>
        <th>Voyelles</th>
        <th>Consonnes</th>
    </thead>
    <tbody>
        <tr>
            <td> <?php echo $vowels_count ?> </td>
            <td> <?php echo $consonants_count ?> </td>
        </tr>
    </tbody>    
</table>

</body>
</html>
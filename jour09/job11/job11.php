<!DOCTYPE html>
<html>
 <head>
 <title> Runtrack PHP - Jour 9</title>
 </head>
 <body>
<?php 

//          connect to SQL          //

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password, 'jour08');

//          select DATA          //

// get DATA from salles

$sql = "SELECT AVG(capacite) FROM `salles`" ;
$query = $conn->query($sql);
$result = $query->fetch_all();

// get column names from salles

$sql = "SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='jour08' AND `TABLE_NAME`='salles'";
$query = $conn->query($sql);
$col_names = $query->fetch_all();

?>

<table style="text-align:center">

  <thead>
  <?php 
  echo "<th> capacite_moyenne </nb>";

  ?>
  </thead>
  <tbody>
    <?php 
      for($i = 0;isset($result[$i]);$i++){
        echo "<tr>";
        foreach($result[$i] as $value){
        echo "<td>".$value."&nbsp"."</td>";
        }
        echo "</tr>";
      }
    ?>
  </tbody>

</table>

 </body>
</html>
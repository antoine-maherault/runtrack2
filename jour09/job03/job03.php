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

// get all from etudiants

$sql = "SELECT prenom,nom,naissance FROM `etudiants` WHERE sexe = 'Femme'";
$query = $conn->query($sql);
$result = $query->fetch_all();

// get column names from etudiants

$sql = "SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='jour08' AND `TABLE_NAME`='etudiants'";
$query = $conn->query($sql);
$col_names = $query->fetch_all();

?>

<table style="text-align:center">

  <thead>
  <?php 
        echo "<th>";
        foreach($col_names[1] as $value){
        echo $value."&nbsp";
        }
        echo "</th>";
        echo "<th>";
        foreach($col_names[2] as $value){
        echo $value."&nbsp";
        }
        echo "</th>";
        echo "<th>";
        foreach($col_names[3] as $value){
        echo $value."&nbsp";
        }
        echo "</th>";
      
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
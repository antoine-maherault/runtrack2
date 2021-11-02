<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>
 <?php 

$myBool = true;
$myInt = 4;
$myString = "Hey";
$myFloat = 3.5;

?>

<table style="text-align:center">
<thead>
    <th>Type</th>
    <th>Nom</th>
    <th>Valeur</th>
</thead>
<tbody> 
    <tr>
        <td> <?php echo gettype($myBool) ?> </td>
        <td>myBool</td>
        <td> <?php echo $myBool ?> </td>
    </tr>
    <tr>
        <td> <?php echo gettype($myInt) ?> </td>
        <td>myInt</td>
        <td> <?php echo $myInt ?> </td>
    </tr>
    <tr>
        <td> <?php echo gettype($myString) ?> </td>
        <td>myString</td>
        <td> <?php echo $myString ?> </td>
    </tr>
    <tr>
        <td> <?php echo gettype($myFloat) ?> </td>
        <td>myFloat</td>
        <td> <?php echo $myFloat ?> </td>
    </tr>
</tbody>
</table>

 </body>
</html>
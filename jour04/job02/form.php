<!DOCTYPE html>
<html>
 <head>
  <title>Hello World PHP</title>
 </head>
 <body>

<table>   
  <thead>
    <th> Arguments </th> 
    <th> Valeurs </th> 
  </thead>  
  <tbody>
        <tr>
            <td> Prénom </td>
            <td> <?php echo $_GET["fname"]; ?> </td>
        </tr>
        <tr>
            <td> Nom </td>
            <td> <?php echo $_GET["lname"] ?> </td>
        </tr>
        <tr>
            <td> Téléphone </td>
            <td> <?php echo $_GET["phone"] ?> </td>
        </tr>
        <tr>
            <td> Adresse </td>
            <td> <?php echo $_GET["address"] ?> </td>
        </tr>
    </tbody>  
</table>

</body>
</html>
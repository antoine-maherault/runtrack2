<!DOCTYPE html>
<html>
 <head>
 <title> Runtrack PHP - Jour 7</title>
 </head>
 <body>
<?php 
session_start();

$_SESSION["prenoms"][] = $_POST["prenom"];

foreach($_SESSION["prenoms"] as $value){ // display prenoms
	echo $value."&nbsp";
}

if (isset($_POST["reset"])){ // reset session if button pressed
    session_destroy();
}
  
?>

<form method="post"> 
		<input type="text" name="prenom" />   
	</form> 

<form method="post"> 
		<input type="submit" name="reset" value="reset"/>   
	</form> 

 </body>
</html>
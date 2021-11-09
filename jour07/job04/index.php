<!DOCTYPE html>
<html>
 <head>
 <title> Runtrack PHP - Jour 7</title>
 </head>
 <body>
<?php 

////////////// DISPLAY

if (!isset($_COOKIE['prenom'])) {   
	echo "
	<form method='post'> 
		<input type='text' name='prenom' />   
		<input type='submit' name='connexion' value='connexion'/>   
	</form> ";
	$prenom = $_POST['prenom'];
	setcookie("prenom", $prenom, time() + 36000 ); 
}
else {
	echo " Bonjour ".$_COOKIE['prenom']."&nbsp";
	echo "
	<form method='post'>
		<input type='submit' name='deco' value='deco'/>
	</form> ";
}

////////////// DECO

if (isset($_POST["deco"])){ 
	setcookie("prenom", ""); 
} 

?>

 </body>
 
</html>
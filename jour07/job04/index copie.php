<!DOCTYPE html>
<html>
 <head>
 <title> Runtrack PHP - Jour 7</title>
 </head>
 <body>
<?php 




////////

// if (isset($_POST["reset"])){ // reset nbvisites if reset is pressed
// 	$_COOKIE['nbvisites'] = 0;
// }

// if (!isset($_COOKIE['nbvisites'])) {   
// 	$cookies = 1;
// 	setcookie('nbvisites', $cookies, time() + 36000 ); // set cookie 'nbvisites" with $cookie as value
// }
// else{
// 	$cookies = ++$_COOKIE['nbvisites']; // increment $cookie 
// 	setcookie('nbvisites', $cookies, time() + 36000 ); //set cookie with new value
// 	echo $_COOKIE['nbvisites']; 
// 	}

///////






// setcookie( 'prenoms[1]', "hey", time() + 36000 );

// setcookie( 'prenoms[2]', "ho", time() + 36000 );


////////////// COMPTEUR
if (!isset($_COOKIE['count'])) {   
	$cookie = 0;
	setcookie('count', $cookie, time() + 36000 ); 
}
elseif(isset($_POST['connexion'])){ 
	$cookie = ++$_COOKIE['count']; 
	setcookie('count', $cookie, time() + 36000 ); 
	$count = $_COOKIE['count'];
	setcookie("prenoms['$count']", $_POST['prenom']); 
}

////////////// DISPLAY

if (!isset($_COOKIE['prenoms'])) {   
	echo "
	<form method='post'> 
		<input type='text' name='prenom' />   
		<input type='submit' name='connexion' value='connexion'/>   
	</form> ";
}
else {
	foreach($_COOKIE['prenoms'] as $value){ 
		echo "Bonjour ".$value."&nbsp";
	}
	echo "<input type='submit' name='deco' value='deco'/>"; 

}


////////////// RESET
if (isset($_POST["deco"])){ 
	echo "
	<form method='post'> 
		<input type='text' name='prenom' />   
		<input type='submit' name='connexion' value='connexion'/>   
	</form> ";
}

?>


 </body>

 
</html>
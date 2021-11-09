<!DOCTYPE html>
<html>
 <head>
 <title> Runtrack PHP - Jour 7</title>
 </head>
 <body>
<?php 

if (isset($_POST["reset"])){ // reset nbvisites if reset is pressed
	$_COOKIE['nbvisites'] = 0;
}

if (!isset($_COOKIE['nbvisites'])) {   
	$cookie = 1;
	setcookie('nbvisites', $cookie, time() + 36000 ); // set cookie 'nbvisites" with $cookie as value
}
else{
	$cookie = ++$_COOKIE['nbvisites']; // increment $cookie 
	setcookie('nbvisites', $cookie, time() + 36000 ); //set cookie with new value
	echo $_COOKIE['nbvisites']; 
	}

?>


<form method="post"> 
		<input type="submit" name="reset" value="reset"/>   
	</form> 
 </body>
</html>
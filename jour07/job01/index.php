<!DOCTYPE html>
<html>
 <head>
 <title> Runtrack PHP - Jour 7</title>
 </head>
 <body>
<?php 
session_start();

$_SESSION["nbvisites"]++;
echo $_SESSION["nbvisites"];

if (isset($_POST["reset"])){
    session_destroy();
}
?>


<form method="post"> 
		<input type="submit" name="reset" value="reset"/>   
	</form> 
 </body>
</html>
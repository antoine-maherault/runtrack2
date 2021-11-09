<!DOCTYPE html>
<html>
 <head>
 <title> Runtrack PHP - Jour 7</title>
 </head>
 <body>

 <style> 
 table, th, td {
  border: 1px solid black;
  width : 350px;
  height : 100px;
}

button {
width :100%;
height : 100%;
}

form {
height : 100px;
}

p {
    text-align : center;
    font-size : 30px;
}


</style>
<?php 
session_start();
if(!isset($_SESSION['count'])){
    $_SESSION['count']=1;
}
if(!isset($_SESSION['activeA1'])){
    $_SESSION['activeA1'] = 0;
}
if(!isset($_SESSION['activeA2'])){
    $_SESSION['activeA2'] = 0;
}
if(!isset($_SESSION['activeA3'])){
    $_SESSION['activeA3'] = 0;
}




// echo $_SESSION["activeA1"] ;
// echo $_SESSION["count"] ;

if (isset($_POST["reset"])){
$_SESSION['activeA1'] = 0;
$_SESSION['activeA2'] = 0;
$_SESSION['activeA3'] = 0;
$_SESSION['count']=1;}


?>

<table>  
    <tr> 
        <td> 
        <?php  
        if(isset($_POST['A1'])){
            $_SESSION['activeA1'] = 1;
        }
        if(!isset($_POST['A1']) && $_SESSION['activeA1'] == 0){
            echo "<form method = 'post'> <button type='submit' name = 'A1'value='-'> </button> </form>"; 
        }
        if($_SESSION['count']%2 == 1 && $_SESSION['activeA1'] = 1){
            echo "<p>X</p>"; 
            $_SESSION['activeA1'] = 1;
            $_SESSION['count'] ++;
                }
        else{
            echo "<p>O</p>"; 
            $_SESSION['activeA1'] = 1;
        }
        ?>
    </td> 
    <td> 
        <?php  
     if(!isset($_POST['A2']) && $_SESSION['activeA2'] == 0){
        echo "<form method = 'post'> <button type='submit' name = 'A2'value='-'> </button> </form>"; 
    }
    elseif($_SESSION['count']%2 == 1){
        echo "<p>X</p>"; 
        $_SESSION['activeA2'] = 1;
        $_SESSION['count'] ++;
            }
    else{
        echo "<p>O</p>"; 
        $_SESSION['activeA2'] = 1;
    }
        ?>
    </td>         
    <td> 
        <?php  
           if(!isset($_POST['A3']) && $_SESSION['activeA3'] == 0){
            echo "<form method = 'post'> <button type='submit' name = 'A3'value='-'> </button> </form>"; 
        }
        elseif($_SESSION['count']%2 == 1){
            echo "<p>X</p>"; 
            $_SESSION['activeA3'] = 1;
            $_SESSION['count'] ++;
                }
        else{
            echo "<p>O</p>"; 
            $_SESSION['activeA3'] = 1;
        }
        ?>
    </td>      
        </tr>
    <tr> 
        <td> <button type='submit' value='-'>   </button>    </td> 
        <td> <button type='submit' value='-'>   </button>     </td>
        <td> <button type='submit' value='-'>   </button>     </td>  
        </tr>
    <tr> 
        <td> <button type='submit' value='-'>   </button>    </td> 
        <td> <button type='submit' value='-'>   </button>     </td> 
        <td> <button type='submit' value='-'>   </button>     </td> 
        </tr>
</table>


<form method="post"> 
		<input type="submit" name="reset" value="reset"/>   
	</form> 

</body>
</html>
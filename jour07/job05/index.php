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
// if(!isset($_SESSION['count'])){
//     $_SESSION['count']=1;
// }
// if(!isset($_SESSION['activeA1'])){
//     $_SESSION['activeA1'] = 0;
// }
// if(!isset($_SESSION['activeA2'])){
//     $_SESSION['activeA2'] = 0;
// }
// if(!isset($_SESSION['activeA3'])){
//     $_SESSION['activeA3'] = 0;
// }


if (isset($_POST["reset"])){
    $_SESSION['activeA1'] = 0;
    $_SESSION['activeA2'] = 0;
    $_SESSION['activeA3'] = 0;
    $_SESSION['count']=1;
    $_SESSION['countA1']=0;
    $_SESSION['countA2']=0;
    $_SESSION['countA3']=0;
    $_SESSION['stopA1']=0;
    $_SESSION['stopA2']=0;
    $_SESSION['stopA3']=0;
}



// function morpion($button,$bool){
//     if(!isset($button) && $bool == 0){
//         echo "<form method = 'post'> <button type='submit' name = 'A1'value='-'> </button> </form>"; 
//     }
// }


?>

<table>  
    <tr> 
        <td> 
        <?php  
        if(!isset($_POST['A1']) && $_SESSION['activeA1'] == 0){
            echo "<form method = 'post'> <button type='submit' name = 'A1'value='-'> </button> </form>"; 
        }
        elseif($_SESSION['activeA1']==0){
            $_SESSION['activeA1'] = 1;
            $_SESSION['countA1'] = $_SESSION['count'];
        }
        echo $_SESSION['count'];
        if($_SESSION['activeA1']==1){

            if($_SESSION['countA1']%2 == 1){
                echo "<p>X</p>"; 
                }
            if($_SESSION['countA1']%2 == 0){
                echo "<p>O</p>"; 
            }
            if($_SESSION['stopA1']==0);{
                $_SESSION['count'] ++;
                $_SESSION['stopA1']=1;
            }
        }
        ?>
    </td> 
    <td> 
        <?php  
     if(!isset($_POST['A2']) && $_SESSION['activeA2'] == 0){
        echo "<form method = 'post'> <button type='submit' name = 'A2'value='-'> </button> </form>"; 
    }
    elseif($_SESSION['activeA2']==0){
        $_SESSION['activeA2'] = 1;
        $_SESSION['countA2'] = $_SESSION['count'];
    }
    echo $_SESSION['count'];
    if($_SESSION['activeA2']==1){

        if($_SESSION['countA2']%2 == 1){
            echo "<p>X</p>"; 
            }
        if($_SESSION['countA2']%2 == 0){
            echo "<p>O</p>"; 
        }
        if($_SESSION['stopA2']==0);{
            $_SESSION['count'] ++;
            $_SESSION['stopA2']=1;
        }

    }
        ?>
    </td>         
    <td> 
        <?php  
    if(!isset($_POST['A3']) && $_SESSION['activeA3'] == 0){
        echo "<form method = 'post'> <button type='submit' name = 'A3'value='-'> </button> </form>"; 
    }
    elseif($_SESSION['activeA3']==0){
        $_SESSION['activeA3'] = 1;
        $_SESSION['countA3'] = $_SESSION['count'];
    }
    echo $_SESSION['count'];
    if($_SESSION['activeA3']==1){

        if($_SESSION['countA3']%2 == 1){
            echo "<p>X</p>"; 
            }
        if($_SESSION['countA3']%2 == 0){
            echo "<p>O</p>"; 
        }
        if($_SESSION['stopA3']==0);{
            $_SESSION['count'] ++;
            $_SESSION['stopA3']=1;

        }

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
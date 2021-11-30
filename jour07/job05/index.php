<!DOCTYPE html>
<html>
 <head>
 <title> Runtrack PHP - Jour 7</title>
 </head>
 <body>

 <style> 
 table, th, td {
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

input {
    margin-top : 300px;
}
</style>

<?php 

session_start();

if (!isset($_SESSION["tab"])){
    $_SESSION["tab"] = ['-','-','-','-','-','-','-','-','-'];
    $_SESSION["count"] = 0;
}

if(isset($_GET)&&$_SESSION["count"]%2){
    $_SESSION["tab"][key($_GET)-1] = "X";
    $_SESSION["count"] ++;
}
elseif(isset($_GET)){
    $_SESSION["tab"][key($_GET)-1] = "O";
    $_SESSION["count"] ++;
}

if(isset($_GET['restart'])){
    session_destroy();
    header('Location:index.php');
}

?>

<form method = "get">
    <table>
    <tr> 
        <td> <button type='submit' value=<?php echo $_SESSION["tab"][0]?> name='1'> <?php echo $_SESSION["tab"][0]?>  </button>     </td>  
        <td> <button type='submit' value=<?php echo $_SESSION["tab"][1]?> name='2'> <?php echo $_SESSION["tab"][1]?>  </button>     </td>  
        <td> <button type='submit' value=<?php echo $_SESSION["tab"][2]?> name='3'> <?php echo $_SESSION["tab"][2]?>  </button>     </td>  
        </tr>
    <tr> 
        <td> <button type='submit' value=<?php echo $_SESSION["tab"][3]?> name='4'><?php echo $_SESSION["tab"][3]?>   </button>    </td> 
        <td> <button type='submit' value=<?php echo $_SESSION["tab"][4]?> name='5'><?php echo $_SESSION["tab"][4]?>   </button>     </td> 
        <td> <button type='submit' value=<?php echo $_SESSION["tab"][5]?> name='6'><?php echo $_SESSION["tab"][5]?>   </button>     </td> 
        </tr>
    <tr> 
        <td> <button type='submit' value=<?php echo $_SESSION["tab"][6]?> name='7'><?php echo $_SESSION["tab"][6]?>   </button>    </td> 
        <td> <button type='submit' value=<?php echo $_SESSION["tab"][7]?> name='8'><?php echo $_SESSION["tab"][7]?>   </button>     </td>
        <td> <button type='submit' value=<?php echo $_SESSION["tab"][8]?> name='9'><?php echo $_SESSION["tab"][8]?>   </button>     </td>  
        </tr>
    <tr> 
</table>
</form>

<form method="GET">
<input type='submit' value='restart' name='restart'>  </input>   
</form>

</body>
</html>
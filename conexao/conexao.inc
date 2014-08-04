<?php
echo "<meta charset=UTF-8>";

$host  = "localhost";
$user  = "root";
$pass  = "12345678";
$db    = "mydb";

$connection = mysql_connect($host, $user, $pass);
if($connection === FALSE){
    
    echo 'Não foi possível estabelecer uma conexão com o MYSQL !';
    echo mysql_error();
    
}else{
    if(!mysql_select_db($db,$connection)){
        
        echo 'Não foi possível selecionar o banco de dados' . $db . "<br/>";
        echo mysql_error(); 
        }
    
}
?>


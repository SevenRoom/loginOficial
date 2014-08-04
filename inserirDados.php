<?php

include_once 'classes/Bcrypt.class.php';
include_once 'conexao/conexao.inc';

$nome = $_POST['nome'];
$email = $_POST['login'];
$senha = $_POST['senha'];
$tipo = 'RES';
//Criptografando a senha 
$senha = Bcrypt::hash($senha);
//Montando a query de inserção
$query = "INSERT INTO usuario (NOME_USUARIO, EMAIL_USUARIO, SENHA_USUARIO, TIPO_USUARIO)"
        . "VALUES('$nome', '$email', '$senha', '$tipo')";
if(mysql_query($query))
    echo '<script>alert("Cadastro efetuado com sucesso!");location.href="frmlogin.php";</script>';
else
    echo mysql_error() . '<br/>'.'<a href=index.php> Voltar para página inicial </a>';
    
    
    // teste remoto



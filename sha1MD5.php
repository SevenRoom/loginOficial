<?php

include_once 'conexao/conexao.inc';


function geraSaltAleatorio($tamanho = 6) {
return substr(sha1(mt_rand()), 0, $tamanho); 
}
$salt = geraSaltAleatorio();
// Senha do usuário, pode ter vindo do $_POST, $_GET ou outro lugar
$query = "SELECT FROM usuario SENHA_USUARIO";

$senha = "AAAAAAAA"; 
// Cria um hash
$hash = md5($senha . $salt);
// Encripta esse hash 1000 vezes
for ($i = 0; $i < 1000; $i++) {
$hash = md5($hash);
}
// Salvamos $hash e $salt no banco de dado

echo $hash;
echo  $senha;

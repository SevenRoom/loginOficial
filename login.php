<?php

/*$senha = 'Olá Mundo';
$custo = '15';
$salt = 'Cf1f11ePArKlBJomM0F6aJ';

// Gera um hash baseado em bcrypt
$hash = crypt($senha, '$2a$' . $custo . '$' . $salt . '$');

echo $hash . "<br/>";

// Senha digitada pelo usuário (veio do formulário)
$senha = 'ola mundo';
// Senha já criptografada (salva no banco)
$hash = '$2a$08$Cf1f11ePArKlBJomM0F6a.EyvTNh6W2huyQi5UZst5qsHVyi3w5x.';
if (crypt($senha, $hash) === $hash) {
echo 'Senha OK!<br/>';
} else {
echo 'Senha incorreta!<br/>';

}
*/

//Utilizando a classe Bcrypt
// importando o arquivo
include_once 'conexao/conecta.inc';
include_once 'classes/Bcrypt.class.php';
//$email = 'roger@gmail.com';
//$senha = 'ola mundo';
$email = $_POST['email'];
$senha = $_POST['senha'];
$query = "SELECT * FROM usuario WHERE EMAIL_USUARIO='$email'";
$result = mysql_query($query);
$hashsBanco = mysql_fetch_assoc($result);
$senhahash = $hashsBanco['SENHA_USUARIO'];
// Encriptando a senha
//$hash = Bcrypt::hash($senha);
// $hash = $2a$08$MTgxNjQxOTEzMTUwMzY2OOc15r9yENLiaQqel/8A82XLdj.OwIHQm
// Salve $hash no banco de dados
// Verificando a senha
//$senha = 'ola mundo';
//$hash = '$2a$08$MTgxNjQxOTEzMTUwMzY2OOc15r9yENLiaQqel/8A82XLdj.OwIHQm'; //Valor retirado do banco
if (Bcrypt::check($senha, $senhahash)) {
echo 'Senha OK!<br/>';
} else {
echo 'Senha incorreta!<br/>';
}
//echo Bcrypt::hash($senha);



?>

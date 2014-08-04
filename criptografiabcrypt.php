<?php
echo "<meta charset=UTF-8>";
include 'conexao/conexao.inc';
include 'classes/Bcrypt.class.php';

// Encriptando a senha
$senha = $_POST['senha'];
$email = $_POST['email'];
//$hash = Bcrypt::hash($senha);
// $hash = $2a$08$MTgxNjQxOTEzMTUwMzY2OOc15r9yENLiaQqel/8A82XLdj.OwIHQm
// Salve $hash no banco de dados
// Verificando a senha
//$senha1 = 'ola mundo';
//$hash = '$2a$08$MTgxNjQxOTEzMTUwMzY2OOc15r9yENLiaQqel/8A82XLdj.OwIHQm';
$query  = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($query);
$usuarios = mysql_fetch_array($result);
    $hash = $usuarios['SENHA_USUARIO'];

if (Bcrypt::check($senha, $hash)) {
echo 'Senha OK!';

} else {
echo 'Senha incorreta!';
}
echo "<br/> <a href=index.php> Voltar </a><br/>";

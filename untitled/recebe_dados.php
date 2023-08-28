<html>
<title>Desenvolvendo Websites com PHP</title>
<body>

<?php
$username = $_POST["username"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$bairro = $_POST["bairro"];
$cpf = $_POST["cpf"];

$erro = 0;

if (strlen($username) < 5) {
    echo "O username deve possuir no mínimo 5 caracteres. <br>";
    $erro = 1;
}

if (strlen($senha) < 5) {
    echo "A senha deve possuir no mínimo 5 caracteres. <br>";
    $erro = 1;
}

if ($username == $senha) {
    echo "O Username e a senha devem ser diferentes.. <br>";
    $erro = 1;
}

if (empty($nome) or strstr($nome, ' ') == FALSE) {
    echo "Favor digitar seu nome corretamente. <br>";
    $erro = 1;
}

if (strlen($email) < 8 || strstr($email, '.com') == FALSE || strstr($email, '@') == FALSE) {
    echo "Favor digitar seu Email corretamente. <br>";
    $erro = 1;
}

if (empty($cidade)) {
    echo "Favor digitar sua cidade corretamente. <br>";
    $erro = 1;
}

if (strlen($estado) != 2) {
    echo "Favor digitar seu estado corretamente. <br>";
    $erro = 1;
}

if (empty($bairro)) {
    echo "Favor digitar o bairro corretamente. <br>";
    $erro = 1;
}

if (empty($cpf) || strlen($cpf) < 14 || strstr($cpf, '-') == FALSE) {
    echo "Favor digitar o CPF corretamente. <br>";
    $erro = 1;
}

//verifica se não houve erro
if ($erro == 0) {
    echo "Todos os dados foram digitados corretamente";
}

?>






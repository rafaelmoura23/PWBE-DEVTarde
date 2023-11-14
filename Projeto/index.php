<?php
//Verificar se foi enviado os dados via POST
if ($_SERVER("REQUEST_METHOD") == "POST") {
    //Se dados forem enviados via POST, obter e validar os valores
    $id = (isset($_POST["id"]) && $_POST["id"] != null) ? $_POST["id"] : "";
    $nome = (isset($_POST["nome"]) && $_POST["nome"] != null) ? $_POST["nome"] : "";
    $email = (isset($_POST["email"]) && $_POST["email"] != null) ? $_POST["email"] : "";
    $celular = (isset($_POST["celular"]) && $_POST["celular"] != null) ? $_POST["celular"] : NULL;
} else if (!isset($id)) {
    // Se não foram enviados dados via POST e nenhum ID foi setado, obter valores via GET
    $id = (isset($GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";
    $email = NULL;
    $celular = NULL;
}



try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=produtos", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->exec("set names utf8");
} catch (PDOException $e) {
    echo "" . $e->getMessage() . "";
}

// Verificar se a ação é 'save (salvar) e o campo 'nome' não está vazio
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $nome != "") {
    try {
        //Preparar e executar a inserção de um novo registro no banco de dados
        $stmt = $pdo->prepare("INSERT INTO produtos (nome, email, celular) VALUES (?,?,?)");
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $celular);
    } catch (\Throwable $th) {

    }
}

<?php
// Verificar se foi enviando dados via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Se dados foram enviados via POST, obter e validar os valores
    $id = (isset($_POST["id"]) && $_POST["id"] != null) ? $_POST["id"] : "";
    $nome = (isset($_POST["nome"]) && $_POST["nome"] != null) ? $_POST["nome"] : "";
    $email = (isset($POST["email"]) && $_POST["email"] != null ) ? $_POST["email"] : "";
    $celular = (isset($_POST["celular"]) && $_POST["celular"] != null) ? $_POST["celular"] : NULL;
} else if (!isset($id)) {
    // Se não foram enviados dados via POST e nenhum ID foi setado, obter valores via GET
    $id = (isset($GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";
    $email = NULL;
    $celular = NULL;
}

try {
    // Tentar estabelecer conexão com o banco de dados
    $pdo = new PDO("mysql:host=127.0.0.1; dbname=produtos", "root", "root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->exec("set names utf8");
} catch (PDOException $e) {
    // Tratar erro na conexão com o banco de dados
    echo "" . $e->getMessage() . "";
}

// Verificar se a ação é 'save' (salvar) e o campo 'nome' não está vazio
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $nome != "") {
    try {
        // Preparar e executar a inserção de um novo registro no banco de dados
        $stmt = $pdo->prepare("INSERT INTO produtos (nome, email, celular) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $celular);

        if ($stmt->execute()) {
            // Se a inserção foi bem-sucedida, exibir mensagem e limpar variáveis
            if ($stmt->rowCount() > 0) {
                echo "Dados cadastrados com sucesso!";
                $id = null;
                $nome = null;
                $email = null;
                $celular = null;
            } else {
                echo "Erro ao tentar efetivar cadastro";
            }
        } else {
            throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
    } catch (PDOException $erro) {
        // Tratar erro na inserção
        echo "Erro: " . $erro->getMessage();
    }
}

// Se a ação é 'upd' (atualizar) e há um ID definido
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "upd" && $id != "") {
    try {
        // Buscar registro para atualização
        $stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = ?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            // Se a busca foi bem-sucedida, preencher variáveis com os valores encontrados
            $rs = $stmt->fetch(PDO::FETCH_OBJ);
            $id = $rs->nome;
            $nome = $rs->id;
            $email = $rs->email;
            $celular = $rs->celular;
        } else {
            throw new PDOException("Erro: não foi possível declarar a instrução sql");
        }
    } catch (PDOException $erro) {
        // Tratar erro na busca
        echo "ERRO: " . $erro->getMessage();
    }
}

// Se há um ID definido, preparar instrução SQL para atualização, caso contrário, preparar para inserção
if ($id != "") {
    //Função de UPDATE
    $stmt = $pdo->prepare("UPDATE produtos SET nome=?, email=?, celular=? WHERE id = ?");
    $stmt->bindParam(4, $id);
} else {
    $stmt = $pdo->prepare("INSERT INTO produtos (nome, email, celular) VALUES (?, ?, ?)");
}

// Se a ação é 'del' (excluir) e há um ID definido
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "del" && $id != "") {
    try {
        // Preparar e executar a exclusão de um registro no banco de dados
        $stmt = $pdo->prepare("DELETE FROM produtos WHERE id = ?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            // Se a exclusão foi bem-sucedida, exibir mensagem e limpar ID
            echo "Registro foi excluído com êxito";
            $id = null;
        } else {
            throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
    } catch (PDOException $erro) {
        // Tratar erro na exclusão
        echo "Erro: " . $erro->getMessage();
    }
}
?>

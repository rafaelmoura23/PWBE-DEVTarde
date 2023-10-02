<?php
require_once 'conectaBD.php';
session_start();
if (empty($_SESSION)) {
// Significa que as variáveis de SESSAO não foram definidas.
// Não poderia acessar aqui.
    header("Location: index.php?msgErro=Você precisa se autenticar no sistema.");
    die();
}
$result = array();
// Verificar se está chegando a informação (id_anuncio) pelo $_GET
if (!empty($_GET['id_anuncio'])) {
// Buscar as informações do anúncio a ser alterado (no banco de dados)
    $sql = "SELECT * FROM anuncio WHERE email_usuario = :email AND id = :id";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':email' => $_SESSION['email'], ':id' => $_GET['id_anuncio']));
// Verificar se o usuário logado pode acessar/alterar as informações desse registro
        (id_anuncio)
if ($stmt->rowCount() == 1) {
// Registro obtido no banco de dados
    $result = $stmt->fetchAll();
    $result = $result[0]; // Informações do registro a ser alterado
}
else {

//die("Não foi encontrado nenhum registro para id_anuncio = " . $_GET['id_anuncio']
    . " e e-mail = " . $_SESSION['email']);
header("Location: index_logado.php?msgErro=Você não tem permissão para acessar esta 
página");
die();
}

} catch (PDOException $e) {
        header("Location: index_logado.php?msgErro=Falha ao obter registro no banco de 
dados.");
//die($e->getMessage());
    }
}

require_once 'conectaBD.php';
session_start();
if (empty($_SESSION)) {
// Significa que as variáveis de SESSAO não foram definidas.
// Não poderia acessar aqui.
    header("Location: index.php?msgErro=Você precisa se autenticar no sistema.");
    die();
}
$result = array();
// Verificar se está chegando a informação (id_anuncio) pelo $_GET
if (!empty($_GET['id_anuncio'])) {
// Buscar as informações do anúncio a ser alterado (no banco de dados)
    $sql = "SELECT * FROM anuncio WHERE email_usuario = :email AND id = :id";
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':email' => $_SESSION['email'], ':id' => $_GET['id_anuncio']));
// Verificar se o usuário logado pode acessar/alterar as informações desse registro
        (id_anuncio)
if ($stmt->rowCount() == 1) {
// Registro obtido no banco de dados
    $result = $stmt->fetchAll();
    $result = $result[0]; // Informações do registro a ser alterado
} else {
//die("Não foi encontrado nenhum registro para id_anuncio = " . $_GET['id_anuncio']
    .
    " e e-mail = " . $_SESSION['email']);
header("Location: index_logado.php?msgErro=Você não tem permissão para acessar esta 
página");
die();
}
} catch (PDOException $e) {
        header("Location: index_logado.php?msgErro=Falha ao obter registro no banco de 
dados.");
//die($e->getMessage());
    }
}
} ?>>
    Gato
    </option>
<option value="C"
    <?php if ($result['tipo'] == 'C') {
    echo "selected";
    }
    else {
    echo "disabled";
    }?>>
    Cachorro
</option>
    </select>
    </div>
<div class="col-4">
    <label for="porte">Porte</label>
    <select class="form-select" name="porte" id="porte">
        <option disabled>Selecione o porte do animal</option>
        <option value="P" <?php echo $result['porte'] == 'P' ? "selected" : "disabled"
        ?>>Pequeno</option>
        <option value="M" <?php echo $result['porte'] == 'M' ? "selected" : "disabled"
        ?>>Médio</option>
        <option value="G" <?php echo $result['porte'] == 'G' ? "selected" : "disabled"
        ?>>Grande</option>
    </select>
</div>
<div class="col-4">
    <label for="pelagemCor">Pelagem / Cor</label>
    <input type="text" name="pelagemCor" id="pelagemCor" class="form-control"
           value="<?php echo $result['pelagem_cor']; ?>" readonly>
</div>
<div class="col-4">
    <label for="raca">Raça</label>
    <input type="text" name="raca" id="raca" class="form-control" value="<?php echo
    $result['raca']; ?>" readonly>
</div>
<div class="col-4">
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" name="sexo" value="M" id="sexoM"
            <?php echo $result['sexo'] == 'M' ? "checked" : "disabled" ?>>
        <label for="sexoM" class="form-check-label">Macho</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" name="sexo" value="F" id="sexoF"
<?php echo $result['sexo'] == 'F' ? "checked" : "disabled" ?>
               } ?>>
        Gato
        </option>
        <option value="C"
            <?php if ($result['tipo'] == 'C') {
            echo "selected";
            }
            else {
            echo "disabled";
            }?>>
            Cachorro
        </option>
        </select>
    </div>
    <div class="col-4">
        <label for="porte">Porte</label>
        <select class="form-select" name="porte" id="porte">
            <option disabled>Selecione o porte do animal</option>
            <option value="P" <?php echo $result['porte'] == 'P' ? "selected" : "disabled"
            ?>>Pequeno</option>
            <option value="M" <?php echo $result['porte'] == 'M' ? "selected" : "disabled"
            ?>>Médio</option>
            <option value="G" <?php echo $result['porte'] == 'G' ? "selected" : "disabled"
            ?>>Grande</option>
        </select>
    </div>
    <div class="col-4">
        <label for="pelagemCor">Pelagem / Cor</label>
        <input type="text" name="pelagemCor" id="pelagemCor" class="form-control"
               value="<?php echo $result['pelagem_cor']; ?>" readonly>
    </div>
    <div class="col-4">
        <label for="raca">Raça</label>
        <input type="text" name="raca" id="raca" class="form-control" value="<?php echo
        $result['raca']; ?>" readonly>
    </div>
    <div class="col-4">
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="sexo" value="M" id="sexoM"
                <?php echo $result['sexo'] == 'M' ? "checked" : "disabled" ?>>
            <label for="sexoM" class="form-check-label">Macho</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="sexo" value="F" id="sexoF"
<?php echo $result['sexo'] == 'F' ? "checked" : "disabled" ?>

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud simples</title>
</head>
<body>
    <form action="?act=save" method="POST" name="form1">
        <!-- Formulário para adicionar/alterar registros -->
        <h1>Agenda de produtos</h1>
        <hr>
        <input type="hidden" name="id" id=""<?php
        // Preenche o id no campo id com um valor.
        if (isset($id) && $id != null || $id != "") {
            echo "value=\"{$id}\"";
        }
        ?>/>
        Nome:
        <input type="text" name="nome" <?php
        // Preenche o nome no campo nome com um valor.
        if (isset($nome) && $nome != null || $nome != "") {
            echo "value=\"{$nome}\"";
        }?>  />
        E-mail:
        <input type="text" name="email" id="" <?php
        // Preenche o email no campo email com um valor.
        if (isset($email) && $email != null || $email != "") {
            echo "value=\"{$email}\"";
        }
        ?>  />
        Celular:
        <input type="text" name="celular" id=""<?php
        // Preenche o celular no campo celular com um valor.
        if (isset($celular) && $celular != null || $celular != "") {
            echo "value=\"{$celular}\"";
        }?>/>
        <input type="submit" value="salvar"/>
        <input type="reset" value="novo"/>
        <hr>
    </form>

    <table border="1" width="100%">
        <tr>
            <!-- Cabeçalho da tabela -->
            <th>Nome</th>
            <th>E-mail</th>
            <th>Celular</th>
            <th>Ações</th>
        </tr>
        <?php
        try {
            // Selecionar registros do banco de dados e exibi-los na tabela
            $stmt = $pdo->prepare("SELECT * FROM produtos");

            if ($stmt->execute()) {
                while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                    echo "<tr>";
                    echo "<td>".$rs->nome."</td><td>".$rs->email."</td><td>".$rs->celular
                        ."</td><td><center><a href=\"?act=upd&id=" . $rs->id . "\">[Alterar]</a>"
                        ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                        ."<a href=\"?act=del&id=" . $rs->id . "\">[Excluir]</a></center></td>";
                    echo "</tr>";
                }
            } else {
                echo "Erro: Não foi possível recuperar os dados do banco de dados";
            }
        } catch (PDOException $erro) {
            // Tratar erro na seleção de registros
            echo "Erro: " . $erro->getMessage();
        }
        ?>
    </table>
</body>
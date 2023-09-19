<html>
<link rel="stylesheet" href="style.css">

<div class="title">
    <h2>FORMULÁRIO</h2>
</div>

<div class="boxForms">
    <form method="POST" action="recebe_dados.php">
        <div align="center"
        <center>
            <p>Username: <input type="text" name="username" size="10">&nbsp;&nbsp;
                Senha: <input type="password" name="senha" size="10"></p>
        </center>
</div>

<div align="center">
    <center>
        <p>Nome: <input type="text" name="nome" size="20"></p>
    </center>
</div>

<div align="center">
    <center>
        <p>E-mail: <input type="text" name="email" size="20"></p>
    </center>
</div>

<div align="center">
    <center>
        <p>Cidade: <input type="text" name="cidade" size="20">&nbsp;&nbsp; Estado: <input type="text" name="estado"
                                                                                          size="2"
                                                                                          maxlength="2"></p>
    </center>
</div>

<div align="center">
    <center>
        <p>Bairro: <input type="text" name="bairro" size="30"></p>
    </center>
</div>

<div align="center">
    <center>
        <p>CPF: <input type="text" name="cpf" size="30"></p>
    </center>
</div>

<div align="center">
    <center>
        <p><input type="submit" name="Enviar" class="btn"></p>
    </center>
</div>
</form>
</div>
</html>
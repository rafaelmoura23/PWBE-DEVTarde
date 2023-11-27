<?php
//Conexão temporaroa
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "bdteste";
$port = "3306";

// Create connection
$conn = new mysqli($hostname, $username, $password, $database, $port);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	$operacao = $_POST["operacao"];

	if ($operacao=="incluir")
	{
		$codigo = $_POST["codigo"];
		$nome = $_POST["nome"];
		$descricao = $_POST["descricao"];
		$preco = $_POST["preco"];
		$peso = $_POST["peso"];
		$cc = $_POST["cc"];
		$cs = $_POST["cs"];
		$ad = $_POST["ad"];
		$sql = "INSERT INTO produtos VALUES ";
		$sql .= "('$codigo','$nome','$descricao',$preco,$peso,$cc,$cs,'$ad')";
		$resultado = $mysqli->query($sql);
		echo "Produto incluído com sucesso!";
	}
	else if ($operacao=="excluir")
	{
		$codigo = $_POST["codigo"];
		if(is_numeric($codigo)){
			$sql = "DELETE FROM produtos WHERE codigo_produto=$codigo";
			$resultado = $mysqli->query($sql);
			$linhas = $mysqli->affected_rows;
			if($linhas>0)
			{ echo "Produto excluído com sucesso!"; }
			else
			{ echo "Produto não encontrado!"; }
		}
		else
			echo "Produto inválido!";
	}
	else if ($operacao=="mostrar")
	{		
		$resultado = $conn->query("SELECT * FROM produtos");
		$linhas = $resultado->num_rows;
		var_dump($linhas);
		echo "<p><b>Lista de produtos da loja</b></p>";
		for ($i=0 ; $i<$linhas ; $i++)
		{
			$reg = $resultado->fetch_row();  
			echo "$reg[0] <br>$reg[1] <br>$reg[2] <br>$reg[3] <br>";
			echo "$reg[4] <br>$reg[5] <br>$reg[6] <br>$reg[7] <hr>";
		}
	}
	$conn->close();
?>
	<?php
	echo "Olá, Mundo!!!";

	$name = "Guilherme";
	echo " \n ";
	$age = 20;
	echo $name; // Guilherme
	echo " \n ";
	echo "$age anos"; // 20

	$a = "5"; // string
	echo " \n ";
 	echo $a + 2; // 7, integer
	echo " \n ";
 	echo $a + '5 carros'; // 10, integer
	echo " \n ";

	 $idade = 20;
	 if($idade < 18) {
	 echo 'Você não pode entrar aqui!';
	 } else {
	 echo 'Seja bem – vindo';
	 } 
	 
	 echo " \n ";


	 //inicializa com um inteiro aleatório dentro do intervalo dos números do dado
	 $numeroDado = mt_rand(1, 6);
	 //inicializa
	 $numeroTexto = "";
	 //chama a instrução switch
	 switch($numeroDado) {
		case 1:
			$numeroTexto = "Um";
			break;
		case 2:
			$numeroTexto = "Dois";
			break;
		case 3:
		case 4:
			//os casos 3 e 4 vão para esta linha
			$numeroTexto = "Três ou Quatro";
			break;
		case 5:
			$numeroTexto = "Cinco";
			echo $numeroTexto;
			//break;
			//sem specificar o break ou return, ele continuará executando o próximo case.
		case 6:
			$numeroTexto = "Seis";
			echo $numeroTexto;
			break;
		default:
		$numeroTexto = "Desconhecido";
	 }
	 //exibe o resultado
	 echo 'O dado caiu no número ' .$numeroTexto. '.';





	?>

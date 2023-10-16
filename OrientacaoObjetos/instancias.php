<?php

require_once ("Pessoa.php");

$pessoa1 = new \OrientacaoObjetos\Pessoa(1.70, "celso", "Ricardo");
$pessoa1 ->setAltura(1.90);

var_dump($pessoa1 ->getAltura());

//$pessoa2 = new \OrientacaoObjetos\Pessoa();
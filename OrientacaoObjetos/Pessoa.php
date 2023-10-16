<?php

namespace OrientacaoObjetos;

class Pessoa
{
    private float $altura;

    private string $nome;

    private string $sobrenome;

    public function __construct(float $altura, string $nome, string $sobrenome)
    {
        $this -> altura = $altura;
        $this -> nome = $nome;
        $this -> sobrenome = $sobrenome;
    }

    public function getAltura():float
    {
        return $this -> altura;
    }

    public function setAltura(float $altura):void
    {
        $this -> altura = $altura;
    }

    public function getNome():string
    {
        return $this -> nome;
    }

    public function setNome(string $nome):void
    {
        $this -> nome= $nome;
    }


    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function setSobrenome(string $sobrenome): void
    {
        $this->sobrenome = $sobrenome;
    }


}
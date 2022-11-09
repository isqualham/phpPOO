<?php

namespace App\POO;

class Titular
{
    private string $cpf;
    private string $name;

    public function __construct(string $cpf, string $name)
    {
        $this->cpf = $cpf;
        $this->name = $name;
    }

    public function getName():string{return $this->name;}

    public function getCpf():string{return $this->cpf;}

}
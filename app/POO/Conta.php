<?php

namespace App\POO;

class Conta
{

    private $conta = [];

    public function __construct($cpf, $name, $saldo)
    {
        $this->conta = [
            $cpf => [
                "name" => $name,
                "saldo" => $saldo
            ]
        ];
    }

    public function getConta()
    {

        return json_encode($this->conta);
    }
}

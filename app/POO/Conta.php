<?php

namespace App\POO;

class Conta
{

    private $conta = [];

    public function __construct(string $cpf, string $name, float $saldo)
    {
        $this->conta = [
            $cpf => [
                $name,
                $saldo
            ]
        ];
    }

    public function getConta()
    {

        return json_encode($this->conta);
    }
}

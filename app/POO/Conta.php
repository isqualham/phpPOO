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
        return $this->conta;
    }

    public function setSaldo($cpf, $valor)
    {
        $this->conta[$cpf]['saldo'] -= $valor;
    }

    public function operacaoSacar($cpf, $valor)
    {
        if ($this->conta[$cpf]['saldo'] < $valor)
            return 'saldo insuficiente, seu saldo atula é: R$ ' .
                    $this->conta[$cpf]['saldo'];

        $this->setSaldo($cpf, $valor);

        return 'saque com sucesso seu saldo é: R$ ' .
                $this->conta[$cpf]['saldo'];
    }
}
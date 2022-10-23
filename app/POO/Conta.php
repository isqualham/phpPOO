<?php

namespace App\POO;

class Conta
{
    private $conta = [];

    public function __construct(string $cpf, string $name, float $saldo)
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

    public function operacaoSacar(string $cpf, float $valor):array
    {
        if ($this->conta[$cpf]['saldo'] < $valor)            
            return [
                'menssage'=>'saldo insuficiente',
                $this->getConta()
            ];

        $this->conta[$cpf]['saldo'] -= $valor;

        return [
            'menssage'=>'saque realizado com sucesso',
            $this->getConta()
        ];
    }

    public function operacaoDepositar(string $cpf, float $valor):array
    {
        if($valor < 0)
            return [
                'menssage'=>'depositos precizam ser positivos',
                'extrado' =>$this->getConta()
            ];

        $this->conta[$cpf]['saldo'] += $valor;

        return [
            'menssage'=>'deposito realizado com sucesso',
            'extrado' =>$this->getConta()
        ];
    }
}
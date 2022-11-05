<?php

namespace App\POO;

class Conta
{
    private string $cpf;
    private string $name;
    private string $saldo;

    public function __construct(string $cpf, string $name)
    {
        $this->cpf = $cpf;
        $this->name = $name; 
    } 
    
    public function setSaldo(float $saldo){
        $this->saldo = $saldo;
    }

    public function getSaldo():float{return $this->saldo;}

    public function sacar(float $valor):array
    {
        if ($this->$valor < $valor)            
            return [
                'menssage'=>'saldo insuficiente',
                $this->conta
            ];

        $this->valor -= $valor;

        return [
            'menssage'=>'saque realizado com sucesso, seu valor atual é',
            $this->conta
        ];
    }

    public function depositar(float $valor):array
    {
        if($valor < 0)
            return [
                'menssage'=>'depositos precizam ser positivos',
                'extrado' =>$this->conta
            ];

        $this->saldo += $valor;

        return [
            'menssage'=>'deposito realizado com sucesso, seu extrado é ',
            'extrado' =>$this->conta
        ];
    }
}
<?php

namespace App\POO;

class Conta
{
    private Titular $titular;
    private float $saldo;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0; 
    }

    public function getSaldo():float{return $this->saldo;}

    public function getTitularName():Titular{return $this->titular;}

    public function sacar(float $valor):array
    {
        if ($this->saldo < $valor)            
            return $this->message('saldo insuficiente',$this->saldo);

        $this->saldo -= $valor;

        return $this->message('saque realizado com sucesso',$this->saldo);
    }

    public function depositar(float $valor):array
    {
        if($valor < 0)
            return $this->message('depositos precizam ser positivos',$this->saldo);

        $this->saldo += $valor;
        
        return $this->message('deposito realizado com sucesso',$this->saldo);

    }

    public function transferir(float $valor, Conta $contaTransferir):array
    {
        if($valor < 0)
            return $this->message('transferencia precizam ser positivos',$this->saldo);
        
        if($this->saldo < $valor)
            return $this->message('saldo é menor que o valor da transferencia',$this->saldo);

        $this->saldo -= $valor;

        $contaTransferir->depositar($valor);
        
        return $this->message('trasnferencia realizado com sucesso: ',$valor);

    }

    private function message(string $message, float $conta):array{
        return [
            'menssage'=>$message,
            'extrado' =>$conta
        ];
    }

}
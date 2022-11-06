<?php

namespace App\Http\Controllers;

use App\Jobs\test;
use App\POO\Conta;
use App\POO\Titular;

class TestController extends Controller
{

    public function index(){
        
        $titular= new Titular("023.454.911-40","william");
        $conta1 = new Conta($titular);
        $conta2 = new Conta($titular);

        $conta1->depositar(1000);
        $conta1->transferir(-1, $conta2);

        return [
            "saldo 1: {$conta1->getSaldo()} - saldo 2: {$conta2->getSaldo()}",
            "titular conta 1 : {$conta1->getTitularName()}"
        ];

        // return response()->json($conta->operacaoDepositar("023.454.911-40", 20));
       
        // test::dispatch();

        //return testTrait::nome("william de freitas");
        
    }
}

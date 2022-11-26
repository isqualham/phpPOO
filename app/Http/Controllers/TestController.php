<?php

namespace App\Http\Controllers;

use App\Jobs\test;
use App\POO\Conta;
use App\POO\ContaCorrente;
use App\POO\Titular;
use Exception;
use Illuminate\Http\Request;
use Throwable;

class TestController extends Controller
{
    
    public function index(){
        
        // $conta1 = new Conta(new Titular("023.454.911-40","william"));
        // $conta2 = new Conta(new Titular("023.454.911-40","william"));

        // $conta1->depositar(1000);
        // $conta1->transferir(-1, $conta2);

        // return [
        //     "saldo 1: {$conta1->getSaldo()} - saldo 2: {$conta2->getSaldo()}",
        //     "titular conta 1 : {$conta1->getTitularName()->getName()}"
        // ];

        try{
            2/'a';

        }catch(Throwable $problema){

            return 'problema: '.$problema->getMessage();
        }

               
    }
}

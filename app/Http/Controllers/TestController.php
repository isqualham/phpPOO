<?php

namespace App\Http\Controllers;

use App\Jobs\test;
use App\POO\Conta;

class TestController extends Controller
{

    public function index(){
        
        $conta = new Conta("023.454.911-40","william");

        $conta->sacar(12);

        // return response()->json($conta->operacaoDepositar("023.454.911-40", 20));
       
        // test::dispatch();

        return testTrait::nome("william de freitas");
        
    }
}

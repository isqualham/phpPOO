<?php

namespace App\Http\Controllers;

use App\POO\Conta;

class TestController extends Controller
{
    public function index(){
        
        $conta = new Conta("023.454.911-40","william",500.200);

        return response()->json($conta->operacaoSacar("023.454.911-40", 200.2));
        
    }
}

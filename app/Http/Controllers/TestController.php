<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\POO\Conta;

class TestController extends Controller
{
    public function index(){
        
        $e = new Conta("023.454.911-40","william",500);

        echo $e->getConta();       
    }
}

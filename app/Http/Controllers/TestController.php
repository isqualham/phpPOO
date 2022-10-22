<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\POO\Test;

class TestController extends Controller
{
    public function index(){
        
        $e = new Test("william");

        echo $e->getName();

        $array = [
            'nome' => 'vinicius',
            'saldo' => 1000
        ];

        foreach($array as $item)
            echo "<br> $item";
    }
}

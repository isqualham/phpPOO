<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\POO\Test;

class TestController extends Controller
{
    public function index(){
        
        $e = new Test("william");

        echo $e->getName();
    }
}

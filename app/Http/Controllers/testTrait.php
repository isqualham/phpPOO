<?php

namespace App\Http\Controllers;

trait testTrait
{

    public static function nome($nome){
        
        return response()->json($nome);
        
    }
}

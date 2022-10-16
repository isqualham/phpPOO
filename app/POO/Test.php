<?php

namespace App\POO;

class Test{

    private string $name;
    
    public function __construct(string $name){
        
        $this->name = $name;
    }
    
    public function getName(){

        return $this->name;
    }

}
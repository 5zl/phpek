<?php
namespace App;

class Hello
{

    public function main(){
        echo "ELoo";
        $z= new Calculator();
        echo $z->add(2,5)  ;;;;;
        echo $z->subtract(8,1)  ;;;;;
        echo $z->divide(49,7)  ;;;;;
        echo  $z->multiply(3.5,2) ;;;;;
    }
}
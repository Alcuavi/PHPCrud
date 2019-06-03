<?php
namespace App;
use Kint;

class kernel{
    public function view (){
        $message="Hola mundo";
        Kint::dump ($message);
        echo $message;
    }
}
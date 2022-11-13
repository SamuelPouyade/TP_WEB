<?php

interface action{

    public function bannir($name);

}

class Utilisateur{
    private $user_name;
    private $user_pass;



    public function __construct($n, $p){
        $this->user_name = $n;
        $this->user_pass = $p;
    }


    public function getName(){
        echo $this->user_name;
    }

}

class Admin extends Utilisateur implements action {

    public function __construct($n, $p){
        $this->user_name = $n;
        $this->user_pass = $p;
    }

    function bannir($name)
    {
        echo "Admin: ",$this->user_name, " Je suis un administrateur et j'ai décidé de bannir: ", $name->getName();
    }

}
?>
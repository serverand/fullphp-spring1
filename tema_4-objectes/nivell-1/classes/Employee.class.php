<?php

class Employee 
{
    public $nom;
    public $sou;

    public function initialize(string $nom, int $sou)
    {
        $this->nom = $nom;
        $this->sou = $sou;
    }

    public function print()
    {
        $msg = $this->nom;
        if ($this->sou>6000){
            $msg .= '. Ha de pagar impostos!';
        }
        return $msg;
    }
}
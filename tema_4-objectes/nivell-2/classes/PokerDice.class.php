<?php

class PokerDice
{
    private $dau = array('As','K','Q','J',7,8);
    private $tirada = array();

    public function throw()
    {
        return rand(0,5);
    }

    public function shapeName(int $val)
    {
        return $this->dau[$val];
    }

    public function tirada()
    {
        for($x=1;$x<=5;$x++){
            array_push($this->tirada,$this->throw());
        }
        return implode(",",$this->tirada);
    }

    public function getTotalThrows()
    {
        foreach ($this->tirada AS $key=>$tirada){
            $this->tirada[$key]=$this->dau[$tirada];
        }
        return implode(",",$this->tirada);
    }
}
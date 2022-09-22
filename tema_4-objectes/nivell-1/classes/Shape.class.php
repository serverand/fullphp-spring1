<?php

abstract class Shape
{
    
    /* PHP 8 
    public function __construct(
        protected int $ample, 
        protected int $alt
    ){}*/
    
    protected $ample;
    protected $alt;
    
    public function __construct(int $ample, int $alt)
    {
        $this->ample = $ample;
        $this->alt = $alt;
    }

    public abstract function area();
}
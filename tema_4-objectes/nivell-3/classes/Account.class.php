<?php

class Account
{
    private $numCC;
    private $nom;
    private $cognoms;
    private $amount;

    public function __construct(
        string $numCC,
        string $nom,
        string $cognoms,
        int $amount)
    {
        $this->numCC = $numCC;
        $this->nom = $nom;
        $this->cognoms = $cognoms;
        $this->amount = $amount;
    }

    public function deposit($amount)
    {
        if ($amount<0){ return "Import invàl·lid!!";}
        $this->amount += $amount;
    }

    public function withdraw($amount)
    {
        if ($this->amount==0){ return "No hi ha saldo!!";}
        if ($this->amount<$amount){ return "No hi ha suficient saldo!!";}
        $this->amount -= $amount;
    }
    

    /**
     * Get the value of numCC
     */ 
    public function getNumCC()
    {
        return $this->numCC;
    }

    /**
     * Set the value of numCC
     *
     * @return  self
     */ 
    public function setNumCC($numCC)
    {
        $this->numCC = $numCC;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of cognoms
     */ 
    public function getCognoms()
    {
        return $this->cognoms;
    }

    /**
     * Set the value of cognoms
     *
     * @return  self
     */ 
    public function setCognoms($cognoms)
    {
        $this->cognoms = $cognoms;

        return $this;
    }

    /**
     * Get the value of amount
     */ 
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @return  self
     */ 
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }
}
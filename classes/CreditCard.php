<?php

class CreditCard {
    private $holder;
    private $iban;
    private $code;

    public function __construct($_code,$_iban)
    {
        $this->iban = $_iban;
        $this->code = $_code;
    }

    // set

    public function setHolder($_holder){
        $this->holder = $_holder;
    }

    public function setIban($_iban){
        $this->iban = $_iban;
    }

    public function setCode($_code){
        $this->code = $_code;
    }

    // get

    public function getHolder(){
        return $this->holder;
    }

    public function getCode(){
        return $this->code;
    }

    public function getIban(){
        return $this->iban;
    }

}
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

    public function setHolder($_holder){
        $this->holder = $_holder;
    }

    public function setIban($_iban){
        $this->iban = $_iban;
    }

    public function setCode($_code){
        $this->code = $_code;
    }

}
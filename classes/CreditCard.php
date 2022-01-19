<?php

class CreditCard {
    
    private $holder;
    private $number;
    private $code;


    public function __construct($_holder,$_code,$_number)
    {
        $this->holder = $_holder;
        $this->number = $this->checkNumber($_number);
        $this->code = $this->checkCode($_code);
    }

    // set

    public function setNHolder($_holder){
        $this->holder = $_holder;
    }

    public function setNumber($_number){
        $this->number = $this->checkNumber($_number);
    }

    public function setCode($_code){
        $this->code = $this->checkCode($_code);
    }

    // get

    public function getNumber(){
        return $this->number;
    }

    public function getHolder(){
        return $this->holder;
    }

    public function getCode(){
        return $this->code;
    }


    // controllo validità numero
    private function checkNumber($number){

        if(!is_int($number) || strlen($number) != 12){
            throw new Exception("numero carta non valido");
        }
        return $number;
    }

    // controllo validità codice

    private function checkCode($code){

        if(!is_int($code) || strlen($code) != 3){
            throw new Exception("codice non valido");
        }
        return $code;
    }

   
      

}
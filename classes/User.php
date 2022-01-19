<?php

class User {
    private $name;
    private $surname;
    private $address;
    private $mail;
    private $discount = 0;

    public function __construct($_mail,$_name)
    {
        $this->name = $_name;
        $this->mail = $_mail;
    }

    // set

    public function setName($_name){
        $this->name = $_name;
    }

    public function setSurname($_surname){
        $this->surname = $_surname;
    }

    public function setAddress($_address){
        $this->address = $_address;
    }

    public function setMail($_mail){
        $this->mail = $_mail;
    }

    public function setDiscount($_discount){
        $this->discount = $_discount;
    }

    // get

    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function getAddress(){
        return $this->address;
    }

    public function getMail(){
        return $this->mail;
    }

    public function getDiscount(){
       return $this->discount;
    }

}
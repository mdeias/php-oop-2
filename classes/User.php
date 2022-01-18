<?php

class User {
    private $name;
    private $surname;
    private $address;
    private $mail;

    public function __construct($_mail,$_name)
    {
        $this->name = $_name;
        $this->mail = $_mail;
    }

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

}
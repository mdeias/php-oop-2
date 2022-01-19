<?php
require_once __DIR__ . "/Address.php";
class User {

    use Address;

    private $name;
    private $surname;
    private $mail;
    protected $discount = 0;

    public function __construct($_name,$_surname)
    {
        $this->name = $_name;
        $this->surname = $_surname;
    }

    // set

    public function setName($_name){
        $this->name = $_name;
    }

    public function setSurname($_surname){
        $this->surname = $_surname;
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

    public function getFullName(){
        return "$this->name $this->surname";
    }


    public function getMail(){
        return $this->mail;
    }

    public function getDiscount(){
       return $this->discount;
    }

}
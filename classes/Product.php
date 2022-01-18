<?php

class Product {
    public $title;
    public $price;
    public $description;
    public $discount;

    public function __construct($_title,$_price)
    {
        $this->price = $_price;
        $this->title = $_title;
    }

    public function setTitle($_title){
        $this->title = $_title;
    }

    public function setPrice($_price){
        $this->price = $_price;
    }

    public function setDescription($_description){
        $this->description = $_description;
    }

    public function setMail($_discount){
        $this->discount = $_discount;
    }

}
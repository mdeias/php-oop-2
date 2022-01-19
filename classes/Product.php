<?php

class Product {
    public $title;
    public $price;
    public $description;

    public function __construct($_title,$_price)
    {
        $this->price = $_price;
        $this->title = $_title;
    }

    // set 

    public function setTitle($_title){
        $this->title = $_title;
    }

    public function setPrice($_price){
        $this->price = $_price;
    }

    public function setDescription($_description){
        $this->description = $_description;
    }

    // get 
    
    public function getTitle(){
        return $this->title;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getDescription(){
        return $this->description;
    }

}
<?php

class Product {
    public $title;
    public $price;
    public $description;

    public function getInfoProduct(){
        return  $this->title ."<br> " . $this->price ."<br>" . $this->description;
    }

    

}
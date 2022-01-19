<?php

require_once __DIR__ ."/User.php";
require_once __DIR__ ."/CreditCard.php";

class Cliente extends User{
    
    private $card;
    private $cart;

    public function setCreditCard($_holder,$_code,$_number){

        try {
            $this->card = new CreditCard($_holder,$_code,$_number);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    public function getCreditCard(){
        return $this->card;
    }

    public function setCart(...$products){
        $this->cart =$products;
    }

    public function getCart(){
        return $this->cart;
    }

    
}
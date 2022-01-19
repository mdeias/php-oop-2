<?php

trait Address {
    public $route;
    public $town;
    public $country;

    public function getFullAddress(){
        return "$this->route, $this->town, $this->coutry";
    }
}
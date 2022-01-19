<?php

require_once __DIR__ . "/Cliente.php";

class ClientePremium extends Cliente{

    function __construct($_name , $_surname)
    {
        parent::__construct($_name, $_surname);
        $this->discount = 20;
    }

}
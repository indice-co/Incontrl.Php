<?php
namespace Models
{
    class PaymentOption
    {
        public function __construct(){
            $this->type = new PaymentOptionType();

        }
        public 
            $code
            , $name
            , $description
            , $type
        ;
    }
}
<?php
namespace Models
{

    class Subscription
    {
        public function __construct() {
            $this->company = new Organisation();
            $this->contact = new Contact();
            $this->status = new SubscriptionStatus();
        }
        public 
            $Id
            , $code
            , $alias
            , $timeZone
            , $notes
            , $company
            , $contact
            , $status
            ;
    }
}
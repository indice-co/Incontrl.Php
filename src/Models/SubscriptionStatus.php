<?php
namespace Models
{

class SubscriptionStatus
    {
        public function __construct() {
            $this->status = new StatusOfSubscription();
        }
        public
            $Id
            , $status
            ;
    }
}
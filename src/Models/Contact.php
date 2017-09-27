<?php
namespace Models
{
    class Contact
    {
        public function __construct(){
            $this->address = new Address();
        }
        public
            $id
            , $code
            /// First name of contact person (max length = 255).
            , $firstName
            /// Last name of contact person (max length = 255).
            , $lastName
            /// Email address of contact person (umlauts not supported) (max length = 255)
            , $email
            /// Primary address of the organisation.
            , $address
            /// Phone1
            , $phone1
            /// Phone2
            , $phone2
            /// Skype user name of contact.
            , $skype
            /// Notes for the contact (max length 500).
            , $notes
            ;
    }
}
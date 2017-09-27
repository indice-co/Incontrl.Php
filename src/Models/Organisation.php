<?php
namespace Models
{
class Organisation
    {
        public function __construct(){
            $this->address = new Address();
            $this->paymentMethods = new PaymentOption();

        }
        public
            $id
            /// Short code for the organisation (max length 6).
            , $code
            /// URL to the organisation's logo (max length 255).
            , $logoPath
            /// Name (display name) of the organisation.
            , $name
            /// The legal name of the organisation.
            , $legalName
            /// Line of Business (occupation) of the organisation.
            , $lineOfBusiness
            /// Tax identification code (number) of the organisation.
            , $taxCode
            /// Tax office for the organisation (required in some countries).
            , $taxOffice
            /// Default currency code for the organisation.
            , $currencyCode
            /// Primary address of the organisation.
            , $address
            /// Email of the organisation (max length 500).
            , $email
            /// Website for the organisation (max length 500).
            , $website
            /// Notes for the organisation (max length 500).
            , $notes
            /// Additional/custom information for the organisation.
            , $customData
           /// This is for keeping track of the available methods for the company to recieve payment.
            , $paymentMethods
            ;
    }
}

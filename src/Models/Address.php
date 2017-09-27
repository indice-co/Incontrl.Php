<?php
namespace Models
{
    class Address
        {
            public
                /// A Name for the address.
                $name
                /// AddressLine 1 (max length = 500).
                , $line1
                /// AddressLine 2 (max length = 500).
                , $line2
                /// City
                , $city
                /// Zip code
                , $zipCode
                /// Country ISO code
                , $countryCode
                /// Country info.
                , $country
                /// Phone1
                , $phone1
                /// Phone2
                , $phone2
                /// Notes for the address (max length 500).
                , $notes
                ;
        }
}
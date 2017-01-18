<?php

namespace RoundingWell\Redox\Fields;

class HeaderDocumentAuthor extends AbstractField
{
    /**
     * @var string
     */
    public $ID;

    /**
     * @var string
     */
    public $IDType;

    /**
     * @var string|null
     */
    public $Type;

    /**
     * @var string
     */
    public $FirstName;

    /**
     * @var string
     */
    public $LastName;

    /**
     * @var array
     */
    public $Credentials;

    /**
     * @var HeaderDocumentAuthorAddress
     */
    public $Address;

    /**
     * @var HeaderDocumentAuthorLocation
     */
    public $Location;

    /**
     * @var HeaderDocumentAuthorPhoneNumber
     */
    public $PhoneNumber;
}

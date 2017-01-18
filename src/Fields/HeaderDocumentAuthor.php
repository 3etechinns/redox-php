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
     * @var string|null
     */
    public $FirstName;

    /**
     * @var string|null
     */
    public $LastName;

    /**
     * @var array
     */
    public $Credentials;

    /**
     * @var HeaderDocumentAuthorAddress|null
     */
    public $Address;

    /**
     * @var HeaderDocumentAuthorLocation|null
     */
    public $Location;

    /**
     * @var HeaderDocumentAuthorPhoneNumber|null
     */
    public $PhoneNumber;
}

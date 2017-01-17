<?php

namespace RoundingWell\Redox\Fields;

class Document extends AbstractField
{
    /**
     * @var string
     */
    public $ID;

    /**
     * @var Author
     */
    public $Author;

    /**
     * @var Visit
     */
    public $Visit;

    /**
     * @var string
     */
    public $Locale;

    /**
     * @var string
     */
    public $Title;

    /**
     * @var \DateTime
     */
    public $DateTime;

    /**
     * @var string
     */
    public $Type;
}

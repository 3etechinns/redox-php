<?php

namespace RoundingWell\Redox\Fields;

class HeaderDocument extends AbstractField
{
    /**
     * @var string
     */
    public $ID;

    /**
     * @var HeaderDocumentAuthor
     */
    public $Author;

    /**
     * @var HeaderDocumentVisit
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

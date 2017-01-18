<?php

namespace RoundingWell\Redox\Fields;

class FamilyHistoryRelation extends AbstractField
{
    use Traits\HasCodeProperties;

    /**
     * @var FamilyHistoryRelationDemographics
     */
    public $Demographics;

    /**
     * @var boolean
     */
    public $IsDeceased;
}

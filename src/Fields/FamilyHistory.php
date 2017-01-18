<?php

namespace RoundingWell\Redox\Fields;

class FamilyHistory extends AbstractField
{
    /**
     * @var FamilyHistoryRelation
     */
    public $Relation;

    /**
     * @var FamilyHistoryProblem[]
     */
    public $Problems;
}

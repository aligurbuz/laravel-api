<?php

declare(strict_types=1);

namespace App\Models\Features;

use App\Services\AppContainer;

/**
 * Trait ScopeManagerTrait
 * @package App\Models\Features
 */
trait ScopeManagerTrait
{
    /**
     * @var array|string[]
     */
    protected array $autoRanges = [
        'desc'      => 'Sorts your object by last registration value.',
        'asc'       => 'Sorts your object by first registration value.',
        'active'    => 'It filters according to the status=1 value for your object.',
    ];

    /**
     * get range handler for model
     *
     * @param object $object
     * @param mixed|null $data
     * @return array
     */
    public function rangeContainer(object $object,mixed $data = null) : array
    {
        $range          = $data  ?? ((request()->query->all())['range'] ?? null);
        $ranges         = is_string($range) ? explode(',',$range) : [];
        $modelRanges    = array_merge($object->getRanges(),$this->autoRanges);

        //We record the instruction value in the response data to inform the user.
        AppContainer::set('responseFormatterSupplement',['ranges' => $modelRanges],true);

        return ['ranges' => $ranges,'modelRanges' => $modelRanges];
    }
}

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
        'sequence'  => 'It sorts by sequence value. This means changeable sorting.',
    ];

    /**
     * get range container handler for model
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

        $inLineRanges = [];

        foreach ($modelRanges as $modelRange => $description){
            if(in_array($modelRange,$ranges,true)){
                $inLineRanges[] = $modelRange;
            }
        }

        //We record the instruction value in the response data to inform the user.
        AppContainer::set('responseFormatterSupplement',['ranges' => $modelRanges],true);

        return ['ranges' => $inLineRanges,'modelRanges' => $modelRanges];
    }

    /**
     * get relation container handler for model
     *
     * @param array $data
     * @return void
     */
    public function relationContainer(array $data = []) : void
    {
        foreach ($data as $with => $items){
            if(is_array($items) && isset($items['description']) && $with!=='localization'){
                AppContainer::set('responseFormatterSupplement',['relations' =>[
                    $with => [
                        'description' => ($items['description'] ?? ''),
                        'using' => ''.($items['withQuery']?? 'with['.$with.']').'[select] = \'*||columnName1||columnName1,columnName2\'',
                        'hasMany' => ($items['hasMany'] ?? true),
                    ]
                ]
                ],true);
            }
        }
    }
}

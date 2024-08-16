<?php

declare(strict_types=1);

namespace App\Models\Features;

use App\Exceptions\Exception;
use App\Libs\AppContainer;
use App\Libs\Response\Response;

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
        'desc' => 'Sorts your object by last registration value.',
        'asc' => 'Sorts your object by first registration value.',
        'active' => 'It filters according to the status=1 value for your object.',
        'notActive' => 'It filters according to the status=0 value for your object.',
        'sequence' => 'It sorts by sequence value. This means changeable sorting.',
        'notDeleted' => 'Filters undeleted data.',
        'deleted' => 'Filters deleted data.',
        'creator' => 'Returns the user specified in the created_by column.',
        'updator' => 'Returns the user specified in the updated_by column.',
        'deletor' => 'Returns the user specified in the deleted_by column.',
    ];

    /**
     * get range container handler for model
     *
     * @param object $object
     * @param mixed|null $data
     * @return array
     */
    public function rangeContainer(object $object, mixed $data = null): array
    {
        $range = $data ?? ((request()->query->all())['range'] ?? null);
        $ranges = is_string($range) ? explode(',', $range) : [];
        $getObjectRanges = $object->getRanges();
        $modelRanges = array_merge($getObjectRanges, $this->autoRanges);
        $baseObjectName = class_basename($object);

        if (!AppContainer::has('autoRanges')) {
            AppContainer::set('autoRanges', $this->autoRanges);
            $responseModelRanges = array_merge($getObjectRanges, $this->autoRanges);
        } else {
            $responseModelRanges = array_merge($getObjectRanges);
        }

        $objRanges = [];

        foreach ($getObjectRanges as $objRange => $rangeDesc) {
            $objRanges[$baseObjectName][] = $objRange;
        }

        $inLineRanges = [];

        foreach ($modelRanges as $modelRange => $description) {
            if (in_array($modelRange, $ranges, true)) {
                $inLineRanges[] = $modelRange;
            }
        }

        $operatedRanges = [];

        foreach ($ranges as $range){
            $rangeExplode = explode(':',$range);
            $operatedRanges[] = $rangeExplode[0];

            if(isset($rangeExplode[1])){
                AppContainer::set('rangeBindings',[$rangeExplode[0] => $rangeExplode[1]]);
            }
        }

        $inLineRanges = $operatedRanges;

        foreach ($inLineRanges as $rangeItem) {
            if (strlen($rangeItem) > 0 && isset($objRanges[$baseObjectName][$rangeItem]) && !method_exists($object, $rangeItem)) {
                Exception::rangeException('', ['key' => $rangeItem]);
            }
        }

        //We record the instruction value in the response data to inform the user.
        Response::formatterSupplement(['ranges' => $responseModelRanges], true);

        return ['ranges' => $inLineRanges, 'modelRanges' => $modelRanges];
    }

    /**
     * get relation container handler for model
     *
     * @param array $data
     * @return void
     */
    public function relationContainer(array $data = []): void
    {
        foreach ($data as $with => $items) {
            if (is_array($items) && $with !== 'localization') {
                Response::formatterSupplement(['relations' => [
                    $with => [
                        'using' => '' . ($items['withQuery'] ?? 'with[' . $with . ']') . '[select]=*',
                        'hasMany' => ($items['hasMany'] ?? true),
                    ]
                ]
                ], true);
            }
        }
    }
}

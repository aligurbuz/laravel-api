<?php

declare(strict_types=1);

namespace App\Models\Features;

use App\Exceptions\Exception;
use App\Services\AppContainer;
use App\Services\Response\Response;

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
        'sequence' => 'It sorts by sequence value. This means changeable sorting.',
        'notDeleted' => 'Filters undeleted data.',
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

        foreach ($ranges as $rangeItem) {
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

<?php

namespace App\Repositories\Supporters\Helpers;

use App\Repositories\EloquentRepository;
use Illuminate\Support\Str;

class Dummy
{
    /**
     * @var EloquentRepository
     */
    private EloquentRepository $eloquentRepository;

    /**
     * @param EloquentRepository $eloquentRepository
     */
    public function __construct(EloquentRepository $eloquentRepository)
    {
        $this->eloquentRepository = $eloquentRepository;
    }

    /**
     * get dummy data for eloquent repository
     *
     * @return array
     */
    public function dummy(): array
    {
        $fakers = $this->eloquentRepository->getFakers();
        $columns = $this->eloquentRepository->getRequiredColumns();

        if (!in_array($this->eloquentRepository->getModelCode(), $columns, true)) {
            $columns[] = $this->eloquentRepository->getModelCode();
        }

        $types = $this->eloquentRepository->getColumnTypes();


        return $this->getColumns($columns, $fakers, $types);
    }

    /**
     * get columns for data
     *
     * @param array $columns
     * @param array $fakers
     * @param array $types
     * @return array
     */
    private function getColumns(array $columns, array $fakers, array $types): array
    {
        $dummies = [];

        $relationCodes = $this->eloquentRepository->getRelationCodes();

        foreach ($columns as $column) {
            if ($column === $this->eloquentRepository->getModelCode()) {
                $dummies[$column] = generateHash();
            } else {

                if(in_array($column,$relationCodes,true)){
                    $model = getModelFromTableCode($column);
                    $dummies[$column] = getModelInstance($model)->getRepository()->randomCode();
                }
                else{
                    $methodFaker = isset($fakers[$column]) ? $fakers[$column] . 'Faker' : Str::camel($column) . 'Faker';

                    if (method_exists($this->eloquentRepository, $methodFaker)) {
                        $dummies[$column] = $this->eloquentRepository->$methodFaker();
                    } else {
                        $columnType = $types[$column] . 'Faker';

                        if (method_exists($this->eloquentRepository, $columnType)) {
                            $dummies[$column] = $this->eloquentRepository->$columnType($column);
                        }
                    }
                }
            }
        }

        return $dummies;
    }
}

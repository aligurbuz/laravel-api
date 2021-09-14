<?php

declare(strict_types=1);

namespace App\Models\Features;

use App\Exceptions\Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB as dbFacade;

trait GroupByProcess
{
    /**
     * @var array|string[]
     */
    protected array $clientKeyList = ['field'];

    /**
     * @var array|string[]
     */
    protected array $clientProcessList = ['sum','avg','max','min'];

    /**
     * @var array
     */
    protected array $groupByQueryList = [];

    /**
     * get group by process handler for model
     *
     * @param Builder $builder
     * @return object
     */
    public function groupByProcessHandler(Builder $builder) : object
    {
        $request = request()->query->get('groupBy');
        $field = $request['field'] ?? null;

        $this->groupByRequestProcess((array)$request);

        if(!is_null($field)){
            return $this->getRepository()->throwExceptionIfColumnNotExist($field,function() use($field,$builder){
                return $builder->select(array_merge([$field],$this->groupByQueryList))->groupBy($field);
            });
        }

        return $builder;
    }

    /**
     * get group by request process for model
     *
     * @param array $request
     */
    private function groupByRequestProcess(array $request = [])
    {
        foreach ($request as $clientKey => $clientVal){
            if(!in_array($clientKey,array_merge($this->clientKeyList,$this->clientProcessList),true)){
                Exception::customException('none');
            }

            $this->getRepository()->throwExceptionIfColumnNotExist($clientVal,function() use($clientKey,$clientVal){
                if(in_array($clientKey,$this->clientProcessList,true)){
                    $clientProcessList = explode(',',$clientVal);
                    foreach ($clientProcessList as $item){
                        $this->groupByQueryList[] = dbFacade::raw(''.$clientKey.'('.$item.') as '.$clientKey.'_'.$item);
                    }
                }

                return new class {};
            });
        }
    }
}

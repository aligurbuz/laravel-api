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
        $request = request()->query->get('groupBy',[]);

        if(count($request) && !isset($request['field'])){
            return Exception::customException(trans('exception.groupByDefaultException'));
        }

        $field = $request['field'] ?? null;

        if(!is_null($field)){
            $this->groupByRequestProcess((array)$request);

            if(in_array($field,$this->getRepository()->getGroupByFields(),true)){
                return $builder->select(array_merge([$field],$this->groupByQueryList))->groupBy($field);
            }

            return Exception::customException(trans('exception.groupByFieldException',['key' => $field]));
        }

        return $builder;
    }

    /**
     * get group by request process for model
     *
     * @param array $request
     * @return object
     */
    private function groupByRequestProcess(array $request = []): object
    {
        foreach ($request as $clientKey => $clientVal){
            if(!in_array($clientKey,array_merge($this->clientKeyList,$this->clientProcessList),true)){
                Exception::customException(trans('exception.groupByKeyException',['key' => $clientKey]));
            }

            $clientValues = explode(',',$clientVal);

            foreach ($clientValues as $clientValue){
                if(in_array($clientKey,$this->clientProcessList,true)){
                    if(in_array($clientValue,$this->getRepository()->getGroupByProcessFields(),true)){
                        $this->groupByQueryList[] = dbFacade::raw(''.$clientKey.'('.$clientValue.') as '.$clientKey.'_'.$clientValue);
                    }
                    else{
                        return Exception::customException(trans('exception.groupByProcessFieldException',['key' => $clientValue]));
                    }
                }

            }
        }

        return new class {};
    }
}

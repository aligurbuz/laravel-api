<?php

declare(strict_types=1);

namespace App\Client;

/**
 * Trait SequenceTimeGenerator
 * @package App\Client
 */
trait SequenceTimeGenerator
{
    /**
     * get sequence time generator for client
     *
     * @return mixed
     */
    public function sequenceTimeAutoGenerator(): mixed
    {
        if(!$this->has('sequence')){
            return time();
        }

        return $this->ensureColumnExists('sequence',function(){
            $sequenceTime = null;

            $modelCode           = getTableCode($this->getModel());
            $existSequenceQuery  = $this->repository()->select(['sequence','sequence_time'])->code((int)$this->get($modelCode))->getRepository();
            $existSequence       = $existSequenceQuery[0]['sequence'] ?? null;
            $existSequenceTime   = $existSequenceQuery[0]['sequence_time'] ?? null;
            $existDataQuery      = $this->repository()->sequence()->skipTake(((int)$this->get('sequence')-1),1)->getRepository();
            $existData           = $existDataQuery[0] ?? [];

            if(
                !is_null($existSequence)
                && !is_null($existSequenceTime)
                && $this->get($modelCode)!==($existData[$modelCode] ?? 0)
                && isset($existData['sequence'])
                && isset($existData['sequence_time'])
            ){
                if($existSequence<(int)$this->get('sequence')){
                    $sequenceTime = $existData['sequence_time']-1;
                    if($existSequenceTime==$sequenceTime){
                        $sequenceTime = $existData['sequence_time'] +1;
                    }
                }
                if ($existSequence>=(int)$this->get('sequence')){
                    if($existSequence==(int)$this->get('sequence')){
                        $subtractSequenceTime = $existData['sequence_time']-1;
                        $sequenceTime = $subtractSequenceTime;

                        if($subtractSequenceTime==$existSequenceTime){
                            $sequenceTime = $existData['sequence_time']+1;
                        }
                    }
                    else{
                        $sequenceTime = $existData['sequence_time']+1;
                    }
                }
            }

            return $this->ensureColumnExists('sequence_time',function() use($sequenceTime){
                return $sequenceTime ?? time();
            });
        });
    }
}

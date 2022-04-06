<?php

declare(strict_types=1);

namespace App\Factory\Excel;

use App\Constants;
use App\Exceptions\Exception;
use App\Factory\Excel\Interfaces\ExcelInterface;
use Maatwebsite\Excel\Facades\Excel as ExcelFacade;

/**
 * Class Excel
 * @package App\Factory\Excel
 */
class Excel extends ExcelManager implements ExcelInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];

    /**
     * @var string|null
     */
    protected ?string $importClass = null;

	/**
	 * Excel constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;

        $model = $this->binds['model'] ?? null;
        $modelNamespace = Constants::modelNamespace.'\\'.ucfirst($model);

        if(!class_exists($modelNamespace)){
            Exception::customException('excelFile',$model,true);
        }

        $table = ucfirst((new $modelNamespace)->getTable());
        $this->importClass = $table.'Import';
	}

    /**
     * createUser for Excel factory
     *
     * @return array
     */
    public function import(): array
    {
        $importClass = Constants::importsNamespace.'\\'.$this->importClass;

        try{
            ExcelFacade::import(new $importClass, ($this->binds['file'] ?? null));
            return ['import' => true];
        }
        catch (\Exception $exception){
            Exception::customException($exception->getMessage(),[],true);
            return [];
        }
    }
}

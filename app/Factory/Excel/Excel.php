<?php

declare(strict_types=1);

namespace App\Factory\Excel;

use App\Constants;
use App\Services\Client;
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
        $clientData = (Client::data())[0] ?? [];

        $model = $clientData['excel_factory'] ?? null;
        $modelNamespace = Constants::modelNamespace.'\\'.ucfirst($model);

        if(!class_exists($modelNamespace)){
            Exception::customException('excelFile',$model);
        }

        $table = ucfirst((new $modelNamespace)->getTable());
        $this->importClass = $table.'Import';
	}

    /**
     * createUser for Excel factory
     *
     * @return void
     */
    public function import(): void
    {
        $importClass = Constants::importsNamespace.'\\'.$this->importClass;
        ExcelFacade::import(new $importClass, request()->file('excel_file')->store('files'));
    }
}

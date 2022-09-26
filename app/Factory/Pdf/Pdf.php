<?php

declare(strict_types=1);

namespace App\Factory\Pdf;

use App\Factory\Pdf\Interfaces\PdfInterface;
use Illuminate\Support\Facades\App;

/**
 * Class Pdf
 * @package App\Factory\Pdf
 */
class Pdf extends PdfManager implements PdfInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];


    /**
     * Pdf constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
    }

    /**
     * pdf download for factory
     *
     * @param string $view
     * @param array $viewData
     * @return mixed
     */
    public function download(string $view, array $viewData = []): mixed
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML(view('pdf.' . $view, $viewData)->render());

        return $pdf->download();
    }
}
